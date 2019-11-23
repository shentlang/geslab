<?php

namespace App\Http\Controllers;

use App\Docente;
use App\Proyecto;
use Illuminate\Http\Request;

class DocenteproyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role->nombrerol === "admin") {
            $funciones = Proyecto::all();
        } else {
            
            if (auth()->user()->role->nombrerol === "Dir. Informatica y Ciencias Exactas") {
                $funciones = Proyecto::where('materia_id','=',5)
                ->orWhere('materia_id', 7)->get();
            } else {
                if (auth()->user()->role->nombrerol === "Dir. Ciencias Economicas y Empresariales") {
                    # code...
                } else {
                    # code...
                    if (auth()->user()->role->nombrerol === "Dir. Ciencias Contables, Financieras y Economicas") {
                        # code...
                    } else {
                    if (auth()->user()->role->nombrerol === "Dir. Ciencias Agronomicas") {
                        # code...
                    } else {
                        # code...
                    }
                    
                    }
                    
                }
                
            }
            
        }
        
    
        
        // dd($notas);

        return view('funcion.index', compact('funciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        return view('funcion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $proyectos = Proyecto::find($request->proyecto);
        if($proyectos){
            $proyectos->docentes()->syncWithoutDetaching([$request->input('docente')=>['funcion' => $request->funcion]]);
        }

        return redirect()->route('funcion.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $proyectos = Proyecto::find($id);
        $docentes = Docente::all();
        return view('funcion.show', compact('proyectos','docentes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($delete,$delete2)
    {
        /*$proyectos = Proyecto::find($id);
        $proyectos->docentes()->detach($id2);
        return redirect()->route('funcion.index'); */
        
        
       
    }
}
