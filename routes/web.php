<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

Auth::routes();

/*
    Route::get('/', function(){
        return view('fileUpload');
    });

    Route::post('upload', function(){
        $path = request()->file('file')->store(
            'cover_image',
            's3'
        );
        
        return $path;

    })->name('upload');

    //para ni sa magview not functional pa
    Route::post('view', function(){
        return request()->$filesystem->getAdapter()->getClient()->getObjectUrl($bucket, $key); //wala pay blade para ma-view ang image
    })->name('view');
*/

//ipang uncomment lang ni.

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/services','PageController@services');
Route::resource('posts','PostController');
Route::get('/dashboard','DashboardController@index');
Route::get('/policy', 'PageController@policy');
