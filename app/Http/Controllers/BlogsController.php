<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Category;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blog = Blog::orderBy('created_at', 'DESC')->get();
        $config = Config::all();
        $contact = Contact::all();
        $category = Category::where('type', 'blog')->get();

        if (request()->filter) {
            $filter = request()->filter;
            $blog = Blog::where('category', '=', "{$filter}")->orderBy('created_at', 'desc')->get();
        } else {
            $data = Blog::latest()->get();
        }

        return view('home.blog', compact('blog', 'config', 'contact', 'category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $config = Config::all();
        $contact = Contact::all();

        return view('home.showblog', compact('blog', 'config', 'contact'));
    }
}
