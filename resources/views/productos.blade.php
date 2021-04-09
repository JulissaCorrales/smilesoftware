@extends('Plantilla.Plantilla')
@canany(['isAdmin','isOdontologo'])
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Productos</title>
<style>
#padre{

    width: 70%;
    height: 600px;
    position: absolute;
    top:80px;
    left: 320px;
    margin-bottom:7em;
}
table {
width:100%;
}
#btn{
float:right;
margin-top:2em;

}
#dd{
margin-bottom:2em;
position: absolute; width: 900px;height:10%;
}
#titulo{
color: #4d4d4d;
text-shadow: 1px 0 #ff9966, 0 1px #ff9966, 1px 0 #ff9966, 0 1px #ff9966;
font-family: Times New Roman, Times, serif;
margin:1em;
}
</style>
</head>
@section('contenido')
<body>


<div class="container" id="padre" >
<nav>
<button onclick="location.href='{{route('tratamiento.vista')}}'"
style="background-color:#45B39D;float:left;margin-top:3em; "  class="btn btn-secondary">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
</svg>
Atrás
</button>
@can('create',App\Producto::class)
<a id="btn"type="button" type="button"class="btn btn-outline-info" data-toggle="modal" data-target="#nuevoproducto">Nuevo Producto
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
<path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
</a>
@endcan
<!-- Modal para nuevo producto -->
<div class="modal fade" id="nuevoproducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header" style="background-color:#26A69A;color:white">
<h5 class="modal-title" align="center" id="exampleModalLabel">
Nuevo producto</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="post" action="/tratamiento/{{$tratamientos->id}}/producto/Nuevo">
@csrf
<div class="form-group">
<label for="categoria">Nombre:</label>
<input type="text" class="form-control-file" name="nombre" id="nombre" placeholder="Ingrese el nombre del producto">
</div>

<div class="form-group">
<label for="tipo">Permite Descuento :</label>
<select  name="permitedescuento" id="permitedescuento" class="form-control-file" style="padding:0.4em;">
<option disabled selected>Seleccione</option>
<option>Si</option>
<option>No</option>
</select>
</div>
<div class="form-group">
<label for="monto">Precio:</label>
<input  type="number"  step="any"  class="form-control-file" name="monto" id="monto" placeholder="Ingrese el precio del producto">
</div>
<div class="modal-footer">
<input type="reset" class="btn btn-danger">
<button type="submit" class="btn btn-primary" >Guardar Producto</button>
</div>
</form>
</div>
</div>
</div>
</div>

<!-- Fin modal nuevo producto -->


</nav>
<h3 id="titulo" style="text-align:center">Productos Disponibles para el Tratamiento: <br>{{$tratamientos->categoria}}</h3>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(session('mensaje'))
<div class="alert alert-success">
{{session('mensaje')}}
</div>
@endif
<div  class="container"  id="dd"><!-- para que funcione paginacion con buscador -->
<table id="datatable" class="table table-striped table-warning">
<thead class="thead-dark">
<tr id="can">
<th>N°</th>
<th >Nombre</th>
<th>Permite Descuento</th>
<th>Precio Final</th>
<th>Opciones</th>
</tr>
</thead>

<tbody >

    @forelse ($tratamientos->productos as $tag) 
    <tr>
    <td>
    {{ $tag->id}}
    </td>
    <td>
    {{ $tag->nombre}}
    </td>
    <td>
    {{ $tag->permitedescuento}}
    </td>
    <td>
    {{ $tag->monto}}
    </td>
    <td>

    @can('update',$tag)
    <a class="btn btn-warning " type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaleditar-{{$tag->id}}">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
    <!-- Editar -->
    </a>
    @else
    ninguna -.-
    @endcan
    <!-- Inicio modal editar -->

    <!-- Modal -->
    <div class="modal fade" id="modaleditar-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-image: linear-gradient(to left,  #F7DC6F,#F9E79F);" >
            <h5 class="modal-title" id="exampleModalScrollableTitle">

            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
          </svg>
            Edición del Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{route('producto.update',['id'=> $tag->id])}} ">

            @csrf
            @method('put')
            <!-- Nombre-->

            <div class="form-group" id="divcate">
            <label for="nombre" class="control-label">Nombre del Producto:</label>
            <input type="text"  class="form-control-file" placeholder="Ingrese nombre producto" name="nombre" id="nombre"   value="{{ $tag->nombre }}"> 
            </div>

            <!-- Permite Descuento-->
            <div class="form-group" id="div2">
            <label for="detalle" class="control-label">Permite Descuento:</label>
            <select  name="permitedescuento" id="permitedescuento" class="form-control-file" style="padding:0.4em;">
            <option disabled selected>Actual: {{ $tag->permitedescuento }}</option>
            <option>Si</option>
            <option>No</option>
            </select>
            </div>

            <!-- Precio Final-->
            <div class="form-group" id="div2">
            <label for="detalle" class="control-label">Precio Final:</label>
            <input  type="number"  step="any"  class="form-control-file" name="monto" id="monto" placeholder="Ingrese valor "value="{{ $tag->monto}}">
            </div>
            <div class="form-group" align="center"id="div6">
            <input type="reset" class="btn btn-dark">
            <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
            Actualizar
            </button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- fin modal editar -->
    <!--  boton de eliminar inicio-->
    @can('delete',$tag)
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
    </svg>
    <!-- Eliminar -->
    </button>
    @else
    ninguna
    @endcan

    <!-- Modal para eliminar -->
    <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header" style="background-image: linear-gradient(to left,  #E6B0AA,#F9E79F);">
    <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
    </svg> Eliminar producto</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <!--<span aria-hidden="true">&times;</span>-->
    </button>
    </div>
    <div class="modal-body">
    ¿Desea realmente eliminar el tratamiento {{$tag->nombre}}?
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    <form method="post" action="{{route('producto.borrar',['id'=>$tag->id])}}">

    @csrf
    @method('delete')
    <input type="submit" value="Eliminar" class="btn btn-danger">
    </form>
    </div>
    </div>
    </div>
    </div>



    <!--  modal de eliminar fin-->

    </td>
    </tr>
    @empty
    <tr><td> vacio</td></tr>
    @endforelse
<tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->



</div>
</body>

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Buscador de Productos:",
      "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
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
</div><!-- fin del DIV contenedor de la buscador!!!  -->
@endcanany
@endsection
</html>