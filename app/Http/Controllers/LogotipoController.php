<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logotipo;
use Illuminate\Support\Facades\Gate;
class LogotipoController extends Controller
{
    public function ver(){
      if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
        $logotipos=Logotipo::where('id','=',1)->get();
        return view('verlogos') ->with('logotipos',$logotipos);
        }else{
          abort(403);
      }
    }
    public function subirArchivo(Request $request)
    {
     
      if(Gate::denies('isAdmin')){
        abort(403);
     }
           //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
           $imagen=$request->file('imagedoc')->store('public');
           $logo = new Logotipo();
           $logo->logo=$imagen; 
           $creado= $logo->save();
           if ($creado){
      
            return redirect("pantallainicio/logotipo/ver")->with('mensaje','Archivo guardado exitosamente');
          }else{}
          
      
    }
    public function update(Request $request)
    {
      if(Gate::denies('isAdmin')){
        abort(403);
     }
           //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
           $imagen=$request->file('imagedoc')->store('public');
           $logo=Logotipo::findOrFail(1);
           $logo->logo=$imagen; 
           $creado= $logo->save();
           if ($creado){  
            return redirect("pantallainicio/logotipo/ver")->with('mensaje','Archivo modificado exitosamente');
          } 
        
          
        
    }
    // Eliminar 
    public function borrarlogotipo($id){
      if(Gate::denies('isAdmin')){
        abort(403);
     }
      Logotipo::truncate($id);/* Se usa el truncate en vez del destroy para que el    id    contador de la base de dato se reinicie */
      return redirect()->back()->with('mensaje','Logotipo borrado satisfactoriamente');
          
  }

 
}
