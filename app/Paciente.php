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


    
}
