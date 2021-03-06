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
   //  public function cita()
   //  {
   //     return $this->belongsTo(Cita::class);/* pertenece a una cita */
   // }


/* Relacion de Planesde Tratamiento con paciente de muchos a muchos */
public function planestratamientos(){
    return $this->hasMany(PlanTratamiento::class,'paciente_id','id'); // un paciente tiene muchos planes de tratamiento
}

public function citas(){
    return $this->hasMany(Cita::class); //*un paciente tiene muchas citas */
}



public function evoluciones(){
   return $this->hasMany(Evoluciones::class,'paciente_id','id'); //*un paciente tiene muchas citas */
}

public function comentarios()
{
   return $this->hasMany(Comentario::class,'paciente_id','id');/*un paciente tiene muchos comentarios */
}
public function archivos()
{
   return $this->hasMany(Archivo::class,'paciente_id','id');/*un paciente tiene muchos archivos */
}
public function documentos()
{
   return $this->hasMany(Documento::class,'paciente_id','id');/*un paciente tiene muchos documentos */
}

public function recaudaciones()
{
   return $this->hasMany(Recaudacion::class,'paciente_id','id');/*un paciente tiene muchos recaudaciones */
}


public function alertas()
{
   return $this->hasMany(Alerta::class,'paciente_id','id');/*un paciente tiene muchas alertas */
}
}
