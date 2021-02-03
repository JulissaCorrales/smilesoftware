<?php

namespace App\Policies;

use App\Inventario;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InventarioPolicy
{
    use HandlesAuthorization;

    
    /**
     * Undocumented function
     *
     * @param [type] $user
     * @param [type] $ability
     * @return void
     */
    public function before($user, $ability)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Inventario  $inventario
     * @return mixed
     */
    public function view(User $user)
    {
        if($user->permisos->contains('slug', 'inventario.ver')) {
            return true;
        }elseif($user->permisos->contains('slug', 'ver.inventario')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->permisos->contains('slug', 'inventario.agregar')) {
            return true;
        } 
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Inventario  $inventario
     * @return mixed
     */
    public function update(User $user, Inventario $inventario)
    {
        if($user->permisos->contains('slug', 'inventario.editar')) {
            return true;
        } 
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Inventario  $inventario
     * @return mixed
     */
    public function delete(User $user, Inventario $inventario)
    {
        if($user->permisos->contains('slug', 'inventario.borrar')) {
            return true;
        } 
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Inventario  $inventario
     * @return mixed
     */
    public function restore(User $user, Inventario $inventario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Inventario  $inventario
     * @return mixed
     */
    public function forceDelete(User $user, Inventario $inventario)
    {
        //
    }
}
