<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@yield('titulo')</title>
    <!-- favicon :icono de pestaña navegador -->
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
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  -->
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

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

     <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script src="/js/bootstrap-tagsinput.js"></script>
    @yield('css_role')
    @yield('js_role')
    @yield('js_user_page')

    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
<style>
#uno{        
  color: #0099cc;
  text-shadow: 2px 0 #ffcc66, 0 2px #ffcc66, 2px 0 #ffcc66, 0 2px #ffcc66;
  font-family: serif;
  position: absolute;
  left: 30px;
  top: 3px;
  font-size: 50px;
}

#tres{
  color: #0099cc;
  text-shadow: 2px 0 #ffcc66, 0 2px #ffcc66, 2px 0 #ffcc66, 0 2px #ffcc66;
  font-family: serif;
  position: absolute;
  left: 80px;
  top: 60px;
  font-size:40px;
}
#cuatro{
  width: 1330px;
 position: absolute;
left: 50px;
top:-20px;
   background-image: linear-gradient(to top, #476b6b ,#e6ffff );
height: 80px;




}

#dos{
  border-radius: 50%;
  position: absolute;
  left: 230px;
  top: 20px;
  width: 80px;
  border-color: #33ccff , 2px;
}

#agenda{
  border-radius: 5px;
  width: 150px;
  background-color: #b3f0ff;
  font-size: 16px;
  position: absolute;
  left: 400px;
  border-color: #e67300;
  color: #ff8000;
}

#paciente{
    border-radius: 5px;
    width: 150px;
    background-color: #b3f0ff;
    font-size: 16px;
    position: absolute;
    left: 570px;
    border-color: #e67300;
    color: #ff8000
}
#recaudacion{
    border-radius: 5px;
    width: 170px;
    background-color:#b3f0ff;
    font-size: 16px;
    position: absolute;
    left: 740px;
    border-color:#e67300;
    color: #ff8000;  
}

#administracion{
    border-radius: 5px;
    width: 190px;
   
    font-size: 16px;
    border-color: #ccffff;
    left: 930px;
    color: #ccffff;
}     
#buscar{
  width: 50px;
  left: 650px;
 background-color: #00e6e6;
  font-size: 14px;
  border-color: #00e6e6;
  position: absolute;
  top: 30px;
height: 38px;
  color:#ffad33;
 
  border-radius: 5px;
}

#administrador{
    border-radius: 10px;
    width: 150px;
    background-color: #00cccc;
    border-color: #ffcc66;
    font-size: 16px;
}
#administrador1{
  border-radius: 12px;
    width: 100px;
    left: px;
    background-color: #00e6e6;
    font-size: 14px;
    border-color: #00BFFF;
    position: absolute;
    top: 50px;
}
#buscar1{
  left: 500px;

}

#texto{
  border-radius: 10px;
  width: 400px;
  /*background-color: #ccffff; */
  font-size: 16px;
  position: absolute;
  left: 300px;
  top: 30px;
  border-color: #33cccc;
}
#nav{
  background-image: linear-gradient(to bottom, #00cccc ,#00cccc );
 width: 280px;
height: 1500px;
  position:absolute;
top: -15px;
left:-15px;
  padding: 10px;

  margin: 15;
}

#logo1{
    border-radius: 50%;
  position: absolute;
  left: 160px;
  top:  30px;
  width: 70px;
  height: 70px;
}


#logo4{
    border-radius: 50%;
  position: absolute;
  position: absolute;
  left: 160px;
  top:  30px;
  width: 70px;
  height: 70px;
}


#cinco{
 
 

}

.button {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button:hover {
    background-color: #4CAF50; /* Green */
    color: white;
}


#letrasoftwareh4{
   
  
  position: absolute;
  font-size:40px; font-family:"Times New Roman", Times, serif;
  left: 40px;
  top: 30px;
  color:#001a1a;
text-shadow: 3px 0 #00b3b3, 0 3px #b38f00, 3px 0 #ffb31a, 0 3px #ffb31a;
}

/* CSS DEL TEXTO H4 DE SOFTWARE*/
#letrasoftwareh5{
  
   position: absolute;
   left: 60px;
   top: 90px;
   font-size: 35px; font-family:"Times New Roman", Times, serif;
   color:#001a1a;
 text-shadow: 3px 0 #00b3b3, 0 3px #b38f00, 3px 0 #ffb31a, 0 3px #ffb31a;
 }
</style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <title> @yield('Titulo')</title>
</head>
  <body >

<header> 

    <nav class="navbar navbar-expand-lg"   id="cuatro">

  <div class="collapse navbar-collapse" id="buscador" >
    <form class="form-inline my-2 my-lg-0" id="buscar1"  action="buscar">
      <input  name="buscarpor"  class="form-control" type="search" placeholder="Buscar Paciente" aria-label="Search"  id="texto"  >

      <button class= "btn btn-outline-success my-2 my-sm-0" id="buscar" type='submit'><svg width="1em" height="50px;" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
      </svg></button>
    
    </form>
  </div> 
      <!--Autenticación  -->
