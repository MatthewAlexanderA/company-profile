<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Category;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $service = Service::count();
        $gallery = Gallery::count();
        $testimonial = Testimonial::count();
        $blog = Blog::count();
        $slider = Slider::count();
        $category_g = Category::where('type', 'gallery')->count();
        $category_b = Category::where('type', 'blog')->count();

        return view('admin.dashboard', compact('service', 'gallery', 'testimonial', 'blog', 'slider', 'category_g', 'category_b'));
    }
}
