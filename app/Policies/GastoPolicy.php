<?php

namespace App\Policies;

use App\Gasto;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GastoPolicy
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
     * @param  \App\Gasto  $gasto
     * @return mixed
     */
    public function view(User $user)
    {
        if($user->permisos->contains('slug', 'Gastos.ver')) {
            return true;
        }elseif($user->permisos->contains('slug', 'Gastos.Agregar')) {
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
        if($user->permisos->contains('slug', 'Gastos.Agregar')) {
            return true;
        } 
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Gasto  $gasto
     * @return mixed
     */
    public function update(User $user, Gasto $gasto)
    {
        if($user->permisos->contains('slug', 'Gastos.Editar')) {
            return true;
        } 
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Gasto  $gasto
     * @return mixed
     */
    public function delete(User $user, Gasto $gasto)
    {
        if($user->permisos->contains('slug','Gastos.Borrar')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Gasto  $gasto
     * @return mixed
     */
    public function restore(User $user, Gasto $gasto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Gasto  $gasto
     * @return mixed
     */
    public function forceDelete(User $user, Gasto $gasto)
    {
        //
    }
}
