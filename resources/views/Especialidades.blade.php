

@extends('Plantilla.Plantilla')

<!DOCTYPE html>
<html lang="en">
@section('Titulo','Paciente')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    
    <style>

 #table{




 }

 td{
  border: 1px solid #00cccc;
  text-align: left;
  padding: 20px;
  text-align: left;
  background-color: #ccffff
  
} 



btn{
text-align: center;

}



#lista{
 
  

}

 #lista:hover{
   border: 1px solid #FF4500;
   color: hotpink;
 

 }

 #can{
  background-color: #e6ffff;

 }

 
 #cue{
  border: #00cccc  2px solid;
 }

 #na2{
  width: 1300px;
  height: 900px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);
    position: absolute;
    top:220px;
    left:40px;
  
    
    
 }

#dd{
  position: absolute;
    top:400px;
    left:150px;


}


#b1{
  position: absolute;
    top:300px;
    left:780px;

}

#b2{
  position: absolute;
    top:300px;
    left:1030px;
}

#b3{
  position: absolute;
    top:300px;
    left:1140px;

}

#dire{
  color: #ff9933;
  text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;
  font-family: serif;
  position: absolute;
            font-size:30px;
            top: 2px;
            left:30px;
}


#nn2{
  background-color: #e6ffff;
  position: absolute;
  width: 200px;
  height: 50px;
  font-size: 17px;
  
            top: 300px;
            left:1050px;
            font-family: "Times New Roman";
  text-align: center;
  border: 1px solid #FF4500;
  color:#cc6600
}


#nn3{
  background-color: #e6ffff;
  position: absolute;
  width: 60px;
  height: 50px;
  font-size: 17px;
  
            top: 300px;
            left:980px;
            font-family: "Times New Roman";
  text-align: center;
  border: 1px solid #FF4500;
  color:#cc6600
}

td{
   
   text-align: left;
   font-family: "Times New Roman";
   border-bottom: 5px solid #00cccc;
   
   
 } 

 #thh1{
  font-family: "Times New Roman";
  text-align: center;
  font-size: 30px;
  border-left: 5px solid #00cccc;
  border-right: 5px solid #00cccc;
  border-bottom: 5px solid #00cccc;
  border-top: 5px solid #00cccc;
  
 }

 #thh2{
  font-family: "Times New Roman";
  text-align: center;
  font-size: 30px;
  border-left: 5px solid #00cccc;
  border-right: 5px solid #00cccc;
  border-bottom: 5px solid #00cccc;
  border-top: 5px solid #00cccc;
 }

 #thh3{
  font-family: "Times New Roman";
  text-align: center;
  font-size: 30px;
  border-left: 5px solid #00cccc;
  border-right: 5px solid #00cccc;
  border-bottom: 5px solid #00cccc;
  border-top: 5px solid #00cccc;
 }


 #datatable{
  /*border: 1px solid #FF4500;*/
  width: 400px;
  height: 60px;
  border-collapse: collapse;
  position: absolute;
    left:5px;
  
  
 }


 #datatable1{
  width: 600px;
  height: 60px;
  border-collapse: collapse;
  position: absolute;
    left:530px;

 }

 #especi{
  font-family: "Times New Roman";
  text-align: center;
  font-size: 30px;
  position: absolute;
            top: 200px;
            left:580px;

 }

 #dire1{
   text-shadow: -1px 0 #ccfff5, 0 1px #ccfff5, 1px 0 #009999, 0 -1px #009999;
  font-family: "Times New Roman";
  position: absolute;
            font-size: 40px;
            top: 2px;
            left:30px;
            border-bottom: 5px solid #00cccc;}


            #modal1{
              text-shadow: -1px 0 #ccfff5, 0 1px #ccfff5, 1px 0 #009999, 0 -1px #009999;
  font-family: "Times New Roman";
            font-size: 30px;
            border-bottom: 5px solid #00cccc;
            }

</style>

</head>
@section('contenido')
<body id="bo">
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif

    <div class="container">

    <nav class="navbar navbar-light bg-light" id="na2">
  <h1 id="dire1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v13h-1V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51L2 2.118V15H1V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zM0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
  <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
</svg>Directorio de Especialidades</h1>
  <!--Menu desplegable  -->

 
 <!--fin de menu desplegable  -->
