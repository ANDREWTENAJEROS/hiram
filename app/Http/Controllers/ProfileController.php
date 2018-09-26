<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $posts = $query->where('user_id', 'like', $post->user_id);

        $posts = Post::orderBy('title', 'asc')->paginate(8);
        // $users = User::orderBy('name')->get();
        
        $user = User::find($user_id);
        
        return view('posts.profile')->with('posts', $user->posts);
    }

    public function name()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        return view('posts.profile')->with('user_name', $user->name);
    }
}
