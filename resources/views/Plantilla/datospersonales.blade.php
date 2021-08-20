<!DOCTYPE html>
<html lang="en">

<head>


<style>

.reposivefont{



}

</style>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
<meta name="csrf-token" content="{{ csrf_token() }}">

  
  <!--llamamos al enlace de Jquery 3.3.1 para la funcionalidad-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--llamamos a una clase de internet donde esta el diseño-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <!--llamamos a otra clase JS que hace la tarea de que se muestren los seleccionados como si fueran etiquetas-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<!-- Titulo -->
  <title>@yield('titulo')</title>
<!-- Select-->


<!-- agregado -->
    <link rel="icon" href="/images/logo/logo.jpg">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, Minimum-scale=1.0, user-scalable=no, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->

   <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
     <!--<link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" /> -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/css/demo.css" rel="stylesheet" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">


  <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
      <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
      <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css" rel="stylesheet" />

     <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script src="/js/bootstrap-tagsinput.js"></script>

    @yield('css_role')
    @yield('js_role')
    @yield('js_user_page')
     @yield('js_user_page2')
    

<!--Fin de lo Agregado -->





  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/admin/sb-admin.css" rel="stylesheet">

  <!--CKEditor Plugin-->
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <!-- Favicons -->

  @yield('css_role_page')




</head>

<body id="page-top">

  <nav class="navbar navbar-expand-sm " style="background-color:#276678;  height:50%;
">


 


 
 <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#" style="margin-left:10%; ">
   
    <img class="logo" style=" border-radius: 70%;" src="{{ asset('Imagenes/diente.png') }}" width="50px;"> 
    
    </button>



<div>
    <!-- Navbar Search -->
        <form class="form-inline my-2 my-lg-0" id="buscar1"  action="buscar">
      <input  name="buscarpor"  style=" width:400%; margin-left:0%; margin-top:5%;"class="form-control" type="search" placeholder="Buscar el Nombre del Paciente" aria-label="Search">

      <button style="width:40px; height:10%; margin-left:100%; margin-top:-15%; background-color:#276678; color:white; border-color:#276678;" class="btn btn-primary"  id="buscar" type='submit'><svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
      </svg></button>
    
    </form>

</div>

    <!-- Navbar -->
<div style="margin-left:auto; width: 15%;" class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
    <ul class="navbar-nav text-right" style="position:static;margin:auto;">
      <li class="nav-item active">
        <a class="nav-link"   style="
  font-size:15px;
  line-height: 2;
  background-color: #d3e0ea;
 color:#1687a7;
  border: 1px solid transparent;
  border-radius: 0.25rem; width:auto;text-align:center" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         
          @auth
          {{ Auth::user()->name }} - {{ Auth::user()->roles->isNotEmpty() ? Auth::user()->roles->first()->Nombre : "" }}
          @endauth
<img class="logo" style="border-radius: 70%;margin-left:1em;;  position:relative; top: px;" src='/Imagenes/{{Auth::user()->imagen}}'   width="40px" height="40px">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item"  href="{{route('usuario.verusuario',Auth::user()->id)}}" data-toggle="modal1" data-target="#logoutModal">Perfil</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Salir</a>
        </div>
      </li>
    </ul>
