@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('titulo','Imagenes y Archivos')
  
    
    <style>

#vPrincipal{
    width:auto;
    font-size:15px;
    margin: 5rem;
    padding: 2rem;
    background-color: #c1f0f0;
  
    position: absolute;
  left: 330px;
  
  width: 900px;
  top: 60px;
   height:500px;
    }

    .vPrincipal{
      border-style: groove;
      width: 1100px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
  font-size:15px;
  
    }

    #upload{
       
       font: 700 1em Tahoma, Arial, Verdana, sans-serif;
       color: black; background-color: #58D68D ;
       border: 1px solid #0074a5;
       border-top: 1px solid #004370;
       border-left: 1px solid #004370;
       cursor: pointer;
       padding: 4px 8px 4px 6px;
       float:right; 
   }

  

    .content{
      border-style: groove;
    }

    @import url(
  https://fonts.googleapis.com/css?family=Source + Sans + Pro:200,
  300,
  400,
  600,
  700|Oswald:400,
  300,
  700
);
body {
  background: #e3e3e3;
  font-size: 16px;
}
strong {
  font-weight: 500;
}
h1 {
  font-family: "Oswald", sans-serif;
  letter-spacing: 1.5px;
  color: #333333;
  font-weight: 100;
  font-size: 20px;
}
#content {
  margin-top: 50px;
  text-align: center;
}
/* Timeline */
.timeline {
  border-left: 4px solid #4298c3;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
  background: rgba(255, 255, 255, 0.03);
  color: #333;
  font-family: "Source Sans Pro", sans-serif;
  margin: 50px auto;
  letter-spacing: 0.5px;
  position: relative;
  line-height: 1.4em;
  font-size: 1.03em;
  padding: 30px;
  list-style: none;
  text-align: left;
  font-weight: 1;
  max-width: 50%;
}
.timeline h1,
.timeline h2,
.timeline h3 {
  font-family: "Oswald", sans-serif;
  letter-spacing: 1.5px;
  font-weight: 100;
  font-size: 1.4em;
}
.timeline .event {
  border-bottom: 1px dashed #4298c3;
  padding-bottom: 25px;
  margin-bottom: 50px;
  position: relative;
}
.timeline .event:last-of-type {
  padding-bottom: 0;
  margin-bottom: 0;
  border: none;
}
.timeline .event:before,
.timeline .event:after {
  position: absolute;
  display: block;
  top: 0;
}
.timeline .event:before {
  left: -217.5px;
  color: #717171;
  content: attr(data-date);
  text-align: right;
  font-weight: 400;
  font-size: 0.9em;
  min-width: 120px;
}
.timeline .event:after {
  box-shadow: 0 0 0 4px #169eda;
  left: -57.85px;
  background: #91c740;
  border-radius: 50%;
  height: 11px;
  width: 11px;
  content: "";
  top: 5px;
}
@media (max-width: 800px) {
  .timeline .event:before {
    left: -0.5px;
    top: 28px;
    background-color: #4298c3;
    color: white;
    margin-top: 8px;
    padding: 2px 8px 2px 8px;
    content: attr(data-date);
    text-align: right;
    font-weight: 400;
    font-size: 0.9em;
    min-width: 120px;
  }
  .timeline .event p {
    top: 27px;
    padding: 10px 0px 10px 0px;
    position: relative;
  }
}


    


    </style>

</head>
<body>
    @section('cuerpo')
    <div>
    <h3 style="text-align: center;
  padding: 1rem;
  font-size:30px; font-family: Times New Roman, Times, serif;  background-color: #98e6e6;
  color: #476b6b; position: absolute;
  top:60px; width: 900px; left:405px;
  
  "><svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-camera-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
              <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
              </svg> Imagenes y Archivos del Paciente</h3>
    
    </div>
 
    <div class="container" id="vPrincipal" class="vPrincipa">

        <div  id="titulo" class="card-body d-flex justify-content-between align-items-center" style="font-size:15px;">
          <div class="vPrincipal" style=" background-color: #e6f9ff;font-size:15px; font-family: Times New Roman, Times, serif;">
            <h2 style="font-size:20px;">Expediente de Imagenes  del Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}}</h2>

            @canany(['isAdmin','isOdontologo'])
            <button id="upload" onclick="location.href='/pantallainicio/vista/paciente/{{$pacientes->id}}/nuevoarchivo'" style=" background-color: #c2efc2;font-size:18px; font-family: Times New Roman, Times, serif;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                Subir Archivos</button>
                @endcanany
                
              </div>

        </div>
        <div id="content" class="content" style=" background-color: #e6f9ff; font-size:18px; font-family: Times New Roman, Times, serif;">
          <h3>Imagenes de Radiografias,Tomografias y otros</h3>
          
          <ul class="timeline">
            @forelse ($pacientes->archivos as $tag)
            <li class="event" data-date="{{$tag->fecha}}">
              <h3>Doctor:{{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</h3>
              <p>{{$tag->observaciones}}</p>
              <div>
                <img src="/images/{{$tag->imagen}}" width="150" alt="imagen">
              </div>
            </li>
           
            <a class="btn btn-warning " href="{{route('archivo.editar',['id'=>$tag->id])}}">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            Editar</a>
           
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
            </svg>
            Eliminar 
            </button>

 <!-- Modal -->
 <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
          </svg> Eliminar </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar  {{$tag->id}}?
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





            @empty
            <p> No hay Archivo en el expendiente</p>
        
            @endforelse
                 
          </ul>
         
        </div>
        
        </div>
    </div>

    <div class="modal-footer" style="position: absolute;
  left: 320px;
  width: 1070px;
  top: 750px; height:50px;
  background-color: #e6f9ff;">
                
                
              <a style="position: absolute;
  left: 830px; font-size:18px; font-family: Times New Roman, Times, serif; color:#7a7a52; " href="/">@Smile Software 2021</a>  

              @forelse($logotipos  as $tag)
    <img  class="logo" id="logo4"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" style="border-radius: 50%;
  position: absolute;
  left: 1005px;
  top: 5px;
  width: 40px;
  border-color: #33ccff;height: 40px;" >
    @empty

    <img class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3"  style="border-radius: 50%;
  position: absolute;
  left: 1005px;
  top: 5px;
  width: 40px;
  border-color: #33ccff; height: 40px;"  > 
    @endforelse 
              </div>

    <script>


    </script>
    
</body>
</html>
@endsection