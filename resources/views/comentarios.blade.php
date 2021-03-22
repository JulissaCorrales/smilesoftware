@extends('datospersonales')

@section('titulo','Comentarios Administrativos')
@section('cuerpo')
@can('create',App\Comentario::class)



<head>

<style>

 #text{
    position: absolute;
  left: 450px;
  top:200px;

  height: 300px;
  width: 800px;
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

@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
<body>


<div class="container">

<h3 style="text-align: center;padding: 1rem;font-size:30px; font-family: Times New Roman, Times, serif;  background-color: #98e6e6;
  color: #476b6b; position: absolute;top:120px; width: 800px; left:455px; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
              </svg> Comentarios Administrativos </h3>
<div id="text">
<!-- Tabla de comentarios administrativos -->

          <table class="table table-hover" style=" position: absolute;  left: 100px; top:60px;  width: 600px;" >
           <thead >
               <tr style="background-color:#df99ff; width: 600px; font-size:20px; font-family: Times New Roman, Times, serif; border-color:#000000;">

                 <th >#</th>
                 <th style=" position: absolute; background-color:#df99ff; left: 100px; width: 350px; ">Comentarios Administrativos</th>
                  <th style= " background-color:#df99ff; position: absolute;  left: 450px; width: 150px;">Accion</th>

                </tr>
            </thead>

          <tbody >
         @forelse($pacientes->comentarios as $ver)
    <tr style="height: 80px;  background-color:#f7e6ff; font-size:20px; font-family: Times New Roman, Times, serif;">
      <td style ="position: absolute;  left: 10px;"> {{$ver->id}}</td>
      <td style="position: absolute; left: 200px;">{{$ver->comentarios}}</td>
    
      <td style="position: absolute; left: 450px;">
      <!--button de editar comentario -->
      @can('update',$ver)
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modall-{{$ver->id}}"  style="border-color:#00cc99; background-color:#f2e6ff; color:#00cc99; "> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
  <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
   </svg></button>
   @endcan
     <!-- -->
    

    <!--modal de editar comentario Administrativo -->
  <div class="modal fade" id="modall-{{$ver->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="background-color:#f2e6ff;  position: absolute; left: 480px; top:50px;">
          <div class="modal-content">
              <div class="modal-header" style="background-color:#b3f0ff; color:#666699; ">
                  <h5 class="modal-title" id="exampleModalLabel"> <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
              </svg>Editar el Comentario Administrativo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body"  style="background-color:#e6faff;">

              <form method="POST" action="{{route('comentario.update',['id'=>$pacientes->id,'id2'=>$ver->id])}}">
                         @csrf
                         @method('put')

               <input type="text"  class="form-control-file" name="caja"  value="{{ $ver->comentarios }}"  rows="4" cols="100">

               <div>
       <button type="submit" class="btn btn-primary" style="border-color:#00cc99; background-color:white; color:#00cc99;  position: absolute;
       left: 390px;top:  95px; " >Guardar </button>
       </div>

              </form>
              </div>
              <div class="modal-footer" style="background-color:#b3f0ff; width: 500px; height: 80px;">

                  <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background-color:#f2e6ff; color:black; position: absolute;
                   left: 300px;top:  160px;">Cerrar</button>
              
              </div>
          </div>
      </div>
  </div>

  <!--borrar Comentario Administrativo -->
  @can('delete',$ver)
      <button type="button"  style="background-color:#f2e6ff; color:#ff3300; " class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$ver->id}}"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
        </svg>     
     </button> 
     @endcan

     
    
<!--Modal de Eliminar Comentario Admininistrativo -->
  <div class="modal fade" id="modal-{{$ver->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="background-color:#f2e6ff;  position: absolute; left: 480px; top:190px; ">
          <div class="modal-content">
              <div class="modal-header" style="background-color:#b3f0ff; color:#666699; ">
                  <h5 class="modal-title" id="exampleModalLabel">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                  </svg> Eliminar el Comentario Administrativo </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"  style="background-color:#e6faff;">
                  ¿Desea realmente eliminar el comentario {{$ver->comentarios}} ?
              </div>
              <div class="modal-footer" style="background-color:#b3f0ff; width: 500px;height: 80px;">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background-color:#ff704d;  position: absolute;left: 300px;top:160px;">Cerrar</button>
                  <form method="post" action="{{route('comentario.borrar',['id'=>$ver->id])}}">
                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger"  style="background-color:#d580ff;  position: absolute; left: 380px;top:160px;">
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


    <!-- Nvas de la parte inferior-->
   <div class="modal-footer" style="position: absolute; left: -130px; width: 1070px; top: 550px; height:50px; background-color: #e6f9ff;">
                  
              <a style="position: absolute;left: 830px; font-size:18px; font-family: Times New Roman, Times, serif; color:#7a7a52; " href="/">@Smile Software 2021</a>  

              @forelse($logotipos  as $tag)
    <img  class="logo" id="logo4"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" style="border-radius: 50%; position: absolute;left: 1005px;top: 5px;width: 40px;border-color: #33ccff;  height: 40px;" >
    @empty

    <img class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3"  style="border-radius: 50%;position: absolute;left: 1005px;top: 5px;width: 40px; border-color: #33ccff;   height: 40px;"  > 
    @endforelse 
    </div>

    </div>

</div>
</div>

<div>
<!-- Booton de agregar Comentario Administrativo-->
@can('create',App\Comentario::class)
<button style="  position: absolute;left: 950px;top:220px; border-color:#00cc99; background-color:#ffe6ff; color:#1a001a; " type="button" data-toggle="modal" data-target="#create" class="btn btn-secondary">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
              </svg>Agregar Comentario</button> 
              @endcan
</div>

</body>

@include('comentariosver')
@endcan



@endsection