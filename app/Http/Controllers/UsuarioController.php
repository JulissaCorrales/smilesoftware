<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Gate;


class UsuarioController extends Controller
{


   
    public function ver(Request $request){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
         $usuarios=User::All();
           if($request->ajax()){
            $roles = Role::where('id', $request->role_id)->first();
            $permissions = $roles->permisos;
            return $permissions;
        }
        $roles=Role::all();
        /* lo que ocupa para modal editar */
    

        /*  */
        return view('usuarios.VistaUsuarios')->with ('usuarios',$usuarios)->with ('roles',$roles);
    }


    public function verUsuario($id){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        $usuarios =User::findOrFail($id);
        return view('usuarios.Verusuario')->with ('usuarios',$usuarios);
    }

    // public function nuevo(Request $request){
    //     if(Gate::denies('isAdmin')){
    //         abort(403);
    //      }
    //     if($request->ajax()){
    //         $roles = Role::where('id', $request->role_id)->first();
    //         $permissions = $roles->permisos;
    //         return $permissions;
    //     }
    //     $roles=Role::all();
    //     return view('usuarios.NuevoUsuario')->with ('roles',$roles);;
    //  }



     public function guardar(Request $request){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        $request->validate([
            'name' => ['required', 'string', 'max:15','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => 'required',
          
           
        ]);
        $nuevo = new User();
        $nuevo->name = $request->input('name');
        $nuevo->email = $request->input('email');
        $nuevo->password = bcrypt($request->password);
        

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            //obtenemos el nombre del archivo
            $image =  time()." ".$file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            $file->move(\public_path().'/Imagenes/',$image);
            $nuevo->imagen= $image;
        
        }
        
        
       $creado = $nuevo->save();

       if($request->role != null){
        $nuevo->roles()->attach($request->role);
        $nuevo->save();
    }

    if($request->permissions != null){            
        foreach ($request->permissions as $permission) {
            $nuevo->permisos()->attach($permission);
            $nuevo->save();
        }
    }

         if ($creado){
            // return redirect('pantallainicio/usuarios/ver')->with('mensaje', 'El usuario fué creado exitosamente!');
            return back()->with('mensaje', 'El usuario fué creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }
    
    public function editar($id){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        $user = User::findOrFail($id);
        $roles = Role::get();
        $userRole = $user->roles->first();
        if($userRole != null){
            $rolePermissions = $userRole->allRolePermissions;
        }else{
            $rolePermissions = null;
        }
        $userPermissions = $user->permisos;

      
        // dd($rolePermission);
        return view('usuarios.editarusuario', [
            'user'=>$user,
            'roles'=>$roles,
            'userRole'=>$userRole,
            'rolePermissions'=>$rolePermissions,
            'userPermissions'=>$userPermissions
            ]);


        

    }
    public function actualizar(Request $request,$id){
        if(Gate::denies('isAdmin')){
            abort(403);
         }
        $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'string', 'email', 'max:255', ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            //obtenemos el nombre del archivo
            $image =  time()." ".$file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            $file->move(\public_path().'/Imagenes/',$image);
            $user->imagen= $image;
        
        }

        if($request->password != $user->password){
            $user->password = Hash::make($request->password);
        }


        $creado =  $user->save();

        $user->roles()->detach();
        $user->permisos()->detach();

        if($request->role != null){
            $user->roles()->attach($request->role);
            $user->save();
        }

        if($request->permissions != null){            
            foreach ($request->permissions as $permission) {
                $user->permisos()->attach($permission);
                $user->save();
            }
        }
    
        
        
        if($creado){
            return back()->with('mensaje','El Usuario ha sido modifcado exitosamente');
        }else{
          
          
            //error
        }
    }
    public function borrar($id){

        if(Gate::denies('isAdmin')){
            abort(403);
         }
         
        $user=User::findOrFail($id);
        $user->roles()->detach();
        $user->permisos()->detach();
        $user->delete();

        return redirect()->back()->with('mensaje','Usuario borrado satisfactoriamente');
    }

}
