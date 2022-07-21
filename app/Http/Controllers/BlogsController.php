<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Config;
use App\Models\Contact;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blog = Blog::orderBy('created_at', 'DESC')->get();
        $config = Config::all();
        $contact = Contact::all();

        return view('home.blog', compact('blog', 'config', 'contact'));
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
