<?php

namespace App\Http\Controllers;

use App\Administrativo;
use Illuminate\Http\Request;

class AdministrativoController extends Controller
{
    public function ver(){
        //return "texto de contacto desde el controlador ";
        $administrativos=Administrativo::All();
        return view('VistaAdministrativos')->with ('administrativos',$administrativos);
     } 

     public function nuevo(){
        //return "texto de contacto desde el controlador ";
        return view('nuevoUsuarioAdministrativo');
     }

     public function guardar(Request $request){
        

        $nuevo = new Administrativo();

        //formulario
        $nuevo->nombres = $request->input('nombres');
        $nuevo->apellidos = $request->input('apellidos');
        $nuevo->identidad = $request->input('identidad');
        $nuevo->telefonoCelular = $request->input('telefonoCelular');
        $nuevo->telefonoFijo = $request->input('telefonoFijo');
        $nuevo->email = $request->input('email');
        $nuevo->departamento = $request->input('departamento');
        $nuevo->ciudad = $request->input('ciudad');
        $nuevo->direccion = $request -> input('direccion');
        

       $creado = $nuevo->save();

         if ($creado){
            return redirect('pantallainicio/usuariosAdministrativos')->with('mensaje', 'el usuario administrativo fue creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }

    public function borrar($id){
        Administrativo::destroy($id);
        return redirect()->back()->with('mensaje','usuario administrativo borrado satisfactoriamente');
    }




}
