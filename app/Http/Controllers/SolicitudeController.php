<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudeController extends Controller
{
    public function create()
    {
        return view('solicitudes.create');
    }

    public function store()
    {
        # code...
    }
}
