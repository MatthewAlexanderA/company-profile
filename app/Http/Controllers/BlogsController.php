<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blog = Blog::all();

        return view('home.blog', compact('blog'));
    }
}
