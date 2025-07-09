<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        return view('contact');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
            'tel' => 'required|string|max:10',
        ],
        [
            'name.required' => 'Veuillez entrer votre nom.',
            'email.required' => 'Veuillez entrer votre adresse e-mail.',
            'email.email' => 'Veuillez entrer une adresse e-mail valide.',
            'message.required' => 'Veuillez entrer votre message.',
            'tel.required' => 'Veuillez entrer votre numéro de téléphone.',
            'tel.max' => 'Le numéro de téléphone ne peut pas dépasser 10 caractères.',
        ]);
    
        $contact = Contact::create([
            'nom' => $request->input('name'), 
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'tel' => $request->input('tel'),
        ]);
 
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
