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

use App\Models\Visitor;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $about = About::all();
        $why = Why::all();
        $service = Service::limit(6)->get();
        $gallery = Gallery::latest()->limit(4)->get();
        $testimonial = Testimonial::all();
        $blog = Blog::latest()->limit(3)->get();
        $config = Config::all();
        $contact = Contact::all();

        $ip_now = $_SERVER['REMOTE_ADDR'];
        $ip_address = Visitor::where('ip_address', $ip_now);

        $validated = [
            'ip_address' => $ip_now,
            'visit_date' => date('Y-m-d'),
        ];

        Visitor::create($validated);

        return view('home.index', compact('slider', 'about', 'why', 'service', 'gallery', 'testimonial', 'blog', 'config', 'contact'));
    }
}
