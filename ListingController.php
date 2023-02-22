<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() {
        return view('listings', ['heading' => 'Latest Listings','listings' => Listing::all() 
    ]);
    }

    public function show() {
        return view('listing', ['listing' => Listing::find($id)
    ]);
    }
}
