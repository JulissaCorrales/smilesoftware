<?php

namespace App\Policies;

use App\Plantratamiento;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlanTratamientoPolicy
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
     * @param  \App\Plantratamiento  $plantratamiento
     * @return mixed
     */
    public function view(User $user)
    {
        if($user->permisos->contains('slug', 'ver.plandetratamiento')) {
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
        if($user->permisos->contains('slug', 'crear.plandetratamiento')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Plantratamiento  $plantratamiento
     * @return mixed
     */
    public function update(User $user, Plantratamiento $plantratamiento)
    {
        if($user->permisos->contains('slug', 'editar.plandetratamiento')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Plantratamiento  $plantratamiento
     * @return mixed
     */
    public function delete(User $user, Plantratamiento $plantratamiento)
    {
        if($user->permisos->contains('slug', 'borrar.plandetratamiento')) {
            return true;
        }
        return false;
    }


    public function descargarfacturaplantratamiento(User $user)
    {
        if($user->permisos->contains('slug', 'descargar.facturaplan')) {
            return true;
        }
        return false;
    }


    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Plantratamiento  $plantratamiento
     * @return mixed
     */
    public function restore(User $user, Plantratamiento $plantratamiento)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Plantratamiento  $plantratamiento
     * @return mixed
     */
    public function forceDelete(User $user, Plantratamiento $plantratamiento)
    {
        //
    }
}
