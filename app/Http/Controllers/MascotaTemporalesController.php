<?php

namespace App\Http\Controllers;

use App\MascotaTemporal;
use Illuminate\Http\Request;

class MascotaTemporalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $mascotas = MascotaTemporal::where('estado_qr', 0)->latest()->paginate();

        return view('mascotaTemporales.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascotaTemporales.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_mascota' => 'required',
            'url' => 'nullable',
            'fecha_nacimiento' => 'required',
            'tipo' => 'required',
            'raza' => 'required',
            'sexo' => 'required',
            'color' => 'required',
            'nombre_adulto' => 'required',
            'apellidos_adulto' => 'required',
            'celular' => 'required',
            'direccion' => 'required',
            'fecha_emision' => 'required',
            'foto' => 'required|image|max:3072',
            'estado_qr' => 'nullable'
        ]);

        $data['estado_qr'] = 0;

        $mascota = MascotaTemporal::create( $data );

        return redirect()->route('mimascotas.index')
            ->with('status', $mascota->nombre_mascota . ' fue registrado!');
    }

    public function show(MascotaTemporal $mimascota)
    {
        return view('mascotaTemporales.show', compact('mimascota'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(MascotaTemporal $mimascota)
    {
        $mimascota->estado_qr = 1;
        $mimascota->save();
        return back();
    }
}
