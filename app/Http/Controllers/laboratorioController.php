<?php

namespace App\Http\Controllers;

use App\Laboratorio;
use Illuminate\Http\Request;

class laboratorioController extends Controller
{
    public function VistaLaboratorio(){
        
        //$laboratorios=Laboratorio::All();
        return view('VistaLaboratorio')/*->with ('laboratorios',$laboratorios)*/;
    }
}
