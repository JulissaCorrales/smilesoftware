<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EspecialidadOdontologos;
use App\Odontologo;
use App\Especialidad;

class EspecialidadOdontologosController extends Controller
{
    public function especialidadOdontologo(){
      
        return view('NuevaEspecialidadOdontologo');
     }

     public function EspecialidadesOdontologo($id){
        $especialidad_odontologos=EspecialidadOdontologos::all();
        $odontologos= Odontologo::findorfail($id);
       return view('EspecialidadOdontologo')->with ('especialidad_odontologos',$especialidad_odontologos)->with('odontologos',$odontologos);
       }


    /* public function EspecialidadesOdontologo($id){
        $especialidad_odontologos= EspecialidadOdontologos::find($id)->odontologos;
        
        return view('EspecialidadOdontologo',compact('especialidad_odontologos'))->with ('especialidad_odontologos',
        $especialidad_odontologos);;
     }  */

    /* public function EspecialidadesOdontologo($id){
        $odontologos= EspecialidadOdontologos::findOrFail($id);
        $especialidad_odontologos= EspecialidadOdontologos::all();
        $especialidads=Especialidad::all ();
        return view('EspecialidadOdontologo',compact('odontologos'))->with ('especialidad_odontologos',$especialidad_odontologos)
        ->with('especialidads',$especialidads);
     } */

     /*
     public function EspecialidadesOdontologo($id){
         $odontologos=EspecialidadOdontologos::findOrFail($id);
         $especialidad_odontologos= EspecialidadOdontologos::all();

        return view('EspecialidadOdontologo',compact('especialidad_odontologos','especialidads','odontologos'));
      
     }  */




    public function GuardarNuevo(Request $request){
        

        $nuevo = new EspecialidadOdontologos();
        //formulario
        
        $nuevo->odontologo_id = $request->input('odontologo_id');
        $nuevo->especialidad_id = $request->input('especialidad_id');
        
       $creado = $nuevo->save();

         if ($creado){
            return redirect('/pantallainicio/especialidad')->with('mensaje', 'La especialidad fue agregada con exito!');
        }else{
            //retornar con un msj de error
        } 
    }
}
