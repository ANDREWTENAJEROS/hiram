<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){

        $posts = Post::all();

        return view('profiles.profile')->with('posts', $posts);
    }
}
