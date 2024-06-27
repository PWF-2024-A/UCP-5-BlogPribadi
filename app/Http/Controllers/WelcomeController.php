<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class WelcomeController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->paginate(9);

        return view('welcome', compact('todos'));
    }
}


