<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->paginate(10);

        return view('users/admin')->with('posts', $posts);
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('users/admin')->with('success', 'Příspěvek byl smazán.');
    }
}
