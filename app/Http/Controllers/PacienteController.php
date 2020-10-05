<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function vistapaciente(){
        //return "texto de contacto desde el controlador ";
        return view('vistapaciente');
     } 

     public function nuevopaciente(){
        //return "texto de contacto desde el controlador ";
        return view('nuevopaciente');
     }


     public function DatosPaciente(){
      //return "texto de contacto desde el controlador ";
      return view('Datospersonales');
   }
}
