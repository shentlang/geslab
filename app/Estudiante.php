<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    public function proyectos()    {
        return $this->belongsToMany('app\Proyecto', 'estudiantes__proyectos');
     }
}
