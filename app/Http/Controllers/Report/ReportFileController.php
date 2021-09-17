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
        return view('fichas.index');
    }

    public function pdf()
    {
        $mascotas = Mascota::get();
        $pdf = PDF::loadView('fichas.pdf', compact('mascotas'));

        return $pdf->stream();
        // return $pdf->download('ficha-propiedad.pdf');
    }
}
