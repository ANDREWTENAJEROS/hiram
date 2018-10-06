<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\User;
use App\Report;

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
        $search_location = $request->input('search_location');
        // $posts = Post::all();
        // $posts = Post::orderBy('title', 'desc')->take(1)->get();
    
        // $posts = Post::orderBy('created_at', 'asc')->paginate(6);
        $posts = Post::latest()
                ->search($search_product)
                ->category($search_category)
                ->location($search_location)
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
        $post->condition = $request->input('condition');
        $post->category = $request->input('category');
        $post->user_id = auth()->user()->id;
        $post->location = $request->input('location');
        $post->deposit = $request->input('deposit');

        $imageURL = request()->file('cover_image')->store(
            'my-file',
            's3'
        );

        if($request->hasFile('image1')){
            $imageURL1 = request()->file('image1')->store(
                'my-file',
                's3'
            );
            $post->image1 = $imageURL1;
        }

        if($request->hasFile('image2')){
            $imageURL2 = request()->file('image2')->store(
                'my-file',
                's3'
            );
            $post->image2 = $imageURL2;
        }

        $post->status = 'Available';
        $post->report_id = 0;
        $post->cover_image = $imageURL;
        $post->save();

        return redirect('/dashboard')->with('success', 'New Item Created');
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
        $count = 0;
        $post = Post::find($id);
        $report = Report::all();
        $link = '/posts/' . $id;

        //Check for correct user
        if(auth()->user()->id !== $post->user_id){

            foreach($report as $reports){

                //Check if the user's already reported this post
                if($reports->users_id == auth()->user()->id && $reports->posts_id == $id){
                    $count += 1;
                }
            }
            
            if($count > 0){
                return redirect($link)->with('error', 'asdasd');
            } elseif($post->report_id == 9) {
                $post->delete();

                return redirect('/posts')->with('success', 'Item Deleted');
            } else {
                //Create new Report
                $report = new Report;
                $report->users_id = auth()->user()->id;
                $report->posts_id = $id;
                $report->save();

                //Increment report_id
                $post = Post::find($id);
                $post->report_id += 1;
                $post->save();

                return redirect($link)->with('success', 'Post Reported');
            }
        } else {
            
                //Edit Post
                $this->validate($request, [
                    'title' => 'required',
                    'body' => 'required',
                    'condition' => 'required',
                    'location' => 'required',
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
                // $post->price_per_hour = $request->input('price_per_hour');
                $post->location = $request->input('location');
                $post->condition = $request->input('condition');
                $post->category = $request->input('category');
                $post->deposit = $request->input('deposit');

                if($request->hasFile('cover_image')){
                    $imageURL = request()->file('cover_image')->store(
                        'my-file',
                        's3'
                    );
                    $post->cover_image = $imageURL;
                }
                
                if($request->hasFile('image1')){
                    $imageURL1 = request()->file('image1')->store(
                        'my-file',
                        's3'
                    );
                    $post->image1 = $imageURL1;
                }
        
                if($request->hasFile('image2')){
                    $imageURL2 = request()->file('image2')->store(
                        'my-file',
                        's3'
                    );
                    $post->image2 = $imageURL2;
                }
                
                $post->save();

                return redirect('/dashboard')->with('success', 'Item Updated');
        }
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

        return redirect('/dashboard')->with('success', 'Item Removed');
    }

    public function date_update($id){
        $post = Post::find($id);

        $post->due_date = $request->input('due_date');
        $post->status = 'Not Available';

        $post->save();

        $link = '/posts/' . $id;
        return redirect($link)->with('success', 'Successfully');
    }
}
