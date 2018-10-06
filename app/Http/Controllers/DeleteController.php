<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class DeleteController extends Controller
{
    public function destroy($id){
        $post = Post::find($id);

        $post->delete();

        $link = '/admin/' . $post->user_id;

        return redirect($link)->with('success', 'Post Deleted');
    }
}
