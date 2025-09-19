<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\cart;
use App\Models\notification;
use App\Models\order;
use App\Models\shipping_method;
use App\Models\User;
use Auth;
use Gate;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class orderController extends Controller
{
    public function index()
    {
        if (Auth::user()->cart->where("order_id", null)->where("user_id", Auth::user()->id)->get()->count() == 0 and !session()->has("compelete")) {
            return redirect()->route('cart');
        }
        foreach (Auth::user()->cart->where('order_id', null)->where("user_id", Auth::user()->id)->get() as $product) {
            if ($product->product->Inventory <= 0) {
                $product->delete();
            }
        }
        $shipping_methods = shipping_method::all();
        $addresses = Address::where("user_id", Auth::user()->id)->get();
        $open = 1;
        $check =  order::where("user_id", Auth::user()->id)->where("status", 1)->first();
        if ($check != null) {
            $open = 2;
        }
        if (session()->has("compelete")) {
            $open = 3;
        }
        return view("checkout.checkout", compact("shipping_methods", "addresses", "open", "check"));
    }
    public function pay(Request $request)
    {
        $request->validate([
            "shipping_method" => "required|exists:shipping_methods,id",
            "default_address" => "required|exists:addresses,id",
            "personal_name" => "required",
            "personal_phone" => "required|size:11"
        ]);
        $check = order::where("user_id", Auth::user()->id)->where("status", 1)->first();
        if ($check != null) {
            return redirect()->route("checkout");
        }
        $order = order::create([
            "user_id" => Auth::user()->id,
            "shipping_method_id" => $request->shipping_method,
            "address_id" => $request->default_address,
            "name" => $request->personal_name,
            "phone" => $request->personal_phone
        ]);
        return redirect()->route("checkout");
    }
    public function cancel()
    {
        $order = Order::where("user_id", Auth::user()->id)->where("status", 1)->delete();
        return redirect()->route("checkout");
    }
    public function compelete()
    {
        $order = Order::where("user_id", Auth::user()->id)->where("status", 1)->first();
        if ($order == null) {
            return redirect()->back()->with("error", "مشکلی برای سفارش شما پیش آمد");
        }
        $carts = cart::where("user_id", Auth::user()->id)->where("order_id", null);
        foreach ($carts->get() as $cart) {
            if ($cart->product->Inventory == 0) {
                return redirect()->back()->with("error", "سفارش شما با مشکل مواجه شده");
            }
            $cart->product->update([
                "Inventory" => $cart->product->Inventory - $cart->number
            ]);
        }
        $order->update([
            "status" => 2
        ]);
        $carts->update(["order_id" => $order->id]);
        return redirect()->route("checkout")->with("compelete", 1);
    }
    public function list()
    {
        $orders = Order::where("user_id", Auth::user()->id)->get();
        return view("orders.orders_list", compact("orders"));
    }
    public function details(order $order)
    {
        if (Auth::user()->role_id != 3) {
            if ($order->user_id != Auth::user()->id or $order->status == 1) {
                return redirect()->back()->with("error", "Fatal Error");
            }
        }
        return view("orders.order_details", compact("order"));
    }
    public function listAdmin()
    {
        Gate::authorize('admin', User::class);
        return view("orders.orders_list_admin");
    }
    public function list_get()
    {
        if (Gate::allows('admin')) {
            $orders = order::select(["id", "created_at", "user_id", "status", "shipping_method_id"]);
        } else {
            $orders = order::where("user_id", Auth::user()->id)->select(["id", "created_at", "user_id", "status", "shipping_method_id"]);
        }
        return DataTables::of($orders)->addColumn('created_at', function ($order) {
            return $order->created_at_shamsi;
        })->addColumn('user', function ($order) {
            return $order->user->name;
        })->addColumn("products-number", function ($order) {
            if ($order->status != 1) {
                $total_number = 0;
                foreach ($order->user->cart->where('order_id', $order->id)->get() as $cart) {
                    $total_number += $cart->number;
                }
                return $total_number;
            } else {
                $total_number = 0;
                foreach ($order->user->cart->where('order_id', null)->get() as $cart) {
                    $total_number += $cart->number;
                }
                return $total_number;
            }
        })->addColumn('shipping_method', function ($order) {
            return $order->shipping_method->name;
        })->addColumn('status', function ($order) {
            if (Auth::user()->role_id == 3) {
                return "
                    <form class='d-flex' method='post' action='" . route('change_status', [$order]) . "'>
                    " . csrf_field() . "
                        <select class='form-select me-2' name='status' id=''>
                <option value='1' " . ($order->status == 1 ? 'selected' : '') . ">پرداخت نشده</option>
                <option value='2' " . ($order->status == 2 ? 'selected' : '') . ">پرداخت شده</option>
                <option value='3' " . ($order->status == 3 ? 'selected' : '') . ">در حال آماده سازی</option>
                <option value='4' " . ($order->status == 4 ? 'selected' : '') . ">ارسال شده</option>
                <option value='5' " . ($order->status == 5 ? 'selected' : '') . ">تحویل داده شده</option>
                        </select>
                        <button class='btn btn-primary-gradient btn-wave brn-sm'>تایید</button>
                        </form>
            ";
            } else {
                if ($order->status == 1) {
                    return '<span class="badge bg-danger-transparent">در انتظار پرداخت</span>';
                }
                if ($order->status == 2) {
                    return '<span class="badge bg-success-transparent">پرداخت شده</span>';
                }
                if ($order->status == 3) {
                    return '<span class="badge bg-primary-transparent">آماده سازی</span>';
                }
                if ($order->status == 4) {
                    return '<span class="badge bg-primary-transparent">ارسال شده</span>';
                }
                if ($order->status == 5) {
                    return '<span class="badge bg-secondary-transparent">تحویل داده شده</span>';
                }
            }
        })->addColumn('price', function ($order) {
            if ($order->status != 1) {
                $total_price = 0;
                foreach ($order->user->cart->where('order_id', $order->id)->get() as $cart) {
                    $total_price += $cart->price;
                }
                return $total_price;
            } else {
                $total_price = 0;
                foreach ($order->user->cart->where('order_id', null)->get() as $cart) {
                    $total_price += $cart->price;
                }
                return $total_price;
            }
        })->addColumn('action', function ($order) {
            $html = '<div class="hstack gap-2 fs-15">';
            if ($order->status == 1) {
                if (Auth::user()->role_id == 3 and Auth::user()->id == $order->user_id) {
                    $html .= '<a href=' . route("checkout") . '
                    class="btn btn-icon btn-sm btn-danger-light align-items-center justify-content-center w-100">پرداخت</a>';
                }
                if (Auth::user()->role_id != 3) {
                    $html .= '<a href=' . route("checkout") . '
                        class="btn btn-icon btn-sm btn-danger-light align-items-center justify-content-center w-100">پرداخت</a>';
                }
            } else {
                $html .= '                                                    
                <a href="' . route("order_details", [$order]) . '"
                    class="btn btn-icon btn-sm btn-primary-light d-flex align-items-center justify-content-center mx-auto w-100">
                    <i class="bi bi-eye-fill"></i>
                </a>';
            }
            $html .= "</div>";
            return $html;
        })->rawColumns(["status", "action"])->make(True);
    }
    public function changeStatus(Request $request, order $order)
    {
        Gate::authorize("admin", User::class);
        $request->validate([
            "status" => "required|min:1|max:5"
        ]);
        $order->update([
            "status" => $request->status
        ]);
        if ($request->status == 1) {
            $status = "پرداخت نشده";
        } elseif ($request->status == 2) {
            $status = "پرداخت شده";
        } elseif ($request->status == 3) {
            $status = "درحال آماده سازی";
        } elseif ($request->status == 4) {
            $status = "ارسال شده";
        } elseif ($request->status == 5) {
            $status = "تحویل داده شده";
        }
        notification::create([
            "title" => "تغییر وضعیت سفارش",
            "user_id" => $order->user_id,
            "text" => "وضعیت سفارش شما به $status تغییر کرد ",
            "link" => "http://127.0.0.1:8000/orders/$order->id/details"
        ]);
        return redirect()->back()->with("success", "وضعیت سفارش تغییر کرد");
    }
}
