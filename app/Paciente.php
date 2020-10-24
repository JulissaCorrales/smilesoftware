<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{


    //protected $table= "pacientes";

    //protected $primaryKey = 'id';

   // protected $fiable=['nombres'];
    

   // public function scopeNombres($query , $nombres){

       // if($nombres){
       //     return $query->where('nombres','like',"%nombres%")->paginate(5);
       // }
        
    //}
    public function cita()
    {
       return $this->belongsTo(Cita::class);/* pertenece a una cita */
   }


/* Relacion de Planesde Tratamiento con paciente de muchos a muchos */
public function planestratamientos(){
    return $this->hasMany(PlanTratamiento::class,'paciente_id','id'); // un paciente tiene muchos planes de tratamiento
}

public function citas(){
    return $this->belongsToMany(Cita::class); // Muchos a muchos
}
public function comentarios()
{
   return $this->hasMany(Comentario::class,'paciente_id','id');/*un paciente tiene muchos comentarios */
}

}
