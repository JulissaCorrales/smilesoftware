<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plantratamiento;
use App\Paciente;

class PlanTratamientoController extends Controller
{


    public function ver($id){
        $pacientes = Paciente::findOrFail($id);
        return view('plandetratamiento',compact('pacientes'));
    }

    public function nuevo($id){
        $pacientes = Paciente::findOrFail($id);
          return view('nuevoPlandeTratamiento')->with('pacientes',$pacientes); 
    }
//guardar plan de trtamiento
public function guardar(Request $request){
    
    $request->validate([
        'nombreTratamiento'=>'required',
        'estado'=>'required',
        'odontologo_id'=>'required'
    ]);

    $nuevotraTamiento = new PlanTratamiento();
    

    //formulario
    $nuevotraTamiento->nombreTratamiento = $request->input('nombreTratamiento');
    $nuevotraTamiento->estado = $request->input('estado');
    $nuevotraTamiento->paciente_id = $request->input('paciente_id');
    $nuevotraTamiento->odontologo_id = $request->input('odontologo_id');
    $nuevotraTamiento->cita_id = $request->input('cita_id');
    $creado = $nuevotraTamiento->save();
   


    if ($creado){
        $paciente=Paciente::findOrFail($nuevotraTamiento->paciente_id);
        $paciente->planestratamientos()->attach($nuevotraTamiento);
        return redirect()->route('tratamiento.ver',['id'=>$paciente->id])
            ->with('mensaje', 'El Plan de tratamiento fue creado exitosamente!');
    }else{
        //retornar con un msj de error
    }  
   
}

  //funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        Plantratamiento::destroy($id);
        //rediccionar a la pagina index
         return redirect()->back()->with('mensaje','Plan de Tratamiento borrado satisfactoriamente');
    }




}
