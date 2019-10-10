<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
   
    //
    public function persona(){

    return $this->belongsTo(Persona::class);

    }
    public function proyectos(){

        return $this->belongsToMany(Proyecto::class,'estudiante_proyectos');
    
        }

        public function estudiante_proyectos(){

            return $this->hasMany(Estudiante_proyecto::class);
            
                }


    

    
}
