<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function index()
    {
        return view('pages.routes');
    }

    public function view($id)
    {
        return view('pages.route');
    }
}
