<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Inventario extends Model
{



     /*public function entradas()
    {
        
        return $this->belongsToMany(entrada::class,'entrada_inventario');Un inventario  tiene muchoas entradas 
    }
 */


     /*  public function salidas()
    {
        
        return $this->belongsToMany(salida::class,'inventario_salida');/*Un inventario  tiene muchoas salidas 
   } */

     public function entradas(){
        return $this->hasMany(entrada::class,'inventario_id','id'); //*un odontologo tiene muchas citas */
    }

    
public function salidas(){
        return $this->hasMany(salida::class,'inventario_id','id'); //*un odontologo tiene muchas citas */
    }
   




}
