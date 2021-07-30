@extends('Plantilla.datospersonales')
@section('titulo','Documentos Clínicos')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  
    


</head>
<body>
    @section('cuerpo')
 
    <div class="container" id="vPrincipal">
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
 <div class="card mb-3">
          <div class="card-header">
              <h2><img src="{{ asset('Imagenes/doc.jpg') }}"  width="7%" height="7%" > Documentos Clínicos</h2>
            <p>En esta ventana  muestran los archivos de los pacientes que se han registrado en la clínica por cada Odontólogo que a sido atendido,se suben los archivos de los pacientes a la base de datos y se puede descargar el archivo en formato pdf, word o excel</p>
            
                 <button type="button"  class="btn btn-info" data-toggle="modal" data-target="#SubirDoc" style="position:relative; margin: 10px; " >
                  <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                  Subir Archivo</button>
          </div>
      <!--fin de tarjeta -->

          <!-- inicia el contenido -->
        
      <div id="content" class="card-body"  >
            <div class="card border-info mb-3" style="max-width: 50rem; position: relative;
  left: 100px;
  ">
              @forelse ($pacientes->documentos as $tag)

            <div class="card-header text-white bg-dark mb-10" ><h4> Documento Clínico</h4></div>
            <div class="card-body">
              <h5 class="card-title">Paciente: {{$tag->paciente->nombres}}  {{$tag->paciente->apellidos}}</h5>
              <p class="card-text" ><img  style=" margin-left:0%;" src="{{ asset('Imagenes/doc.png') }}"  id="imgdocu"class="rounded float-right" width="200" height="220" style="" >
                  <br>
                  <time>Fecha: {{$tag->fecha}}</time><br>
                  <p>Odontólogo: {{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</p>
                  <p>Observaciones: {{$tag->observaciones}} </p>
                <a target="_blank" href="/documento/{{$tag->imagen1}}" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
              <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
            </svg> Descargar Archivo </a>
              </p>
            </div>
            <div class="card-footer bg-transparent border-info">
                        
                         
                          <button data-target="#editDoc-{{$tag->id}}" type="button"  data-toggle="modal" class="btn btn-outline-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                          </svg></button>

                          <button type="button" class="btn btn-outline-danger"data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                            </svg>
                            Eliminar 
                            </button>
                        </div> 
                      
                          @empty
                          <p style="margin: 2em;"> No hay archivos de historial disponible   </p>
                              
                          @endforelse
            </div>
          </div>
              
       <!-- fin del contenido-->                 

                  <!--Modal para Subir documento-->        
              
                <div class="modal fade bd-example-modal-lg" id="SubirDoc" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg " role="document">
                    <div class="modal-content">
                    <div class="modal-header" style="background-color: #276678;color:white;">
                        <h5 class="modal-title" id="exampleModalLabel">
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                        <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                      </svg>
                        Subir Documento Clínico</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- <div style="width: 450px; height: 550px; overflow-y: scroll;"> -->
                    <div class="modal-body">
                        <!--Contenido -->
                        <?php
                          $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                          $mysqli->set_charset("utf8");
                          ?>
                        <form id="formuDoc" method="post" action="{{route('documentos.guardar',['id'=>$pacientes->id])}}" enctype="multipart/form-data" onsubmit = "return calcularEdad(document.getElementById('fechanaci').value)">
                        @csrf
                        <!-- Doctor -->
                            <label for="state_id" class="control-label">Doctor responsable del tratamiento:</label>
                            <select required name="odontologo_id" class="form-control">
                            <option value="" disabled selected>Seleccione un Doctor</option>
                            <?php
                            $getDoctor =$mysqli->query("select * from odontologos order by id");
                            while($f=$getDoctor->fetch_object()) {
                              echo $f->nombres;
                              echo $f->apellidos;

                              ?>
                            
                              <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos;?></option>
                              <?php
                            } 
                            ?>
                            </select>
                            <hr>

                                  <label for="identidad" >Documento a subir  (Seleccione un archivo a subir pdf, word, excel, etc.. "):</label>
                                  <input required type="file" class="form-control-file" name="imagen1" id="imagen1"placeholder="Seleccione un archivo a subir dpf, word, excel, etc.. ">
                                        
                                

                                  <div class="form-group">
                                    <label for="observaciones">observaciones:</label>
                                    <input required type="text" class="form-control-file" name="observaciones" id="observaciones" accept="application/pdf" >
                                  </div>
                                  

                                  <div class="modal-footer">
                                  <button type="button" onclick="location.href='{{route('documentos.ver',['id'=>$pacientes->id])}}'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                                  <input type="reset" class="btn btn-danger">
                                <button type="submit" class="btn btn-primary" >Guardar Archivo</button>
                              </div>
                                  </form>

                          </div>   
                    </div> 
                </div> 
          </div> 
                  <!--fin de subir -->

 <!--Modal para editar documento-->        
              @forelse ($pacientes->documentos as $tag)
                <div class="modal fade bd-example-modal-lg" id="editDoc-{{$tag->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg " role="document">
                    <div class="modal-content">
                    <div class="modal-header" style="background-color: #276678;color:white;">
                        <h3 class="modal-title" id="exampleModalLabel">
                      <img src="{{ asset('Imagenes/editar.png') }}"  width="7%" height="7%" >
                        Editar Documento Clínico</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- <div style="width: 450px; height: 550px; overflow-y: scroll;"> -->
                    <div class="modal-body">
                        <!--Contenido -->
                            <?php
                          $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                          $mysqli->set_charset("utf8");
                          ?>
                            <form id="formuDoc" method="post" action="{{route('documento.editar',['id'=>$pacientes->id,'iddocumento'=>$tag->id])}}" enctype="multipart/form-data" onsubmit = "return calcularEdad(document.getElementById('fechanaci').value)">
                              @csrf
                              @method('put')
                              
                              <div class="form-group">
                                <label for="observaciones">Doctor:</label>
                                <input required type="text" class="form-control-file" name="odontologo_id" id="observaciones" value="{{$tag->odontologo->id}}">
                              </div>

                                            <div class="form-group">
                                  <label for="identidad">documento a subir:</label>
                                  <input required type="file" class="form-control-file" name="imagen" id="imagen">
                                  </div>
                                        
                                

                                  <div class="form-group">
                                    <label for="observaciones">Observaciones:</label>
                                    <input required type="text" class="form-control-file" name="observaciones" id="observaciones" value="{{$tag->observaciones}}">
                                  </div>
                              

                                  <div class="modal-footer">
                                  <input type="reset" class="btn btn-danger">
                                <button type="submit" class="btn btn-primary" >Guardar Cambios</button>
                              </div>
                            </form>
                      </div> 
              </div> 
          </div> 
      </div> 



                          @empty     
                          @endforelse
                    <!-- -->
                    <!--Modal para eliminar-->
                          @forelse ($pacientes->documentos as $tag)
                        
                          <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog " role="document">
                             <div class="modal-content" style="position:absolute; top:100px;">
                               <div class="modal-header" style="background-color:#276678; color:white;">
                                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                </svg>Eliminar Documentos Clínicos</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <!--<span aria-hidden="true">&times;</span>-->
                                  </button>
                                  </div>
                                <div class="modal-body">
                                ¿Desea realmente eliminar el Documento Clínico {{ $tag->imagen1}} ?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  <form method="post" action="{{route('documento.borrar',['id'=>$tag->id])}}">
                                  @csrf
                                  @method('delete')
                                  <input type="submit" value="Eliminar" class="btn btn-danger">
                                                    </form>
                               </div>
                            </div>
                            </div>
                        </div> 
                        @empty
                          
                              
                          @endforelse
                  
        
      


  </div>

    

</div>      
 
    <script>

function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

var items = document.querySelectorAll(".timeline li");
 
// code for the isElementInViewport function
 
function callbackFunc() {
  for (var i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
  }
}
 
window.addEventListener("load", callbackFunc);
window.addEventListener("scroll", callbackFunc);
        
    </script>
    
</body>
</html>
@endsection