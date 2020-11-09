<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tratamiento;

class TratamientoController extends Controller
{
    public function vistaprincipal(){
        $tratamientos=Tratamiento::All();
        return view('tratamientos')->with ('tratamientos',$tratamientos);
        
}

//funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        Tratamiento::destroy($id);
       // Cita::where('paciente_id','=',$id)->delete();
        return redirect()->back()->with('mensaje','Tratamiento borrado satisfactoriamente messi');
    }



public function nuevo(){
       
    return view('tratamientosnuevo');
}

public function guardar(Request $request){
            
    $request->validate([
        'categoria'     =>  'required',
        'tipo'          =>  'required',
       
    ]);

    // formulario
    $nuevo = new Tratamiento();
    $nuevo->categoria=$request->input('categoria');
    $nuevo->tipo=     $request->input('tipo');

    $creado = $nuevo->save();
    //Asegurarse que fue creado
    if ($creado){
        return redirect()->back()->with('mensaje','El nuevo Tratamiento fue creado exitosamente');
    }else{ 
    }
}

/* funcion para poder editar un gasto */
public function editar($id){
     
    $tratamientos=Tratamiento::findOrFail($id);
    return view('editartratamiento')->with('tratamientos',$tratamientos);

}

public function update(Request $request,$id){
    $request->validate([
        'categoria'     =>  'required',
        'tipo'           =>  'required',
       
    ]);

    $tratamientos=Tratamiento::findOrFail($id);
    //formulario
    $tratamientos->categoria=    $request->input('categoria');
    $tratamientos->tipo=          $request->input('tipo');
    

    $actualizado = $tratamientos->save();
    //Asegurarse que fue creado
    if ($actualizado){
        return redirect()->back()->with('mensaje','¡¡El Tratamiento Fué Modificado Exitosamente!!');
    }else{ 
    }

}








}