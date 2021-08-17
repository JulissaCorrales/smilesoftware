<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Tratamiento;

class TratamientoController extends Controller
{
    public function vistaprincipal(){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
        $tratamientos=Tratamiento::all();
        return view('tratamientos')->with ('tratamientos',$tratamientos);
    }else{
        abort(403);
    }
}

//funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        $tratamientos=Tratamiento::findOrFail($id);
        $this->authorize('delete',$tratamientos );/* si tiene permiso de borrar */
        Tratamiento::destroy($id);
        return redirect()->back()->with('mensaje','Tratamiento borrado satisfactoriamente');
   
    }



// public function nuevo(){
//     $this->authorize('create', Tratamiento::class); //si tiene el permiso de crear:   
//     return view('tratamientosnuevo');
// }

public function guardar(Request $request){
    $this->authorize('create', Tratamiento::class); //si tiene el permiso de crear:        
    $request->validate([
        'categoria'     =>  'required|regex:/^[\pL\s\-]+$/u|min:3|max:100',
        'tipo'          =>  'required|in:Acción Clínica,Acción de Laboratorio',
       
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

// /* funcion para poder editar un gasto */
// public function editar($id){
//     $tratamientos=Tratamiento::findOrFail($id);
//     $this->authorize('update',$tratamientos );/* si tiene permiso de editar */ 
//     return view('editartratamiento')->with('tratamientos',$tratamientos);

// }

public function update(Request $request,$id){
    if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){ 
    $request->validate([
        'categoria'     =>  'required|min:3|regex:/^[\pL\s\-]+$/u|max:100',
        'tipo'           =>  'required|in:Acción Clínica,Acción de Laboratorio',
       
    ]);

    $tratamientos=Tratamiento::findOrFail($id);
    $this->authorize('update',$tratamientos );/* si tiene permiso de editar */
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