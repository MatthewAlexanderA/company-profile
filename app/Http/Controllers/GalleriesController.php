<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\category;
use App\Models\Config;
use App\Models\Contact;

use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        $config = Config::all();
        $category = Category::where('type', 'gallery')->get();
        $contact = Contact::all();

        return view('home.gallery', compact('gallery', 'config', 'category', 'contact'));
    }
}
