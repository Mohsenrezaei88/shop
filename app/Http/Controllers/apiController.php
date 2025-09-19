<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\shipping_method;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class apiController extends Controller
{
    public function total_price(Request $request)
    {
        $ship_method = shipping_method::where('id', $request["shipping_method"])->first();
        $user = Auth::user();
        $total_price_carts = 0;
        $carts = $user->cart->where("order_id", null)->where("user_id" , Auth::user()->id)->get();
        foreach ($carts as $cart) {
            $total_price_carts += $cart->price;
        }
        $shiping_price = $ship_method->price;
        $total_price = $total_price_carts + $shiping_price;
        return response()->json(["total_price" => number_format($total_price), "shipping_price" => number_format($shiping_price)]);
    }
    public function get_address(Request $request){
        $address_id = $request->address;
        $address = Address::where("id" , $address_id)->first();
        return response()->json(["address" => $address]);
    }
}
