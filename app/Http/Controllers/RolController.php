<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permiso;
class RolController extends Controller
{


    public function Roles(){
        $rols = Role::All();
        return view('usuarios.VistaRol')->with ('rols',$rols);
        

    }

    public function verRoles($id){
        $roles =Role::findOrFail($id);
        return view('usuarios.VerRol')->with ('roles',$roles);
    }

    public function nuevoRol(){
        return view('usuarios.CrearRol');
     }

     public function guardarRol(Request $request){
        
        $nuevo = new Role();

        //formulario
        $nuevo->Nombre = $request->input('name');
        $nuevo->slug = $request->input('slug');
       
          $creado = $nuevo->save();

       
      // $listOfPermissions= explode(',',$request->roles_permisos); //create el array de permisos

      

       //foreach($listOfPermissions as $permiso){
          
       // $permiso = new Permiso();
       // $permiso->Permiso= $permiso;
       // $permiso->slug= strtolower(str_replace(", ","-", $permiso['slug']));
       // $nuevo->permisos()->attach($permiso->id);
       // $creado= $nuevo->save();
       // $permiso->save();
       
      // }
      
         if ($creado){
            // return redirect('pantallainicio/usuarios/ver')->with('mensaje', 'El usuario fué creado exitosamente!');
            return back()->with('mensaje', 'El Rol fué creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }
    




}
