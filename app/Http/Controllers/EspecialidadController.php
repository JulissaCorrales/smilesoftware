<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use App\Odontologo;


class EspecialidadController extends Controller
{
    public function vistaespecialidad(){
        $especialidads=Especialidad::All();
        return view('Especialidades')->with ('especialidads',$especialidads);
     } 
     public function nuevaespecialidad(){
        //return "texto de contacto desde el controlador ";
        return view('nuevaEspecialidad');
     }

     public function GuardarNuevo(Request $request){
        

        $nuevo = new Especialidad();
        //formulario
        $nuevo->odontologo_id = $request->input('odontologo_id');
        $nuevo->Especialidad = $request->input('nombres');
        
        

       $creado = $nuevo->save();

         if ($creado){
            return redirect('/pantallainicio/especialidad')->with('mensaje', 'La especialidad fue agregada con exito!');
        }else{
            //retornar con un msj de error
        } 
    }



}
