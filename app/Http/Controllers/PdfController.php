<?php

namespace App\Http\Controllers;

use App\Docente_proyecto;
use App\Estudiante_proyecto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    //
    public function exportPdf(Request $request,$id){

        $tutor = Docente_proyecto::find($id);
        $numerito = $request->input('numero');
        $pdf = PDF::loadView('pdf.memot', compact('tutor','numerito'))->setPaper('a4', 'portrait');
       
     //  return $pdf->download('Documento.pdf');
       return $pdf->stream();

    }
    public function exportPdf2(Request $request,$id){

        $tutor = Docente_proyecto::find($id);
        $numerito = $request->input('numero');
        $pdf = PDF::loadView('pdf.memotribunal', compact('tutor','numerito'))->setPaper('a4', 'portrait');
       
     //  return $pdf->download('Documento.pdf');
       return $pdf->stream();

    }
    public function exportPdf3(Request $request,$id){

      $tutor = Docente_proyecto::find($id);
      $numerito = $request->input('numero');
      $pdf = PDF::loadView('pdf.memodefensa', compact('tutor','numerito'))->setPaper('a4');
     
   //  return $pdf->download('Documento.pdf');
     return $pdf->stream();

  }
  public function exportPdf4(Request $request,$id){

   
   $estudiantes = Estudiante_proyecto::find($id);
   $numerito = $request->input('numero');
   $pdf = PDF::loadView('pdf.memoactas', compact('estudiantes','numerito'));
  
//  return $pdf->download('Documento.pdf');
  return $pdf->stream();

}
}
