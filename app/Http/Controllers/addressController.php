<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Auth;
use Illuminate\Http\Request;

class addressController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            "name" => "required",
            "address" => "required|min:3",
            "phone" => "required|size:11",
            "pincode" => "size:10",
            "lat" => "required",
            "lng" => "required",
        ]);
        $address = Address::create([
            "user_id" => Auth::user()->id,
            "name" => $request->name,
            "address" => $request->address,
            "phone" => $request->phone,
            "pincode" => $request->pincode,
            "lat" => $request->lat,
            "lng" => $request->lng,
        ]);
        return redirect()->back()->with("success", "آدرس اضافه شد");
    }
    public function edit(Address $address, Request $request)
    {
        $request->validate([
            "name" => "required",
            "address" => "required|min:3",
            "phone" => "required|size:11",
            "pincode" => "size:10",
            "lat" => "required",
            "lng" => "required",
        ]);
        if ($address->user_id != Auth::user()->id) {
            return redirect()->back()->with("error", "Fatal Error");
        }
        $address->update([
            "user_id" => Auth::user()->id,
            "name" => $request->name,
            "address" => $request->address,
            "phone" => $request->phone,
            "pincode" => $request->pincode,
            "lat" => $request->lat,
            "lng" => $request->lng,
        ]);
        return redirect()->back()->with("success", "آدرس با موفقیت تغییر کرد");
    }
    public function delete(address $address)
    {
        if ($address->user_id != Auth::user()->id) {
            return redirect()->back()->with("error", "Fatal Error");
        }
        $address->delete();
        return redirect()->back()->with("success", "آدرس با موفقیت حذف شد");
    }
    public function list(){
        $addresses = address::where("user_id" , Auth::user()->id)->get();
        return view("addresses.list" , compact('addresses'));
    }
}
