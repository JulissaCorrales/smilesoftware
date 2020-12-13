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
    if(Gate::denies('isSecretaria')){ 
    Mediopago::destroy($id);
    return redirect()->back()->with('mensaje','Medio de pago borrado satisfactoriamente');
}else{
    abort(403);
}
}



public function nuevo(){
    
    return view('mediopagonuevo');

}

public function guardar(Request $request){
    if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){      
    $request->validate([
        'nombre'         =>  'required',
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
}else{
    abort(403);
}

}


public function editar($id){  
    if(Gate::denies('isSecretaria')){ 
    $mediopagos=Mediopago::findOrFail($id);
    return view('editarmediopago')->with('mediopagos',$mediopagos);
}else{
    abort(403);
}
}


public function update(Request $request,$id){
    if(Gate::denies('isSecretaria')){ 
    $request->validate([
        'nombre'        =>'required',
       
    ]);

    $inventarios=Mediopago::findOrFail($id);
    //formulario
    $inventarios->nombre=       $request->input('nombre');
   

    $actualizado = $inventarios->save();
    //Asegurarse que fue creado
    if ($actualizado){
        return redirect()->back()->with('mensaje','¡¡El Medio de pago Fué Modificado Exitosamente!!');
    }else{ 
    }
}else{
    abort(403);
}

}





}
