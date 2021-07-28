<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $blog_posts = Post::all();
        return view('posts', [
            "title" => "Posts",
            "posts" => $blog_posts
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
