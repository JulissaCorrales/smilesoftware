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

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 20px;
  text-align: left;
  background-color: #F0FFFF;
}

tr:nth-child(even) {
  background-color: #00CED1;
}

btn{
text-align: center;

}



#lista{
  background-color: #F0FFFF;
  

}

 #lista:hover{
   border: 1px solid #FF4500;
   color: hotpink;
 

 }

</style>

</head>
@section('contenido')
<body>
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif

    <div class="container">

    <nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Directorio de Pacientes</span>
</nav>
<div class="item-input-inset" align="right">
<label class="item-input-wrapper" > 
       <button type="button" class="btn btn-secondary">Configuraciones de Pacientes</button>
       <button type="button" class="btn btn-secondary">Descargar</button>
       <a href="http://smilesoftware.test/paciente/nuevo" <button link rel="stylesheet" type="button" class="btn btn-success">Nuevo Paciente </button> </a>  
</div>
</div>






<div  class="container">
 <div class="list-group">
 
<table id="datatable">
<thead>
  <tr>
    <th class="table-primary">Nº</th>
    <th class="table-primary">Nombre</th>
    <th class="table-primary">Apellidos</th>
    <th class="table-primary">Identidad</th>
    <th class="table-primary">Accion</th>
  </tr>
  </thead>
  <tbody>
  <tr>
      @foreach($pacientes as $paciente)
     <td><a  class="btn btn-outline-info"  href="/paciente/{{ $paciente->id}}"  id="lista">{{$paciente->id}}</a></td>
     <td>{{$paciente->nombres}}</td>
     <td>{{$paciente->apellidos}}</td>
     <td>{{$paciente->identidad}}</td>
     <td>
     <a  class="btn btn-warning"  href="/paciente/{{ $paciente->id}}/editar">Editar</a>
     <button type="button" class="btn btn-danger">Eliminar</button>
     </td>
     </tr>
     @endforeach
     </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>




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


</div>
</div>

@endsection

</html>