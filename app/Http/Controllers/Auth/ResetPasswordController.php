<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Redirect;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;


    public function __construct( )
    {

        
        $this->middleware('guest');
    } 

    


    public function reset(Request $request)
    {
        
    }
     
    protected $redirec='login';

    protected function resetPassword($user, $password)
    {
        $user->forceFill([
            'password' => $password,
            'remember_token' => str_random(60),
        ])->save();
 
        // GENERAR TOKEN PARA SATELLIZER AQUI ??
        // $this->guard()->login($user);
    }

    
    //protected $redirectTo = RouteServiceProvider::HOME;
}
