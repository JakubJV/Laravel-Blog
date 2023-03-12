<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // ověření, zda je uživatel přihlášen
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // ověření, zda je uživatel správce (s ID 1)
        if (auth()->user()->id !== 8) {
            return redirect('/')->with('message', 'Nemáte přístup k administraci.');
        }

        // získání příspěvků
        $posts = Post::orderByDesc('created_at')->paginate(10);

        return view('users/admin')->with('posts', $posts);
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin')->with('message', 'Příspěvek byl smazán.');
    }
}
