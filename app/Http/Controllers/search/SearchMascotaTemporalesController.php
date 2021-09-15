<?php

namespace App\Http\Controllers\search;

use App\MascotaTemporal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchMascotaTemporalesController extends Controller
{
    public function index(Request $request)
    {
        $mascotas = MascotaTemporal::where('nombre_mascota', 'like', '%'. $request->search .'%')->latest()->paginate();

        return view('mascotaTemporales.search', compact('mascotas'));
    }
}
