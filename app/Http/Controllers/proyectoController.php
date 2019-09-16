<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Proyecto;
use Illuminate\Http\Request;
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
        //$proyectos = DB::table('proyectos')
       // ->join('estudiantes__proyectos', 'proyectos.id', '=', 'estudiantes__proyectos.proyectos_id')
       // ->select('estudiantes__proyectos.*','proyectos.*')
       // ->get();
       //  foreach($proyectos as $datosperso){
                
           //     echo $datosperso->id;
         //       echo $datosperso->nombreproyecto;
         
         //   }


      /*  $proyectos = Proyecto::all();
        $estudiantes = Estudiante::all();
        $selected_estudiantes = [];
        foreach ($proyectos as $flight) {
            echo $flight->nombreproyecto;
        }/*
        
         //return view('proyecto.index', compact('proyectos','estudiantes','selected_estudiantes'));
        
        
         //
       // $personas = DB::table('personas')->get();
       //return view('prueba.index', ['personas' => $personas]);
      
        //$personas = DB::table('personas')->where('nombre', 'elias')->first();
        // echo $personas-> nombre;

        //$personas = DB::table('personas')->where('nombre', 'elias')->value('email'); 
        //echo $personas;

        //$personas = DB::table('personas')->find(3);
        //echo $personas->id;
        
        //$personas = DB::table('personas')->pluck('nombre');
        // foreach ($personas as $title) {
        // echo $title;
        // echo $esp="----";
               //  }

             //  $personas = DB::table('personas')->pluck('apellidop', 'nombre');
             //  foreach ($personas as $nombre => $apellidop) {
             //  echo $apellidop;
            //   echo $esp="----";
           // }

          // DB::table('personas')->orderBy('id')->chunk(100, function ($personas) {
          //  foreach ($personas as $personas) {
             //  echo  $personas->nombre;
            //   echo $esp="----";
           //  }
          // });

      //$personas = DB::table('personas')->count(); 
      //$id = DB::table('estudiantes')->min('id'); 
      //echo $esp="numeros de personas en la tabla =";
      //echo $personas;
      //echo $esp="........id minimo =";
      //echo $id;

      //$personas = DB::table('personas')->where('nombre', 'elias')->avg('id');
      //echo $personas;


     // $personas = DB::table('personas')->select('nombre', 'email as su_email')->get(); 
      //foreach($personas as $data){
      //echo $data->nombre;
      //echo $asda="---";
     // }
      //echo $personas;


      //$personas = DB::table('personas')->distinct()->get();
     // foreach($personas as $persona){
       // echo $persona->nombre;
       // echo $persona->apellidop;
      //  echo $as="-----";//
     // }

     //$query = DB::table('personas')->select('nombre');
     //   $personas = $query->addSelect('apellidop')->get();
     //  foreach($personas as $persona){
     //   echo $persona->nombre;
     //   echo $persona->apellidop;
     //   echo $as="-----";
     // }

     
            ////foreach($personas as $datosperso){
                
             ////   echo $datosperso->nombre;
            ////    echo $datosperso->carrera;
               // echo $datosperso->id;
           //// }
      
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
           
            return view('proyecto.create', compact('personas','tribunales'));

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
        //
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
