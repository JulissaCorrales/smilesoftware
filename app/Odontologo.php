<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    public function especialidad()
    {
        return $this->hasMany(Especialidad::class ,'id_odontologo','id');/*Un odontologo tiene muchoas especialidadidades*/
    }
    protected $dates = ['fecha'];
    public function citas(){
        return $this->hasMany(Cita::class); //*un odontologo tiene muchas citas */
    }
}
