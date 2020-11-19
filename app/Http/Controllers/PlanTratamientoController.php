<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plantratamiento;
use App\Paciente;
use App\Tratamiento;
use App\Producto;

class PlanTratamientoController extends Controller
{


    public function ver($id){
        $pacientes = Paciente::findOrFail($id);
        return view('plandetratamiento',compact('pacientes'));
    }

    public function nuevo($id){
        $pacientes = Paciente::findOrFail($id);
        $tratamientos=Tratamiento::All();
          return view('nuevoPlandeTratamiento')->with('pacientes',$pacientes)->with('tratamientos',$tratamientos); 
    }
//guardar plan de trtamiento
public function guardar(Request $request,$id){
    
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
   
}

  //funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        Plantratamiento::destroy($id);
        //rediccionar a la pagina index
        return redirect()->back()->with('mensaje','Plan de Tratamiento borrado satisfactoriamente');
    }

    //Funcion para ver la factura
    public function factura($id,$idplantratamiento){
        $pacientes = Paciente::findOrFail($id);
        $plantratamientos=Plantratamiento::findOrFail($idplantratamiento);
        $totalpagar =Producto::sum('monto');
        // $totalpagar =Producto::where('tratamiento_id','=',$idplantratamiento);
        return view('facturaPlantratamiento',compact('pacientes','plantratamientos','totalpagar'));
    }



}