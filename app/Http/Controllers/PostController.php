<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Ambil 5 berita terbaru untuk homepage
        $posts = Post::latest()->take(5)->get();
        return view('home', compact('posts'));
    }

    public function showAll()
    {
        // Ambil semua berita untuk halaman /posts
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        // Ambil satu berita berdasarkan ID
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }
}
