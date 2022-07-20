<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Contact;
use App\Models\Config;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        $config = Config::all();

        return view('home.contact', compact('contact', 'config'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'subject' => 'required',
                'content' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'g-recaptcha-response.required' => 'Please verify that you are not a robot.'
            ]
        );

        Form::create($validated);

        return redirect()->route('contacts.index')
            ->with('success', 'Add Success!');
    }
}
