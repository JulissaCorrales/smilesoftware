<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    public function productos()
{
   return $this->hasMany(Producto::class,'tratamiento_id','id');/*un tratamiento tiene muchos productos */
}
public function plantratamientos()
{
   return $this->hasMany(Plantratamiento::class,'tratamiento_id','id');/*un tratamiento tiene muchos planes de tratamientos */
}


}
