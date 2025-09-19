<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\category;
use App\Models\Image;
use App\Models\product;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class productController extends Controller
{
    function details(product $product)
    {
        $colors = $product->attributes->where('name', 'رنگ');
        $otherAttributes = $product->attributes->where('name', '!=', 'رنگ')->groupBy('name');
        $grouped = $product->attributes->groupBy('name');
        $similar_products = $product->where("category_id", $product->category_id)->orWhere('brand_id', $product->brand_id)->paginate(3);
        return view("products.product_details", compact("product", "colors", "otherAttributes", "grouped", "similar_products"));
    }
    function delete(product $product)
    {
        Gate::authorize("admin", User::class);
        foreach ($product->images as $image) {
            File::delete(public_path($image->url));
            $image->delete();
        }
        $product->delete();
        return redirect()->back()->with("success", "محصول با موفقیت حذف شد");
    }
    function edit(product $product)
    {
        Gate::authorize("admin", User::class);
        $categories = category::all();
        $brands = Brand::all();
        $images = Image::where("product_id", null)->get();
        $id = session()->get('files_id', Str::uuid());
        session()->put('files_id', $id);
        foreach ($images as $image) {
            File::delete(public_path($image->url));
            $image->delete();
        }
        $files = $product->images->map(function ($image) {
            return [
                "name" => str_replace("images/uploads/" . $image->file_id . "_", "", $image->url),
                "url" => $image->url,
                "size" => filesize(public_path($image->url))
            ];
        });
        return view("products.product_edit", compact("product", "categories", "brands", "files"));
    }
    function checkEdit(product $product, Request $request)
    {
        Gate::authorize("admin", User::class);
        $request->validate([
            "name" => "required|max:30",
            "brand" => "required|exists:brands,id",
            "category" => "required|exists:categories,id",
            "Inventory" => "required|boolean",
            "public" => "required|boolean",
            "description"  => "required|min:10",
            "price" => "required|numeric|min:0"
        ]);
        if ($request->Inventory == 1 and $request->number_inv < 0) {
            return redirect()->back()->with('error', "تعداد وارد شده صحیح نیست");
        }
        if ($request->Inventory == 0) {
            $inv = 0;
        } else {
            $inv = $request->number_inv;
        }
        Session::forget("files_id");
        Image::where("product_id", null)->update([
            "product_id" => $product->id
        ]);
        $product->update([
            "name" => $request->name,
            "brand_id" => $request->brand,
            "category_id" => $request->category,
            "Inventory" => $inv,
            "public" => $request->public,
            "description" => $request->description,
            "price" => $request->price
        ]);
        return redirect()->back()->with("success", "محصول با موفقیت تغییر کرد");
    }
    function productsList()
    {
        return view('products.products_list');
    }
    function productsList_get()
    {
        $products = product::select(["id", "image", "name", "brand_id", "category_id", "price", "Inventory", "public", "created_at"]);
        return DataTables::of($products)->addColumn('fullname', function ($product) {
            return '<div class="d-flex">
                        <span class="avatar avatar-md avatar-square bg-light">
                        <img src="' . asset($product->images->first()->url) . '" class="w-100 h-100"
                        alt="..."></span>
                        <div class="ms-2">
                            <p class="fw-semibold mb-0 d-flex align-items-center">
                            <a href="javascript:void(0);">' . $product->name . '</a></p>
                            <p class="fs-12 text-muted mb-0">' . $product->brand->name . '</p>
                        </div>
                    </div>';
        })->addColumn('inv', function ($product) {
            if ($product->Inventory > 0) {
                return $product->Inventory;
            } else {
                return '<span class="badge bg-danger-transparent">' . $product->Inventory . '</span>';
            }
        })->addColumn('category', function ($product) {
            return $product->category->name;
        })->addColumn('public_status', function ($product) {
            if ($product->public == 1) {
                return '<span class="badge bg-primary-transparent">منتشر شده</span>';
            } else {
                return '<span class="badge bg-danger-transparent">غیر قابل نمایش</span>';
            }
        })->addColumn('created_at', function ($product) {
            return $product->created_at_shamsi;
        })->addColumn('action', function ($product) {
            return '<a href="' . route('productEdit', [$product->id]) . '" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
            <a href="' . route('productDelete', [$product->id]) . '" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
            ';
        })->rawColumns(["fullname", "inv", "public_status", "action"])->make(true);
    }
}
