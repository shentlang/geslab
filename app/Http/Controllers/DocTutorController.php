<?php

namespace App\Http\Controllers;

use App\Docente_proyecto;
use App\Estudiante_proyecto;
use Illuminate\Http\Request;

class DocTutorController extends Controller
{
    //
    public function index(){

    $docente = Docente_proyecto::where('funcion', '=','tutor')
    ->orWhere('funcion', '=','primer tribunal')
    ->orWhere('funcion', '=','seccionador')
    ->get();
    return view('Doc-tutores.index', compact('docente'));


    }

    public function tribunal(){

        $docente = Docente_proyecto::where('funcion', '=','tribunal')->get();
        return view('Doc-tutores.index', compact('docente'));
    
    
        }
        public function notify(){

            $docente = Docente_proyecto::get();
            return view('Doc-tutores.notifi', compact('docente'));
        
        
            }

            public function actas(){

                $estudiante = Estudiante_proyecto::get();
                return view('Doc-tutores.actas', compact('estudiante'));
            
            
                }
    
}
