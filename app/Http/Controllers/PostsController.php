<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $posts = Post::all();

        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->text = $request->text;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $post = Post::findOrFail($id);

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->save();
        return redirect()->route('posts.update', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $post = Post::find($id);
        $post->delete();

        return redirect('/');
    }
}
