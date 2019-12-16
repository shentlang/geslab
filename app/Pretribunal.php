<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pretribunal extends Model
{
    //

    public function persona(){

        return $this->belongsTo(Persona::class);
    
        }

        public function proyectos(){
    
            return $this->hasMany(Proyecto::class);
            
                }
}
