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
            <div class="modal fade" id="nuevoMedioPago" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                      <label for="nombre" class="control-label @error('nombre') is-invalid @enderror" >Medio de Pago:</label>
                                      <input required type="text" class="form-control-file" name="nombre" id="nombre"  maxlength="60" minlength="3"  onkeypress="return SoloLetras(event);" pattern="[A-Za-zñÑ ]{3,60}" placeholder="Ingresar nombre del medio de pago" onblur="valeft()" value="{{ old('nombre') }}">
                                     @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                        <!-- Editar Medio de Pago -->
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                       </button>

                    <!-- modal editar -->
                     <!-- Modal -->
                   <div class="modal fade" id="exampleModalLong-{{$mediopago->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header" style="background-color:#276678;color:white">
                                  <h5 class="modal-title"  id="exampleModalLongTitle">
                                     <img style=" margin-left:0%;" src="{{ asset('Imagenes/editar.png') }}"   width="10%;" height="10%">

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
                                                  <input required type="text" maxlength="60" minlength="3" class="form-control-file" placeholder="Ingrese nombre del inventario" name="nombre" id="nombre"   value="{{$mediopago->nombre}}" onkeypress="return SoloLetras(event);" pattern="[A-Za-zñÑ ]{3,60}" onblur="valeft()"> 
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
                    <button style="text-align:center;"type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$mediopago->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg>
                    <!-- Eliminar Medio de pago  -->
                    </button>
                    @else
                    No tiene el permiso
                    @endcan
                    
                        <!-- Modal -->
                        <div class="modal fade" id="modal-{{$mediopago->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered " role="document">
                                  <div class="modal-content">
                                      <div class="modal-header" style="background-color:#276678;color:white">
                                          <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                          </svg> Eliminar Medio de pago</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true" style="color: white;">&times;</span>
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

<!-- script para que solo acepte letras -->
<script>


function SoloLetras(e)
{
key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toString();

letras = "A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Á É Í Ó Ú a b c d e f g h i j k l m n o p q r s t u v w x y z á é í ó ú ñ Ñ";

especiales = [8, 65];
tecla_especial = false
for(var i in especiales) {
if(key == especiales[i]){
 tecla_especial = true;
 break;
}
}

if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
 
 return false;
}
}

// -- Función para aceptar espacios -- //
function valeft(){
 
    var val = document.getElementById("nombre").value;
    var tam = val.length;
 
        for(i=0;i<tam;i++){
            if(!isNaN(val[i]) && val[i] != " ")
            document.getElementById("nombre").value='';
            }
}

</script>
<!-- fin de script -->


</html>
@endcanany
@endsection