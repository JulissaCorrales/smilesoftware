<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    /* un comentario solo pertenece a un paciente */

    public function paciente()
{
   return $this->belongsTo(Paciente::class);
}
}
