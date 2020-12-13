<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Tratamiento;

class TratamientoController extends Controller
{
    public function vistaprincipal(){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
        $tratamientos=Tratamiento::All();
        return view('tratamientos')->with ('tratamientos',$tratamientos);
    }else{
        abort(403);
    }
}

//funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
        Tratamiento::destroy($id);
        return redirect()->back()->with('mensaje','Tratamiento borrado satisfactoriamente messi');
    }else{
        abort(403);
    }
    }



public function nuevo(){
       
    return view('tratamientosnuevo');
}

public function guardar(Request $request){
    if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){      
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
}else{
    abort(403);
}
}

/* funcion para poder editar un gasto */
public function editar($id){
    if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){  
    $tratamientos=Tratamiento::findOrFail($id);
    return view('editartratamiento')->with('tratamientos',$tratamientos);
}else{
    abort(403);
}
}

public function update(Request $request,$id){
    if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){ 
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
}else{
    abort(403);
}

}








}