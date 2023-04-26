<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showContactForm()
    {
        return view('diner-airbnb');
    }

    public function submitContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Enregistrez les données dans la base de données ou envoyez un e-mail à l'administrateur du site.

        return redirect()->back()->with('success', 'Le formulaire a été envoyer avec succès.');
    }
}

