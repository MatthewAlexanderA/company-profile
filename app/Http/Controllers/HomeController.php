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
use App\Models\Config;
use App\Models\Contact;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $about = About::all();
        $why = Why::all();
        $service = Service::limit(6)->get();
        $gallery = Gallery::limit(4)->get();
        $testimonial = Testimonial::limit(2)->get();
        $blog = Blog::limit(3)->get();
        $config = Config::all();
        $contact = Contact::all();

        return view('home.index', compact('slider', 'about', 'why', 'service', 'gallery', 'testimonial', 'blog', 'config', 'contact'));
    }
}
