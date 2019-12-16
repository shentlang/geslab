<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    //
    public function proyectos()
    {
  
      return $this->hasMany(Proyecto::class);
    }
}
