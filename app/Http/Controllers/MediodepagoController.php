<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mediopago;

class MediodepagoController extends Controller
{
    
    public function vistaprincipal(){
        $mediopagos=Mediopago::All();
        return view('mediopagos')->with ('mediopagos',$mediopagos);      
}

public function destroy($id){
    Mediopago::destroy($id);
    return redirect()->back()->with('mensaje','Medio de pago borrado satisfactoriamente');
}



public function nuevo(){
       
    return view('mediopagonuevo');
}

public function guardar(Request $request){
            
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
}


public function editar($id){   
    $mediopagos=Mediopago::findOrFail($id);
    return view('editarmediopago')->with('mediopagos',$mediopagos);
}


public function update(Request $request,$id){
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

}





}
