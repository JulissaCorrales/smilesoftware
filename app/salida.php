<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salida extends Model
{
     public function inventario()
    {
        return $this->belongsTo('App\Inventario');/* una salida  tiene un un inventario  */
    }


     public function inventarios()
    {
        
        return $this->belongsToMany(salida::class,'inventario_salidas');/*Un inventario  tiene muchoas salidas */
    }

}
