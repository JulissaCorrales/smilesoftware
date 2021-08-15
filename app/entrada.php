<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entrada extends Model
{
     public function inventario()
    {
        return $this->belongsTo('App\Inventario');/* un inventario tiene un usuario */
    }
  
       public function inventarios()
    {
        
        return $this->belongsToMany(entrada::class,'entradas_inventario');/*Un inventario  tiene muchoas entradas */
    }


}
