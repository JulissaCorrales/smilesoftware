<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function tratamiento()
    {
       return $this->belongsTo(Tratamiento::class);//pertenece a un tratamiento
    }
}
