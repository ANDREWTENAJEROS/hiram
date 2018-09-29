<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//     public function store(Request $request){
//     if($request->hasFile('cover_image')) {
 
//         //get filename with extension
//         $filenamewithextension = $request->file('cover_image')->getClientOriginalName();
 
//         //get filename without extension
//         $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
 
//         //get file extension
//         $extension = $request->file('cover_image')->getClientOriginalExtension();
 
//         //filename to store
//         $filenametostore = $filename.'_'.time().'.'.$extension;
 
//         //Upload File to s3
//         Storage::disk('s3')->put($filenametostore, fopen($request->file('cover_image'), 'r+'), 'public');
 
//         //Store $filenametostore in the database
//         return redirect('image')->with('status','Image Uploaded Scucessfully');
//     }
// }
}

