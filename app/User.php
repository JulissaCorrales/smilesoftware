<?php

namespace App;
use App\Traits\HasRolesAndPermissions;
  

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable 

{
    use Notifiable , HasRolesAndPermissions;
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


   public function setPasswordAttribute($valor){
       if(!empty($valor)){
           $this->atributes['password']=\Hash::make($valor);
       }

   }


}
