<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plantratamiento;
use App\Paciente;
use App\Tratamiento;
use App\Producto;
use App\Recaudacion;
use DB;
use Illuminate\Support\Facades\Gate;


class PlanTratamientoController extends Controller
{


    public function ver($id){
        $this->authorize('view', Plantratamiento::class);//si tiene el permiso de ver
        $pacientes = Paciente::findOrFail($id);
        return view('plandetratamiento',compact('pacientes'));

    }

    public function nuevo($id){
        $this->authorize('create', Plantratamiento::class);
        $pacientes = Paciente::findOrFail($id);
        $tratamientos=Tratamiento::All();
          return view('nuevoPlandeTratamiento')->with('pacientes',$pacientes)->with('tratamientos',$tratamientos);
      
    }
//guardar plan de trtamiento
public function guardar(Request $request,$id){
    $this->authorize('create', Plantratamiento::class);
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
    $nuevotraTamiento->cita_id = $request->input('cita_id');
    $creado = $nuevotraTamiento->save();
    if ($creado){
       
        $nuevorecaudacion = new Recaudacion();
        $pacientes = Paciente::findOrFail($id);
    
        $nuevorecaudacion->paciente_id = $id;
        $nuevorecaudacion->plantratamiento_id =  $nuevotraTamiento->id;
        $nuevorecaudacion->preciototal =$nuevotraTamiento->tratamiento->productos->sum('monto');
        $nuevorecaudacion->totalpagar =$nuevotraTamiento->tratamiento->productos->sum('monto'); 
        $creado = $nuevorecaudacion->save();
          
          return redirect("/pantallainicio/vista/paciente/$id/plandetratamiento")->with('mensaje', 'El Plan de tratamiento fue creado exitosamente!');
    }else{
        //retornar con un msj de error
    }  

   
}

  //funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        $plantratamientos = Plantratamiento::findOrFail($id);
        $this->authorize('delete',$plantratamientos);


        Plantratamiento::destroy($id);
        //rediccionar a la pagina index
        return redirect()->back()->with('mensaje','Plan de Tratamiento borrado satisfactoriamente');
 
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


    public function editar($id,$idplantratamiento){
       
        $pacientes = Paciente::findOrFail($id);
        $plantratamientos=Plantratamiento::findOrFail($idplantratamiento);
        $this->authorize('update',$plantratamientos);
        
        $tratamientos=Tratamiento::All();
        return view('EditarPlandetratamiento',compact('pacientes','plantratamientos','tratamientos'));

 
    }


    public function update(Request $_request,$id , $idplantratamiento){
        
        $_request->validate([
            'tratamiento_id'=>'required',
            'estado'=>'required',
            // 'odontologo_id'=>'required'
        ]);
        $plantratamientos=Plantratamiento::findOrFail($idplantratamiento);
        $this->authorize('update',$plantratamientos);
        //formulario
        $plantratamientos->tratamiento_id = $_request->input('tratamiento_id');
        $plantratamientos->estado = $_request->input('estado');
        $plantratamientos->paciente_id = $id;
        $plantratamientos->cita_id = $_request->input('cita_id');
        $creado = $plantratamientos->save();
        if ($creado){
           
            $nuevorecaudacion = new Recaudacion();
            $pacientes = Paciente::findOrFail($id);
        
            $nuevorecaudacion->paciente_id = $id;
            $nuevorecaudacion->plantratamiento_id =  $plantratamientos->id;
            $nuevorecaudacion->preciototal =$plantratamientos->tratamiento->productos->sum('monto');
            $nuevorecaudacion->totalpagar =$plantratamientos->tratamiento->productos->sum('monto'); 
            $creado = $nuevorecaudacion->save();
              
              return redirect("/pantallainicio/vista/paciente/$id/plandetratamiento")->with('mensaje', 'El Plan de Tratamiento se ha modificado correctamente!');
        }else{
            //retornar con un msj de error
        }  
    
       
    }



}