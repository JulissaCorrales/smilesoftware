@extends('Plantilla.dashboard')
@canany(['isAdmin','isSecretaria','isOdontologo'])
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @section('titulo','Inventarios') 
  </head>

 
  <body>
 <div class="card mb-3"> 

          <!-- titulo -->
          <div class="card-header">
              <h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                   <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                </svg>Inventarios de la Clínica</h4>
                <p>En esta Sección se muestra los Iventarios Existentes en la actualidad y en seguridad, también se podra editar datos, crear un nuevos Inventarios, borrar los inventarios existentes y descargar el archivo el archivo con todos los Inventarios.</p>
          </div>
          <!-- -->


          <!-- boton de nuevo inventario -->
          <div style="width:;">
            
                @can('create',App\Inventario::class)
                    <button type="button" id="btnagregar"  class="btn btn-success " data-toggle="modal" data-target="#nuevoinventario" style="position:absolute; left:900px; margin: 10px;" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-plus-square-dotted" viewBox="0 0 16 16">
                          <path d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0H2.5zm2.292 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zm1.833 0h-.916v1h.916V0zm1.834 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0zm2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1V2.5zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 5.708v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 7.542v.916h1v-.916H0zm15 .916h1v-.916h-1v.916zM0 9.375v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .916v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458H0zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487zM.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029l-.194.981zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1h.458zm-9.625 0h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zm1.834-1v1h.916v-1h-.916zm1.833 1h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg>
                          Nuevo Inventario
                    </button>
                
            </div>
            @endcan
          <!-- -->

          <!-- Modal para nuevo Inventario -->
          <!-- Modal -->
              <div class="modal fade" data-keyboard="false" data-backdrop="static" id="nuevoinventario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content"  style="background-color:#EAF2F8;">
                    <div class="modal-header" style="background-color:#5D6D7E;color:white">
                      <h5 class="modal-title" id="exampleModalCenterTitle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16">
                      <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                    </svg>
                      Ingreso de Inventario</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="/inventarioNuevo">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label for="producto">Nombre del Inventario:</label>
                                        <input type="text" required class="form-control-file" name="producto" id="producto" placeholder="Ingresar nombre del inventario">
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                          <label for="stockseguridad">Existencias de Seguridad:</label>
                                              <input type="number" min="1" pattern="^[0-9]+" class="form-control custom-select" name="stockseguridad" id="stockseguridad" placeholder="Ingrese Valor" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)">
                                      </div>
                                      <div class="col">
                                          <label for="stockactual">Existencias  Actuales:</label>
                                       <input type="number" min="1" pattern="^[0-9]+" class="form-control custom-select" name="stockactual" id="stockactual" placeholder="Ingresar Valor" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)">
                                   </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="monto">Precio:</label>
                                        <input type="number" min="1" pattern="^[0-9]+" class="form-control custom-select" name="monto" id="monto" placeholder="Ingresar Precio" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)">
                                    </div>
                                <div class="modal-footer">
                                  <input type="reset" class="btn btn-danger">
                                  <button type="submit" class="btn btn-primary" >Guardar Inventario</button>
                              </div>
                            </form>
                    </div>
                  </div>
                </div>
              </div>
          <!--  -->


          <!-- boton para descargar inventario -->
          <div style="width:;">
             @can('descargarinventarios',App\Inventario::class)
            <a type="button" class="btn btn-dark " id="btndescarga"  href="{{route('descargarPDFInventarios')}}" style="margin: 10px;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                    <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                  </svg>  Descargar
            </a>
          </div>
             @endcan
          <!-- -->
        


          <!-- comienza la tabla-->
          <div class="card-body">
            <div class="table-responsive">
              <!-- tabla -->
              <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                              <th>Inventario</th>
                              <th> Existencias de Seguridad</th>
                              <th>Existencias Actuales</th>
                              <th>Precio</th>
                              <th>Opciones</th>
                            </tr>
                    </thead>
                          
                    <tbody>
                        <tr>
                          @forelse($inventarios as $inventario)
                            <td>{{$inventario->producto}}</td>
                            <td>{{$inventario->stockseguridad}}</td>
                            <td>{{$inventario->stockactual}}</td>
                            <td>{{$inventario->monto}}</td>
                            <td>
                            @can('update',$inventario)
                                <a class="btn btn-warning " data-toggle="modal" data-target="#editarinventarios-{{$inventario->id}}">
                                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                <!-- Editar -->
                                </a>
                              @endcan 
                            <!-- modal editar -->´
                            <!-- Modal -->
                            <div class="modal fade" data-keyboard="false" data-backdrop="static"  id="editarinventarios-{{$inventario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content"  style="background-color:#EAF2F8;">
                                        <div class="modal-header" style="background-image: linear-gradient(to left,  #F8C471,#F9E79F);">
                                          <h5 class="modal-title" id="exampleModalCenterTitle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                              <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                            </svg>
                                              Edición del Inventario
                                          </h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form method="post" action="{{route('inventario.update',['id'=> $inventario-> id])}} ">
                                          @csrf
                                          @method('put')

                                          <!-- Producto-->
                                             <div class="form-group" id="divcate">
                                                <label for="producto" class="control-label">Nombre del Inventario:</label>
                                                 <input type="text" required class="form-control-file" placeholder="Ingrese nombre del inventario" name="producto" id="producto"   value="{{ $inventario->producto}}"> 
                                              </div>
                                                  <div class="row">
                                                    <div class="col">
                                                          <label for="stockseguridad">Existencias de Seguridad:</label>
                                                              <input type="number" min="1" pattern="^[0-9]+" class="form-control custom-select" name="stockseguridad" id="stockseguridad" placeholder="Ingrese Valor" value="{{$inventario->stockseguridad}}" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)">
                                                        </div>
                                                    <div class="col">
                                                      <label for="stockactual">Existencias  Actuales:</label>
                                                      <input type="number" min="1" pattern="^[0-9]+" class="form-control custom-select" name="stockactual" id="stockactual" placeholder="Ingresar Valor" value="{{$inventario->stockactual}}" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)">
                                                  </div>
                                         </div>
                                        <!-- monto-->
                                        <div class="form-group" id="div2">
                                            <label for="detalle" class="control-label">Precio:</label>
                                            <input type="number" min="1" pattern="^[0-9]+" class="form-control custom-select" name="monto" id="monto" placeholder="Ingresar Precio" value="{{$inventario->monto}}" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)">
                                          </div>
                                          <div class="form-group" id="div6" align="center">
                                              <input type="reset" class="btn btn-danger">
                                              <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                                                  Actualizar
                                              </button>
                                          </div>
                                        </div>
                                      </form>

                                    </div>

                                  </div>
                            </div>
           
                              <!-- Fin modal Editar -->


                              <!-- botton borrar -->
                              @can('delete',$inventario)
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$inventario->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                  </svg>
                                  <!-- Sacar Inventario -->
                                </button>
                              @endcan




                                <!-- Modal  donde muestra si hay inventario-->
                                <div class="modal fade" id="modal-{{$inventario->id}}"  data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header" style="background-image: linear-gradient(to left,  #EC7063,#F9E79F);">
                                                  <h5 class="modal-title" id="exampleModalLabel">
                                                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                      </svg> Eliminar Inventario
                                                  </h5>
                                                  <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                                  <!--<span aria-hidden="true">&times;</span>-->
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  ¿Desea realmente eliminar el inventario {{$inventario->producto}}?
                                              </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <form method="post" action="{{route('inventario.borrar',['id'=>$inventario->id])}}">

                                                            @csrf
                                                            @method('delete')
                                                            <input type="submit" value="Eliminar" class="btn btn-danger">
                                                        </form>
                                                      </button>
                                                  </div>
                                            </div>
                                      </div>
                                  </div>
                                <!-- fin -->

                        
                          
                        </tr>
                          @empty
                             <td colspan="5"><h3>¡¡No hay Inventarios Existentes!!</h3></td>
                          @endforelse
                    </tbody>
              </table>
            </div>
          </div>




    </div>

  </body>

</html>
@endcanany
@endsection