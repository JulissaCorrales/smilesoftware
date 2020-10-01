<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    public function odontologo()
    {
        return $this->belongsTo(Odontologo::class);/* pertenece a un odontologo */
    }
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);/* pertenece a una especialidad */
    }
}
