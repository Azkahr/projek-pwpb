<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BeritaController extends Controller
{
    public function index() {
        return view('news', [
            "title" => "Berita",
            "posts" => Post::latest()->get(),
            "latest" => Post::latest()->take(3)->get(),
        ]);
    }

    public function show($id) {
        $post = Post::where('id', $id)->first();
        
        return view('news-detail', [
            "title" => "berita",
            "post" => $post,
        ]);
    }
}
