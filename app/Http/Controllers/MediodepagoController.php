<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mediopago;
use Illuminate\Support\Facades\Gate;

class MediodepagoController extends Controller
{
    
    public function vistaprincipal(){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
        $mediopagos=Mediopago::All();
        return view('mediopagos')->with ('mediopagos',$mediopagos);
    }else{
        abort(403);
    }
        
}

public function destroy($id){

    $mediopagos=Mediopago::findOrFail($id);
    $this->authorize('delete', $mediopagos); //si tiene el permiso de eliminar:

    Mediopago::destroy($id);
    return redirect()->back()->with('mensaje','Medio de pago borrado satisfactoriamente');

}



public function guardar(Request $request){
    $this->authorize('create', Mediopago::class); //si tiene el permiso de crear:     
    $request->validate([
        'nombre'         =>  'required|regex:/^[\pL\s\-]+$/u|max:60|min:3',
    ]);

    // formulario
    $nuevo = new Mediopago();
    $nuevo->nombre=           $request->input('nombre');


    $creado = $nuevo->save();
    //Asegurarse que fue creado
    if ($creado){
        return redirect()->back()->with('mensaje','El nuevo Medio de pago fue creado exitosamente');
    }else{ 
    }


}



public function update(Request $request,$id){
 

    $request->validate([
        'nombre'         =>  'required|regex:/^[\pL\s\-]+$/u|max:60|min:3',
       
    ]);

    $mediopagos=Mediopago::findOrFail($id);
    $this->authorize('update', $mediopagos); //si tiene el permiso de editar:
    //formulario
    $mediopagos->nombre=       $request->input('nombre');
   

    $actualizado = $mediopagos->save();
    //Asegurarse que fue creado
    if ($actualizado){
        return redirect()->back()->with('mensaje','¡¡El Medio de pago Fué Modificado Exitosamente!!');
    }else{ 
    }


}





}
