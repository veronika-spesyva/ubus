<?php

namespace App\Http\Controllers\Admin;

use App\Cities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
    public function index() {
        $cities = Cities::all();
        return view('admin.cities.index', ['cities'=>$cities]);
    }
    
    public function create() {
        return view('admin.cities.create');
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'city_name' => 'required'
        ]);
        Cities::create($request->all());
        return redirect()->route('cities.index');
    }
    
    public function edit($id) {
        $cities = Cities::find($id);
        return view('admin.cities.edit', ['cities'=>$cities]);
    }
    
    public function update(Request $request, $id) {
        $this->validate($request, [
            'city_name' => 'required'
        ]);
        $cities = Cities::find($id);
        $cities -> update($request->all());
        return redirect()->route('cities.index');
    }
    
    public function destroy($id) {
        Cities::find($id)->delete();
        return redirect()->route('cities.index');
    }
}
