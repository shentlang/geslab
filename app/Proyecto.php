<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //

    public function estudiantes()    {
        return $this->belongsToMany('app\Estudiante', 'estudiantes__proyectos');
     }
 
     
}
