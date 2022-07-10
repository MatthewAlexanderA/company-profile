<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();

        return view('home.testimonial', compact('testimonial'));
    }
}
