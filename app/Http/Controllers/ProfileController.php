<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($user_id){

        $posts = Post::all();

        return view('profiles.profile')->with('posts', $posts);
    }
}
