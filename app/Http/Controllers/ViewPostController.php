<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ViewPostController extends Controller
{
    public function __invoke(string $slug)
    {
        $post = Post::query()->where('slug', '=', $slug)->firstOrFail();

        return view('posts.index', ['post' => $post]);
    }
}
