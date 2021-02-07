<?php

namespace App\Policies;

use App\Cita;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CitaPolicy
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
     * @param  \App\Cita  $cita
     * @return mixed
     */
    public function view(User $user)
    {
        if($user->permisos->contains('slug', 'citas.ver')) {
            return true;
        }
        return false;
    }
    public function view2(User $user)
    {
        if($user->permisos->contains('slug', 'citas.diaria')) {
            return true;
        }
        elseif($user->permisos->contains('slug', 'agenda.diaria')) {
            return true;
        }
        return false;
    }
    public function view3(User $user)
    {
        if($user->permisos->contains('slug', 'citas.semanales')) {
            return true;
        }
        elseif($user->permisos->contains('slug', 'agenda.semanal')) {
            return true;
        }
        return false;
    }

    public function viewIndividual(User $user)
    {
        if($user->permisos->contains('slug', 'cita.individual')) {
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
        if($user->permisos->contains('slug', 'Agendar.citas')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Cita  $cita
     * @return mixed
     */
    public function update(User $user, Cita $cita)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Cita  $cita
     * @return mixed
     */
    public function delete(User $user, Cita $cita)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Cita  $cita
     * @return mixed
     */
    public function restore(User $user, Cita $cita)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Cita  $cita
     * @return mixed
     */
    public function forceDelete(User $user, Cita $cita)
    {
        //
    }
}
