<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evoluciones extends Model
{
    
    public function paciente()
    {
        
        return $this->belongsTo(Paciente::class,'paciente_id','id');/*Un odontologo tiene muchoas especialidadidades*/
    }


    public function planestratamiento()
    {
        
        return $this->belongsTo(Plantratamiento::class,'plantratamiento_id','id');/*Un odontologo tiene muchoas especialidadidades*/
    }


    public function tratamiento()
    {
        
        return $this->belongsTo(Tratamiento::class);/*Un odontologo tiene muchoas especialidadidades*/
    }














}
