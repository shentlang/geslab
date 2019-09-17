<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public function comentarios(){

        return $this->hasMany(Comentario::class,'usuarios_id');
    
        }
}
