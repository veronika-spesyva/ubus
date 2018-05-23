<?php

namespace App\Http\Controllers;

use App\Passengers;
use App\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function order(Request $request)
    {
        $user = $request->input('user');
        $passenger = new Passengers($user);
        $passenger->save();
        // return response()->json($passenger);
        $trips = Trip::where('slug', 'harkov')->firstOrFail();
        return redirect()->route('trip.pay', compact('trips'));
    }


    public function show($slug)
    {
    	$trips = Trip::where('slug', $slug)->firstOrFail();
    	return view('pages.show', compact('trips'));
    }
}
