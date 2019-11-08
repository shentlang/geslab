<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class MostrarController extends Controller
{
    //

    public function mostrar($id){


        $proyecto = Proyecto::findorfail($id);
        return view('muestra.show',compact('proyecto'));
    }
}
