<?php

namespace App\Traits;

use App\Role;
use App\Permiso;
trait HasRolesAndPermissions
{

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function isAdmin()
    {
        if($this->roles->contains('slug', 'admin')){
            return true;
        }
    }
    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }

    /**
     * @return mixed
     */
    public function permisos()
    {
        return $this->belongsToMany(Permiso::class,'permiso_user');
    }

    /**
     * Check if the user has Role
     *
     * @param [type] $role
     * @return boolean
     */
    public function hasRole($role)
    {        
        if($this->roles->contains('slug', $role)){

            return true;
        }

        return false;
    }
}