</div>
  </nav>




  <div id="wrapper" style="">
 
    
    <!-- Sidebar -->
    <ul class="  sidebar navbar-nav" style="
    background-color: #1687A7; 
    ">


        <li style="">

 

     <a class="navbar-brand" href="" >
    <img style=" border-radius:60px; margin-left:22%; margin-top:10%; border-style: solid; border-color: #b3cccc; border-width: 2px;" src='/Imagenes/{{$pacientes->imagen}}'  id="logo1" width="60%;" height="20%" alt="image"> 
    
    </a>
          </li> 



  
                                
               

  <li class="nav-item" style="margin-top:15%;">
                  @canany(['isAdmin','isOdontologo','isSecretaria'])
                <a  href="/pantallainicio/vista/paciente/{{$pacientes->id}}/editar"class="nav-link" style="" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg> <span>  Datos Personales</span></a>
          </li>
                  @endcanany

  
      
        <li class="nav-item">
         @can('create',App\Comentario::class)
                <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/comentarios"  class="nav-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
                  </svg> <span> 
          Comentarios Administrativos</span></a>
                  @endcan
          
            
        </li>
      
    
       
        <li class="nav-item">
                  @can('create',App\Archivo::class)
                  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/imagenesArchivos" class="nav-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                  </svg>   <span>  Imagenes Clínicas </span></a>
                  @endcan


          </li>

          <li class="nav-item">
                  @canany(['isAdmin','isOdontologo'])
                  @can('viewIndividual',App\Cita::class)
                  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/citaindividual"  class="nav-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                  <circle cx="3.5" cy="5.5" r=".5"/>
                  <circle cx="3.5" cy="8" r=".5"/>
                  <circle cx="3.5" cy="10.5" r=".5"/>
                  </svg> <span>Citas</span></a>
                  @endcan

                  @endcanany

            </li>




            <li class="nav-item">
                  @can('view',App\plantratamiento::class)
                    <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/plandetratamiento"  class="nav-link"><svg width="1em" height="1em" viewBox="0 0 16    16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                    </svg> <span> Planes de Tratamiento</span></a>
                  @endcan
                </li>


            <li class="nav-item">
                  @canany(['view','create'],App\Evoluciones::class)
                    <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/evoluciones"  class="nav-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-clockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                  </svg>  <span>Evoluciones</span></a>
                  @endcanany

              </li>



            <li class="nav-item">
                  @canany(['isOdontologo','isAdmin'])
                  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/documentosClinicos"  class="nav-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-richtext-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM7 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542l1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V9.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V9s1.54-1.274 1.639-1.208zM5 11a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                  </svg>  <span>Documentos Clínicos</span></a>
                  
                  @endcanany

              </li>


            <li class="nav-item">
                  @can('view',App\Recaudacion::class)
                    <a href="/pantallainicio/vista/paciente/{{$pacientes->id}}/VistaRecaudaciones"  class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  color=""fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg> <span> Recaudación</span></a>
                  @endcan
                  
              </li>


            <li class="nav-item">
                    @can('create',App\Alerta::class)
                    <a href="/pantallainicio/{{$pacientes->id}}/alertas"   class="nav-link"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" color="" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                  </svg> <span> Alertas</span></a>
                    @endcan
              </li>


            <li class="nav-item" style="border-style: solid; border-color: #b3cccc;border-width: 8%;background-color: #d3e0ea;">
                    <a href="/pantallainicio/vista"  class="nav-link" style=" color:black;"> <svg xmlns="http://www.w3.org/2000/svg" color="" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                  </svg> <span> Regresar a Pacientes</span></a>

                </li>

    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">
        
          @yield('cuerpo')

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Derechos Reservados ©SmileSoftware2021</span>
            </div>
          </div>
        </footer>

    </div>
  <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
  
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" >
      <div class="modal-content">
        <div class="modal-header" style="background-color: #d3e0ea;">
          <h5 class="modal-title" id="exampleModalLabel">¿Desea cerrar sesión?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Al dar click en el boton "Salir" podra Cerrar la sesión</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

          <a class="btn btn-primary" href="#"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              {{ __('Salir') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>

          {{-- <a class="btn btn-primary"  href="login.html">Salir</a> --}}
        </div>
      </div>
    </div>
  </div>

 
  <!-- Bootstrap core JavaScript-->
  <script src="/js/core/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  
  <script src="/vendor/datatables/jquery.dataTables.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/admin/sb-admin.js"></script>

  <!-- Demo scripts for this page-->
  <script src="/js/admin/demo/datatables-demo.js"></script>


    
  @yield('js_post_page')
  @yield('js_user_page') 
  @yield('js_user_page2') 
  @yield('js_role_page') 

  </body>
    
</html>
