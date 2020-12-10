<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permiso;
use Illuminate\Support\Facades\Gate;
class RolController extends Controller
{


    public function Roles(){
        
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        $rols = Role::All();
        return view('usuarios.VistaRol')->with ('rols',$rols);
        

    }

    public function verRoles($id){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        $roles =Role::findOrFail($id);
        return view('usuarios.VerRol')->with ('roles',$roles);
    }

    public function nuevoRol(){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        return view('usuarios.CrearRol');
     }

     public function guardarRol(Request $request){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        
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
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        $roles = Role::findOrFail($id);
        return view('usuarios.editarRol')->with('roles',$roles);

    }
    public function update(Request $request,$id){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        $request->validate([
            'rol'                     =>  'required',
            'slug'           =>  'required',
        ]);
    
        $roles=Role::findOrFail($id);
        //formulario
        $roles->Nombre= $request->input('rol');
        $roles->slug= $request->input('slug');
    
        $actualizado = $roles->save();
        $roles->permisos()->delete();
        $roles->permisos()->detach();
        $listOfPermissions = explode(',',  $request->roles_permisos); //crear matriz a partir de permisos separados/coma
        
         
        foreach ($listOfPermissions as  $permiso) {
             $permisos= new Permiso();
             $permisos->Permiso= $permiso;
             $permisos->slug= strtolower(str_replace(" ", "-",  $permiso));
             $permisos->save();
             $roles->permisos()->attach($permisos->id);
             $actualizado = $roles->save();
        }  
        if ($actualizado){
            return redirect()->back()->with('mensaje','¡¡El Rol Fué Modificado Exitosamente!!');
        }else{ 
        }
    
    }
    public function borrar($id){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        $roles=Role::findOrFail($id);
        $roles->permisos()->delete();
        $roles->delete();
        $roles->permisos()->detach();
        
        return redirect()->back()->with('mensaje','Rol borrado satisfactoriamente');


       
    }

    




}
