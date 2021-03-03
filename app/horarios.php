<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horarios extends Model
{
    
    public function dias(){
        return $this->belongsToMany(Dias::class,'dias_horarios');
    }

}
