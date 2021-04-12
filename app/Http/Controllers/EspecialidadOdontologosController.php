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
   
        $this->authorize('create', EspecialidadOdontologos::class); //si tiene el permiso de crear:
        return view('NuevaEspecialidadOdontologo');
      
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
        $this->authorize('create', EspecialidadOdontologos::class); //si tiene el permiso de crear:
            $request->validate([
                    'odontologo_id'     =>  'required',
                    'especialidad_id'       =>  'required',
                ]);

        

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
