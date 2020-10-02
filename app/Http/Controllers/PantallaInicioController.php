<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PantallaInicioController extends Controller
{
    public function PantallaInicio()
    {
        $pacientes=Paciente::All();
        return view('PantallaInicio')->with('pacientes',$pacientes);
}

}