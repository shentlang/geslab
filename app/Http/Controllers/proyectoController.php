<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Proyecto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::paginate(10);
        $estudiantes = Estudiante::get();
        $selected_authors = [];

	   	return view('proyecto.index', compact('proyectos', 'estudiantes', 'selected_authors'));
      
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = DB::table('personas')
            ->join('tutors', 'personas.id', '=', 'tutors.personas_id')
            ->select('personas.apellidop','personas.nombre','tutors.id')
            ->get();
            $tribunales = DB::table('personas')
            ->join('tribunals', 'personas.id', '=', 'tribunals.personas_id')
            ->select('personas.apellidop','personas.nombre','tribunals.id')
            ->get();
            $alumnos = Estudiante::get();
            $selected_alumnos = [];
           
            return view('proyecto.create', compact('personas','tribunales','alumnos','selected_alumnos'));

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = Proyecto::create([
            'nombreproyecto' => $request->input('nombre'), 
            'tipo' => $request->input('tipo'), 
            'defensaini' => $request->input('fechadefensa'), 
            'defensafinal' => $request->input('fechadefensa2'), 
            'tribunals_id' => $request->input('tribunal'), 
            'tutors_id' => $request->input('tutor')
            
        ]);
        if($proyecto){
            $proyecto->estudiantes()->sync($request->input('estudiantes'));
        }
        return 'asdasdasd';
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