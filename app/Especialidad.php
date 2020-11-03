<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    public function  odontologo(){
        return $this->belongsTo(Odontologo::class);
    }
}
