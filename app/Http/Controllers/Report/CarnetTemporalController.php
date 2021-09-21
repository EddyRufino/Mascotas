<?php

namespace App\Http\Controllers\Report;

use App\MascotaTemporal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CarnetTemporalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function anverso($anverso)
    {
        $mascota = MascotaTemporal::where('id', $anverso)->get();

        QrCode::size(200)->generate(route('mimascotas.show', $mascota[0]->url), '../public/qrcodes-temporal/'. $mascota[0]->url .'.svg');

        $pdf = PDF::loadView('admin.export.carnet-temporal-anverso', compact('mascota'));

        // https://www.srcodigofuente.es/aprender-php/guia-dompdf-completa
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream();
        // return $pdf->download('carnet-anverso.pdf');
    }
}
