<?php

namespace App\Policies;

use App\Alerta;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlertaPolicy
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
     * @param  \App\Alerta  $alerta
     * @return mixed
     */
    public function view(User $user, Alerta $alerta)
    {

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->permisos->contains('slug', 'crear.alerta')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Alerta  $alerta
     * @return mixed
     */
    public function update(User $user, Alerta $alerta)
    {
        if($user->permisos->contains('slug', 'editar.alerta')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Alerta  $alerta
     * @return mixed
     */
    public function delete(User $user, Alerta $alerta)
    {
        if($user->permisos->contains('slug', 'eliminar.alerta')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Alerta  $alerta
     * @return mixed
     */
    public function restore(User $user, Alerta $alerta)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Alerta  $alerta
     * @return mixed
     */
    public function forceDelete(User $user, Alerta $alerta)
    {
        //
    }
}
