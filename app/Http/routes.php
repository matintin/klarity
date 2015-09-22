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

Route::get('posts', function () {

	return view('allposts');
});

Route::get('posts/{id}', function ($id) {

	$post = \App\Models\Post::find($id);

    return view('post',compact('post'));
});

Route::get('labels/{id}', function($id) {

	$label = \App\Models\Label::find($id);

	return view('label',compact('label'));
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function() {
	return view('register');
});

Route::post('users', function(\App\Http\Requests\CreateUserRequest $request) {

	$user = \App\Models\User::create($request->all());

	$user->password = bcrypt($user->password);

	$user->save();

	return redirect('users/'.$user->id);

});

Route::get('users/{id}', function($id) {

	$user = \App\Models\User::find($id);

	return view('profile',compact('user'));
});

Route::get('users/{id}/edit', function($id) {

	$user = \App\Models\User::find($id);

	return view('updateProfile',compact('user'));
});

Route::put('users/{id}', function(\App\Http\Requests\UpdateUserRequest $request, $id) {

	$user = \App\Models\User::find($id);

	$fileName = \Carbon\Carbon::now()->timestamp."_avatar.jpg";

	$request->file('avatar')->move('images',$fileName);

	$user->avatar = $fileName;

	$user->save();

	return redirect('users/'.$user->id);
});

Route::get("test", function() {

	// $user = \App\Models\User::find(1);
	$post = \App\Models\Post::find(1);
	// $label = \App\Models\Label::find(1);
	// $comment = \App\Models\Comment::find(1);
	//$user->posts()->get();
	

	return $post->$comments->id;
});