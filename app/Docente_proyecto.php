<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente_proyecto extends Model
{
    //

    public function docente(){

        return $this->belongsTo(docente::class);
    
        }
        public function proyecto(){

            return $this->belongsTo(Proyecto::class);
        
            }
}
