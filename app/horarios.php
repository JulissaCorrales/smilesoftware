<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horarios extends Model
{
    
    public function dias(){
        return $this->belongsToMany(Dias::class,'dias_horarios');
    }

    public function odontologo()
    {
        
        return $this->belongsTo(Odontologo::class,'odontologo_id','id');/*Un odontologo tiene muchoas especialidadidades*/
    }

}
