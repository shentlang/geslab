<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "estudiantes";
    protected $guarded = ['id'] ;
    //
    public function persona(){

    return $this->belongsTo(Persona::class);

    }

    
}
