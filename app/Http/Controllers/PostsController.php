<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =Post::orderBy('created_at','desc')->get();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $fileNameWithExt=$request->file('avatar')->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('avatar')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('avatar')->storeAs('public/coverImages',$fileNameToStore);
        }else{
            $fileNameToStore='noimage.jpeg';
        }
        $post =new Post();
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->user_id=auth()->user()->id;
        $post->avatar=$fileNameToStore;
        $post->save();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post= Post::find($id);
         if(Auth()->user()->id !== $post->user_id){
             return redirect('/posts');
         }
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post= Post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
         if(Auth()->user()->id !== $post->user_id){
             return redirect('/posts');
         }
        $post->delete();
        return redirect('/posts');

    }
}
