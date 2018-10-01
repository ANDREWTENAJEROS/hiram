<?php

Auth::routes();

Route::get('/', 'PageController@index');

Route::get('/profile/{user_id}', 'ProfileController@profile');
Route::get('/about', 'PageController@about');
Route::get('/services','PageController@services');

Route::resource('posts','PostController');
Route::get('/dashboard','DashboardController@index');

Route::get('/sample', 'SampleController@view');
Route::get('/policy', 'PageController@policy');