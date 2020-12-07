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
        'producto'         =>  'required',
        'stockseguridad'   =>  'required',
        'stockactual'      =>  'required',
        'monto'      =>  'required',
    ]);

    // formulario
    $nuevo = new Mediopago();
    $nuevo->producto=           $request->input('producto');
    $nuevo->stockseguridad=     $request->input('stockseguridad');
    $nuevo->stockactual=        $request->input('stockactual');
    $nuevo->monto=              $request->input('monto');

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
        'producto'        =>'required',
        'stockseguridad'  =>'required',
        'stockactual'     =>'required',
        'monto'           =>'required',
    ]);

    $inventarios=Mediopago::findOrFail($id);
    //formulario
    $inventarios->producto=       $request->input('producto');
    $inventarios->stockseguridad= $request->input('stockseguridad');
    $inventarios->stockactual=    $request->input('stockactual');
    $inventarios->monto=           $request->input('monto');

    $actualizado = $inventarios->save();
    //Asegurarse que fue creado
    if ($actualizado){
        return redirect()->back()->with('mensaje','¡¡El Medio de pago Fué Modificado Exitosamente!!');
    }else{ 
    }

}





}
