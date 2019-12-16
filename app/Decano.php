<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decano extends Model
{
    //
    public function proyectos(){
    
        return $this->hasMany(Proyecto::class);
        
            }
            public function persona(){

                return $this->belongsTo(Persona::class);
            
                }
}
