<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);/* pertenece a una especialidad */
    }
    protected $dates = ['fecha'];
}
