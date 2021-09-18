<?php

namespace App\Http\Controllers\Report;

use App\Mascota;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

        $qr = QrCode::size(200)->generate(route('listadomascotas.show', ['listadomascota' => $mascota[0]->url]), '../public/qrcodes/'. $mascota[0]->url .'.svg');

        $pdf = PDF::loadView('fichas.pdf', compact('mascota', 'qr'));

        // return $pdf->stream();
        return $pdf->download('ficha-propiedad.pdf');
    }
}
