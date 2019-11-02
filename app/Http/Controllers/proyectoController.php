<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Proyecto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materia;
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
        if (auth()->user()->role_id === 2) {
            $proyectos = Proyecto::paginate(10);
        } else {
             if (auth()->user()->role_id === 3||auth()->user()->role_id === 4||auth()->user()->role_id === 5||auth()->user()->role_id === 6||auth()->user()->role_id === 7||auth()->user()->role_id === 8||auth()->user()->role_id === 9) {
                $proyectos = Proyecto::where('user_id','=', auth()->user()->id)->get();
             } else {
                return redirect('/') ;
             }
        
        }
        
   

	   	return view('proyecto.index', compact('proyectos', 'estudiantes', 'selected_authors'));
      
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /* $personas = DB::table('personas')
            ->join('tutors', 'personas.id', '=', 'tutors.personas_id')
            ->select('personas.apellidop','personas.nombre','tutors.id')
            ->get();
            $tribunales = DB::table('personas')
            ->join('tribunals', 'personas.id', '=', 'tribunals.personas_id')
            ->select('personas.apellidop','personas.nombre','tribunals.id')
            ->get();*/
           
            if (auth()->user()->role_id === 2) {
                $estudiantes = Estudiante::get();
                $materia = Materia::get();
            } else {
                if (auth()->user()->role_id === 3) {
                    $estudiantes = Estudiante::where('user_id','=', auth()->user()->id)->get();
                    $materia = Materia::all()->where('nombremateria','=', "INF - 501");
                } else {
                    if (auth()->user()->role_id === 4) {
                        $estudiantes = Estudiante::where('user_id','=', auth()->user()->id)->get();
                        $materia = Materia::all()->where('nombremateria','=','ICT - 011');
                    } else {
                        if (auth()->user()->role_id === 5) {
                            $estudiantes = Estudiante::where('user_id','=', auth()->user()->id)->get();
                            $materia = Materia::all()->where('nombremateria','=','AUD - 610');
                        } else {
                            if (auth()->user()->role_id === 6) {
                                $estudiantes = Estudiante::where('user_id','=', auth()->user()->id)->get();
                                $materia = Materia::all()->where('nombremateria','=','AGR - 521');
                            } else {
                                if (auth()->user()->role_id === 7) {
                                    $estudiantes = Estudiante::where('user_id','=', auth()->user()->id)->get();
                                    $materia = Materia::all()->where('nombremateria','=','IRG - 001');
                                } else {
                                    if (auth()->user()->role_id === 8) {
                                        $estudiantes = Estudiante::where('user_id','=', auth()->user()->id)->get();
                                        $materia = Materia::all()->where('nombremateria','=','ISA 092');
                                    } else {
                                          if (auth()->user()->role_id === 9) {
                                            $estudiantes = Estudiante::where('user_id','=', auth()->user()->id)->get();
                                            $materia = Materia::all()->where('nombremateria','=','LAA - 100');
                                          } else {
                                            return redirect('/') ;
                                          }
                                          
                                    }
                                    
                                }
                                
                            }
                            
                        }
                        
                    }
                    
                }
                
                 
                   
               
                
            
            }
         
            

         //   dd($materia);

           /* */
          
           
            return view('proyecto.create', compact('estudiantes','materia'));

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
            'lugar' => $request->input('lugar'), 
            'fechadefensa' => $request->input('fechadefensa'), 
            'estado' => $request->input('estado'),
            'materia_id' => $request->input('materias'),
            'user_id' => auth()->user()->id
            
        ]);
        if($proyecto){
            $proyecto->estudiantes()->sync($request->input('estudiantes'));
        }
        return redirect()->route('proyecto.index');  
      //  return $request->all();
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
