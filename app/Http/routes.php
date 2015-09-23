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

	
	return view('hello');
});


//login

Route::get('login',"loginController@show");

Route::post('login',"loginController@proccessLogin");

Route::get('logout',"loginController@logout");

//login


//users

Route::Resource('users', 'UserController');

//users


Route::Resource('posts', 'PostController');

Route::get('labels/{id}', function($id) {

	$label = \App\Models\Label::find($id);

	return view('label',compact('label'));
});

Route::get("test", function() {

	// $user = \App\Models\User::find(1);
	$post = \App\Models\Post::find(1);
	// $label = \App\Models\Label::find(1);
	// $comment = \App\Models\Comment::find(1);
	//$user->posts()->get();
	

	return $post->$comments->id;
});