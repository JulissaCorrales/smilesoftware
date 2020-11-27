<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{


    public function Roles(){
        $rols = Rol::All();
        return view('usuarios.VistaRol')->with ('rols',$rols);
    }




    public function verRoles($id){
        $rols =Rol::findOrFail($id);
        return view('usuarios.VerRol')->with ('rols',$rols);
    }

    public function nuevoRol(){
        return view('usuarios.CrearRol');
     }

     public function guardarRol(Request $request){
        
        $nuevo = new Rol();

        //formulario
        $nuevo->nombreRol = $request->input('rol');
        $nuevo->slug = $request->input('slug');
       
       $creado = $nuevo->save();

         if ($creado){
            // return redirect('pantallainicio/usuarios/ver')->with('mensaje', 'El usuario fué creado exitosamente!');
            return back()->with('mensaje', 'El Rol fué creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }
    




}
