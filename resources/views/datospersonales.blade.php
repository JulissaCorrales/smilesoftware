
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

#cuatro{
  width: 1330px;
 position: absolute;
left: 50px;
top:-20px;
   background-image: linear-gradient(to top, #476b6b ,#e6ffff );
height: 80px;




}





#ventana{  
  width: 900px; 
  position: absolute;
  left: 0px;
  top: 0px;
  background-color:#476b6b;
  color:white;
  float:left;
  margin: 0px;
  height: 900px;
 
  
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
  
  color:white;
  text-align: center;
   font-family: "Times New Roman", Times, serif;
  font-size: 35px;
 position:absolute;
top: 100px;
left :40px;

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

#administracion{
    border-radius: 5px;
    width: 190px;
   
    font-size: 16px;
    border-color: #ccffff;
    left: 930px;
    color: #ccffff;
}     
</style>

<title>@yield('titulo')</title>


<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    
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

    </head>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoftBy2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<body style=" background-color: #e6f9ff;">
   
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

<div >
       @can('isAdmin') <a  href="{{route('usuario.actualizar',Auth::user()->id)}}">@endcan<img class="logo" style="border-radius: 70%;left: 1050px;bottom:0.3em;  position:absolute; top: 25px;" src='/Imagenes/{{Auth::user()->imagen}}'   width="50px" height="50px"></a>
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

    <div class="card"  style="width: 20rem;" id="ventana">
    <img src='/Imagenes/{{$pacientes->imagen}}' width="70px" height="70px"id="datos">
    <div id="">
      <h2 id="nombre">{{ $pacientes->nombres}} <br>{{ $pacientes->apellidos}}</h2>
      
      @forelse($pacientes->alertas as $ver)
      <span style="color:red">  <svg xmlns="http://www.w3.org/2000/svg" color="red" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
            </svg>{{$ver->alertas}} </span>
      @empty
      @endforelse
   
      
      <br><br>
      </div>


    <div class="list-group" style="width: 20rem; position:absolute; left:0px; top:200px;">

    @canany(['isAdmin','isOdontologo','isSecretaria'])
  <a  href="/pantallainicio/vista/paciente/{{$pacientes->id}}/editar"class="list-group-item list-group-item-action active" style="background-color:#e0ebeb; font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>   Datos Personales</a>

            @endcanany

            @can('create',App\Archivo::class)
  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/imagenesArchivos" style=" background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;"class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
              <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
              </svg>     Imagenes y archivos</a>
              @endcan

@canany(['isAdmin','isOdontologo'])
              @can('viewIndividual',App\Cita::class)
  <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/citaindividual" style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;" class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
              <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
              <circle cx="3.5" cy="5.5" r=".5"/>
              <circle cx="3.5" cy="8" r=".5"/>
              <circle cx="3.5" cy="10.5" r=".5"/>
              </svg> Citas</a>
              @endcan

              @endcanany

          
              @can('create',App\Comentario::class)
             <a href="/pantallainicio/vista/paciente/{{ $pacientes->id}}/comentarios" style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;" class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
              </svg> Comentarios Administrativos</a>
              @endcan
      
            
              @canany(['isAdmin','isOdontologo'])
              <a  href=""class="list-group-item list-group-item-action active"  style="background-color: #e0ebeb; font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;
  
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
              @endcanany
              @can('view',App\Recaudacion::class)
  <a href="/pantallainicio/vista/paciente/{{$pacientes->id}}/VistaRecaudaciones"  style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;"class="list-group-item list-group-item-action"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>  Recaudacion</a>
              @endcan
               

                @can('create',App\Alerta::class)
                <a href="/pantallainicio/{{$pacientes->id}}/alertas" style="background-color: #e6f9ff;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;" class="list-group-item list-group-item-action"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
          </svg>  Alertas</a>

                @endcan


                <a href="/pantallainicio/vista" class="list-group-item list-group-item-action active" style="background-color:#e0ebeb;font-size:20px; font-family: Times New Roman, Times, serif;color:#007599;
  
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


