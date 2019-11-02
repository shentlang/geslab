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
    public function index()
    {
        //
        if (auth()->user()->role_id === 2) {
            $proyectos = Proyecto::all();
        } else {
             if (auth()->user()->role_id === 3||auth()->user()->role_id === 4||auth()->user()->role_id === 5||auth()->user()->role_id === 6||auth()->user()->role_id === 7||auth()->user()->role_id === 8||auth()->user()->role_id === 9) {
                $proyectos = Proyecto::where('user_id','=', auth()->user()->id)->get();
             } else {
                return redirect('/') ;
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
        $notas = Estudiante_proyecto::find($id);
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
        $notas->nota=$request->punto;
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
