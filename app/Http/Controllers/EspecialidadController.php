<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use App\Odontologo;


class EspecialidadController extends Controller
{
    public function vistaespecialidad(){
        $odontologos= Odontologo::All();
        $especialidads=Especialidad::All();
        return view('Especialidades')->with ('especialidads',$especialidads)->with('odontologos',$odontologos);
     } 



     public function VistaEspecial($id){
        $odontologos= Odontologo::find($id)->especialidades;
        $especialidads=Especialidad::all();
        return view('Especialidades',compact('odontologos'))->with ('especialidads',$especialidads);
     } 

     public function nuevaespecialidad(){
        //return "texto de contacto desde el controlador ";
        return view('nuevaEspecialidad');
     }

     public function GuardarNuevo(Request $request){
        

        $nuevo = new Especialidad();
        //formulario
        
        $nuevo->Especialidad = $request->input('nombres');
        
        

       $creado = $nuevo->save();

         if ($creado){
            return redirect('/pantallainicio/especialidad')->with('mensaje', 'La especialidad fue agregada con exito!');
        }else{
            //retornar con un msj de error
        } 
    }


    public function destroy($id){
        Especialidad::destroy($id);
        return redirect()->back()->with('mensaje','Especialidad borrada satisfactoriamente');


       
    }



}
