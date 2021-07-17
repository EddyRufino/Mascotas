<?php

namespace App\Http\Controllers;

use App\Http\Requests\MascotaRequest;
use App\Mascota;
use App\Tipo;
use Illuminate\Http\Request;

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
        $mascota = new Mascota( $request->validated() );

        $mascota->user_id = auth()->id();

        $mascota->save();

        return redirect()->route('mis-mascotas.index')->with('status', $mascota->nombre . ' fue registrado!');
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
