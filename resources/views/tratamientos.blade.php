@extends('Plantilla.Plantilla2')
@canany(['isAdmin','isOdontologo','isSecretaria'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamientos</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <style>

#padre{
    margin:1em;
    padding:2em;
    font-family: arial;
   
}

#boton{
  float:right;
  margin:2em;
  padding:5px;
}


#titulo{
    background-color: #d6f5f5;
    position: relative;
    color: #4d4d4d;
    text-shadow: 1px 0 #ff9966, 0 1px #ff9966, 1px 0 #ff9966, 0 1px #ff9966;
    font-family: Times New Roman, Times, serif;
}
</style>
</head>
@section('contenido')
<body>


    <div class="container" id="padre">
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    <h2 id="titulo" style="text-align:center">Tratamientos Disponibles en la Clínica</h2>
    <nav>
    @can('create',App\Tratamiento::class)
        <button id="boton" type="button"class="btn btn-outline-info" data-toggle="modal" data-target="#nuevotratamiento" >Nuevo Tratamiento <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-node-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5a.5.5 0 0 0-1 0v2h-2a.5.5 0 0 0 0 1h2v2a.5.5 0 0 0 1 0v-2h2a.5.5 0 0 0 0-1h-2v-2z"/>
        </svg></button>
@endcan
<!-- modal para crear nuevo tratamiento -->
<div class="modal fade" id="nuevotratamiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="background-color:#26A69A;color:white">
        <h5 class="modal-title" id="exampleModalLabel">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
        <path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/>
        </svg>

        Creación de un Nuevo Tratamiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/tratamientoNuevo">
                      @csrf
                      <div class="form-group">
                          <label for="categoria">Tratamiento:</label>
                          <input type="text" class="form-control-file" name="categoria" id="categoria" placeholder="Ingrese el nombre del tratamiento">
                      </div>
                     
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <select  name="tipo" id="tipo" class="form-control-file" style="padding:1em;">
                        <option disabled selected>Seleccione el tipo</option>
                          <option>Accion Clinica</option>
                          <option>Accion de Laboratorio</option>
                        </select>
                    </div>
                  <div class="modal-footer">
                    <input type="reset" class="btn btn-danger">
                    <button type="submit" class="btn btn-primary" >Guardar</button>
                 </div>
              </form>
      </div>
    </div>
  </div>
</div>

<!--  -->

    </nav>
<table id="datatable" class="table table-striped table-info">

     
  <thead class="thead-dark">
    <tr id="encabezado">
      <th>N°</th>
      <th >Categoria</th>
      <th>Tipo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  
  <tbody>
  <tr>
      @forelse($tratamientos as $tratamiento)
      <td><a  class="btn btn-outline-info"  href="/tratamiento/{{ $tratamiento->id}}/producto"  id="lista">{{$tratamiento->id}}</a></td>
     <td>{{$tratamiento->categoria}}</td>
     <td>{{$tratamiento->tipo}}</td>
     <td>
     @can('update',$tratamiento)
     
       <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong-{{$tratamiento->id}}" >
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
          </button>
      @endcan
    <!-- modal editar -->
          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong-{{$tratamiento->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
          <div class="modal-header" style="background-color:#26A69A;color:white">
          <h5 class="modal-title"  id="exampleModalLongTitle">
           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>

          Editar Tratamiento
               
          </h5>
          <button type="button"  style="color:white"class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
          <form method="post" action="{{route('tratamiento.update',['id'=> $tratamiento->id])}} ">

          @csrf
          @method('put')
          <!-- Categoria-->

          <div class="form-group" id="divcate">
          <label for="categoria" class="control-label">Nombre del Tratamiento:</label>
          <input  style="background-color:#FFFDE7" type="text"  class="form-control-file" placeholder="Ingrese la categoria del gasto" name="categoria" id="categoria  "   value="{{ $tratamiento->categoria }}"> 
          </div>

          <!-- Tipo-->
          <div class="form-group" id="div2">
          <label for="tipo" class="control-label">Tipo:</label>
          <select  name="tipo" id="tipo" class="form-control-file" style="padding:1em;">
          <option disabled selected>Actual:{{ $tratamiento->tipo }}</option>
            <option>Accion Clinica</option>
            <option>Accion de Laboratorio</option>
          </select>
          </div>

          <div class="form-group" id="div6" align="center">
          <input type="reset" class="btn btn-danger">
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

    @can('delete',$tratamiento)
     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modall-{{$tratamiento->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
     <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
     </svg>
      
      </button>
      @else
      Ninguna Disponible
      @endcan
    
  
     </td>
<!-- Modal -->
<div class="modal fade" id="modall-{{$tratamiento->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered"  role="document">
          <div class="modal-content">
              <div class="modal-header" style="background-image: linear-gradient(to left,  #E6B0AA,#F9E79F);">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
          </svg> Eliminar Tratamiento</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el tratamiento {{$tratamiento->categoria}} {{$tratamiento->tipo}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form method="post" action="{{route('tratamiento.borrar',['id'=>$tratamiento->id])}}">

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
     <h1>No hay Tratamientos Existentes</h1>
     @endforelse

<tbody>

</table>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->


</div>
<!-- footer -->
<div class="modal-footer" style="position: relative;
left: -60px;
width: 1200px;
top: 200px; height:70px;
background-color: #e6f9ff;">


<a style="position: absolute;
left: 830px; font-size:18px; font-family: Times New Roman, Times, serif; color:#7a7a52; " href="/">@Smile Software 2021</a>  

@forelse($logotipos  as $tag)
<img  class="logo" id="logo4"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" style="border-radius: 50%;
position: absolute;
left: 1005px;
top: 0px;
height: 70px;
width: 40px;
border-color: #33ccff , 2px;" >
@empty

<img class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3"  style="border-radius: 50%;
position: absolute;
left: 1005px;
top: 0px;
width: 40px;
border-color: #33ccff , 2px;"  > 
@endforelse 
</div>
</div>
<!--fin footer  -->
</body>
<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Buscador de tratamientos:",
      "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "Mostrando 0 to 0 of 0 tratamientos",
        "infoFiltered": "(Filtrado de _MAX_ total tratamientos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ tratamientos",
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
@endcanany
@endsection
</html>