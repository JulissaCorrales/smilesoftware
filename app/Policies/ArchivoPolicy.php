<?php

namespace App\Policies;

use App\Archivo;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArchivoPolicy
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
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function view(User $user, Archivo $archivo)
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
        if($user->permisos->contains('slug', 'Imagen.Paciente')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function update(User $user, Archivo $archivo)
    {
        if($user->permisos->contains('slug', 'Imagen.editar')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function delete(User $user, Archivo $archivo)
    {
        if($user->permisos->contains('slug', 'Imagen.eliminar')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function restore(User $user, Archivo $archivo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function forceDelete(User $user, Archivo $archivo)
    {
        //
    }
}
