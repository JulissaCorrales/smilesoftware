@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('titulo','Recaudaciones')</title>

    <style>
body {
  margin: 0;
  font-family: sans-serif;
}


.container {
  position: absolute;
  top: 20%;
  left: 35%;
}

table {
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  position: relative;  
  background-color:#c2f0f0;
  
}
th,
td {
  color: #000;
}
th {
  text-align: center;
}
thead th {
  background-color:#33cccc;
}
tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
 #divtabla{
    margin:2em; 
     width: 700px;
      height: auto;
    }
</style>
</head>
  

<body>
    @section('cuerpo')
    <div class="container">
        <h3 style="margin-left:4em;">Por planes de tratamiento del paciente</h3>
      <div id="divtabla">
        <table id="datatable" class="table" >
            <thead>
                <tr>
                    <th>Prestacion</th>
                    <th>Productos</th>
                    <th>Total Presupuesto</th>
                </tr>
            </thead>
            <tbody>
            <!-- prestacion -->
            @forelse($pacientes->planestratamientos as $planes)
              <tr>
                <td>{{$planes->tratamiento->categoria}}</td>
                 <!-- productos -->
                <td> 
                @forelse($planes->tratamiento->productos as $producto)
                  <p> {{$producto->nombre}}</p>
                @empty
                vacio
                @endforelse
                </td>
              <!-- Total presupuestos -->
                <td>
                @forelse($planes->recaudaciones as $recaudaciones)
                         <p>{{$recaudaciones->preciototal}} </p>    
                           
                          
                          @empty
                          No tiene 
                          @endforelse
                
                </td>
            @empty
          <td>Vacio</td>
            @endforelse 
              </tr>
            </tbody>
            <tfoot>
            <tr>
            <td><h4>Total a pagar:</h4></td>
            <td></td>
            <td> 
            <h4>  Lps. {{$totalpagar}}</h4>
            </td>

            </tr>
            </tfoot>
        </table>
  </div>
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Buscar recaudación:",
      "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "Mostrando 0 to 0 of 0 recaudación",
        "infoFiltered": "(Filtrado de _MAX_ total recaudación)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ recaudación",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }

    }
});
} );
</script>
    </div>

    
    </div>
</body>
</html>
@endsection