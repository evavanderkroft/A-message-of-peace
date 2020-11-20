<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }
    public function indexTransition()
    {
        return view('layouts.transition');
    }
}

