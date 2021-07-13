@extends('Plantilla.datospersonales')
@section('titulo','Comentarios Administrativos')
@section('cuerpo')
@can('create',App\Comentario::class)

<body id="page-top">

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
                <div class="alert alert-success" >
                    {{session('mensaje')}}
                </div>
            @endif

<div class="card mb-3">
        <div class="card-header">
           <h4><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
            </svg> Comentarios Administrativos</h4>
            
             @can('create',App\Comentario::class)
            <button style=" position: relative; margin: 5px;"   data-toggle="modal" data-target="#create" type="button"  class="btn btn-outline-info">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
            </svg>Agregar Comentario</button> 
                        @endcan
            
          
        </div>

    
        <div class="card-body">
         
<!-- Booton de agregar Comentario Administrativo-->
            
            <div class="table-responsive">




<!-- modal para crear comentario -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #d3e0ea;color:black;">
        <h5 class="modal-title" id="exampleModalLabel">Crear Comentario Administrativo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('comentario.guardar',['id'=>$pacientes->id])}}" enctype="multipart/form-data">
           @csrf
      
      <div class="form-group">
        <textarea required id="w3review" style="border: 2px solid #765942;
	border-radius: 10px;
	"  name="caja" value="text" rows="4" cols="52" placeholder="Ingresar el  Comentario Administrativo del Paciente" ></textarea>
        
       </div>
      </div>
      <div class="modal-footer">
        <div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        </div>
        <div>
        <button type="submit"  class="btn btn-primary" id="guardar" >Guardar </button>
        </div>
      </div>
    </div>
  </div>
</div>

</form>


                <!-- Tabla de comentarios administrativos -->

                <table id="datatable" class="table table-bordered"  width="100%" cellspacing="0">
                    <thead>
                            <tr style="font-family: Times New Roman, Times, serif; ">
                              
                                <th >Comentarios Administrativos</th>
                                <th >Acción</th>
                                </tr>
                     </thead>

                    <tbody >
                                @forelse($pacientes->comentarios as $ver)
                                <tr >
                                     
                                    <td>{{$ver->comentarios}}</td>
                    
                                    <td>
                                        <!--button de editar comentario -->
                                        @can('update',$ver)
                                            <button type="button" class="btn btn-outline-success"  data-toggle="modal" data-target="#modall-{{$ver->id}}"  > <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                            </svg></button>
                                        @endcan


                                          <!-- -->
                                        <!--modal de editar comentario Administrativo -->
                                    <div class="modal fade" id="modall-{{$ver->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document" >
                                            <div class="modal-content" style="position:absolute; left:50px; top:100px;">
                                                <div class="modal-header"style="background-color: #d3e0ea; color:black;  height:80px; ">
                                                    <h5 class="modal-title" id="exampleModalLabel"> <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
                                                </svg> Editar el Comentario Administrativo</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body" >

                                                <form method="POST" action="{{route('comentario.update',['id'=>$pacientes->id,'id2'=>$ver->id])}}">
                                                            @csrf
                                                            @method('put')
                                                  
                                              


                                                 <textarea required id="w3review" style="border: 2px solid #765942;
	border-radius: 10px;
	"  name="caja" value="text" rows="4" cols="52"  >{{$ver->comentarios}} 
      
    
     </textarea>
                                                



   
   
<div class="modal-footer" >


                                        <button type="submit" class="btn btn-primary"  >Guardar </button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"  >Cerrar</button>
                                        </div>

                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <!--borrar Comentario Administrativo -->
                            @can('delete',$ver)
                                <button type="button"  ] class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-{{$ver->id}}"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                </svg>     
                                </button> 
                            @endcan
                                <!--Modal de Eliminar Comentario Admininistrativo -->
                                <div class="modal fade" id="modal-{{$ver->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document" style="background-color:#f2e6ff;  position: absolute; left: 480px; top:190px; ">
                                        <div class="modal-content">
                                            <div class="modal-header"  style="background-color: #d3e0ea; color:black;  height:60px; ">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                </svg> Eliminar el Comentario Administrativo </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body"  >
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



</body>


<script>

<?php 
      
    
      foreach($sth as $fila){
?>
  function textarea() {
    document.getElementById('story').value =' <?php echo "Comentario Administrativo Actual:". $fila["comentario"]; ?>';
}


<?php }  ?>

</script>
<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Búscador de comentarios:",
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