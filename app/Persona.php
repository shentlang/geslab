<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = "personas";

    public function estudiantes(){

return $this->hasMany(Estudiante::class);

    }
    public function docentes(){

        return $this->hasMany(Docente::class);
        
            }

   
}
