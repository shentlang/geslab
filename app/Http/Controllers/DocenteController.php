<?php

namespace App\Http\Controllers;

use App\Docente;
use App\Persona;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $docentes = Docente::get();
        

	   	return view('docente.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('docente.create');
        
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
        $persona=new Persona();
        $persona->nombre=$request->nombre; 
        $persona->apellidop=$request->apellidop;
        $persona->apellidom=$request->apellidom;
        $persona->genero=$request->genero;
        $persona->cedula=$request->cedula;
        $persona->email=$request->email;
        $persona->telefono=$request->telefono;
        $persona->direccion=$request->direccion;
        $persona->save();


        $docente=new Docente();
        $docente->titulado=$request->titulado; 
        $docente->persona_id=persona::get()->max('id'); 
        $docente->save();
 

        return redirect()->route('docente.index');
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
    public function destroy($id)
    {
        //
    }
}
