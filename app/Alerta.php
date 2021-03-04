<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    /* una alerta solo pertenece a un paciente */

    public function paciente()
{
   return $this->belongsTo(Paciente::class);
}
}
