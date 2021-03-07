<?php

namespace App;
use App\Traits\HasRolesAndPermissions;

use App\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticable as AuthenticatableContract;

class User extends Authenticatable 

{
    use Notifiable , HasRolesAndPermissions,CanResetPassword;
    //use HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','usuario','rol_id'
    ];
    // protected $guarder=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
    /* relacion de 1 a 1 con odontologo */
    public function odontologo()
    {
        return $this->hasOne('App\Odontologo');/* un usuario pertenece a un odontologo */
    }



}
