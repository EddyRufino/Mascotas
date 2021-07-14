<?php

namespace App\Http\Controllers;

use App\Http\Requests\MascotaRequest;
use App\Mascota;
use App\Tipo;
use Illuminate\Http\Request;

class MascotaController extends Controller
{

    public function index()
    {
        $mascotas = Mascota::where('user_id', auth()->id())->get();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        $mascotas = Mascota::where('user_id', auth()->id())->get();
        $tipos = Tipo::all();
        return view('mascotas.create', compact('mascotas', 'tipos'));
    }
    public function store(MascotaRequest $request)
    {
        dd('xD');
    }

    public function show(Mascota $mascota)
    {
        //
    }
    public function edit(Mascota $mascota)
    {
        //
    }

    public function update(Request $request, Mascota $mascota)
    {
        //
    }

    public function destroy(Mascota $mascota)
    {
        //
    }
}
