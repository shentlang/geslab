<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Http\Requests\CreateMessageRequest;
use App\Persona;
use App\Plan;
use Illuminate\Support\Facades\Crypt;
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
        if (auth()->user()->role_id === 2) {
            $estudiantes = Estudiante::get();
        } else {
             if (auth()->user()->role_id === 3||auth()->user()->role_id === 4||auth()->user()->role_id === 5||auth()->user()->role_id === 6||auth()->user()->role_id === 7||auth()->user()->role_id === 8||auth()->user()->role_id === 9) {
                $estudiantes = Estudiante::where('user_id','=', auth()->user()->id)->get();
             } else {
                return redirect('/') ;
             }
        
        }
            
        
	   	return view('estudiante.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $plan = Plan::all();
        return view('estudiante.create', compact('plan'));
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
        $estu->user_id= auth()->user()->id;
        $estu->plan_id=$request->numplan;
        $estu->persona_id=persona::get()->max('id'); 
        $estu->save();

        return redirect()->route('estudiante.index')->with('mensaje', 'Estudiante registrado exitosamente');
           
          
       return $request->all();       
        
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
        $estudiantes = Estudiante::findorfail($id);
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
        $id =  Crypt::decrypt($id);
        $estudiantes = Estudiante::findorfail($id);
        $planes = Plan::all();
        return view('estudiante.edit', compact('estudiantes','planes'));
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
        $this->validate($request,[
            'ru' => 'unique:estudiantes,ru,'.$id,
            'cedula' => 'unique:personas,cedula,'.$request->idpersona
           

        ]);
        //
        $estudiantes = Estudiante::find($id);
        $estudiantes->ru=$request->ru;
        $estudiantes->plan_id=$request->numplan; 
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
        return redirect()->route('estudiante.index')->with('mensaje', 'Datos actualizados exitosamente');
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
