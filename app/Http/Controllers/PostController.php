<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function posts(): View
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }
}