</nav>
</div>

  <a id ="nn2"  type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#ndoctor">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg>Agregar Especialidad</a> 


<a id ="nn3"  type="button" class="btn btn-outline-info" href="/pantallainicio/odontologo">
 Atras</a> 





<div  class="container" id="dd"><!-- es necesario para que funcione el boton de buscar por nombre
y numero de identidad agrupar todo en un un vid ya que no se hace crea u conflicto la pantilla de extencion
 ademas se debe incluir la liberia de boostrap y la libreria de datatable en la vista 
 ademas de al final de la pagina el scritp de java y despues el scritp de date table
 para que funcione correctamente-->
 <div class="list-group">

 
 
<table id="datatable1" class="table">
<thead class="table table-striped table-bordered">
<tr>
<th id="thh1"colspan="4" >Especialidades Agregadas</th>
</tr>
  <tr id="can">
    <th id="thh1" >Nº </th>
    <th  id="thh2">Nombre </th>
    <th id="thh3"colspan="2">Especialidades</th>
    

  </tr>
  </thead>
  <tbody>
  <tr>
  @forelse($especialidads as $tag) 
   <td>{{$tag->odontologo_id}}</td>
  <td>{{$tag->odontologo->nombres}}</td>
  <td> {{$tag->odontologo->especialidad}}<br> {{$tag->Especialidad}}
   </td>
   <td>
   
   <buttton type="button" class="btn btn-danger" data-toggle="modal" data-target="#modall"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
</svg>
      Eliminar
  </button>

   </td>
   <div class="modal fade" id="modall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> Eliminar Especialidad Agregada</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar la especialidad agregada {{$tag->Especialidad}} del odontologo {{$tag->odontologo->nombres}} <br> {{$tag->odontologo->apellidos}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form method="post" action="{{route('especialidad.borrar',['id'=>$tag->odontologo->id])}}">

                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger">
                  </form>
              </div>
          </div>
      </div>
  </div>
    
  
  </tr>
  @empty
  <h1 id="especi">No hay Especialidad agregadas Existentes</h1>
        @endforelse
    
  </div>

     
     </tbody>
</table> 


<table id="datatable" class="container">
<thead class="table table-striped table-bordered">
  <tr id="can">
  <th id="thh1">Nombre</th>
    
    <th id="thh1">Especialidades</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  @forelse($odontologos as $tag) 


   <td> {{$tag->nombres}} <br> {{$tag->apellidos}}
   </td>
   <td> {{$tag->especialidad}}
   </td>

    
  
  </tr>
  @empty
         vacio
        @endforelse
    
  </div>

     
     </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->
</form  action="">
<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        
        </div>
        </div>
        </div>

<!-- Modal 2 -->
        <div class="modal fade" id="ndoctor">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="modal1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v13h-1V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51L2 2.118V15H1V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zM0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
  <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
</svg> Especialidad Nueva</h4>      
            </div>
              <!--Barra de desplazamiento-->
              <div style="width: 450px; height: 550px; overflow-y: scroll;">
            <div class="modal-body"> 


                    <form method="post" action="/pantallainicio/nueva/especialidad">
                      @csrf
                      
        <label for="state_id" class="control-label">Odontologo:</label>
        <select name="odontologo_id" class="form-control">
        <option disabled selected>Seleccione un odontologo</option>
         <?php
        $getOdontologo =$mysqli->query("select * from odontologos order by id");
        while($f=$getOdontologo->fetch_object()) {
          echo $f->id;
          echo $f->nombres;
          echo $f->apellidos;
          ?>
          
          <option value="<?php echo $f->id; ?>"><?php echo $f->nombres;?><?php echo $f->apellidos;?></option>
          <?php
        } 
        ?>
        </select>


                      <div class="form-group">
                          <label for="nombres">Nombre Especialidad:</label>
                          <input type="text" class="form-control-file" name="nombres" id="nombres" placeholder="Ingresar el  nombre de la Especialidad">
                      </div>


                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Guardar Especialidad</button>
              </div>
                  </form>
                  </div>
                  </div>
               


      
        
        
        
        
        
      </div>
      
 
      
</div>



</body>

@include('nuevoDoctor')
@endsection

</html>