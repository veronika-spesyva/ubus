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

    public function getPassengers($date, $tripId) {
        $weekMap = [
          '1000000',
          '0100000',
          '0010000',
          '0001000',
          '0000100',
          '0000010',
          '0000001',
        ];
        $created_date = date_create($date);
        Trip::where('id', $tripId)->whereRaw('`days` & ? != 0', [bindec($weekMap[date_format($created_date, 'N') - 1])])->firstOrFail();
        $passengers = Passengers::all()->where('date', date_format($created_date, 'Y-m-d'))->where('trip_id', $tripId)->where('paid', true);
        return response()->json($passengers->values()->all());
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
        $passenger = Passengers::find($request->input('SHOPORDERNUMBER'));
        $passenger->paid = true;
        $passenger->save();
        $trips = Trip::find($passenger->trip_id);
        return view('pages.success-pay', compact('trips'));
    }

    public function payFailure() {
        return view('pages.failure-pay');
    }
}
