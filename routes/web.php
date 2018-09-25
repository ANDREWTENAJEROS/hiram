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

/*Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name. ' with an id of ' .$id;
});

Route::get('/about', function(){
    return view('pages.about');
});*/

Auth::routes();

<<<<<<< HEAD
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
=======
Route::get('/', 'PageController@index');

// Route::get('/verify','VerifyController@getVerify');
// Route::post('/verify', [ 'as' => 'verify', 'uses' => 'VerifyController@postVerify']);

Route::get('/about', 'PageController@about');
Route::get('/services','PageController@services');

Route::resource('posts','PostController');
Route::resource('search','PostController');
Route::get('/dashboard','DashboardController@index');

Route::get('/sample', 'SampleController@view');
>>>>>>> 2f0169efaf5373f934dae47f82925eb20c798cb2
Route::get('/policy', 'PageController@policy');
