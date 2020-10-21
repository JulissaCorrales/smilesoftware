<?php

namespace App\Http\Controllers;
use App\Paciente;

use Illuminate\Http\Request;

class imagenesYarchivosController extends Controller
{
    public function ver($id){
        $pacientes = Paciente::findOrFail($id);
        return view('imagenesYarchivos',compact('pacientes'));
    }
}
