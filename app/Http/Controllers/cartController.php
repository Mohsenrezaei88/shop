<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\cart;
use App\Models\order;
use App\Models\product;
use App\Models\shipping_method;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    public function index()
    {
    if(Auth::user()->cart != null){
        $products = Auth::user()->cart->where("order_id" , null)->where("user_id" , Auth::user()->id)->get();
    }
    else{
        $products = [];
    }
    $shipping_methods = shipping_method::all();
        return view("cart.cart", compact("products" , "shipping_methods"));
    }
    function add(Request $request, product $product)
    {
        $request->validate([
            "number" => "numeric"
        ]);
        if ($request->number == 0) {
            return redirect()->back()->with("error", "0 مجاز نیست");
        }
        if ($request->number > $product->Inventory){
            return redirect()->back()->with("error", "Fatal Error");
        }
        if ($request->selected_color != null) {
            $attributes = [
                "رنگ" => $request->selected_color,
            ];
        }
        foreach ($request->get("attributes") as $key => $value) {
            $attributes[$key] = $value;
        }
        $check = cart::where("user_id", Auth::user()->id)->where("product_id", $product->id)->where("attributes", json_encode($attributes))->where("order_id" , null)->first();
        if ($check != null) {
            $add_price = $check->price * $request->number;
            $price = $check->price + $add_price;
            $check->update([
                "number" => $check->number + $request->number,
                "price" => $price,
            ]);
            order::where("user_id", Auth::user()->id)->where("status","1")->delete();
        } else {
            $price = $product->price;
            $product_attr = Attribute::where("product_id", $product->id)->get();
            foreach ($product_attr as $atrr) {
                if ($attributes[$atrr->name] == $atrr->value) {
                    $price += $atrr->price;
                }
            }
            $price = $price * $request->number;
            $cart = cart::create([
                "user_id" => Auth::user()->id,
                "product_id" => $product->id,
                "attributes" => json_encode($attributes),
                "number" => $request->number,
                "price" => $price,
            ]);
            order::where("user_id", Auth::user()->id)->where("status","1")->delete();
        }
        return redirect()->back()->with("success", "محصول به سبد خرید اضافه شد");
    }
    public function delete(cart $cart)
    {
        if ($cart->user_id != Auth::user()->id){
            return redirect()->back()->with("error","Fatal Error");
        }
        $check = $cart->delete();
        return redirect()->back()->with("success", "محصول از سبد خرید حذف شد");
    }
    public function add_number(cart $cart)
    {
        $price = $cart->price + $cart->price/$cart->number;
        $cart->update([
            "price" => $price,
            "number" => $cart->number + 1,
        ]);
        return redirect()->back();
    }
    public function des_number(cart $cart)
    {
        if($cart->number == 1) {
            return redirect()->back()->with("error","تعداد نمیتواند کمتر از 1 باشد");
        }
        $price = $cart->price / $cart->number;
        $price = $price * ($cart->number - 1);
        $cart->update([
            "price" => $price,
            "number" => $cart->number - 1,
        ]);
        return redirect()->back();
    }
}
