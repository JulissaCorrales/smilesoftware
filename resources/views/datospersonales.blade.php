@extends('Plantilla.Plantilla2')
<head>
@section('Titulo','Datos')
<style>
#datos{
    margin-left: auto;
  margin-right: auto;
  border-radius: 70%;
  position: relative;
  bottom: -10px;

}
#ventana{  
  width: 900px; 
  position: static;
  left: 100px;
  background-color: #AFEEEE;
  background-image: linear-gradient(to left,  #AFEEEE,#20B2AA);
  float:left;
  margin: 40px;
  height: 900px;
 
  
}
#card1{
    position: absolute;
    top: 470px;
    width: 300px;
   
}
#carbdos{
    list-style-position: inside;
}
#lista1{
  position: absolute;
    top: 500px;
    width: 300px; 
}

#lista2{
  position: absolute;
    top: 650px;
    width: 300px; 

}
#nombre{
  color: #008B8B;
  text-align: center;
  font-family:  serif;
  font-size: 35px;
}
#apellido{
  color: #008B8B;
  text-align: center;
  font-family: serif;
  font-size: 35px;
}
#mostrar{
  position: absolute;
    top: 330px;
    width: 300px; 
  height: 150px;
  background-color: #AFEEEE;
}
#personal{
  background-color: #AFEEEE;
}
#hijo{
  overflow: hidden;
  position: relative;}

  #im{
    position: absolute;
    top: 230px;
    left: 140px;
    width: 320px; 
  height: 150px;
 

  }
</style>
</head>


@section('contenido')
<body>
<div class="card" style="width: 20rem;" id="ventana">
  <div id="im">
  <td id="td1"><img src='/Imagenes/{{$pacientes->imagen}}' width="70px" height="70px"id="datos"></td>
</div>

      <div id="mostrar">
      <h2 id="nombre">{{ $pacientes->nombres}}</h2>
      <h2 id="apellido">{{ $pacientes->apellidos}}</h2>
      @forelse($pacientes->alertas as $ver)
      <span style="color:red">  <svg xmlns="http://www.w3.org/2000/svg" color="red" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
            </svg>{{$ver->alertas}} </span>
      @empty
      @endforelse
   
      
      <br><br>
      </div>
      <br>
      @canany(['isAdmin','isOdontologo','isSecretaria'])
     <div class="list-group" id="carbdos">
            <a class="btn btn-info" id="card1" href="/pantallainicio/vista/paciente/{{$pacientes->id}}/editar" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>   Datos Personales</a>
            @endcanany


          <div id="personal">

            <ul class="list-group-item" id="lista1">
              <!--  -->
              @can('create',App\Archivo::class)
              <li class="btn btn-light"><a class="btn btn-light" id="" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/imagenesArchivos'" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
              <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
              </svg>     Imagenes y archivos</a></li> @endcan<br>
              <!--  -->

            @can('viewIndividual',App\Cita::class)
              <li class="btn btn-light" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/citaindividual'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
              <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
              <circle cx="3.5" cy="5.5" r=".5"/>
              <circle cx="3.5" cy="8" r=".5"/>
              <circle cx="3.5" cy="10.5" r=".5"/>
              </svg> Citas</li>

            @endcan
              <!--  -->
              @canany(['isAdmin','isOdontologo'])
              <li class="btn btn-light" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/comentarios'" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
              </svg>   Comentarios Administrativos</li>
              @endcanany
            </ul>

          </div>
        
          <div class="list-group" id="lista2">
          @canany(['isAdmin','isOdontologo'])
            <a class="btn btn-info">Clinicos</a>
            <ul class="list-group-item">
           
                <!--  -->
                @can('view',App\plantratamiento::class)
                <li class="btn btn-light"  onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/plandetratamiento'"><svg width="1em" height="1em" viewBox="0 0 16    16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                </svg>  Planes de Tratamiento</li>
                @endcan
                <!--  -->
                @canany(['view','create'],App\Evoluciones::class)
                <li class="btn btn-light" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/evoluciones'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-clockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
               </svg>  Evoluciones</li>
               @endcanany
               <!--  -->
               @canany(['isOdontologo','isAdmin'])
               <li class="btn btn-light" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/documentosClinicos'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-richtext-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM7 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542l1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V9.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V9s1.54-1.274 1.639-1.208zM5 11a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
              </svg>  Documentos clinicos</li>
              @endcan

              <li class="btn btn-light" onclick="location.href='/pantallainicio/vista/paciente/{{$pacientes->id}}/VistaRecaudacionesD'">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>  Recaudacion</li>
              <!--  -->
             @endcanany
             <!--  -->
             @can('create',App\Alerta::class)
             <!-- Alertas --><br>
             <li class="btn btn-light" onclick="location.href='/pantallainicio/{{$pacientes->id}}/alertas'">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
          </svg>  Alertas</li>
          @endcan
           </ul>


          </div>
        
      </div> 
</div><!-- div cierre de ventana -->
<!-- Contenido a la derecha: :. -->
<div style="position:static;"  id='hijo'>
<div >
@yield('cuerpo')
</div>


</div>
</body>


@endsection