<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
            {
        $trips = Trip::paginate(3);
        return view('pages.index')->with('trips', $trips);
    }
    
    public function about() 
            {
        return view('pages.about');
    }

    public function routes()
    {
        $trips = Trip::all();
        return view('pages.routes')->with('trips', $trips);
    }

    public function show($slug)
    {
    	$trips = Trip::where('slug', $slug)->firstOrFail();
    	return view('pages.show', compact('trips'));
    }

    public function services() 
            {
        return view('pages.services');
    }

    public function contacts() 
            {
        return view('pages.contacts');
    }
}
