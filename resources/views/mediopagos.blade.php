@extends('Plantilla.dashboard')
@canany(['isAdmin','isSecretaria'])
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     @section('titulo','Medios de pagos')
    
</head>

<body >
 <div>

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

 <div class="card mb-3">
      <div class="card-header">
           <h4><img class="med" style=" margin-left:0%;" src="{{ asset('Imagenes/mediospagos.png') }}"  id="med" width="10%;" height="10%"> Medios de Pagos</h4>
            <p>En esta sección se muestra  los medios de pagos disponibles con los que cuenta la clínica, se pueden agregar nuevos medios de pagos, así como también borrar y editar los medios de pagos existentes</p>
            
            @can('create',App\Mediopago::class)
            <div>
            <button id="botonN" type="button"class="btn btn-outline-info" data-toggle="modal" data-target="#nuevoMedioPago" ><span id="interno">
            Ingresar medio de Pago <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
              <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
            </svg></span>
            </button>

</div>

            <!-- modal para crear nuevo medio de pago -->
            <div class="modal fade" id="nuevoMedioPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header"  style="background-color:#276678;color:white">
                    <h5 class="modal-title" id="exampleModalLabel">
                    <img class="med" style=" margin-left:0%;" src="{{ asset('Imagenes/crearmedio.png') }}"  id="med" width="15%;" height="15%">

                    Creación de un Nuevo Medio De pago</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    

                  <form method="post" action="/mediopagoNuevo">
                                  @csrf
                                  
                                  <div class="form-group">
                                      <label for="nombre">Medio de Pago:</label>
                                      <input required type="text" class="form-control-file" name="nombre" id="nombre"  maxlength="60" placeholder="ingresar nombre del medio de pago">
                                  </div>
                                          
                              <div class="modal-footer">
                                <!-- <button type="button" onclick="location.href='/pantallainicio/mediopago'"class="btn btn-secondary" data-dismiss="modal">Atrás</button> -->
                                <input type="reset" class="btn btn-danger">
                                <button type="submit" class="btn btn-primary" >Guardar Medio de Pago</button>
                            </div>
                          </form>




                  </div>
                </div>
              </div>
            </div>
            <!--fin del modal-->
</div>

</div>
@endcan

<div class="table-responsive">
    <table id="datatable" class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
        <thead >
          <tr >
            <th>Medio de Pago</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
          </thead>
        <tbody> 
              <tr >
                @forelse($mediopagos as $mediopago)
                  <td>{{$mediopago->nombre}}</td>
                  
                  <td>
                     @can('update',$mediopago)
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong-{{$mediopago->id}}" >
                        Editar Medio de Pago<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                       </button>

                    <!-- modal editar -->
                     <!-- Modal -->
                   <div class="modal fade" id="exampleModalLong-{{$mediopago->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header" style="background-color:#276678;color:white">
                                  <h5 class="modal-title"  id="exampleModalLongTitle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                    </svg>

                                       Editar Medio de Pago
                      
                                     </h5>
                                    <button type="button"  style="color:white"class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                             <div class="modal-body">

                              <form method="post" action="{{route('mediopago.update',['id'=> $mediopago-> id])}} ">

                                  @csrf
                                  @method('put')
                                  <!-- Producto-->
                                              
                                  <div class="form-group" id="divcate">
                                                  <label for="nombre" class="control-label">Nombre del Medio de Pago:</label>
                                                  <input required type="text" maxlength="60" class="form-control-file" placeholder="Ingrese nombre del inventario" name="nombre" id="nombre"   value="{{$mediopago->nombre}}"> 
                                                  </div>
                                
                                <div class="modal-footer" id="div6">
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

                    @else
                    No tiene el permiso
                    @endcan
                 </td>

                  <td>
                    @can('delete',$mediopago)
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$mediopago->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg>
                    Eliminar Medio de pago 
                    </button>
                    @else
                    No tiene el permiso
                    @endcan
                    
                        <!-- Modal -->
                        <div class="modal fade" id="modal-{{$mediopago->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered " role="document">
                                  <div class="modal-content">
                                      <div class="modal-header" style="background-color:#276678;color:white">
                                          <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                          </svg> Eliminar Medio de pago</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <!--<span aria-hidden="true">&times;</span>-->
                                          </button>
                                      </div>
                                      <div class="modal-body" style="word-wrap: break-word;">
                                          ¿Desea realmente eliminar el medio de pago {{$mediopago->nombre}}?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                          <form method="post" action="{{route('mediopago.borrar',['id'=>$mediopago->id])}}">

                                              @csrf
                                              @method('delete')
                                              <input type="submit" value="Eliminar" class="btn btn-danger">
                                          </form>
                                      </div>
                                  </div>

                              </div>
                          </div>
                </td>
              </tr>
           @empty
            <h1>No hay Medios de pagos  Existentes</h1>
            @endforelse
        <tbody>
  </table>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->

  </div>
  </div>

</body>

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Búscador de Medios de pagos :",
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "Mostrando 0 to 0 of 0 Medios de pagos",
        "infoFiltered": "(Filtrado de _MAX_ total Medios de pagos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Medios de pagos",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
    }}
});
} );
</script>




</html>
@endcanany
@endsection