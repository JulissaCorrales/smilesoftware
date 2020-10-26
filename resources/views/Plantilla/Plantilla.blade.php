<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@yield('titulo')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

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
        height: 120px;
        background-image: linear-gradient(to bottom, #33d6ff ,#e6ffff );

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
            background-color: #b3f0ff;
            font-size: 16px;
            border-color: #e67300;
            left: 930px;
            
            color: #ff8000;
  
            
            
        } 

        
        #buscar{
            
            width: 100px;
            left: 830px;
            background-color: #ffad33;
            font-size: 14px;
            border-color: #00e6e6;
            position: absolute;
            top: 53px;
            color: #ccffff;
            border-radius: 12px;
            
            


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
            left: 1000px;
            background-color: #00e6e6;
            font-size: 14px;
            border-color: #00BFFF;
            position: absolute;
            top: 50px;
          

          
        }


        #buscar1{
          left: 750px;

        }

        #texto{
          border-radius: 12px;
            width: 500px;
            background-color: #ccffff;
            font-size: 16px;
            position: absolute;
           left: 320px;
           top: 50px;
           border-color: #33cccc;
           /* background-image: url("{{ asset('Imagenes/busqueda1.jpg') }}") ; */
           
        }

        #nav{
         
          background-image: linear-gradient(to top, #33d6ff ,#e6ffff );
        }

  
      


    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <title> @yield('titulo')</title>

  </head>
  <body >

    <header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-lg"   id="cuatro">
  <h1 id="uno" >Smile </h1><br>
  <h1 id="tres">Software</h1>

  
  <div class="media" >
  <!-- Correpcion de ruta de imagen -->
  <img class="logo" src="{{ asset('Imagenes/Icono.jpg') }}" class="mr-3" width="80px" id="dos">
  <div class="media-body">
  </div>
</div>


 
  <div class="collapse navbar-collapse" width="80px" id="buscador">
  <form class="form-inline my-2 my-lg-0" id="buscar1"  action="buscar">
      <input  name="buscarpor"  class="form-control" type="search" placeholder="Buscar Paciente" aria-label="Search" width="500px" id="texto"  >
      <button class= "btn btn-outline-success my-2 my-sm-0" id="buscar" type='submit'>Buscar</button>
    
      </form>

  </div> 
 






  <br>
  <br>
  <div class="btn-group" id="administrador1">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="Administrador">
    Administrador 
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Usuario</a>
    <a class="dropdown-item" href="#">Clinico</a>
</div>
</nav>


<div class="nav-scroller bg-white shadow-sm" id="cinco">

  <nav class="navbar navbar-expand-lg navbar-light bg-light"  id="nav">
<div class="btn-group btn-group-lg" id="agenda1" >
  <a id ="agenda" type="button" class="btn btn-outline-info" href="/pantallainicio/calendario">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg>  Agenda</a>

 <!-- Esta parte se da acceso a la ruta de la vista de paciente -->
<div class="btn-group btn-group-lg" id="paciente1">
<a type="button" class="btn btn-outline-info" id="paciente" href="/pantallainicio/vista">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>  Paciente</a>

</div>

<div class="btn-group btn-group-lg" id="recaudacion1">
<button type="button" class="btn btn-outline-info" id="recaudacion"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>  Recaudacion</button>

</div>


      <div class="btn-group btn-group-lg" id="administracion1">
  <button type="button" class="btn btn-outline-info" id= "administracion"     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
</svg>  Administracion
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Gastos</a>
    <a class="dropdown-item" href="#">Gestion de Odontologos </a>
    <a class="dropdown-item" href="#">Especialidad</a>
</div>



  </nav>
</div>
</header>

<!-- Begin page content -->
  <!-- class="flex-shrink-0" -->


  <div>
  @yield('contenido')
  </div>
<!-- link para configurar el buscador -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoftBy2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>






</html>