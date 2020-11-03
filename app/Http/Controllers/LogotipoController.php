<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logotipo;
class LogotipoController extends Controller
{
    public function ver(){
        $logotipos=Logotipo::where('id','=',1)->get();
        return view('verlogos') ->with('logotipos',$logotipos);
    }
    public function subirArchivo(Request $request)
    {
           //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
           $imagen=$request->file('imagedoc')->store('public');
           $logo = new Logotipo();
           $logo->logo=$imagen; 
           $creado= $logo->save();
           if ($creado){
      
            return redirect("pantallainicio/logotipo/ver")->with('mensaje','Archivo guardado exitosamente');
          } 
    }
    public function update(Request $request)
    {
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
      Logotipo::truncate($id);/* Se usa el truncate en vez del destroy para que el        contador de la base de dato se reinicie */
      return redirect()->back()->with('mensaje','Logotipo borrado satisfactoriamente');
  }

 
}
