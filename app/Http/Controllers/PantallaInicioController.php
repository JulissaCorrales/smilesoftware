<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;

class PantallaInicioController extends Controller
{
    public function PantallaInicio()
    {
        $this->authorize('view', Cita::class);//si tiene el permiso de ver:
        $citas=Cita::Paginate(3);
        return view('PantallaInicio')->with('citas',$citas);
}







}