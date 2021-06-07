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
   
    // public function nuevaevolucion($id){
    //     $this->authorize('create', Evoluciones::class);//si tiene el permiso de crear
    //     $pacientes = Paciente::findOrFail($id);
    //       return view('nuevaEvolucion')->with('pacientes',$pacientes);
      
    // }
    

    public function GuardarEvolucion(Request $request,$id){
        $this->authorize('create', Evoluciones::class);//si tiene el permiso de crear
         $request->validate([
                    'tratamiento_id'=>'required',
                    'caja'=>'required|max:255',
        
                ]);
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
    }
    

    public function EvolucionesPaciente($id){
        $this->authorize('view', Evoluciones::class);//si tiene el permiso de ver

        $evoluciones=Evoluciones::all();
        $tratamientos= Tratamiento::all();

        $pacientes = Paciente::findOrFail($id);
       return view('Evoluciones')->with ('evoluciones',$evoluciones)->with('tratamientos',$tratamientos)->with('pacientes',$pacientes);
      

    }

    
     public function update(Request $request,$id,$id_evolucion){
                 $request->validate([
                    'tratamiento_id'=>'required',
                    'caja'=>'required|max:255',
        
                ]);
               
                $evoluciones =Evoluciones::findOrFail($id_evolucion);
                 $this->authorize('update',$evoluciones);//si tiene el permiso de editar
                $pacientes = Paciente::findOrFail($id);
                $evoluciones->paciente_id= $id;
                $evoluciones->plantratamiento_id= $request->input('tratamiento_id');

                $evoluciones->evolucion= $request->input('caja');
                $creado= $evoluciones->save();
                 if ($creado){
                    
                  return redirect()->back()->with('mensaje','Evolución ha sido modificado exitosamente');

                } 
            }

        
    public function borrarevolucion($id)
    {
         $evoluciones = Evoluciones::findOrFail($id);
          $this->authorize('delete',$evoluciones);//si tiene el permiso de eliminar
        //rediccionar a la pagina index
        Evoluciones::destroy($id);
        return redirect()->back()->with('mensaje','Evolucion borrada satisfactoriamente');
    }
}
