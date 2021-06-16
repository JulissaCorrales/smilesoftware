@extends('datospersonales')
@section('titulo','Evoluciones')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<style>

 /* #evolucion{
  width: 200px;
  height: 50px;
  border-radius: 12px;
  background-color: #F6F5F5;
  position: relative;
float:right;
margin-bottom:2em;
margin-right:2em;
margin-top:-6.5em;
 } */

textarea{
overflow-y: scroll;
height: 100px;
resize: none;
}

</style>
</head>
<body>
@section('cuerpo')
<div class="card">
  <!--Menu desplegable  -->
<div class="container">
<div>@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                </li>
            @endforeach
         
        </ul>
        
    </div>
@endif</div>
</div>
<div class="card-header" >
<h3 ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-clockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
<path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
</svg> 
Evoluciones Medicas del Paciente</h3>
<p>En esta sección podrá crear la evolución que ha tenido el plan de tratamiento que seleccione, estas se podrán eliminar y editar.</p>

@can('create',App\Evoluciones::class)
    <button  id="evolucion" class="btn btn-outline-info"   class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg> Nueva Evolucion 
    </button>
   @endcan 
  </div>
<!-- modal para nueva evolucion -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#276678;color:white">
        <h5 class="modal-title" id="exampleModalCenterTitle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
        <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
      </svg>

        Nueva Evolución</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<form method="POST" action="{{route('evolucion.guardar',['id'=>$pacientes->id])}}">
@csrf
  <?php
  $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
  $mysqli->set_charset("utf8");
  ?>
<div class="col-md-6" style="margin:2em;">
<textarea required id="w3review" maxlength="255" placeholder="Escriba la evolucion del plan de tratamiento" name="caja" value="text" rows="4" cols="52" ></textarea>
</div>

<div id="disv4"  style="margin:2em;margin-left:10%;">
  <select class="form-control" required name="tratamiento_id" id="disv3">
  <option value="" disabled selected>Seleccione un Plan de Tratamiento</option>
  @forelse ($pacientes->planestratamientos as $tag) 
  <option value={{$tag->id}} >{{$tag->tratamiento->categoria}}</option>
  @empty
  <option disabled selected>¡¡Todavia no tiene un plan de tratamiento!! Asignele uno por favor.</option>
  todavia no tiene una evolucion de algun plan de tratamiento.
  @endforelse
  </select>
</div>
<div id="disv4">
<button type="submit" style="margin-left:40%;" class="btn btn-primary" id="guardar" >Guardar </button>
</div>
</form>
      </div>
    </div>
  </div>
</div>
<!-- fin modal para nueva evolucion -->

<!-- Contenido -->
 <div class="card-body" style="margin-top:2em;">
<div id="divtabla" class="table-responsive"  width="100%">
<table id="datatable" class="table table-bordered" width="100%" cellspacing="0">
  <thead>
  <th>Número</th>
  <th>Evoluciones Medicas</th>
  <th>Accion</th>
  </thead>
    <tbody>  
  @forelse ($pacientes->evoluciones as $tag)             
    <tr>
    <td>{{$tag->id}}</td>
      <td>  
        <p> PlanTratamiento: {{ $tag->planestratamiento->tratamiento->categoria}} <br>
          Paciente:{{$pacientes->nombres}}  {{$pacientes->apellidos}} <br>
        Evolucion:<br>
         <textarea name="areaev" id="areaev"  disabled={isDibabled}> {{ $tag->evolucion}} </textarea>  
        </p>
      </td>
  <!-- Eliminar evolucion -->
  <td>
    @can('delete',$tag)
    <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
    </svg>
    <!-- Sacar evolucion -->
    </button>
    @endcan
    <!-- Modal -->
    <div class="modal fade" id="modal-{{$tag->id}}"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header" style="background-color:#276678;color:white;">
                      <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                      </svg> Eliminar Evolución</h5>
                      <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                      <!--<span aria-hidden="true">&times;</span>-->
                      </button>
                  </div>
                  <div class="modal-body">
                      ¿Desea realmente eliminar la evolución {{$tag->evolucion}}?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <form method="post" action="{{route('evolucion.borrar',['id'=>$tag->id])}}">

                          @csrf
                          @method('delete')
                          <input type="submit" value="Eliminar" class="btn btn-danger">
                      </form>
                  </div>
              </div>
          </div>
      </div>
                
    <!-- fin de eliminar evolucion -->
<!-- Editar evolucion -->

<!--button de editar evolucion -->
  @can('update',$tag)
      <button type="button"  class="btn btn-warning" data-toggle="modal" data-target="#modaleditar-{{$tag->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
      </svg>
      </button>
     <!-- -->
@endcan
    

    <!--modal de editar evoluciones -->
  <div class="modal fade" id="modaleditar-{{$tag->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" >
          <div class="modal-content" >
              <div class="modal-header"style="background-color:#276678; color:white;  height:60px; ">
                  <h5 class="modal-title" id="exampleModalLabel"> <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                  <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                  </svg>
                  Editar Evolución </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <form method="POST" action="{{route('evolucion.update',['id'=>$pacientes->id,'id_evolucion'=>$tag->id])}}">
                @csrf
                @method('put')
                <?php
                $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                $mysqli->set_charset("utf8");
                ?>
                <textarea required id="w3review" maxlength="255" placeholder="Escriba la evolucion del plan de tratamiento" name="caja" value="text" rows="4" cols="60" >{{$tag->evolucion}}</textarea>
                
                <div id="disv4" style="margin-top:1em;">
                <select class="form-control" required name="tratamiento_id" id="disv3">
                <option value={{$tag->plantratamiento_id}}  selected>Plan de Tratamiento actual:{{ $tag->planestratamiento->tratamiento->categoria}}</option>
                @forelse ($pacientes->planestratamientos as $tag) 
                <option value={{$tag->id}} >{{$tag->tratamiento->categoria}}</option>
                @empty
                <option disabled selected>¡¡Todavia no tiene un plan de tratamiento!! Asignele uno por favor.</option>
                todavia no tiene una evolucion de algun plan de tratamiento.
                @endforelse
                </select>
                </div>
                <div id="disv4" class="modal-footer"  >
                <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background-color:#276678; color:white;">Cerrar</button>
                <input type="reset" class="btn btn-danger">
                <button type="submit" class="btn btn-primary" id="guardar" >Guardar </button>
         
                </div>
                </form>
              </div>
          </div>
      </div>
  </div>
<!-- fin elimar evolucion -->
@empty
@endforelse
  
 </tr>
</tbody>
</table>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->
</div>
<body>

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    "sScrollY": "500px",
    language: {
        search: "Busqueda por nombre:",
 "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "",
        "infoFiltered": "(Filtrado de _MAX_ total evoluciones)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Evoluciones",
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
@endsection
