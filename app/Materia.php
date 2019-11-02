<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //

    public function proyectos()
  {

    return $this->hasMany(Proyecto::class);
  }
}
