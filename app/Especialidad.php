<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model


{


    public function  odontologo(){
        return $this->belongsTo(Odontologo::class);
    }

    public function  odontologosEspecialidades(){
        return $this->hasMany(EspecialidadOdontologos::class,'especialidad_id','id');
    }




    public function citas(){
        return $this->hasMany(Cita::class); //*una especialidad tiene muchas citas */
    }


public function odontologos(){
        return $this->belongsToMany(Odontologo::class,'especialidad_odontologo');
    }

}
