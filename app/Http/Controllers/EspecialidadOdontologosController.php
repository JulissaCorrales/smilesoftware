<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EspecialidadOdontologos;
use App\Odontologo;
use App\Especialidad;
use Illuminate\Support\Facades\Gate;

class EspecialidadOdontologosController extends Controller
{
    public function especialidadOdontologo(){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
      
        return view('NuevaEspecialidadOdontologo');
        }else{
            abort(404);
        }
     }

     

     public function EspecialidadesOdontologo($id){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
        $especialidad_odontologos=EspecialidadOdontologos::all();
        $odontologos= Odontologo::findorfail($id);
       return view('EspecialidadOdontologo')->with ('especialidad_odontologos',$especialidad_odontologos)->with('odontologos',$odontologos);
        
      }else{
          abort(404);
      }
    }




    public function GuardarNuevo(Request $request){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
        

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
    }else{
        abort(404);
    }
}
}
