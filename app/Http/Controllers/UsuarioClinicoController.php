<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsuarioClinicoController extends Controller
{
    public function ver(){
        $usuarios=User::where('rol_id','=',1)->get();
        return view('usuarios.VistaClinicos')->with ('usuarios',$usuarios);
     } 
     public function nuevo(){
        return view('usuarios.nuevoUsuarioClinico');
     }
     public function editar($id){
        $usuarios = User::findOrFail($id);
        return view('usuarios.EditarUsuarioClinico')->with('usuarios',$usuarios);
    }
}
