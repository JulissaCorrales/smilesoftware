<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    public function paciente()
    {
       return $this->belongsTo(Paciente::class);
    }

    public function odontologo(){
        return $this->belongsTo(Odontologo::class);
    }
}


