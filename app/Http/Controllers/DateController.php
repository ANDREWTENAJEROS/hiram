<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class DateController extends Controller
{
    public function update(Request $request, $id){

        $post = Post::find($id);

        if($post->status == "Not Available"){
            $post->status = "Available";
            $post->due_date = "Not Set";
            $post->borrower = "None";

            $post->save();
        } else {
            $post->status = "Not Available";
            $post->due_date = $request->input('due_date');
            $post->borrower = $request->input('borrower');

            $post->save();
        }
        
        $link = '/posts/' . $id;
        return redirect($link)->with('success', 'Successfully');
    }
}
