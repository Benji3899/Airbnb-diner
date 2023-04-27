<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{

//    public function create(Request $request) {
//        return view('diner-airbnb');
//    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $form = new Form ([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'sujet' => $request->sujet,
            'message' => $request->message
        ]);
         $form->save();

        // Enregistrez les données dans la base de données ou envoyez un e-mail à l'administrateur du site.

        return redirect()->back()->with('success', 'Le formulaire a été envoyer avec succès.');
    }

}

