<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\cart;
use App\Models\category;
use App\Models\Image;
use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class adminController extends Controller
{
    function index()
    {
        Gate::authorize("admin", User::class);
        $products = product::all();
        $categories = Category::all();
        $brands = Brand::all();
        $users = User::all();
        $orders = order::where("status", "!=", 1)->get();
        $total_price = 0;
        $sell_categories = [];
        foreach ($categories as $category) {
            $sell_categories[$category->name] = null;
        }
        foreach ($orders as $order) {
            foreach ($order->carts as $cart) {
                $total_price += $cart->price;
                $sell_categories[$cart->product->category->name] += $cart->price;
            }
        }
        arsort($sell_categories);
        $total_orders = order::all();
        return view("admin.index", compact("products", "categories", "brands", "users", "total_price", "orders", "total_orders", "sell_categories"));
    }
    function add_product()
    {
        Gate::authorize("admin", User::class);
        $categories = category::all();
        $brands = Brand::all();
        $id = session()->get('files_id', Str::uuid());
        session()->put('files_id', $id);
        $images = Image::where("product_id", null)->get();
        foreach ($images as $image) {
            File::delete(public_path($image->url));
            $image->delete();
        }
        return view("admin.add_prodect", compact("categories", "brands"));
    }
    function checkAdd_product(Request $request)
    {
        if(Image::where("file_id" , session("files_id"))->count() < 2){
            return redirect()->back()->with("error" , "حداقل 2 تصویر وارد کنید");
        }
        $request->validate([
            "name" => "required|max:30",
            "brand" => "required|exists:brands,id",
            "category" => "required|exists:categories,id",
            "Inventory" => "required|boolean",
            "public" => "required|boolean",
            "description"  => "required|min:10|max:4294967295",
            "price" => "required|numeric|min:0"
        ]);
        if ($request->Inventory == 1 and $request->number_inv < 0) {
            return redirect()->back()->with('error', "تعداد وارد شده صحیح نیست");
        }
        if ($request->Inventory == 0) {
            $inv = 0;
        } else {
            if ($request->number_inv == null){
                return redirect()->back()->with("error" , "تعداد موجودی را وارد کنید");
            }
            $inv = $request->number_inv;
        }
        $product = product::create([
            "name" => $request->name,
            "brand_id" => $request->brand,
            "category_id" => $request->category,
            "Inventory" => $inv,
            "public" => $request->public,
            "description" => $request->description,
            "price" => $request->price
        ]);
        Image::where("file_id" , session("files_id"))->update([
            "product_id" => $product->id,
        ]);
        Session::forget("files_id");
        return redirect()->route("add_attributes", [$product->id])->with("success", "محصول اضافه شد برای تکمیل فرآیند لطفا ویژگی های محصول را وارد کنید");
    }
    function add_attributes($product)
    {
        Gate::authorize("admin", User::class);
        if ($product != null) {
            $selectedProduct = product::where("id", $product)->first();
            if ($selectedProduct != null) {
                $selectedProduct = $selectedProduct->id;
            }
        } else {
            $selectedProduct = null;
        }
        $products = product::all();
        return view("admin.add_attributes", compact("selectedProduct", "products"));
    }
    function checkAdd_attributes(Request $request)
    {
        Gate::authorize("admin", User::class);
        $request->validate([
            'product'           => 'required|exists:products,id',
            'attribute.*'       => 'required|string|max:100',
            'attribute_value.*' => 'required|string|max:100',
            'attribute_price.*' => 'required|numeric|min:0',
        ]);

        $product_id = $request->product;

        foreach ($request->attribute as $index => $attributeName) {
            $attributeValue = $request->attribute_value[$index];
            $attributePrice = $request->attribute_price[$index];

            Attribute::create([
                'product_id' => $product_id,
                'name'       => $attributeName,
                'value'      => $attributeValue,
                'price'      => $attributePrice,
            ]);
        }

        return redirect()->back()->with('success', 'ویژگی‌ها با موفقیت ذخیره شدند ✅');
    }
}
