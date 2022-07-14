<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Config;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();
        $config = Config::all();

        return view('home.testimonial', compact('testimonial', 'config'));
    }
}
