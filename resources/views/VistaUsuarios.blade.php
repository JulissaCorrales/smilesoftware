@extends('Plantilla.Plantilla')

<!DOCTYPE html>
<html lang="en">
@section('Titulo','Paciente')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    
    <style>

 td{
  border: 1px solid #00cccc;
  text-align: left;
  padding: 20px;
  text-align: left;
  background-color: #ccffff
  
} 



 #lista:hover{
   border: 1px solid #FF4500;
   color: hotpink;
 

 }

 #can{
  background-color: #ffad33;

 }

 #cue{
  border: #00cccc  2px solid;
 }

 #na{
  width: 650px;
  height: 60px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff); 
    position: absolute;
    top:250px;
    left:150px;
  
    
    
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
            left:10px;
}

#bo{
  
}



#d2{
    background-color: #ccffff;
  position: absolute;
            font-size:30px;
            top: 2px;
            left:10px;

}

#n1{
    background-color: #ccffff;
  position: absolute;
  width: 170px;
  height: 45px;
  font-size:14px;
            top: 70px;
            left:525px;

}

#control{
    background-color: #ccffff;
    position: absolute;
            top: 8px;
            left:550px;

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

    <nav class="navbar navbar-light bg-light" id="na">
  <h1 id="dire">Usuarios de la clinica</h1>
  <!--Menu desplegable  -->
  <div class="btn-group" id="control">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="cont"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
</svg>
     
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/pantallainicio/calendario/citadiaria"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-day" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
</svg>Habilitados</a>
    <a class="dropdown-item" href="/pantallainicio/calendario/diaria"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-day" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
</svg>Deshabilitados</a>
    
</div>


 <!--fin de menu desplegable  -->
</nav>



</div>

<div class="btn-group btn-group-lg" id="d1" >
  <a id ="n1" type="button" class="btn btn-outline-info" href="/pantallainicio/usuarios/nuevo">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg>Nuevo usuario</a> </div>





<div  class="container" id="dd"><!-- es necesario para que funcione el boton de buscar por nombre
y numero de identidad agrupar todo en un un vid ya que no se hace crea u conflicto la pantilla de extencion
 ademas se debe incluir la liberia de boostrap y la libreria de datatable en la vista 
 ademas de al final de la pagina el scritp de java y despues el scritp de date table
 para que funcione correctamente-->
 <div class="list-group">
 
<table id="datatable" class="table">
<thead class="table table-striped table-bordered">
  <tr id="can">
    <th >Nº</th>
    <th>Nombre</th>
    <th>Usuario</th>
    <th>Clave</th>
    <th>Permisos</th>
    <th>estado de cuenta</th>
  </tr>
  </thead>
  <tbody>
  <tr>
      @forelse($usuarios as $usuario)
     <td><a  class="btn btn-outline-info"  href=""  id="lista"></a></td>
     <td>{{$usuario->nombre}}</td>
     <td>{{$usuario->usuario}}</td>
     <td>{{$usuario->clave}}</td>
     <td>{{$usuario->estadoCuenta}}</td>
     <td>
     

     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>
      Eliminar
  </button>

  </td>
 
  
  </div>

     </tr> 
     @empty
     <h1>No hay usuarios disponibles</h1>
     @endforelse
     </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->



</body>

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Busqueda por nombre o identidad:"
    }
});
} );
</script>

<!-- escript de datatable con el id de la tabla este muy importante en este caso la tabla es id="datatable"-->
</div>
</div><!-- fin del DIV contenedor de la buscador!!!  -->

@endsection

</html>