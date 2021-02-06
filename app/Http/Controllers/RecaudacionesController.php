<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recaudacion;
use App\Paciente;

class RecaudacionesController extends Controller
{
    public function VistaRecaudaciones(){
       
        return view('vistaPrincipalRecaudaciones');
    }

    public function VistaRecaudacionesD($id){
        
        $pacientes = Paciente::findOrFail($id);
        return view('vistaPrincipalRecaudaciones',compact('pacientes'));
    }
}