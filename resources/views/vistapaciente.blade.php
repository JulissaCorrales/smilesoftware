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
            left:30px;
}

#bo{
  background-color: #ccffff;

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
  <h1 id="dire">Directorio de Paciente</h1>
</nav>
<div class="item-input-inset" align="right">
<label class="item-input-wrapper" > 
       <button type="button" class="btn btn-secondary" id="b1">Configuraciones de Pacientes</button>
       <button type="button" class="btn btn-secondary" id="b2">Descargar</button>
       <a href="{{route('paciente.nuevo')}}" > <button link rel="stylesheet" type="button" class="btn btn-success" id="b3">Nuevo Paciente </button> </a>  
</div>
</div>






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
    <th>Apellidos</th>
    <th>Identidad</th>
    <th>Accion</th>
  </tr>
  </thead>
  <tbody>
  <tr>
      @forelse($pacientes as $paciente)
     <td><a  class="btn btn-outline-info"  href="vista/paciente/{{ $paciente->id}}"  id="lista">{{$paciente->id}}</a></td>
     <td>{{$paciente->nombres}}</td>
     <td>{{$paciente->apellidos}}</td>
     <td>{{$paciente->identidad}}</td>
     <td>
     

     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$paciente->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>
      Eliminar
  </button>

  </td>

  <!-- Modal -->
  <div class="modal fade" id="modal-{{$paciente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> Eliminar Paciente</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el paciente {{$paciente->nombres}} {{$paciente->apellidos}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form method="post" action="{{route('paciente.borrar',['id'=>$paciente->id])}}">

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