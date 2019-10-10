<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Estudiante;
use App\Estudiante_proyecto;
use App\Usuario;
use DB;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $comentarios =Comentario::find(1);
     // $comentarios->usuario;
     // return view('prueba.index',['prueba'=>$comentarios]);
     
     //$comentarios = Comentario::get();
     //return view('prueba.index',['prueba'=>$comentarios]);
       
     /*$comentarios = Comentario::orderBy('id', 'DESC')->paginate(5);
        $comentarios->each(function($comentarios){
            $comentarios->usuario;
            
        });
        dd($comentarios);*/
        //return view('prueba.index')->with([
          //  'comentarios' => $comentarios]);

          $notas = Estudiante_proyecto::all();

          // dd($notas);
       //   $notas->estudiante()->where('id', 2);
          dd($notas);
         // return view('prueba.index', compact('notas'));

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
        $notas->puntos=$request->punto;
        $notas->save();
        return redirect()->route('prueba.index');
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
