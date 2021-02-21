<?php

namespace App\Policies;

use App\Paciente;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PacientePolicy
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
     * @param  \App\Paciente  $paciente
     * @return mixed
     */
    public function view(User $user)
    {
        if($user->permisos->contains('slug', 'Paciente.ver')) {
            return true;
        }elseif($user->permisos->contains('slug', 'ver.Paciente')) {
            return true;
        }elseif($user->permisos->contains('slug', 'Paciente.editar')) {
            return true;
        }elseif($user->permisos->contains('slug', 'Editar.Paciente')) {
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
        if($user->permisos->contains('slug', 'Paciente.crear')) {
            return true;
        } 
        return false;
    }

     
    public function edit(User $user,Paciente $paciente)
    {
        if($user->permisos->contains('slug', 'Paciente.editar')) {
            return true;
        }elseif($user->permisos->contains('slug', 'Editar.Paciente')) {
            return true;
        } 
        return false;
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Paciente  $paciente
     * @return mixed
     */
    public function update(User $user, Paciente $paciente)
    {
      if($user->permisos->contains('slug','Paciente.editar')){
            return true;
        }elseif($user->permisos->contains('slug', 'Editar.Paciente')) {
            return true;
        } 
        return false;

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Paciente  $paciente
     * @return mixed
     */
    public function delete(User $user, Paciente $paciente)
    {
        if($user->permisos->contains('slug','Paciente.borrar')){
            return true;
        }elseif($user->permisos->contains('slug','borrar.Paciente')){
            return true;
        }
        return false;
    }


    public function descargarPacientes(User $user)
    {
      if($user->permisos->contains('slug','Paciente.descargar')){
            return true;
        }elseif($user->permisos->contains('slug', 'descargar.Paciente')) {
            return true;
        } 
        return false;

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Paciente  $paciente
     * @return mixed
     */
    public function restore(User $user, Paciente $paciente)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Paciente  $paciente
     * @return mixed
     */
    public function forceDelete(User $user, Paciente $paciente)
    {
        //
    }
}
