@extends('datospersonales')
@section('titulo','Documentos Clinicos')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  
    
    <style>


    table {
    width:auto;
     height:150px;"
    }

    #upload{
      
       float:right; 
   }


   .timeline {
  position: relative;
  width: 900px;
  margin: 0 auto;
  padding-top: 50px;
  
   }

 

.timeline  div {
  position: relative;
  bottom: 1px;
  width: 900px;
  font-size:20px; font-family: Times New Roman, Times, serif;
  padding: 15px;
 border: 2px solid #ccc;
 border: 5px solid gray;
}
 

    </style>

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
              <h4><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-image-fill" viewBox="0 0 16 16">
            <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
            <path d="M10.564 8.27 14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
             </svg>Documentos Clínicos</h4>
            <p>En esta ventana  muestran muestran los archivos de los pacientes que se han registrado en la clínica por cada Odontólogo que a sido atendido, se puede descargar el archivo en formato pdf, word o excel</p>
            
    
              @can('create',App\Documento::class)
              <button id="upload" onclick="location.href='/pantallainicio/vista/paciente/{{$pacientes->id}}/nuevodocumento'">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                  Subir Archivos</button>
              @endcan

          </div>
      <!--fin de tarjeta -->

          <!-- inicia el contenido -->
        
      <div id="content" class="card-body"  >
            <div class="timeline">
              <table class="table table-bordered" id="datatable1" cellspacing="0">
                  <tbody ><tr>
                    @forelse ($pacientes->documentos as $tag)
                    
                        <div>
                          <time>Fecha: {{$tag->fecha}}</time>
                          <br>
                          <br>
                        <p>Odontólogo: {{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</p>
                          <br>

                          <p>Observaciones: {{$tag->observaciones}}</p>

                          <a target="_blank" href="/documento/{{$tag->imagen1}}" >Vista para PDF o descargar archivo word, excel</a>
                         
                          <button onclick="location.href='{{route('documento.editar',['id'=>$pacientes->id,'iddocumento'=>$tag->id])}}'"  style="border-style: solid;
                            border-color:#00cc99; background-color:white; color:#00cc99;
                            " class="btn btn-secondary">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                          </svg></button>

                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                            </svg>
                            Eliminar 
                            </button>
                        </div> 
                      
                          @empty
                          <p> No hay archivos de historial disponible</p>
                              
                          @endforelse
                      </tr>
</div>
              
              
        
                    

                    <tr>
                          @forelse ($pacientes->documentos as $tag)
                        
                          <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content" style="position:absolute; left:50px; top:100px;">
                               <div class="modal-header" style="background-color:#293d3d; color:white;  height:80px;">
                                  <h5 class="modal-title" id="exampleModalLabel">Eliminar Documentos Clinicos</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                <div class="modal-body">
                                ¿Desea realmente eliminar el Documento Clinico {{ $tag->imagen1}} ?
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
                          <p> No hay archivos de historial disponible</p>
                              
                          @endforelse
                  </tr>
            </tbody>
          </table>
        
      


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