<?php

namespace App\Http\Controllers;

use App\Estudiante_proyecto;
use App\Proyecto;
use Illuminate\Http\Request;

class NotasController extends Controller
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
        //
        if (auth()->user()->role->nombrerol === "admin") {
            $proyectos = Proyecto::all();
        } else {
            if (auth()->user()->role->nombrerol === "informatica" || auth()->user()->role->nombrerol === "comercial" || auth()->user()->role->nombrerol === "contaduria" || auth()->user()->role->nombrerol === "agronomia" || auth()->user()->role->nombrerol === "rec.hidricos" || auth()->user()->role->nombrerol === "ambiental" || auth()->user()->role->nombrerol === "ges.publica") {
                $proyectos = Proyecto::where('user_id', '=', auth()->user()->id)->get();
            } else {
                return redirect('/');
            }
        }


        return view('notas.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        if (auth()->user()->role->nombrerol === "admin" ||auth()->user()->role->nombrerol === "informatica" || auth()->user()->role->nombrerol === "comercial" || auth()->user()->role->nombrerol === "contaduria" || auth()->user()->role->nombrerol === "agronomia" || auth()->user()->role->nombrerol === "rec.hidricos" || auth()->user()->role->nombrerol === "ambiental" || auth()->user()->role->nombrerol === "ges.publica") {
            $notas = Estudiante_proyecto::find($id);
        } else {
            return redirect('/');
        }



        return view('notas.edit', compact('notas'));
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
        $notas = Estudiante_proyecto::find($id);
        $notas->nota = $request->punto;
        $notas->save();
        return redirect()->route('notas.index');
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
