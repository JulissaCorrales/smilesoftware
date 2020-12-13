<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Inventario;

class InventarioController extends Controller
{  
    public function vistaprincipal(){
        $inventarios=Inventario::All();
        return view('inventarios')->with ('inventarios',$inventarios);      
}
public function destroy($id){
    Inventario::destroy($id);
    return redirect()->back()->with('mensaje','Inventario borrado satisfactoriamente');
}

public function nuevo(){
       
    return view('inventarionuevo');
}



public function guardar(Request $request){
            
    $request->validate([
        'producto'         =>  'required',
        'stockseguridad'   =>  'required',
        'stockactual'      =>  'required',
        'monto'      =>  'required',
    ]);

    // formulario
    $nuevo = new Inventario();
    $nuevo->producto=           $request->input('producto');
    $nuevo->stockseguridad=     $request->input('stockseguridad');
    $nuevo->stockactual=        $request->input('stockactual');
    $nuevo->monto=              $request->input('monto');

    $creado = $nuevo->save();
    //Asegurarse que fue creado
    if ($creado){
        return redirect()->back()->with('mensaje','El nuevo Inventario fue creado exitosamente');
    }else{ 
    }
}

public function editar($id){   
    $inventarios=Inventario::findOrFail($id);
    return view('editarinventario')->with('inventarios',$inventarios);
}

public function update(Request $request,$id){
    $request->validate([
        'producto'        =>'required',
        'stockseguridad'  =>'required',
        'stockactual'     =>'required',
        'monto'           =>'required',
    ]);

    $inventarios=Inventario::findOrFail($id);
    //formulario
    $inventarios->producto=       $request->input('producto');
    $inventarios->stockseguridad= $request->input('stockseguridad');
    $inventarios->stockactual=    $request->input('stockactual');
    $inventarios->monto=           $request->input('monto');

    $actualizado = $inventarios->save();
    //Asegurarse que fue creado
    if ($actualizado){
        return redirect()->back()->with('mensaje','¡¡El Inventario Fué Modificado Exitosamente!!');
    }else{ 
    }

}





}
