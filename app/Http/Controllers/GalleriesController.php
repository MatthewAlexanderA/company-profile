<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();

        return view('home.gallery', compact('gallery'));
    }
}
