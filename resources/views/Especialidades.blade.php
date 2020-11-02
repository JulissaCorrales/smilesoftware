

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
  background-color: #ffad33;

 }

 #cue{
  border: #00cccc  2px solid;
 }

 #na{
  width: 600px;
  height: 60px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff); 
    position: absolute;
    top:200px;
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
            left:30px;
}

#bo{
  background-color: #ccffff;

}

#n2{
    position: absolute;
            font-size:12px;
            top: 15px;
            left:590px;
            width: 150px;
  height: 50px;
}

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
  <h1 id="dire">Directorio de Especialidades</h1>
  <!--Menu desplegable  -->

 
 <!--fin de menu desplegable  -->
</nav>
</div>

<div class="btn-group btn-group-lg" id="d2" >
  <a id ="n2" type="button" class="btn btn-outline-info" href="/pantallainicio/nueva/especialidad">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg>Agregar Especialidad </a> </div>





<div  class="container" id="dd"><!-- es necesario para que funcione el boton de buscar por nombre
y numero de identidad agrupar todo en un un vid ya que no se hace crea u conflicto la pantilla de extencion
 ademas se debe incluir la liberia de boostrap y la libreria de datatable en la vista 
 ademas de al final de la pagina el scritp de java y despues el scritp de date table
 para que funcione correctamente-->
 <div class="list-group">
 
<table id="datatable" class="table">
<thead class="table table-striped table-bordered">
  <tr id="can">
    <th >Nº </th>
    <th>Nombre</th>
  </tr>
  </thead>
  <tbody>
  <tr>
      @forelse($especialidads as $especialidad)
     <td><a  class="btn btn-outline-info"  href=""  id="lista">{{  $especialidad->id}}</a></td>
     <td>{{$especialidad->Especialidad}}</td>
     
     
     
     </tr>
    

  </td>
 
  
  </div>

     </tr> 
     @empty
     <h1>No hay Pacientes Existentes</h1>
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