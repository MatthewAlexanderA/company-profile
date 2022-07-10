<?php

namespace App\Http\Controllers;

use App\Models\About;

use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index()
    {
        $about = About::all();

        return view('home.about', compact('about'));
    }
}
