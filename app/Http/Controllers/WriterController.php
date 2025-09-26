<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class WriterController extends Controller
{
    public function index(){
        Gate::authorize('writer' , User::class);
        $posts = post::where("writer_id" , Auth::user()->id)->get();
        return view('writer.index' ,  compact('posts'));
    }
}
