<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdministrativoController extends Controller
{
    public function ver(){
        $administrativos=User::where('rol_id','>=',2)->get();
        return view('usuarios.VistaAdministrativos')->with ('administrativos',$administrativos);
     } 

     public function nuevo(){
        return view('usuarios.nuevoUsuarioAdministrativo');
     }

   

    /* funcion para poder editar un usuario administrativo*/
    public function editar($id){
        $usuarios = User::findOrFail($id);
        return view('usuarios.EditarAdministrativo')->with('usuarios',$usuarios);
    }




}
