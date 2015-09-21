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

Route::get('/', function () {

	return view('allposts');
});

Route::get('post', function () {
    return view('post');
});

Route::get('label', function () {
    return view('label');
});

Route::get('login', function () {
    return view('login');
});

Route::get("test", function() {

	$user = \App\Models\User::all();
	// $post = \App\Models\Post::find(1);
	// $label = \App\Models\Label::find(1);
	// $comment = \App\Models\Comment::find(1);
	$user->posts();

	return $user;
});