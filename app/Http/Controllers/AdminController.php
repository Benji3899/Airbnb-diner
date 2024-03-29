<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Code pour la page d'administration
        $users = User::all();
        return view('admin', ['users' => $users]);
    }
}
