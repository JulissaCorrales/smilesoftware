<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dias extends Model
{
    
    public function horarios(){
        return $this->belongsToMany(horarios::class,'dias_horarios');
    }

}
