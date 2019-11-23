<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class EliminarController extends Controller
{
    //

    public function destroy($delete,$delete2)
    {
        $user = Proyecto::find($delete);
        $user->docentes()->detach($delete2);
        return back();
        
        
        
    
       
    }

}
