<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    public function paciente()
    {
       return $this->belongsTo(Paciente::class);
    }

    public function odontologo(){
        return $this->belongsTo(Odontologo::class);
    }
}
