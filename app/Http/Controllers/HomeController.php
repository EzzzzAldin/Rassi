<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\HomePage;

class HomeController extends Controller
{
    public function index()
    {
        $homepage = HomePage::first();

        return view('pages.index', compact('homepage'));
    }

    public function aboutUs()
    {
        $aboutus = AboutUs::first();

        return view('pages.aboutus', compact('aboutus'));
    }
}
