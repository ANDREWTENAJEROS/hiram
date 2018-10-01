<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profile($user_id){
       
        $posts = Post::orderBy('created_at', 'asc')->paginate(8);
        $users = User::orderBy('name')->get();
        
        $user = User::find($user_id);
        
        return view('profiles.profile')->with('posts', $user->posts);
    }
}
