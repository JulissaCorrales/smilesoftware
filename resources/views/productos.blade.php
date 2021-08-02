@extends('Plantilla.dashboard')
@canany(['isAdmin','isOdontologo'])

@section('titulo','Productos')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Productos</title>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" >

</head>
@section('content')
<body id="page-top">
<div class="container" id="padre">
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
           <h4><img class="prod" style=" margin-left:0%;" src="{{ asset('Imagenes/produc.png') }}"  id="pro" width="10%;" height="10%"> Productos Disponibles para el Tratamiento: {{$tratamientos->categoria}}</h4>
                        <p>En esta sección se muestra todos los productos disponibles para los tratamientos que se brindan dentro de la clínica, se pueden agregar nuevos productos, así como tambien borrar y editar los productos existentes.</p>
                        
            </div>
                


                <div>
                    @can('create',App\Producto::class)
                    <button style="margin:10px" id="btn" type="button"class="btn btn-outline-info" data-toggle="modal" data-target="#nuevoproducto">Nuevo Producto
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    </button>
                    @endcan
                <div>
        


      



              <!-- Modal para nuevo producto -->
              <div class="modal fade" id="nuevoproducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header" style=" background-color:#276678; color:white;">
                          <h4 class="modal-title"  id="exampleModalLabel"><img class="produ"  src="{{ asset('Imagenes/newp.png') }}"  id="produ" width="20%;" height="20%">
                          Nuevo producto</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          <div class="modal-body">
                              <form method="post" action="/tratamiento/{{$tratamientos->id}}/producto/Nuevo">
                                    @csrf
                                    <div class="form-group">
                                        <label for="categoria">Nombre:</label>
                                        <input required type="text" maxlength="100" minlength="3" class="form-control-file" name="nombre" id="nombre" placeholder="Ingrese el nombre del producto">
                                        @error('categoria')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>  
                                @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tipo">Permite Descuento :</label>
                                        <select required name="permitedescuento" id="permitedescuento" class="form-control-file" style="padding:0.4em;">
                                        <option value="" disabled selected>Seleccione</option>
                                        <option>Si</option>
                                        <option>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="monto">Precio:</label>
                                        <input  required type="number" min="1" pattern="^[0-9]+"oninput="this.value = Math.max(this.value, 1)" step="any"  class="form-control-file" name="monto" id="monto" placeholder="Ingrese el precio del producto">
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

        <div class="card-body">
            <div class="table-responsive"><!-- para que funcione paginacion con buscador -->
                <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
                <thead >
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
                              <button class="btn btn-outline-success" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaleditar-{{$tag->id}}">
                                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                  <!-- Editar -->
                              </button>
                              @else
                              
                              @endcan
                                <!-- Inicio modal editar -->

                                <!-- Modal -->
                                <div class="modal fade" id="modaleditar-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header" style=" background-color:#276678; color:white;" >
                                        <h4 class="modal-title" id="exampleModalScrollableTitle">
<img class="eprodu"  src="{{ asset('Imagenes/editp.png') }}"  id="eprodu" width="20%;" height="20%">
                                        Edición del Producto</h4>
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
                                        <input type="text" required  class="form-control-file" placeholder="Ingrese nombre producto" name="nombre" id="nombre"   value="{{ $tag->nombre }}"> 
                                        </div>

                                        <!-- Permite Descuento-->
                                        <div class="form-group" id="div2">
                                        <label for="detalle" class="control-label">Permite Descuento:</label>
                                        <select required name="permitedescuento" id="permitedescuento" class="form-control-file" style="padding:0.4em;">
                                        <option value="{{ $tag->permitedescuento }}" selected>Actual: {{ $tag->permitedescuento }}</option>
                                        <option>Si</option>
                                        <option>No</option>
                                        </select>
                                        </div>

                                        <!-- Precio Final-->
                                        <div class="form-group" id="div2">
                                        <label for="detalle" class="control-label">Precio Final:</label>
                                        <input  required type="number"  step="any"  class="form-control-file" name="monto" pattern="^[0-9]+" min="0" id="monto" placeholder="Ingrese valor "value="{{ $tag->monto}}">
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
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                </svg>
                                <!-- Eliminar -->
                                </button>
                                @else
                                
                                @endcan

                              <!-- Modal para eliminar -->
                              <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header" style=" background-color:#276678; color:white;">
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

                              <!--  modal de eliminar fin-->

                           </td>
                      </tr>
                     @empty
                  <tr><td> vacio</td></tr>
                  @endforelse
                <tbody>
                </table>
            </div>
          </div>

</div>

<div>
                    <button style="margin:10px" onclick="location.href='{{route('tratamiento.vista')}}'" class="btn btn-outline-dark">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                        </svg>
                        Atrás
                    </button>
                  </div>
<script>
$(document).ready( function () {
    $('#datatable1').DataTable( {
    language: {
        search: "Búscador de Productos:",
      "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
        "infoEmpty": "Mostrando 0 to 0 of 0 Productos",
        "infoFiltered": "(Filtrado de _MAX_ total Productos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Productos",
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
</body>
</div><!-- fin del DIV contenedor de la buscador!!!  -->
@endcanany
@endsection
</html>