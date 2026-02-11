<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(Request $request): View
    {
        $query = trim((string) $request->query('q', ''));

        $posts = Post::query()
            ->when($query !== '', function ($builder) use ($query) {
                $builder
                    ->where('title', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%")
                    ->orWhere('content', 'like', "%{$query}%");
            })
            ->orderByDesc('created_at')
            ->get();

        return view('posts', [
            'posts' => $posts,
            'query' => $query,
        ]);
    }
}
