<?php

namespace App\Http\Controllers\Admin;

use App\Passengers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassengersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passengers = Passengers::all();
        return view('admin.passengers.index', ['passengers'=>$passengers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.passengers.create');
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
            'email'=>'required', 
            'image'=>'nullable|image', 
        ]);

        $passengers = Passengers::add($request->all());
        $trips->uploadImage($request->file('image'));

        return redirect()->route('passengers.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $passengers = Passengers::find($id);
        return view('admin.passengers.edit', ['passengers'=>$passengers]);
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
            'email'=>'required', 
            'image'=>'nullable|image', 
        ]);

        $passengers = Passengers::add($request->all());
        $trips->uploadImage($request->file('image'));

        return redirect()->route('passengers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Passengers::find($id)->remove();
        return redirect()->route('passengers.index');
    }
}
