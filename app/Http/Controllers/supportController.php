<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\order;
use App\Models\product;
use App\Models\Support;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class supportController extends Controller
{
    public function index(Request $request)
    {
        $txt = $request->message;
        Support::create([
            "user_id" => Auth::check() ? Auth::user()->id : null,
            "session_id" => session()->getId(),
            "sender" => "user",
            "text" => $txt
        ]);
        $products = product::select("id", "name", "Inventory", "price", "description" , "brand_id")->get();
        $products = $products->map(function ($p) {
            return "نام محصول: {$p['name']}, قیمت: {$p['price']}, موجودی: {$p['Inventory']},آیدی محصول: {$p['id']}, آیدی برند : {$p['brand_id']}";
        })->implode("\n");
        $brands = Brand::select(["id" , "name"])->get();
        $brands = $brands->map(function ($p) {
            return "آیدی برند: {$p['id']}, نام برند: {$p['name']}";
        })->implode("\n");
        $orders = "کاربر لاگین نیست و داده ها دریافت نمیشود";
        $users = "کاربر لاگین نیست و داده ها دریافت نمیشود";
        $login = 0;
        if (Auth::check()) {
            $login = Auth::user()->id;
            $orders = order::select("id", "user_id", "status")->get();
            $orders = $orders->map(function ($p) {
                return "آیدی سفارش: {$p['id']}, آیدی کاربر: {$p['user_id']}, وضعیت: {$p['status']}";
            })->implode("\n");
            $users = User::select("id", "name")->get();
            $users = $users->map(function ($p) {
                return "آیدی کاربر: {$p['id']}, نام کاربر: {$p['name']}";
            })->implode("\n");
        }
        $res = Http::timeout(120)->post('https://mohsen08rr.app.n8n.cloud/webhook/shop', [
            'message' => $txt,
            "session_id" => session()->getId(),
            "products" => $products,
            "users" => $users,
            "orders" => $orders,
            "login" => $login,
            "brands" => $brands
        ]);
        $res = $res->json()["output"];
        $res = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $res);
        Support::create([
            "user_id" => Auth::check() ? Auth::user()->id : null,
            "session_id" => session()->getId(),
            "sender" => "ai",
            "text" => $res
        ]);
        return response()->json([
            "message" => $res
        ]);
    }
}
