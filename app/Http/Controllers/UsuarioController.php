<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use\Iluminate\Support\Facades\Hash;

class UsuarioController extends Controller
{


    public function ver(){
        $usuarios =User::All();
        return view('usuarios.VistaUsuarios')->with ('usuarios',$usuarios);
    }


    public function verUsuario($id){
        $usuarios =User::findOrFail($id);
        return view('usuarios.Verusuario')->with ('usuarios',$usuarios);
    }

    public function nuevo(Request $request){
        if($request->ajax()){
            $roles = Role::where('id', $request->role_id)->first();
            $permissions = $roles->permisos;

            return $permissions;
        }

        $roles=Role::all();
        
        return view('usuarios.NuevoUsuario')->with ('roles',$roles);;
     }



     public function guardar(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
          
           
        ]);
        

        $nuevo = new User();

        //formulario
        $nuevo->name = $request->input('name');
        
        $nuevo->email = $request->input('email');
        $nuevo->password = bcrypt($request->password);
      
   

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
        $usuarios = User::findOrFail($id);
        return view('usuarios.editarusuario')->with('usuarios',$usuarios);

    }
    public function actualizar(Request $request,$id){
        $request->validate([
            'name'                    =>  'required|max:255',
            'email'          =>  'required|email|max:255',
            'password'                     =>  'required|min:8',
            // 'rol_id' => 'required',
           
        ]);
        

        $usuarios = User::findOrFail($id);
        $usuarios->name = $request->input('name');
        $usuarios->usuario = $request->input('usuario');
        $usuarios->email = $request->input('email');
       // $usuarios->password = $request->input('password');
        $usuarios->esDentista = $request->input('esDentista');
        $usuarios->rol_id = $request->input('rol_id');
        //if($request->password != null){
          //  $usuarios->password= Hash::make($request->password);
        //}

        $creado = $usuarios->update();
        if($creado){
            return back()->with('mensaje','El Usuario ha sido modifcado exitosamente');
        }else{
          
          
            //error
        }
    }
    public function borrar($id){
        User::destroy($id);
        return redirect()->back()->with('mensaje','Usuario borrado satisfactoriamente');
    }

}
