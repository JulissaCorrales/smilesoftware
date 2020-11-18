@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagenes y archivos</title>
  
    
    <style>

#vPrincipal{
    width:auto;
    font:1em Tahoma;
    margin: 5rem;
    padding: 2rem;
    border: 2px solid #ccc;
    background-color: #F5EEF8;
    border-style: groove;}

    .vPrincipal{
      border-style: groove;
      width: 1100px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
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
  font-weight: 600;
}
h1 {
  font-family: "Oswald", sans-serif;
  letter-spacing: 1.5px;
  color: #333333;
  font-weight: 100;
  font-size: 2.4em;
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
 
    <div class="container" id="vPrincipal" class="vPrincipal">

        <div div id="titulo" class="card-body d-flex justify-content-between align-items-center">
          <div class="vPrincipal" style="background-color:#CCFFFF;">
            <h2>Historial del paciente: {{$pacientes->nombres}}<br>  {{$pacientes->apellidos}}</h2>
            <button id="upload" onclick="location.href='/pantallainicio/vista/paciente/{{$pacientes->id}}/nuevoarchivo'">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                subir archivos</button>
              </div>

        </div>
        <div id="content" class="content" style="background-color:#CCFFFF;">
          <h3>imagenes de radiografias y tomografias y otros</h3>
          
          <ul class="timeline">
            @forelse ($pacientes->archivos as $tag)
            <li class="event" data-date="{{$tag->fecha}}">
              <h3>Doctor:{{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</h3>
              <p>{{$tag->observaciones}}</p>
              <div>
                <img src="/images/{{$tag->imagen}}" width="150" alt="imagen">
              </div>
            </li>
            @empty
            <p> no hay archivos de historial disponible</p>
        
            @endforelse
                 
          </ul>
         
        </div>
        
        
        
        </div>


    </div>

    <script>


    </script>
    
</body>
</html>
@endsection