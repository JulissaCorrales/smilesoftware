<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;

class PantallaInicioController extends Controller
{
    public function PantallaInicio()
    {
        $citas=Cita::Paginate(10);
        return view('PantallaInicio')->with('citas',$citas);
}







}