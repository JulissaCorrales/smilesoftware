<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspecialidadOdontologos extends Model
{
    public function  especialidades(){
        return $this->hasMany(Especialidad::class);
    }


    public function  odontologos(){
        return $this->hasMany(Odontologo::class);
    }


    public function especialidad()
    {
        
        return $this->belongsTo(Especialidad::class ,'especialidad_id','id');/*Un odontologo tiene muchoas especialidadidades*/
    }


    public function  odontologo(){
        return $this->belongsTo(Odontologo::class,'odontologo_id','id');
    }



}
