<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    public function usuario(){

        return $this->belongsTo(Usuario::class,'usuarios_id');
    
        }
}
