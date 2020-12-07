<?php

namespace App\Http\Controllers;

use App\Evoluciones;
use App\Tratamiento;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class EvolucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function nuevaevolucion($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
        $pacientes = Paciente::findOrFail($id);
          return view('nuevaEvolucion')->with('pacientes',$pacientes);
        }else{
            abort(403);
        }
    }
    

    public function GuardarEvolucion(Request $request,$id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
        $paciente=Paciente::findOrFail($id);

        $nuevoevaluacion = new  Evoluciones();
        $nuevoevaluacion->paciente_id= $id;
        $nuevoevaluacion->plantratamiento_id= $request->input('tratamiento_id');

        $nuevoevaluacion->evolucion= $request->input('caja');
        $creado= $nuevoevaluacion->save();
         if ($creado){
            
          return redirect("/pantallainicio/vista/paciente/$id/evoluciones")->with('mensaje','Evolucion guardado exitosamente');

           //return redirect()('/comentarios/{id}');
        } 
    }else{
       abort(404);
    }
    }
    


//guardar plan de trtamiento

    


    public function EvolucionesPaciente($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
        $evoluciones=Evoluciones::all();
        $tratamientos= Tratamiento::all();

        $pacientes = Paciente::findOrFail($id);
       return view('Evoluciones')->with ('evoluciones',$evoluciones)->with('tratamientos',$tratamientos)->with('pacientes',$pacientes);
       }else{
           abort(404);
       }

    }

    
    public function destroy(Evoluciones $evoluciones)
    {
        //
    }
}
