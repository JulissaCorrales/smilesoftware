<?php

namespace App\Policies;

use App\Producto;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductoPolicy
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
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function view(User $user, Producto $producto)
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
        if($user->permisos->contains('slug', 'agregar.Producto')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function update(User $user, Producto $producto)
    {
        if($user->permisos->contains('slug', 'editar.Producto')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function delete(User $user, Producto $producto)
    {
        if($user->permisos->contains('slug', 'eliminar.Producto')) {
            return true;
        }
        return false;   
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function restore(User $user, Producto $producto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function forceDelete(User $user, Producto $producto)
    {
        //
    }
}
