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

Route::get('/', 'PageController@index');

// Route::get('/verify','VerifyController@getVerify');
// Route::post('/verify', [ 'as' => 'verify', 'uses' => 'VerifyController@postVerify']);

Route::get('/about', 'PageController@about');
Route::get('/services','PageController@services');

Route::resource('posts','PostController');
Route::get('/dashboard','DashboardController@index');

Route::get('/sample', 'SampleController@view');
Route::get('/policy', 'PageController@policy');