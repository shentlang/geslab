<?php

namespace App\Http\Controllers;

use App\Lugar;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    //

    public function index(){

       $lug = Lugar::get();
       return view('miselaneos.lugardef', compact('lug'));
        }
        public function create(){
    
    return view('miselaneos.lugarcreate');
            
        }
        public function store(Request $request)
        {
                
             //  return $request->all();
               $dir = new Lugar();
               $dir->aula = $request->aula;
               $dir->lugar = $request->lugar;
               $dir->save();
               return redirect()->route('lugar.index')->with('mensaje', 'lugar de defensa registrado exitosamente'); 
                
    
        }
}
