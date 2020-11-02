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
/* 
public function pacientes(){
    return $this->belongsToMany(Paciente::class);//pertenece a muchos pacientes

}
 */


   

}