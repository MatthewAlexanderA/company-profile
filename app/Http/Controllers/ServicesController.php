<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Config;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $service = Service::all();
        $config = Config::all();

        return view('home.service', compact('service', 'config'));
    }
}