<div style="position:absolute; left:1100px; top:35px;">
      <ul class="navbar-nav ml-auto" >
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a style=" margin-left:7px" class="btn btn-primary" class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
                <a style=" margin-left:100px;background-color:purple" class="btn btn-primary" class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
            </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a style="margin-left:px; margin-top:px; background: #43A047;" id="navbarDropdown" class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} - {{ Auth::user()->roles->isNotEmpty() ? Auth::user()->roles->first()->Nombre : "" }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">

                <!-- icono -->
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                  </svg>
                                          <!-- fin icono -->
                {{ __('Salir') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>

</div>
      <!-- fin de autenticación -->

<div class="dropdown" style="top:10px;left:-400px;">
        <button type="button" class="btn btn-outline-info" id= "administracion"     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
        <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
        <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
        </svg>  Administracion
        </button>
 
         <div class="dropdown-menu">
            @can('view',App\Gasto::class)
              <a class="dropdown-item" href="/pantallainicio/gastos">
                <svg width="1em" height="2em" viewBox="0 0 16 16" class="bi bi-cash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1   1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z"/>
                <path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                  </svg>
                Gastos 
              </a>
            @endcan

            @canany(['isAdmin','isSecretaria'])
              <a class="dropdown-item" href="/pantallainicio/odontologo" >
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                </svg>
                Gestion de Odontologos 
              </a>
            @endcanany

            @can('view',App\Logotipo::class)
              <a class="dropdown-item" href="{{route('logotipo.ver')}}">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9c0 .013 0 .027.002.04V12l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15 9.499V3.5a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm4.502 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
                Logotipo
              </a>
            @endcan
            @canany(['isAdmin','isSecretaria'])
            <a class="dropdown-item" href="/tratamiento/">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-alarm" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
              </svg>
              Tratamientos
            </a>
            @endcanany
            @can('view',App\Inventario::class)
            <a class="dropdown-item" href="/inventario/">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
              </svg>
              Inventarios
           </a>
           @endcan
           @canany(['isAdmin','isSecretaria'])
            <a class="dropdown-item" href="/pantallainicio/mediopago">
              <svg width="1em" height="2em" viewBox="0 0 16 16" class="bi bi-cash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1   1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z"/>
                <path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
              </svg>
              Medios de Pagos 
            </a>
            @endcanany
            
            <a class="dropdown-item" href="/pantallainicio/laboratorios">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
              </svg>
              laboratorios
            </a>
          </div>
    </nav>
    <div class="nav-scroller bg-white shadow-sm" id="cinco">
      <nav class="navbar navbar-expand-lg navbar-light bg-light"  id="nav">

 <div  class="media-body" >


 <h4 id="letrasoftwareh4">Smile</h4>
    <h4 id="letrasoftwareh5">Software</h4>

 @forelse($logotipos  as $tag)
    <img  class="logo" id="logo4"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" >
    @empty

    <img class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3" id="logo1"> 
    @endforelse 

  <ul class="nav" >
                    <li class="nav-item active">
                        <button class="btn btn-outline-info" onclick="location.href='{{route('calendario.agenda')}}'"  style="font-size:20px; font-family: Times New Roman, Times, serif;  color:white;  width: 220px;
  height: 60px; position:absolute; top: 200px; left:30px; border: 2px solid #4CAF50;
}" >
               <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg> 
                            Agenda
                        </button>
                    </li>
                    <li>
                        <button class="btn btn-outline-info" onclick="location.href='{{route('paciente.vista')}}'" id="lista1"  style="font-size:20px; font-family: Times New Roman, Times, serif;  color:white;  width: 220px;
  height: 60px; position:absolute;  top: 270px; left:30px; border: 2px solid #4CAF50; 
}">
                        <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
                          Paciente
                        </button>
                    </li>


                    <li>
                    @can('isAdmin')
                        <button class="btn btn-outline-info" onclick="location.href='{{route('usuarios.indice')}}'" id="lista1"  style="font-size:20px; font-family: Times New Roman, Times, serif;  color:white;  width: 220px;
  height: 60px; position:absolute;  top: 340px; left:30px; border: 2px solid #4CAF50; /* Green */
}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
</svg>
                            Usuarios
                        </button>

                        @endcan
                    </li>


                    <li>
                    @can('isAdmin')
                        <button class="btn btn-outline-info"  onclick="location.href='{{route('roles.ver')}}'" id="lista1"  style="font-size:20px; font-family: Times New Roman, Times, serif;  color:white;  width: 220px;
  height: 60px; position:absolute;  top: 410px; left:30px; border: 2px solid #4CAF50; /* Green */
}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>
                            Roles
                        </button>  @endcan
                    </li>
                
                </ul>

</div>

      <!-- Esto es para la parte de administración    <!-- Foto de perfil del usuario -->
   </nav>
      </div>
  </div>

 

<div >
       @can('isAdmin') <a  href="{{route('usuario.actualizar',Auth::user()->id)}}">@endcan<img class="logo" style="border-radius: 70%;left: 1100px;bottom:0.3em;  position:absolute; top: 5px;" src='/Imagenes/{{Auth::user()->imagen}}'   width="50px" height="50px"></a>
      </div>
</header>
<!-- Begin page content -->
  <!-- class="flex-shrink-0" -->
  <div>
  @yield('contenido')
  </div>

 <div class="modal-footer" style="position: absolute; left: 0px; width: 1380px; top: 1500px; height:50px; background-color: #e0ebeb;">
                  
              <a style="position: absolute;left: 830px; font-size:18px; font-family: Times New Roman, Times, serif; color:#7a7a52; " href="/">@Smile Software 2021</a>  

              @forelse($logotipos  as $tag)
    <img  class="logo" id="logo4"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" style="border-radius: 50%; position: absolute;left: 1005px;top: 5px;width: 40px;border-color: #33ccff;  height: 40px;" >
    @empty

    <img class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3"  style="border-radius: 50%;position: absolute;left: 1005px;top: 5px;width: 40px; border-color: #33ccff;   height: 40px;"  > 
    @endforelse 
    </div>

<!-- link para configurar el buscador -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoftBy2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>