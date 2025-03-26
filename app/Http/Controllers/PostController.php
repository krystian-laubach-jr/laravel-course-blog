<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($postID)
    {
        $post = Post::find($postID);

        return view('article', compact('post'));
    }
}
