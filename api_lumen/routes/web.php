<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::group(['prefix' => 'api'], function() {
    Route::post('/login', 'LoginController@index');
    Route::post('/logout', 'LoginController@logout');
    Route::post('/register', 'AccountController@register');
    Route::get('/user', 'AccountController@index');
});

// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->post('/login', 'LoginController@index');
//     $router->post('/logout', 'LoginController@logout');
//     $router->post('/register', 'AccountController@index');
// });

// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->get('/posts', 'PostController@index');
//     $router->post('/posts', 'PostController@store');
//     $router->put('/posts/{id}', 'PostController@update');
//     $router->delete('/posts/{id}', 'PostController@destroy');
// });

Route::group(['prefix' => 'api'], function() {
    Route::get('/posts', 'PostController@index');
    Route::post('/posts', 'PostController@store');
    Route::put('/posts/{id}', 'PostController@update');
    Route::delete('/posts/{id}', 'PostController@destroy');
});
