<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index()
    {
        return view('intro.intro');
    }
    public function indexTransition()
    {
        return view('intro.transition');
    }
}

