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

    /* funcion para poder editar un usuario administrativo*/
    public function editar($id){
     
        $administrativos=Administrativo::findOrFail($id);
        return view('EditarAdministrativo')->with('administrativos',$administrativos);

    }

    public function actualizar(Request $request,$id){

        $administrativos = Administrativo::findOrFail($id);
        //formulario

        $administrativos->nombres = $request->input('nombres');
        $administrativos->apellidos = $request->input('apellidos');
        $administrativos->identidad = $request->input('identidad');
        $administrativos->telefonoCelular = $request->input('telefonoCelular');
        $administrativos->telefonoFijo = $request->input('telefonoFijo');
        $administrativos->email = $request->input('email');
        $administrativos->departamento = $request->input('departamento');
        $administrativos->ciudad = $request->input('ciudad');
        $administrativos->direccion = $request -> input('direccion');

        $actualizado = $administrativos->save();
        //Asegurarse que fue creado
        if ($actualizado){
            return redirect()->back()->with('mensaje','¡¡El usuario administrativo Fué Modificado Exitosamente!!');
        }else{ 
        }

    }




}
