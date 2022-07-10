<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contact = Contact::all();

        return view('home.contact', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'content' => 'required',
        ]);

        Form::create($validated);

        return redirect()->route('contacts.index')
            ->with('success', 'Add Success!');
    }
}
