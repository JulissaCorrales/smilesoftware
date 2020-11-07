<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function ver(){
        $usuarios = Usuario::All();
        return view('VistaUsuarios')->with ('usuarios',$usuarios);
    }

    public function nuevo(){
        return view('nuevoUsuario');
     }

     /*$table->id();
     $table->string('nombre');
     $table->string('usuario');
     $table->string('clave');
     $table->string('repetirClave');
     $table->string('perfilPermisos');
     $table->string('esDentista');
     $table->string('estadoCuenta');
     $table->timestamps();**/

     public function guardar(Request $request){
        

        $nuevo = new Usuario();

        //formulario
        $nuevo->nombre = $request->input('nombre');
        $nuevo->usuario = $request->input('usuario');
        $nuevo->clave = $request->input('clave');
        $nuevo->repetirClave = $request->input('repetirClave');
        $nuevo->perfilPermisos = $request->input('perfilPermisos');
        $nuevo->esDentista = $request->input('esDentista');
        $nuevo->estadoCuenta = $request->input('estadoCuenta');
        

       $creado = $nuevo->save();

         if ($creado){
            return redirect('/pantallainicio/usuarios')->with('mensaje', 'el usuario fue creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }
}
