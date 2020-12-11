<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plantratamiento;
use App\Paciente;
use App\Tratamiento;
use App\Producto;
use DB;
use Illuminate\Support\Facades\Gate;


class PlanTratamientoController extends Controller
{


    public function ver($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){

        $pacientes = Paciente::findOrFail($id);
        return view('plandetratamiento',compact('pacientes'));

        }else{
            abort(403);
        }
    }

    public function nuevo($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){

        $pacientes = Paciente::findOrFail($id);
        $tratamientos=Tratamiento::All();
          return view('nuevoPlandeTratamiento')->with('pacientes',$pacientes)->with('tratamientos',$tratamientos);
          
        }else{
            abort(403);
        }
    }
//guardar plan de trtamiento
public function guardar(Request $request,$id){
    if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
    
    $request->validate([
        'tratamiento_id'=>'required',
        'estado'=>'required',
        // 'odontologo_id'=>'required'
    ]);

    $nuevotraTamiento = new PlanTratamiento();
    

    //formulario
    $nuevotraTamiento->tratamiento_id = $request->input('tratamiento_id');
    $nuevotraTamiento->estado = $request->input('estado');
    $nuevotraTamiento->paciente_id = $id;
    // $nuevotraTamiento->odontologo_id = $request->input('odontologo_id');
    $nuevotraTamiento->cita_id = $request->input('cita_id');
    $creado = $nuevotraTamiento->save();
   


    if ($creado){
          return redirect("/pantallainicio/vista/paciente/$id/plandetratamiento")->with('mensaje', 'El Plan de tratamiento fue creado exitosamente!');
    }else{
        //retornar con un msj de error
    }  

    }else{
        abort(403);
    }
   
}

  //funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){

        Plantratamiento::destroy($id);
        //rediccionar a la pagina index
        return redirect()->back()->with('mensaje','Plan de Tratamiento borrado satisfactoriamente');
        
        }else{
                abort(403);
            }
    }

    //Funcion para ver la factura
    public function factura($id,$idplantratamiento){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){

        $pacientes = Paciente::findOrFail($id);
        $plantratamientos=Plantratamiento::findOrFail($idplantratamiento);
        $totalpagar= $plantratamientos->tratamiento->productos->sum('monto'); 

        return view('facturaPlantratamiento',compact('pacientes','plantratamientos','totalpagar'));

    }else{
        abort(403);
    }

    }



}