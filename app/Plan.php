<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    public function estudiantes(){

        return $this->hasMany(Estudiante::class);
        
            }


}
