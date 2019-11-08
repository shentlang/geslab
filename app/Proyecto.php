<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{

  protected $table = "proyectos";
  protected $guarded = ['id'];
  //
  public function estudiantes()
  {

    return $this->belongsToMany(Estudiante::class, 'estudiante_proyectos');
  }
  public function docentes()
  {

    return $this->belongsToMany(Docente::class, 'docente_proyectos');
  }
  public function estudiante_proyectos()
  {

    return $this->hasMany(Estudiante_proyecto::class);
  }
  public function docente_proyectos()
  {

    return $this->hasMany(Docente_proyecto::class);
  }
  public function informes()
  {

    return $this->hasMany(Informe::class);
  }

  public function materia()
  {

    return $this->belongsTo(Materia::class);
  }
}
