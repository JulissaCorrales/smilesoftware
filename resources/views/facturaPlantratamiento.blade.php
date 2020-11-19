@extends('datospersonales')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura: Plan de Tratamiento </title>
    <style>
    #padre{
        margin:4em;
        width:auto;
    }
    
    </style>
</head>
@section('cuerpo')
<body>
    <div id="padre" class="container">
        <table class="table">
            <thead>
                <th>Tratamiento</th>
                <th>Productos</th>
                <th>Precio</th>
                <th>Total a Pagar</th>
            </thead>
            <tbody>

                <td>{{$plantratamientos->tratamiento->categoria}}</td>
                <td>
                @forelse($plantratamientos->tratamiento->productos as $tag)
                <p> {{$tag->nombre}}</p>
               
                @empty
                Todavia no tiene productos registrados,Vaya a la seccion de tratamientos y asignele uno
                @endforelse
                </td>
                <td>
                @forelse($plantratamientos->tratamiento->productos as $tag)
                <p> {{$tag->monto}}</p>
               
                @empty
                Todavia no tiene productos registrados,Vaya a la seccion de tratamientos y asignele uno
                @endforelse
                </td>
                <!-- total a pagar -->
                <td>
                @forelse($plantratamientos->tratamiento->productos as $tag)
                <!-- {{$totalpagar}} -->falta
               
                @empty
                Todavia no tiene productos registrados,Vaya a la seccion de tratamientos y asignele uno
                @endforelse
                </td>
         
            </tbody>
            <tfoot>
            </tfoot>
        
        
        </table>
    </div>
  




</body>
</html>
@endsection