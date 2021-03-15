

<style>
#datos{
    margin-left: auto;
  margin-right: auto;
  border-radius: 70%;
  position: relative;
  bottom: -10px;

}

#logo1{
    border-radius: 50%;
  position: absolute;
  left: -5px;
  top:  40px;
  width: 90px;
  height: 80px;
}






#ventana{  
  width: 900px; 
  position: static;
  left: 100px;
  top:0px;
  background-color: #007599;
  
  float:left;
  margin: 0px;
  height: 800px;
 
  
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
  
  color: #ccf3ff;
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

  /* CSS DEL TEXTO H4 DE LOGO DE MEDIA/BODY*/
#logo1{
    border-radius: 50%;
  position: absolute;
  left: -5px;
  top:  40px;
  width: 90px;
  height: 80px;
}




#logo4{
    border-radius: 50%;
  position: absolute;
  left: -5px;
  top:  35px;
  width: 90px;
  height: 80px;
}

/* CSS DEL TEXTO H4 DE LOGO DEl Buscador*/
#logo2{
  border-radius: 50%;
  position: absolute;
  left: 560px;
  top: 5px;
  width: 40px;
  border-color: #33ccff , 2px;
}


#logo3{
  border-radius: 50%;
  position: absolute;
  left: 110px;
  top: 5px;
  width: 40px;
  height: 40px;
  
  border: 4px solid  #00ccff;
 
}
</style>

<title>@yield('titulo')</title>


<body>
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <script src="/js/admin/sb-admin.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
      <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
      <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">
    <script src="/js/bootstrap-tagsinput.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script src="/js/bootstrap-tagsinput.js"></script>



    <nav class="navbar navbar-light bg-light" style="position: absolute;
  left: 320px;
  top: 0px;
  width: 1070px; height: 50px; background-color: #e6f9ff; " >
  <div class="container-fluid" >
  
                @forelse($logotipos  as $tag)
    <img class="logo" id="logo3" src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image">
    @empty

    <img class="logo" src="{{ asset('Imagenes/Icono.jpg') }}" class="mr-3" id="logo2"> 
    @endforelse
  <form class="form-inline my-2 my-lg-0" id="buscar1"  action="buscar">
      <input  name="buscarpor"  class="form-control" type="search" placeholder="Buscar Paciente" aria-label="Search"  style="
  
  width: 400px; position: absolute;
  left: 600px; top: 5px; "  >

      
    </form>
  </div>
</nav>


    <div class="card"  style="width: 20rem;" id="ventana">
    <img src='/Imagenes/{{$pacientes->imagen}}' width="70px" height="70px"id="datos">
    <div id="">
      <h2 id="nombre">{{ $pacientes->nombres}} {{ $pacientes->apellidos}}</h2>
      
      @forelse($pacientes->alertas as $ver)
      <span style="color:red">  <svg xmlns="http://www.w3.org/2000/svg" color="red" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
            </svg>{{$ver->alertas}} </span>
      @empty
      @endforelse
   
      
      <br><br>
      </div>
    <div class="list-group" style="width: 20rem;">

    @canany(['isAdmin','isOdontologo','isSecretaria'])
  <a  href="/pantallainicio/vista/paciente/{{$pacientes->id}}/editar"class="list-group-item list-group-item-action active" style="background-color:#c2d6d6; font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>   Datos Personales</a>

            @endcanany

            @can('create',App\Archivo::class)
  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/imagenesArchivos" style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;"class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
              <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
              </svg>     Imagenes y archivos</a>
              @endcan

              @can('viewIndividual',App\Cita::class)
  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/citaindividual" style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;" class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
              <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
              <circle cx="3.5" cy="5.5" r=".5"/>
              <circle cx="3.5" cy="8" r=".5"/>
              <circle cx="3.5" cy="10.5" r=".5"/>
              </svg> Citas</a>
              @endcan

              @canany(['isAdmin','isOdontologo'])
  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/comentarios" style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;"class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
              </svg>   Comentarios Administrativos</a>
              @endcanany

              @canany(['isAdmin','isOdontologo'])
              <a  href=""class="list-group-item list-group-item-action active"  style="background-color: #c2d6d6;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;
  
  "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
</svg>Clinicos</a>

              @can('view',App\plantratamiento::class)
  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/plandetratamiento"  style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;"class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16    16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                </svg>  Planes de Tratamiento</a>
              @endcan


              @canany(['view','create'],App\Evoluciones::class)
  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/evoluciones" style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;"class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-clockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
               </svg>  Evoluciones</a>
              @endcanany

              @canany(['isOdontologo','isAdmin'])
  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/documentosClinicos" style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;" class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-richtext-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM7 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542l1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V9.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V9s1.54-1.274 1.639-1.208zM5 11a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
              </svg>  Documentos Clinicos</a>
              @endcan
              
  <a href="/pantallainicio/vista/paciente/{{$pacientes->id}}/VistaRecaudaciones"  style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;"class="list-group-item list-group-item-action"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>  Recaudacion</a>

                @endcanany

                @can('create',App\Alerta::class)
                <a href="/pantallainicio/{{$pacientes->id}}/alertas" style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;" class="list-group-item list-group-item-action"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
          </svg>  Alertas</a>

                @endcan


                <a href="/pantallainicio/vista" class="list-group-item list-group-item-action active" style="background-color:#85e085;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;
  
  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>  Pacientes</a>

                
            

</div>
</div><!-- div cierre de ventana -->

<!-- Contenido a la derecha: :. -->
<div style="position:static;"  id='hijo'>
<div >
@yield('cuerpo')
</div>


</div>

</body>


