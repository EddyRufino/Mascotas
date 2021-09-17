<?php

namespace App\Http\Controllers\Report;

use App\Mascota;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;

class ReportFileController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::where('user_id', auth()->id())->latest()->get();
        return view('fichas.index', compact('mascotas'));
    }

    public function pdf($id)
    {
        $mascota = Mascota::where('user_id', auth()->id())
                ->where('id', $id)
                ->latest()
                ->get();

        $pdf = PDF::loadView('fichas.pdf', compact('mascota'));

        return $pdf->stream();
        // return $pdf->download('ficha-propiedad.pdf');
    }
}
