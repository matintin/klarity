<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = \App\Models\Post::all();

        return view('allposts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('postCreate');
        // return "hi";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        $data = $request->all();

        $data["user_id"] = \Auth::user()->id;
        
        $post = \App\Models\Post::create($data);

        foreach($data['labels'] as $labelID) {
            $post->labels()->attach($labelID); 
        }

        $fileName = \Carbon\Carbon::now()->timestamp."_postPhoto.jpg";

        $request->file('photo')->move('images',$fileName);

        $post->photo = $fileName;

        $post->save();

        return redirect('posts/'.$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = \App\Models\Post::find($id);

        return view('post',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = \App\Models\Post::find($id);

        return view('updatePost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        //

        $data = $request->all();

        $data["user_id"] = \Auth::user()->id;

        $post = \App\Models\Post::find($id);

        foreach($data['labels'] as $labelID) {
            $post->labels()->attach($labelID); 
        }

        $fileName = \Carbon\Carbon::now()->timestamp."_postPhoto.jpg";

        $request->file('photo')->move('images',$fileName);

        $post->photo = $fileName;

        $post->save();

        return redirect('posts/'.$post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
