<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Config;
use App\Models\Contact;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $service = Service::all();
        $config = Config::all();
        $contact = Contact::all();

        return view('home.service', compact('service', 'config', 'contact'));
    }
}
