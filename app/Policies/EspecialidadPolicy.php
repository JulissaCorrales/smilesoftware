<?php

namespace App\Policies;

use App\Especialidad;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EspecialidadPolicy
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
     * @param  \App\Especialidad  $especialidad
     * @return mixed
     */
    public function view(User $user, Especialidad $especialidad)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->permisos->contains('slug', 'especialidad.agregar')) {
            return true;
        } 
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Especialidad  $especialidad
     * @return mixed
     */
    public function update(User $user, Especialidad $especialidad)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Especialidad  $especialidad
     * @return mixed
     */
    public function delete(User $user, Especialidad $especialidad)
    {
        if($user->permisos->contains('slug', 'especialidad.eliminar')) {
            return true;
        } 
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Especialidad  $especialidad
     * @return mixed
     */
    public function restore(User $user, Especialidad $especialidad)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Especialidad  $especialidad
     * @return mixed
     */
    public function forceDelete(User $user, Especialidad $especialidad)
    {
        //
    }
}
