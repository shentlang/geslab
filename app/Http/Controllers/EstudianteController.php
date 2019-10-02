<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Http\Requests\CreateMessageRequest;
use App\Persona;
use DB;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(){

$this->middleware('auth');
    }

    public function index()
    {
        
        $estudiantes = Estudiante::get();
        $selected_authors = [];

	   	return view('estudiante.index', compact('estudiantes', 'selected_authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMessageRequest $request)
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


        $estu=new Estudiante();
        $estu->ru=$request->ru; 
        $estu->carrera=$request->carrera;
        $estu->persona_id=persona::get()->max('id'); 
        $estu->save();
 

        return redirect()->route('estudiante.index'); 
           
       // return $request->all();       
        
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
        $estudiantes = Estudiante::find($id);
    //dd($estudiantes);
    //$estudiantes = DB::table('estudiantes')->where('id', $id)->first();

     return view('estudiante.show', compact('estudiantes'));
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
        $estudiantes = Estudiante::find($id);

        return view('estudiante.edit', compact('estudiantes'));
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
        $estudiantes = Estudiante::find($id);
        $estudiantes->ru=$request->ru; 
        $estudiantes->carrera=$request->carrera;
        $estudiantes->save();
   //$prueba = $request->nombre;
        $persona = Persona::find($estudiantes->persona->id);
       
        $persona->nombre=$request->nombre; 
        $persona->apellidop=$request->apellidop;
        $persona->apellidom=$request->apellidom;
        $persona->genero=$request->genero;
        $persona->cedula=$request->cedula;
        $persona->email=$request->email;
        $persona->telefono=$request->telefono;
        $persona->direccion=$request->direccion;
        $persona->save();
        return redirect()->route('estudiante.index');
      //dd($prueba);
       // return $request->all();
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
