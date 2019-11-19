<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Estudiante_proyecto;
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
    function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->role->nombrerol === "admin") {
            $estudiantes = Estudiante::get();
        } else {
            if (auth()->user()->role->nombrerol === "informatica" || auth()->user()->role->nombrerol === "comercial" || auth()->user()->role->nombrerol === "contaduria" || auth()->user()->role->nombrerol === "agronomia" || auth()->user()->role->nombrerol === "rec.hidricos" || auth()->user()->role->nombrerol === "ambiental" || auth()->user()->role->nombrerol === "ges.publica") {
                $estudiantes = Estudiante::where('user_id', '=', auth()->user()->id)->get();
            } else {
                return redirect('/');
            }
        }


        return view('estudiante.index', compact('estudiantes'));

        /* $users = Estudiante::join("personas","estudiantes.persona_id","=","personas.id")
           ->where('estudiantes.carrera','=','INGENIERIA INFORMATICA')
           ->get();
           dd($users);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (auth()->user()->role->nombrerol === "informatica" || auth()->user()->role->nombrerol === "comercial" || auth()->user()->role->nombrerol === "contaduria" || auth()->user()->role->nombrerol === "agronomia" || auth()->user()->role->nombrerol === "rec.hidricos" || auth()->user()->role->nombrerol === "ambiental" || auth()->user()->role->nombrerol === "ges.publica" || auth()->user()->role->nombrerol === "admin") {
            $plan = Plan::all();
        } else {
            return redirect('/');
        }

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
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellidop = $request->apellidop;
        $persona->apellidom = $request->apellidom;
        $persona->genero = $request->genero;
        $persona->cedula = $request->cedula;
        $persona->email = $request->email;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;
        $persona->save();


        $estu = new Estudiante();
        $estu->ru = $request->ru;
        $estu->carrera = $request->carrera;
        $estu->user_id = auth()->user()->id;
        $estu->plan_id = $request->numplan;
        $estu->persona_id = persona::get()->max('id');
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
        return view('estudiante.edit', compact('estudiantes', 'planes'));
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
        $this->validate($request, [
            'ru' => 'required||unique:estudiantes,ru,' . $id,
            'cedula' => 'required||unique:personas,cedula,' . $request->idpersona,
            'email'=>'required|email',
            'nombre'=>'required',
            'apellidop'=>'required',
            'telefono'=>'required',
            

        ]);
        //
        $estudiantes = Estudiante::find($id);
        $estudiantes->ru = $request->ru;
        $estudiantes->plan_id = $request->numplan;
        $estudiantes->carrera = $request->carrera;
        $estudiantes->save();
        //$prueba = $request->nombre;
        $persona = Persona::find($estudiantes->persona->id);

        $persona->nombre = $request->nombre;
        $persona->apellidop = $request->apellidop;
        $persona->apellidom = $request->apellidom;
        $persona->genero = $request->genero;
        $persona->cedula = $request->cedula;
        $persona->email = $request->email;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;
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
