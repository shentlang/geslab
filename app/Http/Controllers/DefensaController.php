<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class DefensaController extends Controller
{


    public function index()
    {
        if (auth()->user()->role->nombrerol === "admin") {
            $proyectos = Proyecto::all();
        } else {
            
            if (auth()->user()->role->nombrerol === "Dir. Informatica y Ciencias Exactas") {
                $proyectos = Proyecto::where('materia_id','=',5)
                ->orWhere('materia_id', 7)->get();
            } else {
                if (auth()->user()->role->nombrerol === "Dir. Ciencias Economicas y Empresariales") {
                    # code...
                    $proyectos = Proyecto::where('materia_id','=',4)
                    ->orWhere('materia_id', 6)->get();
                } else {
                    # code...
                    if (auth()->user()->role->nombrerol === "Dir. Ciencias Contables, Financieras y Economicas") {
                        # code...
                        $proyectos = Proyecto::where('materia_id','=',2)
                        ->orWhere('materia_id', 1)->get();
                    } else {
                    if (auth()->user()->role->nombrerol === "Dir. Ciencias Agronomicas") {
                        # code...
                        $proyectos = Proyecto::where('materia_id','=',3)
                        ->get();
                    } else {
                        return redirect('/') ;
                    }
                    
                    }
                    
                }
                
            }
            
        }
        
        return view('defensa.index', compact('proyectos'));
        
    
       
    }

    public function asignar($id){

        $proyecto = Proyecto::find($id);

        return view('defensa.asignar', compact('proyecto'));


    }

    public function update(Request $request, $id){

        $proyectos = Proyecto::where([
            ['fechadefensa', '=', $request->input('fechadefensa')],
            ['hora', '=', $request->input('hora')]
        ])->get();
             if(count($proyectos) >= 1)  {
                foreach ($proyectos as $key) {
                    if ($key->id == $id) {
                        $proyecto = Proyecto::find($id);
       
                        $proyecto->lugar = $request->lugar;
                        $proyecto->fechadefensa = $request->fechadefensa;
                        $proyecto->hora = $request->hora;
                        $proyecto->estado = $request->estado;
                        $proyecto->save();
                        
                        return redirect()->route('defensa.index');
                    } else {
                        return redirect()->route('defensa.asignar', $id)->with('mensaje', 'fecha de defensa ya registrada. porfavor seleccione otra fecha-hora');
                    }
                    
                }
            } else {
                $proyecto = Proyecto::find($id);
       
        $proyecto->lugar = $request->lugar;
        $proyecto->fechadefensa = $request->fechadefensa;
        $proyecto->hora = $request->hora;
        $proyecto->estado = $request->estado;
        $proyecto->save();
        
        return redirect()->route('defensa.index');
                
            }

       /* $proyecto = Proyecto::find($id);
       
        $proyecto->lugar = $request->lugar;
        $proyecto->fechadefensa = $request->fechadefensa;
        $proyecto->hora = $request->hora;
        $proyecto->estado = $request->estado;
        $proyecto->save();
        
        return redirect()->route('defensa.index'); */

    }





}
