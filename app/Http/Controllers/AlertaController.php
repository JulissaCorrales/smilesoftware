<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alerta;
use App\Alertapredeterminada;
use App\Paciente;

class AlertaController extends Controller
{
    public function ver($id){
        $pacientes = Paciente::findOrFail($id);
        return view('vistaalertas',compact('pacientes'));
    }
    /* Crear alerta */
    public function crear($id){
      
        //return "texto de contacto desde el controlador ";
        $pacientes = Paciente::findOrFail($id);
        return view('vistaalertas',compact('pacientes'));
    }  

     //Guardar Alerta 
     public function Guardar(Request $request,$id){
        $request->validate([
            'alerta'=>'required',
        
        ]);
        $paciente=Paciente::findOrFail($id);
        $nuevaalerta = new Alerta();
        $nuevaalerta->paciente_id= $id;
        $nuevaalerta->alertas= $request->input('alerta');
        $creado= $nuevaalerta->save();
         if ($creado){
            
          return redirect()->back()->with('mensaje','¡¡Alerta Guardada Exitosamente!!');

          
        } 
    }
    /* elimiar alerta del paciente */
    public function destroy($id,$id2){
        Alerta::destroy($id2);
        return redirect()->back()->with('mensaje','¡¡Alerta borrada satisfactoriamente!!');

    }

    /* actualizar alertas del paciente */
     /* funcion para poder editar un gasto */
     public function editar($id,$id2){
        $alertas=Alerta::findOrFail($id2);
        $pacientes=Paciente::findOrFail($id);
        return view('editaralerta')->with('alertas',$alertas)->with('pacientes',$pacientes);
    }
    public function update(Request $request,$id,$id2){
        $request->validate([
            'alerta'=>'required',
        ]);

        $alerta=Alerta::findOrFail($id2);
        $alerta->paciente_id= $id;
        $alerta->alertas= $request->input('alerta');

        $actualizado = $alerta->save();
        //Asegurarse que fue creado
        if ($actualizado){
            return redirect()->back()->with('mensaje','¡¡La alerta Fué Modificado Exitosamente!!');
        }else{ 
        }
    

    }



    /* ************************************************************************************ */

     /* Crear alerta predeterminada */
     public function crearalertapredeterminada($id){
        //return "texto de contacto desde el controlador ";
        $pacientes = Paciente::findOrFail($id);
        return view('vistaalertas',compact('pacientes'));
    }  

     //Guardar Alerta predeterminada
     public function Guardaralertapredeterminada(Request $request){
        $request->validate([
            'alertapredeterminada'=>'required',
        
        ]);
        $nuevaalerta = new Alertapredeterminada();
        $nuevaalerta->alertapredeterminada= $request->input('alertapredeterminada');
        $creado= $nuevaalerta->save();
         if ($creado){
            
          return redirect()->back()->with('mensaje','¡¡Alerta Predefinida  Guardada Exitosamente!!');

          
        } 
    }
    public function destroypredeterminada($id){
        Alertapredeterminada::destroy($id);
        return redirect()->back()->with('mensaje','¡¡Alerta predeterminada borrada satisfactoriamente!!');

    }

    

}
