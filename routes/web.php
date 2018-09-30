<?php

Auth::routes();

Route::get('/', 'PageController@index');

Route::resource('profiles', 'ProfileController');
Route::get('/about', 'PageController@about');
Route::get('/services','PageController@services');

Route::resource('posts','PostController');
Route::get('/dashboard','DashboardController@index');

Route::get('/sample', 'SampleController@view');
Route::get('/policy', 'PageController@policy');

Route::get('/report_user', 'PageController@report_user');
Route::get('/report_item', 'PageController@report_item');
Route::get('/reports', 'PageController@reports');
Route::get('/lend', 'PageController@lend');