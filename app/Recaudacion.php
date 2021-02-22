<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recaudacion extends Model
{
    public function paciente()
    {
       return $this->belongsTo(Paciente::class);
    }

    public function plantratamiento()
    {
       return $this->belongsTo(Plantratamiento::class);
    }
}
