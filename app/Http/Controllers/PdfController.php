<?php

namespace App\Http\Controllers;

use App\Docente_proyecto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    //
    public function exportPdf(Request $request,$id){

        $tutor = Docente_proyecto::find($id);
        $numerito = $request->input('numero');
        $pdf = PDF::loadView('pdf.memot', compact('tutor','numerito'));
     //  return $pdf->download('Documento.pdf');
       return $pdf->stream();

    }
}
