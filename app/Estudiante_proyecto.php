<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante_proyecto extends Model
{
    //
    public function estudiante(){

        return $this->belongsTo('App\Estudiante');
    
        }
        public function proyecto(){

            return $this->belongsTo(Proyecto::class);
        
            }
    


}
