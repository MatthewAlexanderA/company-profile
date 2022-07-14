<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Config;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        $config = Config::all();

        return view('home.blog', compact('blog', 'config'));
    }
}
