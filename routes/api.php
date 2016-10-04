<?php

use Illuminate\Http\Request;
use App\ApiManager\GetModels;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/posts', 'PostsController@index');
Route::post('/post', 'PostsController@post');
Route::get('/models', function () {
    dd(GetModels::get());
});
$routes = [
  'asd',
  'posts'
];

foreach ($routes as $route) {
    Route::get($route, 'PostsController@index');
}

// DinamicRouter => Check all availaible routes
//               => Then check the method
//               => And the Controller
//               => At the end apply all the middlewares
