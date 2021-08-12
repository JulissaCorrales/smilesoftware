<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Tratamiento;
use App\Producto;


class ProductosController extends Controller
{
    public function datos($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
       $productos=Producto::All();
       $tratamientos=Tratamiento::findorfail($id);
      return view('productos')->with ('productos',$productos)->with('tratamientos',$tratamientos);
    }else{
        abort(403);
    }
      }
     

// public function nuevo($id){
//     $this->authorize('create', Producto::class); //si tiene el permiso de crear:
//    $tratamientos = Tratamiento::findOrFail($id);
//       return view('productosnuevo')->with('tratamientos',$tratamientos); 
// }




public function guardar(Request $request,$id){
    $this->authorize('create', Producto::class); //si tiene el permiso de crear:
    if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){ 
    $request->validate([
        'nombre'                    =>  'required|min:3|max:100',
        'permitedescuento'          =>  'required|in:Si,No',
        'monto'                     =>  'required|numeric',
       
    ]);

    // formulario
    $nuevo = new Producto();
    $nuevo->nombre=$request->input('nombre');
    $nuevo->permitedescuento=     $request->input('permitedescuento');
    $nuevo->monto=     $request->input('monto');
    $nuevo->tratamiento_id = $id;
    $creado = $nuevo->save();
    //Asegurarse que fue creado
    if ($creado){
        return redirect()->back()->with('mensaje','El nuevo Producto fue creado exitosamente');
    }else{ 
    }
}else{
    abort(403);
}


}
//funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        $productos=Producto::findOrFail($id);
        $this->authorize('delete', $productos); //si tiene el permiso de editar:
        
        Producto::destroy($id);
        return redirect()->back()->with('mensaje','Producto borrado satisfactoriamente');
  
    }


    // public function editar($id){
    //     if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
    //     $productos=Producto::findOrFail($id);
    //     $this->authorize('update', $productos); //si tiene el permiso de editar:
    //     return view('editarproducto')->with('productos',$productos);
    // }else{
    //     abort(403);
    // }
    // }

    public function update(Request $request,$id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
        $request->validate([
            'nombre'                     =>  'required|min:3|max:100',
            'permitedescuento'           =>  'required|in:Si,No',
            'monto'                      =>  'required|numeric',
        ]);
    
        $productos=Producto::findOrFail($id);
        $this->authorize('update', $productos); //si tiene el permiso de editar:
        //formulario
        $productos->nombre=           $request->input('nombre');
        $productos->permitedescuento= $request->input('permitedescuento');
        $productos->monto=            $request->input('monto');
    
        $actualizado = $productos->save();
        //Asegurarse que fue creado
        if ($actualizado){
            return redirect()->back()->with('mensaje','¡¡El Producto Fué Modificado Exitosamente!!');
        }else{ 
        }
    }else{
        abort(403);
    }
    }





}
