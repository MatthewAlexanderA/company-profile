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
        $blog = Blog::all();
        $config = Config::all();
        $contact = Contact::all();

        return view('home.blog', compact('blog', 'config', 'contact'));
    }
}
