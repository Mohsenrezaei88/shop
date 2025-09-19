<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\Role;
use App\Models\Support;
use App\Models\User;
use Auth;
use COM;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class authController extends Controller
{
    function index()
    {
        $products = product::where('public', "1")->get();
        $categories = category::all();
        return view("index", compact("products", "categories"));
    }
    function register()
    {
        if (Auth::check()) {
            return redirect()->route('index');
        }
        return view('auth.register');
    }
    function checkregister(Request $request)
    {
        $request->validate([
            "name" => "required",
            "phonenumber" => "required|size:11|unique:users",
            "password" => "required|min:5|confirmed",
        ]);
        session::put("register" , True);
        return redirect()->route('make-code')->with('user', $request->all());
    }
    function login()
    {
        if (Auth::check()) {
            return redirect()->route('index');
        }
        return view('auth.login');
    }
    function checklogin(Request $request)
    {
        $request->validate([
            'phonenumber' => "required|size:11|exists:users",
            "password" => "required|min:5",
        ]);
        $user = User::where("phonenumber", $request->phonenumber)->first();
        if ($user) {
            if (hash::check($request->password, $user->password)) {
                return redirect()->route("make-code")->with("user", $user);
            } else {
                return redirect()->route("login")->with("error", "رمز عبود نادرست است");
            }
        } else {
            return redirect()->route("login")->with("error", "کاربری با این شماره تلفن پیدا نشد!!");
        }
    }
    function logout()
    {
        if (!Auth::check()) {
            return redirect()->route("login")->with("error", "خطا");
        }
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route("index")->with("success", "خروح از حساب کاربری موفقیت آمیز بود");
    }
    public function users_list()
    {
        return view("users.list");
    }
public function users_list_get()
{
    $users = User::select(["id", "name", "phonenumber", "created_at"]);

    return DataTables::of($users)
        ->addColumn('created_at', function ($user) {
            return $user->created_at_shamsi;
        })->addColumn("orders" , function($user){
            return $user->orders->where("status" , "!=" , "1")->count();
        })->addColumn("action" , function($user){
            return "
            <a class='btn btn-sm btn-danger' href=".route('delete_user' , [$user]).">حذف کاربر</a>
            ";
        })
        ->make(true);
}

    public function change_role(Request $request, User $user)
    {
        Gate::authorize("admin", User::class);
        $request->validate([
            "role" => "required|exists:roles,id"
        ]);
        $user->update([
            "role_id" => $request->role,
        ]);
        return redirect()->back()->with("success", "نقش کاربر با موفقیت تغییر کرد");
    }
    public function makeCode()
    {
        if (Session::has('user')) {
            $code = random_int(1234, 9999);
            $file = storage_path("sms/sms.txt");
            $sms = "کد ورود شما : $code" . "\n" . "کد ورود را در اختیار دیگران قرار ندهید";
            file_put_contents($file, $sms);
            Cache::put('code', $code, now()->addMinutes(5));
            Cache::put('vLogin.user', session('user'));
            Cache::put('register', session('register'));
            return redirect()->route('vLogin')->with("success", "کد تایید ارسال شد");
        }
        return redirect()->back()->with("error", "ّFatal Error");
    }
    public function vLogin()
    {
        if (!Cache::has('code') or !Cache::has('vLogin.user')) {
            return redirect()->back()->with('error', "کد ارسالی منقضی شده");
        }
        $user = Cache::get('vLogin.user');
        $code = Cache::get('code');
        $register = Cache::get('register');
        return view('auth.vLogin', compact('user', "code", "register"));
    }
    public function checkVlogin(Request $request)
    {
        $request->validate([
            "one" => "required",
            "two" => "required",
            "three" => "required",
            "four" => "required",
        ]);
        $rcode = $request->one . $request->two . $request->three . $request->four;
        if (!Cache::has('code') or !Cache::has('vLogin.user')) {
            return redirect()->back()->with('error', "کد ارسالی منقضی شده");
        }
        $user = Cache::get('vLogin.user');
        $code = Cache::get('code');
        if ($code == $rcode) {
            if (Cache::has('register')) {
                $user = User::create([
                    "name" => $user["name"],
                    "phonenumber" => $user["phonenumber"],
                    "password" => Hash::make($user["password"]),
                ]);
                Support::where("session_id" , session()->getId())->update([
                    "user_id" => Auth::user()->id
                ]);
                Auth::login($user);
                return redirect()->route('index')->with("success", "ورود موفقیت آمیز بود");
            }
            else{
            Auth::login($user);
            return redirect()->route('index')->with("success", "ورود موفقیت آمیز بود");}
        }
        return redirect()->back()->with("error", "کد ورود نادرست است");
    }
    public function delete_user(user $user)
    {
        Gate::authorize("admin", User::class);
        $user->delete();
        return redirect()->back()->with("success", "کاربر با موفقیت حذف شد");
    }
}
