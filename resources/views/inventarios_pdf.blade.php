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
</head>
<body>

<header>
<p><strong> Reportes </strong></p>
</header>

<div class="container">
    <h5 style="text-align : center ">Inventario de la Clinica</h5>
    <table class="table table-striped" >
<thead class="table-light">
<tr>
<th scope="col">Codigo</th>
<th scope="col">Producto</th>
<th scope="col">Inventario de Seguridad </th>
<th scope="col">Inventario Actual </th>
<th scope="col">Monto por Unidad </th>
</tr>
</thead>
<tbody>
@foreach($inventarios as $inventario)
<tr>
<th scope="row">{{$inventario->id}}</th>
<th scope="row">{{$inventario->producto}}</th>
<th scope="row">{{$inventario->stockseguridad}}</th>
<th scope="row">{{$inventario->stockactual}}</th>
<th scope="row">{{$inventario->monto}}</th>
</tr>
@endforeach
  </tbody>

</table>
</div>
<footer>
<p> <strong> Clinica Odontologica Smile Software </strong> </p>
</footer>




    



</body>
</html>