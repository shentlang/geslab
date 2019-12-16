<?php

namespace App\Http\Controllers;

use App\Decano;
use App\Persona;
use Illuminate\Http\Request;

class DecanoController extends Controller
{
    public function index(){

        $dec =Decano::get();
    
        return view('decano.index', compact('dec'));  
    
        }
     public function create(){
    
        $personas = Persona::join("docentes","personas.id","=","docentes.persona_id")
          
        ->get();
           return view('decano.create',compact('personas'));
            
        }
    public function store(Request $request)
        {
            $dec = new Decano();
            $dec->persona_id = $request->docente;
            $dec->titulo = $request->titulo;
            $dec->save();
            return redirect()->route('decano.index')->with('mensaje', 'Decano registrado exitosamente');
        //return $request->all();
        }

}
