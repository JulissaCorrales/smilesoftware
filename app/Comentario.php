<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function paciente(){
        return $this->belongsToMany(Paciente::class); // Muchos a muchos
    }
}
