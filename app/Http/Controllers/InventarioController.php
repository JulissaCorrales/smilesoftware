<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Inventario;
use App\entrada;
use App\salida;

use Illuminate\Validation\Rule;


class InventarioController extends Controller
{  
    public function vistaprincipal(){
        $this->authorize('view', Inventario::class);//si tiene el permiso de ver:
         $inventarios=Inventario::all();
     
       
    

      
   // $monto= Inventario::select(DB::raw('sum(monto * stockseguridad) as Total'))->get();
   $datos = DB::select('Select inventarios.id, sum(CantidadEntrante) as CantidadEntrante, sum(Cantidadsalidad) as CantidadSalida, sum(entradas.precio) as PrecioEntrada, inventarios.precio as precioinicial, CantidadExistente
FROM inventarios 
left join salidas on inventarios.id = salidas.inventario_id 
left join entradas on inventarios.id = entradas.inventario_id
group by inventarios.id;');
     

        return view('inventarios',compact('inventarios','datos'));  

   
}




public function destroy($id){
    //permisos
    $inventarios=Inventario::findOrFail($id);
    $this->authorize('delete', $inventarios);//si tiene el permiso de actualizar:
    
    Inventario::destroy($id);
    return redirect()->back()->with('mensaje','Inventario borrado satisfactoriamente');

}

// public function nuevo(){
//     $this->authorize('create', Inventario::class); //si tiene el permiso de crear:   
//     return view('inventarionuevo');
// }



public function guardar(Request $request){
    $this->authorize('create', Inventario::class); //si tiene el permiso de crear sera guardado:        
    $request->validate([
        'producto'         =>  ['required',Rule::unique('inventarios')],
        'stockseguridad'   =>  'required|numeric',
       
        'monto'      =>  'required|numeric|min:1|max:100000000000000000',
    ]);

    // formulario
     $nuevo = new Inventario();
    $nuevo->producto=           $request->input('producto');
    $nuevo->CantidadExistente=    $request->input('stockseguridad');
 
    $nuevo->precio= $request->input('monto');

    $creado = $nuevo->save();
    //Asegurarse que fue creado
    if ($creado){
        return redirect()->back()->with('mensaje','El nuevo Inventario fue creado exitosamente');
    }
}

// Ya no es necesaria ya que esta en modal
// public function editar($id){   
//     $inventarios=Inventario::findOrFail($id);
//     $this->authorize('update', $inventarios);//si tiene el permiso de actualizar:

//     return view('editarinventario')->with('inventarios',$inventarios);

// }


public function update(Request $request,$id){
    

    $inventarios=Inventario::findOrFail($id);
    $this->authorize('update', $inventarios);//si tiene el permiso de actualizar:

     $request->validate([

        'entrada'  =>'required|numeric',
        'costo'           =>'required|numeric|min:1|max:100000000000000000',
    ]);

    $inventarios=Inventario::findOrFail($id);
    $this->authorize('update', $inventarios);//si tiene el permiso de actualizar:

    //formulario
   // $inventarios->producto=       $request->input('producto');
    //$inventarios->CantidadExistente= $request->input('stockseguridad');
    //$inventarios->precio=           $request->input('monto');
          
    $entrada= new entrada();
    $entrada->inventario_id=$id;
    $entrada->CantidadEntrante= $request->input('entrada');
    $entrada->precio= $request->input('costo');
    $entrada->save();
        //$inventarios->entradas()->attach($entrada->id);      



     /*  if($request->salida != null){            
  $salida= new salida();
   $salida->inventario_id=$id;
    $salida->CantidadEntrante= $request->input('salida');
   
     $salida->save();
  
          //$inventarios->entradas()->attach($entrada->id);
           
    } */

  // $inventarios->entradas()->attach($entrada->id);
    //$actualizado = $inventarios->save();
    //Asegurarse que fue creado
    if ($entrada){
        return redirect()->back()->with('mensaje','¡¡El Inventario Fué Modificado Exitosamente!!');
    }else{ 
    }

}


public function updatesalida(Request $request,$id){
    

    $inventarios=Inventario::findOrFail($id);
    $this->authorize('update', $inventarios);//si tiene el permiso de actualizar:

     $request->validate([

        'salida'  =>'required|numeric',
        
    ]);
    
    $salida= new salida();
    $salida->inventario_id=$id;
    $salida->Cantidadsalidad= $request->input('salida');
   
    $salida->save();
  
          //$inventarios->entradas()->attach($entrada->id);
           

  // $inventarios->entradas()->attach($entrada->id);
    //$actualizado = $inventarios->save();
    //Asegurarse que fue creado
    if ($salida){
        return redirect()->back()->with('mensaje','¡¡El Inventario Fué Modificado Exitosamente!!');
    }else{ 
    }

}








}
