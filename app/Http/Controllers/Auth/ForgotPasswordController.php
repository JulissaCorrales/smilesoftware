<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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



    

}
