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
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        // $posts = Post::orderBy('created_at', 'desc')->get();

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
    // public function store(Request $request)
    // {
    //     $post = new Post;
    //     $post->title = $request->title;
    //     $post->text = $request->text;
    //     $post->user_id = auth()->user()->id;
    //     $post->save();

    //     $validate = $request->validate([
    //         'title' => 'required|unique:posts|max:255',
    //         'text' => 'required',
    //     ]);

    //     return redirect('/')->with('message', 'Příspěvek vytvořen a uložen');
    // }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'text' => 'required',
        ]);

        if ($request->title && $request->text) {
            $post = new Post;
            $post->title = $request->title;
            $post->text = $request->text;
            $post->user_id = auth()->user()->id;
            $post->save();

            return redirect('/')->with('message', 'Příspěvek vytvořen a uložen');
        } else {
            return redirect()->back()->withInput()->withErrors(['title' => 'Pole nadpis a text jsou povinné.']);
        }
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
        return redirect()->route('posts.update', $post->id)->with('message', 'Editace dokončena');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $post = Post::find($id);
        $post->delete();

        return redirect('/')->with('message', 'Příspěvek byl odstraněn');
    }
}
