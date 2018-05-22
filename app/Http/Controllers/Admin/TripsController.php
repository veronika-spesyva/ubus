<?php

namespace App\Http\Controllers\Admin;

use App\Trip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::all();
        return view('admin.trips.index', ['trips'=>$trips]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required', 
            'content'=>'required', 
            'date'=>'required', 
            'image'=>'nullable|image', 
        ]);

        $trips = Trip::add($request->all());
        $trips->uploadImage($request->file('image'));

        return redirect()->route('trips.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trips = Trip::find($id);
        return view('admin.trips.edit', ['trips'=>$trips]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required', 
            'content'=>'required', 
            'date'=>'required', 
            'image'=>'nullable|image', 
        ]);

        $trips = Trip::find($id);
        $trips->edit($request->all());
        $trips->uploadImage($request->file('image'));

        return redirect()->route('trips.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trip::find($id)->remove();
        return redirect()->route('trips.index');
    }


}
