<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class brandController extends Controller
{
    public function add(){
        Gate::authorize('admin' , User::class);
        return view('brands.add');
    }
    public function checkAdd(Request $request){
        Gate::authorize('admin', User::class);
        $request->validate([
            "name" => "required"
        ]);
        $check = Brand::where("name", $request->name)->first();
        if($check != null){
            return redirect()->route("brands_list")->with("success","برند از قبل موجود است");
        }
        Brand::create([
            "name"=> $request->name,
        ]);
        return redirect()->route("brands_list")->with("success","برند اضافه شد");
    }
    public function list(){
        Gate::authorize("admin", User::class);
        return view("brands.list");
    }
    public function list_get(){
        Gate::authorize("admin", User::class);
        $brands = brand::select(["id" , "name" , "created_at"]);
        return DataTables::of($brands)->addColumn("created_at" , function($brand){
            return $brand->created_at_shamsi;
        })->addColumn('products-number' , function($brand){
            return $brand->products->count();
        })->addColumn('action' , function($brand){
            return '<a href="'.route('edit_brand' , [$brand->id]).'" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
            <a href="'.route('delete_brand' , [$brand->id]).'" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
            ';
        })->make(True);
    }
    public function edit(Brand $brand){
        Gate::authorize('admin', User::class);
        return view('brands.edit' , compact('brand'));
    }
    public function checkEdit(Request $request , Brand $brand){
        Gate::authorize('admin', User::class);
        $request->validate([
            "name" => "required"
        ]);
        $brand->update([
            "name" => $request->name,
        ]);
        return redirect()->route('brands_list')->with("success","برند تغییر کرد");
    }
    public function delete(Brand $brand){
        Gate::authorize("admin", User::class);
        if($brand->products()->count() != 0){
            return redirect()->back()->with("error" , "نمیتوان برند دارای محصول را پاک کرد");
        }
        $brand->delete();
        return redirect()->route("brands_list")->with("success","برند حذف شد");
    }
}
