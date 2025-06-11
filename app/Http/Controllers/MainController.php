<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('Home');
    }

    public function about()
    {
        return view('About');
    }

    public function services()
    {
        return view('Services');
    }

    public function contact()
    {
        return view('Contact');
    }
}