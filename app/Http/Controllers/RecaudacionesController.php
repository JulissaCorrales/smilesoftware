<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recaudacion;
use App\Paciente;
use App\Plantratamiento;
use Illuminate\Support\Facades\DB;

class RecaudacionesController extends Controller
{
    public function VistaRecaudaciones(){
       
        return view('vistaPrincipalRecaudaciones');
    }

    public function VistaRecaudacionesD($id){
        $this->authorize('view', Recaudacion::class);
        $pacientes = Paciente::findOrFail($id);
        $totalpagar= $pacientes->recaudaciones->sum('totalpagar'); 
        return view('vistaPrincipalRecaudaciones',compact('pacientes','totalpagar'));
    }
}