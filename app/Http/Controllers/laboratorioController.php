<?php

namespace App\Http\Controllers;

use App\Laboratorio;
use Illuminate\Http\Request;

class laboratorioController extends Controller
{
    public function VistaLaboratorio(){
        
        $laboratorios=Laboratorio::All();
        return view('VistaLaboratorio')->with ('laboratorios',$laboratorios);
    }

    public function nuevo(){
        return view('LaboratorioNuevo');
    }

    public function guardar(Request $request){
        $request->validate([
            'nombreLaboratorio'         =>  'required',
            'detalle'         =>  'required',
            'porPagar'         =>  'required',
        ]);

    $nuevo = new Laboratorio();
    $nuevo->nombreLaboratorio=$request->input('nombreLaboratorio');
    $nuevo->detalle=$request->input('detalle');
    $nuevo->porPagar=$request->input('porPagar');

    $creado = $nuevo->save();
    //Asegurarse que fue creado
    if ($creado){
        return redirect()->back()->with('mensaje','El registro de este laboratorio fue creado exitosamente');
    }else{ 
    }
    
    }

    public function editar($id){  
   
        $labs=Laboratorio::findOrFail($id);
        return view('EditarLaboratorio')->with('labs',$labs);
    
    }


    public function actualizar(Request $request,$id){
 

        $request->validate([
            'nombreLaboratorio'        =>'required',
            'detalle'        =>'required',
            'porPagar'        =>'required',
           
        ]);
    
        $labs=Laboratorio::findOrFail($id);
        $labs->nombreLaboratorio = $request->input('nombreLaboratorio');
        $labs->detalle = $request->input('detalle');
        $labs->porPagar = $request->input('porPagar');
       
    
        $actualizado = $labs->save();
        //Asegurarse que fue creado
        if ($actualizado){
            return redirect()->back()->with('mensaje','¡¡los datos del laboratorio se modificaron Exitosamente!!');
        }else{ 
        }
    
    
    }

    public function destroy($id){
        Laboratorio::destroy($id);
        return redirect()->back()->with('mensaje','laboratorio borrado satisfactoriamente');
    
    }
    
}
