<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Config;

use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        $config = Config::all();

        return view('home.gallery', compact('gallery', 'config'));
    }
}
