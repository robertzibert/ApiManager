<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/dashboard', function () {
    return view('admin.main');
});

Route::get('/posts', function () {
    return view('admin.model');
});

Route::get('dashboard/{model}', 'ApiManagerController@show');
/*
Route::('api-manager', function () {
    Route::get('/dashboard', 'ApiManagerController@index');
    // Retrieve API model information
    Route::get('/dashboard/{model}', 'ApiManagerController@show');
    // Save API model information
    Route::post('/model', 'ApiManagerController@post');
});// Middleware(api-admin)
*/
