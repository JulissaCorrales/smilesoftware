<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/estilospdf.css')}}">

<style>
    @page { size: 21.59cm 27.94cm landscape; }
table, th, td {
  border: 1px solid #00303F; 
  border-collapse: collapse;
}
th {
  background-color:#276678; 
  color:white;
  text-align: center;    
line-height: 2;
}
td,th {
  padding: 7px;
     
}
  </style>
</head>
<body>

<header>
<p><strong > Reportes </strong></p>
</header>


    <h5 style="text-align : center ">Inventarios de la Clínica</h5>
<div class="table-responsive">
    <table class="table" style="" >
<thead class="thead-dark">
<tr class="border border-secondary" style="text-align : center ">
<th >Código</th>
<th class="mx-auto">Producto</th>
<th >Inventario de Seguridad </th>
<th >Inventario Actual </th>
<th >Monto por Unidad </th>
</tr>
</thead>
<tbody>
@forelse($inventarios as $inventario)
<tr>
<td >{{$inventario->id}}</th>
<td >{{$inventario->producto}}</th>
<td >{{$inventario->stockseguridad}}</th>
<td>{{$inventario->stockactual}}</th>
<td >{{$inventario->monto}}</th>
</tr>
@empty
<tr>No hay inventarios existentes</tr>
@endforelse
  </tbody>

</table>
</div>
<footer>
<p> <strong> Clínica Odontólogica Smile Software </strong> </p>
</footer>




    



</body>
</html>