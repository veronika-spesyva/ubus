<?php

namespace App\Http\Controllers;

use App\Passengers;
use App\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

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
        return response()->json($passenger);
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

    public function pay()
    {
        $trips = Trip::all();
        return view('pages.pay')->with('trips', $trips);
    }

    public function paySuccess(Request $request) {
        print_r('<pre>');
        print_r($request->all());
        //$xml = new SimpleXMLElement($request);
        // print_r($xml);
        print_r('<pre>');
    }
}
