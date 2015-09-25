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


//posts

Route::Resource('posts', 'PostController');

//posts


// comment

Route::post('comments', function(\App\Http\Requests\CreateCommentRequest $request) {

	$data = $request->all();

	$data["user_id"] = \Auth::user()->id;

	$comment = \App\Models\Comment::create($data);

	$comment->save();

	return redirect('posts/'.$data['post_id']);
});

Route::delete('comments/{id}',function($id) {

	$comment = \App\Models\Comment::find($id);


	$comment->delete();

	return redirect('posts/'.$comment->post->id);

});

//comment

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