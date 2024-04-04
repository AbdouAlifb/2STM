<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail ;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contactData = $request->only(['name', 'email', 'subject', 'message']);

        // Send the email
        Mail::to('ali.abdoufb@gmail.com')->send(new ContactMail($contactData));

        return back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}
