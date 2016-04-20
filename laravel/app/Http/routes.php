<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['uses' => 'PostController@index']); 

Route::get('/posts', ['uses' => 'PostController@index']);

Route::get('/posts/{post_id}',
    [
    'uses' => 'PostController@show',
    'as'   => 'post-detail',
    ]
);