<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use Illuminate\Http\Request;

use App\Redirect;
 

//este es el controller de la clase email  
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

class ForgotPasswordController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    } 



    use SendsPasswordResetEmails;



    //esta funcion retorna la vista de email.blade.php
    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
 
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );
  
        
        
    }
}
