<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permisos(){
        return $this->belongsToMany(Permiso::class,'permiso_role');
    }
}
