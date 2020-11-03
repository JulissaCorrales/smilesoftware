<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    public function especialidad()
    {
        return $this->hasMany(Especialidad::class ,'id_odontologo','id');/*Un odontologo tiene muchos odontologos*/
    }
    protected $dates = ['fecha'];
}
