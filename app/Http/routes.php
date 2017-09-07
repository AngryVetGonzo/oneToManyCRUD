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

use App\Post;
use App\User;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function() {
   $user = User::findOrFail(1);
   $user->posts()->save(new Post(['title'=>'My first post with one to many', 'body' => 'laravel is kew']));


});