<?php

namespace App\Http\Controllers;

use App\Persona;
use App\Pretribunal;
use Illuminate\Http\Request;

class PretribunalController extends Controller
{
    //
    public function index(){

        $pre =Pretribunal::get();
    
        return view('presidentetrib.index', compact('pre'));
        }
        public function create(){
    
          /*  $personas = Persona::get();
            return view('presidentetrib.create', compact('personas'));*/
            $personas = Persona::join("docentes","personas.id","=","docentes.persona_id")
          
           ->get();

          /* foreach ($personas as $key) {
               # code...
               echo $key->id;
               echo $key->nombre;
           }*/
         // return $personas->all();
        return view('presidentetrib.create', compact('personas'));
            
        }
        public function store(Request $request)
        {
            $dir = new Pretribunal();
            $dir->persona_id = $request->docente;
            $dir->titulo = $request->titulo;
            $dir->funciond = $request->funciond;
            $dir->save();
            return redirect()->route('presidentetrib.index')->with('mensaje', 'Director registrado exitosamente');
       // return $request->all();
    
        }
}
