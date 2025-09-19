<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\product;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::where("status", 1)->orderBy("created_at", "desc")->paginate(10);
        return view("posts.posts", compact("posts"));
    }
    public function add()
    {
        Gate::authorize('writer', User::class);
        $categories = category::all();
        return view('posts.add', compact('categories'));
    }
    public function checkAdd(Request $request)
    {
        Gate::authorize('writer', User::class);
        $request->validate([
            "image" => "required|max:2000",
            'title' => 'required|min:3',
            'body' => 'required|min:10|max:4294967295',
            "category_id" => "required|exists:categories,id",
        ]);
        $filename = time() . "_" . $request->file("image")->getClientOriginalName();
        $request->image->storeAs("/images/posts/", $filename);
        $path = "/images/posts/" . $filename;
        $post = Post::create([
            "title" => $request->title,
            "body" => $request->body,
            "category_id" => $request->category_id,
            "writer_id" => Auth::user()->id,
            "image" => $path,
        ]);
        return redirect()->route("posts")->with("success", "پست با موفقیت اضافه شد");
    }
    public function details(Post $post)
    {
        $products = product::where('category_id', $post->category_id)->get();
        return view("posts.details", compact("post", "products"));
    }
    public function edit(post $post)
    {
        Gate::authorize('writer', User::class);
        if (Auth::user()->id != $post->writer->id and Auth::user()->role_id != 3) {
            return redirect()->route('posts')->with('error', "Fatal Error");
        }
        $categories = category::all();
        return view('posts.edit', compact('post', "categories"));
    }
    public function checkEdit(post $post, Request $request)
    {
        Gate::authorize('writer', User::class);
        $request->validate([
            "image" => "max:2000",
            'title' => 'required|min:3',
            'body' => 'required|min:10|max:4294967295',
            "category_id" => "required|exists:categories,id",
        ]);
        if ($request->hasFile("image")) {
            File::delete(public_path($post->image));
            $filename = time() . "_" . $request->file('image')->getClientOriginalName();
            $request->image->storeAs("images/posts", $filename);
            $path = "images/posts/" . $filename;
        }
        $post->update([
            "title" => $request->title,
            "body" => $request->body,
            "image" => $request->hasFile('image') ? $path : $post->image
        ]);
        return redirect()->back()->with('success', "مقاله با موفقیت تغییر کرد");
    }
    public function delete(post $post)
    {
        Gate::authorize("writer", User::class);
        if (Auth::user()->id != $post->writer->id and Auth::user()->role_id != 3) {
            return redirect()->route('posts')->with('error', "Fatal Error");
        }
        File::delete(public_path($post->image));
        $post->delete();
        return redirect()->back()->with("success", "مقاله حذف شد");
    }
    public function list()
    {
        Gate::authorize('adminorwriter', User::class);
        return view("posts.list");
    }
    public function list_get()
    {
        Gate::authorize('adminorwriter', User::class);
        if (Gate::allows('admin', User::class)) {
            $posts = post::select(["id", "title", "writer_id", "category_id", "created_at"]);
        } else {
            $posts = post::where("writer_id", Auth::user()->id)->select(["id", "title", "writer_id", "category_id", "created_at"]);
        }
        return DataTables::of($posts)->addColumn("writer", function ($post) {
            return $post->writer->name;
        })->addColumn("category", function ($post) {
            return $post->category->name;
        })->addColumn("created_at", function ($post) {
            return $post->created_at_shamsi;
        })->addColumn("action", function ($post) {
            return '<a href="' . route('edit_post', [$post->id]) . '" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
            <a href="' . route('delete_post', [$post->id]) . '" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
            ';
        })->make(True);
    }
}
