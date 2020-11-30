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

          $listOfPermissions = explode(',',  $request->roles_permisos); //crear matriz a partir de permisos separados/coma
        
         
        foreach ($listOfPermissions as  $permiso) {
             $permisos= new Permiso();
             $permisos->Permiso= $permiso;
             $permisos->slug= strtolower(str_replace(" ", "-",  $permiso));
             $permisos->save();
             $nuevo->permisos()->attach($permisos->id);
             $nuevo->save();
        }    

        

    
      
      
         if ($creado){
            // return redirect('pantallainicio/usuarios/ver')->with('mensaje', 'El usuario fué creado exitosamente!');
            return back()->with('mensaje', 'El Rol fué creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }
    public function editarRol($id){
        $roles = Role::findOrFail($id);
        return view('usuarios.editarRol')->with('roles',$roles);

    }
    public function update(Request $request,$id){
        $request->validate([
            'name'                     =>  'required',
            'slug'           =>  'required',
        ]);
    
        $roles=Role::findOrFail($id);
        //formulario
        $roles->Nombre= $request->input('rol');
        $roles->slug= $request->input('slug');
    
        $actualizado = $roles->save();
        if ($actualizado){
            return redirect()->back()->with('mensaje','¡¡El Rol Fué Modificado Exitosamente!!');
        }else{ 
        }
    
    }
    public function borrar($id){
        Role::destroy($id);
        
        return redirect()->back()->with('mensaje','Rol borrado satisfactoriamente');


       
    }

    




}
