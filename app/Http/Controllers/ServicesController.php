<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $service = Service::all();

        return view('home.service', compact('service'));
    }
}
