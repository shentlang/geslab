<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = "personas";
    public function Estudiantes(){

return $this->hasMany(Estudiante::class);

    }
}
