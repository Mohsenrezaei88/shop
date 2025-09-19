<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

use function Laravel\Prompts\select;

class categoryController extends Controller
{
    public function add()
    {
        Gate::authorize("admin", User::class);
        return view("categories.add_category");
    }
    public function checkAdd(Request $request)
    {
        Gate::authorize("admin", User::class);
        $request->validate([
            "image" => "required|max:2000|image",
            "name" => "required|min:3|max:30",
        ]);
        $filename = time() .".". $request->image->getClientOriginalName();
        $request->image->storeAS("/images", $filename);
        $path = "images/" . $filename;
        $category = category::create([
            "image" => $path,
            "name" => $request->name
        ]);
        return redirect()->back()->with("success", "دسته بندی با موفقیت اضافه شد");
    }
    public function edit(category $category){
        Gate::authorize("admin", User::class);
        return view("categories.edit_category" , compact("category"));
    }
    public function checkEdit(Request $request,category $category){
        Gate::authorize("admin", User::class);
        $request->validate([
            "name" => "required|min:3|max:30",
            "image" => "max:2000|image"
        ]);
        if ($request->hasFile("image")) {
            File::delete(public_path($category->image));
            $filename = time() . "_" . $request->image->getClientOriginalName();
            $request->image->storeAS("/images", $filename);
            $path = "images/" . $filename;
        }
        $category->update([
            "image" => $request->hasfile('image') ? $path : $category->image,
            "name" => $request->name
        ]);
        return redirect()->back()->with("success","دسته بندی با موفقیت تغییر کرد");
    }
    public function delete(category $category){
        Gate::authorize("admin", User::class);
        if($category->products()->count() != 0){
            return redirect()->back()->with("error","نمیتوان دسته بندی دارای محصول را پاک کرد");
        }
        File::delete(public_path($category->image));
        $category->delete();
        return redirect()->back()->with("success","دسته بندی با موفقیت حذف شد");
    }
    public function list(){
        return view("categories.categories_list");
    }
    public function list_get(){
        $categories = category::select(["id" , "image" , "name" , "created_at"]);
        return DataTables::of($categories)->addColumn('fullname' , function($category){
            return '<div class="d-flex">
                        <span class="avatar avatar-md avatar-square bg-light">
                        <img src="' . asset($category->image) . '" class="w-100 h-100"
                        alt="..."></span>
                        <div class="ms-2">
                            <p class="fw-semibold mb-0 d-flex align-items-center">
                            <a href="javascript:void(0);">' . $category->name . '</a></p>
                        </div>
                    </div>';
        })->addColumn('products-number' , function($category){
            return $category->products->count();
        })->addColumn('created_at' , function($category){
            return $category->created_at_shamsi;
        })->addColumn('action' , function($category){
            return '<a href="'.route('edit_category' , [$category->id]).'" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
            <a href="'.route('delete_category' , [$category->id]).'" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
            ';
        })->rawColumns(["fullname" , "action"])->make(true);
    }
}
