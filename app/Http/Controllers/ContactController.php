<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) 
    {
        return view('contact');
    }

    // Store Contact Form data
    public function ContactForm(Request $request) 
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        // 
        return back()->with('success', 'Nous avons bien reçu votre message, merci de nous avoir contactez.');
    }

}
