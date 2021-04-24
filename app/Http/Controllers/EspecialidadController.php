<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use App\Odontologo;

use Illuminate\Support\Facades\Gate;

class EspecialidadController extends Controller
{

     //Vista Principal acceso al admin y al odontologo
    public function vistaespecialidad(){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
        $odontologos= Odontologo::All();
        $especialidads=Especialidad::paginate(10);
        return view('Especialidades')->with ('especialidads',$especialidads)->with('odontologos',$odontologos);
        }else{
            abort(403);
        }
     } 


     //Funcion para crear una nueva especialidad acceso al admin y secretaria
     public function nuevaespecialidad(){
        $this->authorize('create', Especialidad::class); //si tiene el permiso de crear:
        //return "texto de contacto desde el controlador ";
        return view('nuevaEspecialidad');
     
      }



     public function GuardarNuevo(Request $request){
        $this->authorize('create', Especialidad::class); //si tiene el permiso de crear:
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
    

        $nuevo = new Especialidad();
        //formulario
        $nuevo->Especialidad = $request->input('nombres');
        $creado = $nuevo->save();

         if ($creado){
            return redirect('/pantallainicio/especialidad')->with('mensaje', 'La especialidad fue agregada con exito!');
        }else{
            //retornar con un msj de error
        } 

      }else
           abort(403);
      }

  
    public function destroy($id){
        
        $especialidades=Especialidad::findOrFail($id);
        $this->authorize('delete', $especialidades); //si tiene el permiso de eliminar:

        Especialidad::destroy($id);
        return redirect()->back()->with('mensaje','Especialidad borrada satisfactoriamente');

    
       
    }



}
