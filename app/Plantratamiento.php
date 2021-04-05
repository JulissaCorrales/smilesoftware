<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantratamiento extends Model
{
  public function odontologo()
    {        return $this->belongsTo(Odontologo::class);//pertenece a un odontologo
    }
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);/* pertenece a un paciente*/
    } 

    public function cita()
    {
        return $this->belongsTo(Cita::class);/* pertenece a una cita*/
    }
    public function tratamiento(){ 
        return $this->belongsTo(Tratamiento::class); //Pertenece a un tratamiento.
    }


    public function evoluciones(){ 
        return $this->hasMany(Evoluciones::class,'plantratamiento_id'); //Pertenece a un tratamiento.
    }

    
    public function recaudaciones(){ 
        return $this->hasMany(Recaudacion::class, 'plantratamiento_id','id'); //Pertenece a un tratamiento.
    }




   

}
