@extends('Plantilla.dashboard')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('titulo','Laboratorios')

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
           <h3><img class="lab"  src="{{ asset('Imagenes/imagen1.png') }}"  id="lab" width="8%;" height="8%"> Laboratorio</h3>
            <p>En esta sección se muestra todos los laboratorios de la clínica, se pueden agregar nuevos laboratorio, así como tambien borrar y editar los laboratorios existentes</p>
     @can('create',App\Laboratorio::class)
            <button id="internoC" type="button"class="btn btn-outline-info" data-toggle="modal" data-target="#nuevoLab" ><span id="interno"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
            </svg>  Nuevo Laboratorio</span>
            </button>
          </div>
          @endcan
            </div>
            <div>
       

        <!-- modal para crear nuevo laboratorio -->
<div class="modal fade" id="nuevoLab" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="background-color:#276678;color:white">
          <h3 class="modal-title" id="exampleModalLabel">
          <img style=" margin-left:0%;" src="{{ asset('Imagenes/lab.png') }}"   width="20%;" height="20%">

          Nuevo Laboratorio</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"id="btncerrar">
                                            <span aria-hidden="true">×</span><span class="sr-only">
                                                Cerrar</span></button>
        </div>
      <div class="modal-body">
        
         <form method="post" id="formu" action="/laboratorioNuevo">
                      @csrf
                      
                      <div class="form-group">
                          <label for="nombreLaboratorio">Nombre del Laboratorio:</label>
                          <input required type="text" class="form-control-file @error('nombreLaboratorio') is-invalid @enderror" name="nombreLaboratorio" id="nombreLaboratorio" placeholder="Ingresar nombre del laboratorio"  maxlength="60" minlength="3" onkeypress="return SoloLetras(event);" pattern="[A-Za-zñÑ ]{3,60}" onblur="valeft()" value="{{ old('nombreLaboratorio') }}">
                             @error('nombreLaboratorio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                      </div>

                      <div class="form-group">
                        <label for="detalle">Detalle:</label>
                        <input maxlength="255" minlength="3" required type="text" class="form-control-file @error('detalle') is-invalid @enderror" name="detalle" id="detalle" placeholder="Detalle del laboratorio" value="{{ old('detalle') }}">
                       @error('detalle')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="porPagar">Por Pagar:</label>
                        <input required type="number" class="form-control-file @error('porPagar') is-invalid @enderror" min="1" pattern="^[0-9]+" name="porPagar" id="porPagar" placeholder="Ingrese la cantidad por pagar"formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)" value="{{ old('porPagar') }}">
                       @error('porPagar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                              
                  <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="reset" class="btn btn-danger">
                    <button type="submit" class="btn btn-primary" >Guardar Laboratorio</button>
                 </div>
              </form>



        </div>
    </div>
  </div>
</div>
<!--fin del modal-->


        
        


<div class="table-responsive">
    <table id="datatable" class="table table-bordered" width="100%" cellspacing="0">
        <thead >
          <tr >
            <th>Laboratorio</th>
            <th>Detalle</th>
            <th>Por Pagar</th>

            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
          </thead>
        <tbody> 
            @forelse ($laboratorios as $lab)
              <tr>
                
                  <td>{{$lab->nombreLaboratorio}}</td>
                      
                  <td><textarea readonly    disabled style="width:100%; border:0; ">{{$lab->detalle}}</textarea></td>

                  <td>{{$lab->porPagar}}</td>

                  <td> 
                    @can('update',$lab)
                    
                     <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLong-{{$lab->id}}" >
                        <!-- Editar laboratorio -->
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                      </button>

                     <!-- modal editar -->
                      <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong-{{$lab->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#276678;color:white">
                              <h3 class="modal-title"  id="exampleModalLongTitle">
                              <img style=" margin-left:0%;" src="{{ asset('Imagenes/editar.png') }}"   width="10%;" height="10%">
                                   Editar laboratorio
                      
                                  </h3>
                                  <button type="button"  style="color:white"class="close" data-dismiss="modal" aria-label="Close">
                                  <span style="color:whitesmoke;"aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                          <div class="modal-body">
                             <form method="post" action="{{route('laboratorio.actualizar',['id'=> $lab-> id])}} ">
                              @csrf
                                @method('put')
                                  
                                  <div class="form-group">
                                      <label for="nombre">Nombre del Laboratorio:</label>
                                      <input required type="text" class="form-control-file" name="nombreLaboratorio" id="nombreLaboratorio" value="{{$lab->nombreLaboratorio}}" maxlength="60" minlength="3" onkeypress="return SoloLetras(event);" pattern="[A-Za-zñÑ ]{3,60}" onblur="valeft()">
                                   </div>

                                  <div class="form-group">
                                    <label for="nombre">Detalle:</label>
                                    <input required type="text" class="form-control-file" name="detalle" id="detalle" value="{{$lab->detalle}}" >
                                    </div>

                                  <div class="form-group">
                                    <label for="nombre">Por Pagar:</label>
                                    <input required type="number" class="form-control-file" min="1" pattern="^[0-9]+" name="porPagar" id="porPagar" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)"value="{{$lab->porPagar}}">
                                    </div>
                                          
                                  <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <input type="reset" class="btn btn-danger">
                                    <button type="submit" class="btn btn-primary" >Actualizar</button>
                                    </div>
                             </form>
                  


                             </div>
                         </div>
                       </div>
                    </div>


                      @else
                      No autorizado
                      @endcan
                </td>
              
                  <td>
                      @can('delete',$lab)
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-{{$lab->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                            </svg>
                            <!-- Eliminar Laboratorio -->
                            </button>
                            @else
                      No autorizado
                      @endcan
                      
                     </td>    
                        <!-- Modal -->
                        <div class="modal fade" id="modal-{{$lab->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content" >
                                      <div class="modal-header" style="background-color:#276678;color:white">
                                          <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                            </svg> Eliminar laboratorio</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span style="color: whitesmoke;" aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          ¿Desea realmente eliminar el laboratorio?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                          
                                          <form method="post" action="{{route('laboratorio.borrar',['id'=>$lab->id])}}">

                                              @csrf
                                              @method ('delete')

                                              <input type="submit" value="Eliminar" class="btn btn-danger">

                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                   
                  
               </tr>
           @empty<br>
            <h4> No hay laboratorios disponibles!</h4>
              @endforelse 
        <tbody>
      </table>
</div>
 </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->

 

</body>
</div>
<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Buscar laboratorio :",
  "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "Mostrando 0 to 0 of 0 laboratorios",
        "infoFiltered": "(Filtrado de _MAX_ total laboratorios)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ laboratorios",
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
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
   $("#btncerrar").click(function(event) {
	   $("#formu")[0].reset();
   });
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
</script>
<!-- scrip para textarea -->
    <script>
        let area = document.querySelectorAll(".cajas-texto")
        
        window.addEventListener("DOMContentLoaded", () => {
          area.forEach((elemento) => {
            elemento.style.height = `${elemento.scrollHeight}px`
          })
        })    
    </script>
<!--  -->
</html>
@endsection
