<?php

namespace App\Http\Controllers;

use App\Models\HomePage;

class HomeController extends Controller
{
    public function index()
    {
        $homepage = HomePage::first();

        return view('pages.index', compact('homepage'));
    }
}
