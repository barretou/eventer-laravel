<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('events.create');
    }
    public function contato()
    {
        return view('contato');
    }
}
