<?php

namespace App\Http\Controllers\Report;

use App\Mascota;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CarnetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function anverso($anverso)
    {
        $mascota = Mascota::where('id', $anverso)->get();

        QrCode::size(200)->generate(route('listadomascotas.show', ['listadomascota' => $mascota[0]->url]), '../public/qrcodes/'. $mascota[0]->url .'.svg');

        $pdf = PDF::loadView('admin.export.carnet-anverso', compact('mascota'));

        // https://www.srcodigofuente.es/aprender-php/guia-dompdf-completa
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream();
        // return $pdf->download('carnet-anverso.pdf');
    }
}
