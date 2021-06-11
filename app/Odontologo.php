<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    public function especialidad()
    {
        
        return $this->belongsTo(Especialidad::class,'especialidad_id','id');/*Un odontologo tiene muchoas especialidadidades*/
    }



    public function especialidadOdontologos()
    {
        
        return $this->hasMany(EspecialidadOdontologos::class ,'odontologo_id','id');/*Un odontologo tiene muchoas especialidadidades*/
    
    }


    public function horarios(){
        return $this->belongsToMany(horarios::class,'odontologo_id','id');
    }

    public function especialidades()
    {
        
        return $this->belongsToMany(Especialidad::class,'especialidad_odontologo');/*Un odontologo tiene muchoas especialidadidades*/
    }
    

    protected $dates = ['fecha'];
    public function citas(){
        return $this->hasMany(Cita::class); //*un odontologo tiene muchas citas */
    }

    public function user()
    {
        return $this->belongsTo('App\User');/* un odontologo tiene un usuario */
    }
}
