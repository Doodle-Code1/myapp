<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function show(BlogPost $blog)
    {
        return view('blog.show', compact('blog'));
    }
}

