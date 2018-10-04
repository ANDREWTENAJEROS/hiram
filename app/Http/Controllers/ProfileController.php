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
       
        $posts = Post::latest()->paginate(8);
        $user = User::find($user_id);
        
        return view('profiles.profile')->with('posts', $user->posts);
    }

    public function edit($id)
    {
        $user = User::find($id);

        //Check for correct user
        if(auth()->user()->id !== $user->id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        return view('profiles.edit')->with('user', $user);
    }

    public function update(Request $request, $id){

        $user = User::find($id);

        //Check for correct user
        if(auth()->user()->id !== $user->id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        $this->validate($request, [
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required',
            'birthday' => 'required',
        ]);
        
        //Update Profile
        $user = User::find($id);
        $user->mobile = $request->input('mobile');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->birthday = $request->input('birthday');
        $user->sex = $request->input('sex');
        
        if($request->hasFile('profile_image')){
            $imageURL = request()->file('profile_image')->store(
                'my-file',
                's3'
            );
            $user->profile_image = $imageURL;
        } 
        
        $user->save();

        return redirect('/dashboard')->with('success', 'Profile Updated');
    }

    public function destroy($id){
        $user = User::find($id);
        $post = Post::select('id')->where('user_id', $id);

        //Check for correct user
        if(auth()->user()->id !== $user->id){
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        $post->delete();
        $user->delete();

        return redirect('/dashboard')->with('success', 'Profile Deleted!');
    }
}
