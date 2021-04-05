<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recaudacion extends Model
{
    public function paciente()
    {
       return $this->belongsTo(Paciente::class,'paciente_id','id');
    }

    public function plantratamiento()
    {
       return $this->belongsTo(Plantratamiento::class,'plantratamiento_id','id');
    }
}
