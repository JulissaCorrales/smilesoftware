<!DOCTYPE html>
<html lang="en">

<head>

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


<!-- Titulo -->
  <title>@yield('titulo')</title>

<!-- agregado -->
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

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->

   <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
     <!--<link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" /> -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">

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

     <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script src="/js/bootstrap-tagsinput.js"></script>

    @yield('css_role')
    @yield('js_role')
    @yield('js_user_page')
    

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

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <H4 style="color:#008080; text-shadow: 1px 0 #00b3b3, 0 1px #b38f00, 1px 0 #ffb31a, 0 1px #ffb31a;">Smile Software</H4>


 <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">@forelse($logotipos  as $tag)
    <img  class="logo" style=" border-radius: 50%; "src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" width="50px;" height=50px;>
    @empty

    <img class="logo" style=" border-radius: 50%;" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3" id="logo1" width="50px;"> 
    @endforelse 


    </button>

    

<div>
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"    action="buscar">
      <div class="input-group">
        <input type="text" class="form-control"   name="buscarpor"  style="position:absolute; left:100px; top:-25px; width:400px;"placeholder="Buscar Paciente..." aria-label="Search" aria-describedby="basic-addon2">
      </div>
  <div class="input-group-append"  style="position:absolute; left:740px; top:18px; width:300px;">
          <button   class="btn btn-primary" type="button" style="width:50px; height:40px;"> <svg width="1em" height="50px;" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
      </svg>
          </button>
        </div>
    </form>

</div>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0" style="position:absolute; left:1150px;">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         
          @auth
          {{ Auth::user()->name }} - {{ Auth::user()->roles->isNotEmpty() ? Auth::user()->roles->first()->Nombre : "" }}
          @endauth
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Salir</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
     
      
        <li class="nav-item">
          <a class="nav-link" href="/pantallainicio/calendario">
             <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg> 
                    
            <span>Agenda</span></a>
        </li>
      
    
        <li class="nav-item">
          <a class="nav-link" href="/pantallainicio/vista">
           <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
            <span>Pacientes</span></a>
        </li>
     @can('isAdmin')
      <li class="nav-item">
        <a class="nav-link" href="/roles">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
</svg>
          <span>Roles</span></a>
      </li>
@endcan
      
@can('isAdmin')
      <li class="nav-item">
        <a class="nav-link" href="/pantallainicio/usuarios/ver">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>
          <span>Usuarios</span></a>
      </li>

@endcan
      
   <li class="nav-item">
        <a class="nav-link" href="">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
          <span>Administracion</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">
        
          @yield('content')

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
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión?</h5>
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

          {{-- <a class="btn btn-primary" href="login.html">Salir</a> --}}
        </div>
      </div>
    </div>
  </div>

 @can('isAdmin') <a  href="{{route('usuario.actualizar',Auth::user()->id)}}">@endcan<img class="logo" style="border-radius: 70%;left: 1125px;bottom:0.3em;  position:absolute; top: 20px;" src='/Imagenes/{{Auth::user()->imagen}}'   width="30px" height="30px"></a>
  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  
  <script src="/vendor/datatables/jquery.dataTables.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/admin/sb-admin.js"></script>

  <!-- Demo scripts for this page-->
  <script src="/js/admin/demo/datatables-demo.js"></script>
 
    
  @yield('js_post_page')
  @yield('js_user_page') 
  @yield('js_role_page') 
  </body>
    
</html>
    