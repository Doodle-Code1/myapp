<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    // List blogs
    public function index() {
        $posts = BlogPost::latest()->paginate(9);
        return view('blog.index', ['posts' => $posts]);
    }

    // Single blog
    public function show(BlogPost $blog) {
        return view('blog.show', ['post' => $blog]);
    }
}

