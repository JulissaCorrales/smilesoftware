<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Logotipo;   
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {                
      //Codigo para pasar el logo a todas las vistas   
     $logotipos=Logotipo::where('id','=',1)->get();
       View::share('logotipos',$logotipos);
       ///Codigo para proteger todas las rutas
       //$this->middleware('auth');
    }
}
