@extends('datospersonales')
@section('titulo','Comentarios Administrativos')
@section('cuerpo')
@can('create',App\Comentario::class)
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <style>

    #text{
        position: absolute;
        left: 500px;
        top:300px;
        height: 300px;
        width: 700px;
        bottom: -40px;
    }
    #w3review{
        position: relative;
        bottom: -60px;
        left: 20px;
        overflow-y:scroll;
        overflow-x:hidden;
    }
    #guardar{
        position: absolute;
        left: 680px;
        top:200px;
    }
    </style>
</head>
<body>
<div class="container">
@if($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
    @if(session('mensaje'))
        <div class="alert alert-success" style="position:absolute; top: 200px; left: 455px;">
            {{session('mensaje')}}
        </div>
    @endif

    <h3 style="text-align: center;padding: 1rem;font-size:30px; font-family: Times New Roman, Times, serif;  background-color: #283e3e;
    color: white; position: absolute;top:120px; width: 800px; left:455px; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
    </svg> Comentarios Administrativos </h3>
    <div id="text">
        <!-- Tabla de comentarios administrativos -->

        <table id="datatable" class="table table-striped table-secondary">
           <thead>
               <tr style="background-color:#00b3b3;font-family: Times New Roman, Times, serif; border-color:#000000;">
                 <th >#</th>
                 <th style="background-color:#00b3b3;">Comentarios Administrativos</th>
                  <th style= " background-color:#00b3b3f;">Accion</th>
                </tr>
            </thead>

            <tbody >
                @forelse($pacientes->comentarios as $ver)
                <tr style="height: 80px; font-size:20px; font-family: Times New Roman, Times, serif;">
                   <td> {{$ver->id}}</td>
                    <td>{{$ver->comentarios}}</td>
    
                    <td>
                        <!--button de editar comentario -->
                        @can('update',$ver)
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modall-{{$ver->id}}"  style="  background-color:white;color:#00cc99; "> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                            </svg></button>
                        @endcan
            <!-- -->
                        <!--modal de editar comentario Administrativo -->
                    <div class="modal fade" id="modall-{{$ver->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" >
                            <div class="modal-content" style="position:absolute; left:50px; top:100px;">
                                <div class="modal-header"style="background-color:#293d3d; color:white;  height:80px; ">
                                    <h5 class="modal-title" id="exampleModalLabel"> <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
                                </svg>Editar el Comentario Administrativo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body"  style="background-color:#e6faff;">

                                <form method="POST" action="{{route('comentario.update',['id'=>$pacientes->id,'id2'=>$ver->id])}}">
                                            @csrf
                                            @method('put')

                                <input required type="text"  class="form-control-file" name="caja"  value="{{ $ver->comentarios }}"  rows="4" cols="100">

                                <div class="modal-footer" >
                        <button type="submit" class="btn btn-primary" style="border-color:#ff8533; background-color:#ff8533; color:white" >Guardar </button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background-color:#b37700; color:white; ">Cerrar</button>
                        </div>

                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
            <!--borrar Comentario Administrativo -->
            @can('delete',$ver)
                <button type="button"  style="background-color:white; color:#ff3300; " class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$ver->id}}"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                </svg>     
                </button> 
            @endcan
                <!--Modal de Eliminar Comentario Admininistrativo -->
                <div class="modal fade" id="modal-{{$ver->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="background-color:#f2e6ff;  position: absolute; left: 480px; top:190px; ">
                        <div class="modal-content">
                            <div class="modal-header"  style="background-color:#293d3d; color:white;  height:60px; ">
                                <h5 class="modal-title" id="exampleModalLabel">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                </svg> Eliminar el Comentario Administrativo </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body"  style="background-color:#e6faff;">
                                ¿Desea realmente eliminar el comentario {{$ver->comentarios}} ?
                            </div>
                            <div class="modal-footer" style=";height: 60px;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background-color:#ff704d;">Cerrar</button>
                                <form method="post" action="{{route('comentario.borrar',['id'=>$ver->id])}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Eliminar" class="btn btn-danger"  style="background-color:#ff5050;">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                </td>
                <!-- Cierre de la Ventana Modal -->
                @empty
                <td colspan="3">No hay Comentarios Administrativo</td>
                </tr>
                @endforelse
        </tbody>
</table> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->


    <!-- Nvas de la parte inferior-->
   

</div>
</div>

<div>
<!-- Booton de agregar Comentario Administrativo-->
@can('create',App\Comentario::class)
<button style="  position: absolute;left: 1000px;top:250px; border-color:#00cc99; background-color:#ffb366; color:#1a001a; " type="button" data-toggle="modal" data-target="#create" class="btn btn-secondary">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
              </svg>Agregar Comentario</button> 
              @endcan
</div>

</body>
<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Buscador de comentarios:",
      "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "Mostrando 0 to 0 of 0 comentarios",
        "infoFiltered": "(Filtrado de _MAX_ total comentarios)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ comentarios",
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
@include('comentariosver')
@endcan



@endsection