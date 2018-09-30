<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\User;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search_product = $request->input('search_product');
        $search_category = $request->get('search_category');
        // $posts = Post::all();
        // $posts = Post::orderBy('title', 'desc')->take(1)->get();
    
        // $posts = Post::orderBy('created_at', 'asc')->paginate(6);
        $posts = Post::latest()
                ->search($search_product)
                ->category($search_category)
                ->paginate(8);

        // $posts = Post::orderBy('title', 'asc')->get();
        $users = User::orderBy('name')->get();
        return view('posts.index', compact('posts'))->with('posts', $posts)->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
        return view('posts.create');
    }

    public function search(){
        return view('posts.search');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'required',
            'condition' => 'required',
            'category' => 'required',
            'location' => 'required',
        ]);

        //Handler file upload
    /*
        if($request->hasFile('cover_image')){
            //Get filenname with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            // $path = $request->file('cover_image')->storeAs('../storage/app/public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
    */
        
        //Create new Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->price_per_day = $request->input('price_per_day');
        $post->price_per_hour = $request->input('price_per_hour');
        $post->condition = $request->input('condition');
        $post->category = $request->input('category');
        $post->user_id = auth()->user()->id;

        $imageURL = request()->file('cover_image')->store(
            'my-file',
            's3'
        );

        $imageURL1 = request()->file('image1')->store(
            'my-file',
            's3'
        );

        $imageURL2 = request()->file('image2')->store(
            'my-file',
            's3'
        );

        $post->image1 = $imageURL1;
        $post->image2 = $imageURL2;
        $post->cover_image = $imageURL;
        $post->save();

        return redirect('/dashboard')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        //Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'condition' => 'required',
            'category' => 'required',
        ]);
    /*
        //Handler file upload
        if($request->hasFile('cover_image')){
            //Get filenname with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
    */

        //Update Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->price_per_day = $request->input('price_per_day');
        $post->price_per_hour = $request->input('price_per_hour');
        $post->condition = $request->input('condition');
        $post->category = $request->input('category');

        if($request->hasFile('cover_image')){
        $imageURL = request()->file('cover_image')->store(
            'my-file',
            's3'
        );
        $post->cover_image = $imageURL;
    }
        
        $post->save();

        return redirect('/dashboard')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        $post->delete();

        return redirect('/dashboard')->with('success', 'Post Removed');
    }
}
