<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(8);
        $users = User::orderBy('name')->get();
        
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        return view('dashboard')->with('posts', $user->posts);
    }

    public function name()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        return view('dashboard')->with('user_name', $user->name);
    }

}
