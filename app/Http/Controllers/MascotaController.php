<?php

namespace App\Http\Controllers;

use App\Tipo;
use App\Mascota;
use Illuminate\Http\Request;
use App\Http\Requests\MascotaRequest;

class MascotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mascotas = Mascota::where('user_id', auth()->id())->latest()->paginate();

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
        $mascota = Mascota::create( $request->all() );

        return redirect()->route('mismascotas.index')->with('status', $mascota->nombre . ' fue registrado!');
    }

    public function show(Mascota $mismascota)
    {
        return view('mascotas.show', compact('mismascota'));
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
