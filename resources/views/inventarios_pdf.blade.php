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
<body style="margin:margen_horizontal;">

<header style="height:3em;">
<p><strong> Reportes </strong></p>
</header>

 <div class="card-body">
            <div class="table-responsive">
    <h5 style="text-align : center ">Inventarios de la Clínica</h5>
     <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
<thead style="background-color:#D3E0EA">
<tr>
<th scope="col">Código</th>
<th scope="col">Producto</th>
<th scope="col">Inventario de Seguridad </th>
<th scope="col">Inventario Actual </th>
<th scope="col">Monto por Unidad </th>
</tr>
</thead>
<tbody>
@forelse($inventarios as $inventario)
<tr>
<th scope="row">{{$inventario->id}}</th>
<th scope="row">{{$inventario->producto}}</th>
<th scope="row">{{$inventario->stockseguridad}}</th>
<th scope="row">{{$inventario->stockactual}}</th>
<th scope="row">{{$inventario->monto}}</th>
</tr>
@empty
<tr>No hay inventarios existentes</tr>
@endforelse
  </tbody>

</table>
</div>
</div>
<footer>
<p> <strong> Clínica Odontólogica Smile Software </strong> </p>
</footer>




    



</body>
</html>