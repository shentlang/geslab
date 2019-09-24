<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    
    protected $table="proyectos";
    protected $guarded = ['id'] ;
    //
  public function estudiantes(){

    return $this->belongsToMany(Estudiante::class,'estudiante_proyectos');
    
  }
  
     
}
