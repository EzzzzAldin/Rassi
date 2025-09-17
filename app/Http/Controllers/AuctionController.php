<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index($categoryId)
    {
        return view('partials.auctions.index', compact('categoryId'));
    }

    public function show($auctionId)
    {
        return view('partials.auctions.show', compact('auctionId'));
    }
}
