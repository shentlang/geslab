<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlanesController extends Controller
{
    //
    public function index(){

    $plane =Plan::get();

    return view('miselaneos.plan', compact('plane'));
    }
    public function create(){


        return view('miselaneos.plancreate');
        
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'numplan'=>'required',
            
            

        ]);
       // return $request->all();
       $plan = new plan();
        $plan->numplan = $request->numplan;
        $plan->save();
        return redirect()->route('plan.index')->with('mensaje', 'plan de estudio registrado exitosamente');

    }
}
