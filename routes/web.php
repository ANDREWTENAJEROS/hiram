<?php

Auth::routes();

Route::get('/', 'PageController@index');

Route::resource('show', 'DateController'); //for due_date
Route::resource('destroy', 'DeleteController'); //for admin to delete the posts
Route::resource('profiles', 'ProfileController');
Route::resource('posts','PostController');

Route::get('/profile/{user_id}', 'ProfileController@profile');
Route::get('/about', 'PageController@about');
Route::get('/services','PageController@services');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/{user_id}', 'AdminController@show_user');
Route::get('/admin/{user_id}/{post_id}', 'AdminController@show_post');

Route::get('/dashboard','DashboardController@index');
Route::get('/sample', 'SampleController@view');
Route::get('/policy', 'PageController@policy');
Route::get('/agreement', 'PageController@agreement');