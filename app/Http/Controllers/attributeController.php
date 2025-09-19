<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class attributeController extends Controller
{
    public function edit($product)
    {
        Gate::authorize('admin', User::class);
        $products = product::all();
        $selectedProduct = product::where("id", $product)->first();
        return view('attributes.edit', compact('products', 'selectedProduct'));
    }
    public function checkEdit(request $request){
        Gate::authorize('admin', User::class);
        $request->validate([
            "product" => "required",
        ]);
        return redirect()->route('edit_attr' , $request->product);
    }
    public function saveEdit(Request $request , product $product){
        Gate::authorize('admin', User::class);
        foreach($request->attrs as $key => $attribute){
        if($attribute['name'] == "" or $attribute['value'] == "" or $attribute['price'] == ""){
            return redirect()->back()->with("error" ,"مقادیر را به درستی وارد کنید");
        }
            Attribute::where('id' , $key)->update([
                "name" => $attribute["name"],
                "value" => $attribute["value"],
                "price" => $attribute["price"],
            ]);
        }
        return redirect()->back()->with("success","ویژگی ها با موفقیت ویرایش شدند");
    }
}
