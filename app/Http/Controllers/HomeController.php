<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\Why;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Blog;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $about = About::all();
        $why = Why::all();
        $service = Service::all();
        $gallery = Gallery::all();
        $testimonial = Testimonial::all();
        $blog = Blog::all();

        return view('home.index', compact('slider', 'about', 'why', 'service', 'gallery', 'testimonial', 'blog'));
    }
}
