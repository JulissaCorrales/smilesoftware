@extends('Plantilla.Plantilla')
<!DOCTYPE html>
<html lang="en">
@section('Titulo','Paciente')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
@section('contenido')
<body>
    

<h1>hola Fredal, Juli y Paola </h1>
<div class="container">
<table id="datatable">
<thead>
  <tr>
    <th>Nº.</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Identidad</th>
    <th>Accion</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>9</td>
    <td>Eduardo</td>
    <td>Aguilar</td>
    <td>0801198505896</td>
    <td><button type="button" class="btn btn-danger">Eliminar Paciente</button></td>
  </tr>
  <tr>
    <td>80</td>
    <td>Alexandra</td>
    <td>Aguilera</td>
     <td>0801198505897</td>
     <td><button type="button" class="btn btn-danger">Eliminar Paciente</button></td>
  </tr> 
  <tr>
    <td>90</td>
    <td>Junior</td>
    <td>Salinas</td>
     <td>0801198505898</td>
     <td><button type="button" class="btn btn-danger">Eliminar Paciente</button></td>
  </tr> 
  </tbody>
  </table>
 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>


</body>


<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Busqueda:"
    }
});
} );
</script>
<h1>prueba</h1>
</div>
@endsection
</html>
