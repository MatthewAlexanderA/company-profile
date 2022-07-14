<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Config;

use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index()
    {
        $about = About::all();
        $config = Config::all();

        return view('home.about', compact('about', 'config'));
    }
}
