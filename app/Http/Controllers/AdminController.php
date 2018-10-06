<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        $users = User::orderBy('name')->get();
        
        return view('admin')->with('users', $users);
    }

    public function name()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        return view('admin')->with('user_name', $user->name);
    }

    public function show_user($user_id){
       
        $posts = Post::latest()->paginate(8);
        $user = User::find($user_id);
        
        return view('admin.profile')->with('posts', $user->posts);
    }

    public function show_post($user_id, $post_id){
        $post = Post::find($post_id);
        return view('admin.show')->with('post', $post);
    }
}
