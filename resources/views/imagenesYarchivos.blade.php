@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('titulo','Imagenes y Archivos')
  
    

</head>
<body id="page-top">

    @section('cuerpo')
  
    
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(session('mensaje'))
<div class="alert alert-success" style="position:absolute; top: 200px; left: 455px;">
{{session('mensaje')}}
</div>
@endif
    

 <!-- DataTables Example -->

  <div class="card mb-3">
          <div class="card-header">
              <h4><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-image-fill" viewBox="0 0 16 16">
            <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
            <path d="M10.564 8.27 14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
             </svg>Imagenes y Archivos del Paciente</h4>
            <p>En esta ventana  muestran las imagenes y los archivos de los pacientes que se han registrado  en la clínica, tambien se pueden subir nuevos archivos e imagenes, editar y eliminar los archivos existentes</p>
            <h2 style="font-size:20px;">Expediente de Imagenes  del Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}}</h2>
          
              @canany(['isAdmin','isOdontologo'])
          
                
                <button id="upload" onclick="location.href='/pantallainicio/vista/paciente/{{$pacientes->id}}/nuevoarchivo'" style=" position: absolute; left: 520px; top:  110px;"class="btn btn-outline-info">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    Subir Archivos</button> 
                  
               @endcanany
           </div>

          <!--fin de tarjeta -->

          <!-- inicia el contenido -->
          <div id="content" class="card-body"  >
            <div class="table-responsive">
              <table class="table table-bordered" id="datatable1" cellspacing="0">
                  <thead><tr><h3>Imagenes de Radiografias,Tomografias y otros</h3>
                    </tr></thead>
                    <tbody>
                      <tr>
                          @forelse ($pacientes->archivos as $tag) 
                          <div class="event" data-date="{{$tag->fecha}}">
                          
                          <h3>Doctor: {{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</h3>
                          </tr>
                          <p>{{$tag->observaciones}}</p>
                          <div>
                            <img src="/images/{{$tag->imagen}}" width="150" alt="imagen">
                          </div>
                        </div>
                    
                    
                          <button type="button" onclick="location.href='{{route('archivo.editar',['id'=>$pacientes->id,'idarchivo'=>$tag->id])}}'" style="border-style: solid; border-color:#28a4a4; background-color:white; color:#28a4a4;" class="btn btn-outline-info">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                              <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                              <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                            </svg>Editar</button>
                        
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                          </svg>
                          Eliminar 
                          </button>
                      </tr>
                   
                        <tr>
                            <!-- Modal -->
                            <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                          <div class="modal-header" style="background-color:#276678; color:white;  height:100px;">
                                              <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                              </svg> Eliminar </h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Desea realmente eliminar el archivo  {{$tag->imagen}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <form method="post" action="{{route('imagenesyarchivos.borrar',['id'=>$tag->id])}}">

                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                                  </form>
                                              </div>

                                      </div>
                              </div>   
                            </div>
                            <!-- fin de modal -->
                              

                                      @empty
                                    <p> No hay Archivo en el expendiente</p>
                                    
                                    @endforelse
                          </tr>                 
                      </tbody>
              </table>
             </div>
           </div>
 </div>

  
    

    

 
    
</body>
</html>
@endsection