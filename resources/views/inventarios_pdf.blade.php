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

<header  height="150px;">
@forelse($logotipos  as $tag)
    <img  class="logo" src="{{Storage::url($tag->logo)}}"  alt="image" width="20%;" height="110%";>
    @empty
 
    <img class="logo"  src="{{ asset('Imagenes/logo4.jpg') }}"  id="logo1" width="20%;" height="110%"> 
    @endforelse 

</header>

<strong > Reportes </strong>
    <h5 style="text-align : center ">Inventarios de la Clínica</h5>
<div class="table-responsive">
    <table class="table" style="" >
<thead class="thead-dark">
<tr class="border border-secondary" style="text-align : center ">
 <th  style="text-align:center;width:230px;">Producto</th>
<<<<<<< HEAD
                              <th  style="text-align: center;">Cantidad Inicial</th> 
=======
<th  style="text-align: center;">Cantidad Inicial</th> 
>>>>>>> ee1cb89e1f7d4aeaba821980065fbb2e0b85a0f5
                                <th  style="text-align: center;">Cantidad Entrada</th>
                                <th  style="text-align: center;">Cantidad Salida</th>

                                  <th  style="text-align: center; ">Cantidad Actual</th>
<<<<<<< HEAD
                                 <th  style="text-align: center;  ">Total Inicial</th>
                                  <th  style="text-align: center;">Total Entrada </th>
                               <th  style="text-align: center;">Total por Producto </th>
=======
                                 <th  style="text-align: center; ">Total Inicial</th>
                                  <th  style="text-align: center;">Total Entrada </th>
                               <th  style="text-align: center;">Total por Producto</th>
   
</tr>
>>>>>>> ee1cb89e1f7d4aeaba821980065fbb2e0b85a0f5
</thead>
<tbody>
@forelse($inventarios as $inventario)
<tr>

 <td>{{$inventario->producto}}</td>
<@foreach($datos as $dat)
                          
                            @if($dat->id == $inventario->id)
                              <td style="background-color:#f0f5f5 ;"><b>{{$dat->CantidadExistente}}<b></td>

                              @if($dat->cantidad == null)
                                <td> 0.00 </td>
                              @else
                                <td> {{$dat->cantidad}}</td>
                              @endif

                             
                              @if($dat->cantidadsalida == null)
                                <td> 0.00 </td>
                              @else
                                <td> {{$dat->cantidadsalida}}</td>
                              @endif

                <td>{{$dat->CantidadExistente + $dat->cantidad - $dat->cantidadsalida }}</td>

                              <td style="background-color:#f0f5f5 ;"><b>Lps.{{$dat->precio}}</b> </td> 
@if($dat->monto == null)
                                <td> <b>0.00 </b></td>
                              @else
                                <td> <b>{{$dat->monto}}</b></td>
                              @endif




          @endif
          @endforeach
</tr>
@empty
<tr>No hay inventarios existentes</tr>
@endforelse
  </tbody>

</table>
</div>
<footer>
<p> <b> Clínica Odontólogica Smile Software </b> </p>
</footer>




    



</body>
</html>