<?php

namespace App\Http\Controllers;

use App\Docente_proyecto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    //
    public function exportPdf($id){

        $tutor = Docente_proyecto::find($id);

        $pdf = PDF::loadView('pdf.memot', compact('tutor'));
       return $pdf->download('nombrepdf.pdf');
      // return $pdf->stream();

    }
}
