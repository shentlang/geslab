<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //

    public function persona(){

        return $this->belongsTo(Persona::class);
    
        }

        public function proyectos(){

            return $this->belongsToMany(Proyecto::class,'docente_proyectos');
        
            }
    
            public function docente_proyectos(){
    
                return $this->hasMany(Docente_proyecto::class);
                
                    }


}
