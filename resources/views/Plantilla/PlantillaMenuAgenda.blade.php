@extends('Plantilla.Plantilla')
@section('titulo','MenuAgenda')

<head>

<style>


#diaria{
    border-radius: 5px;
            width: 200px;
            background-color: #A9E2F3;
            font-size: 14px;
            border-color: #00BFFF;
            position: absolute;
            left: 30px;
            top:80px;
        
}

#semanal{
    border-radius: 5px;
            width: 200px;
            background-color: #A9E2F3;
            font-size: 14px;
            border-color: #00BFFF;
            position: absolute;
            left: 30px;
            top: 130px;
        

}


#mensual{
    border-radius: 5px;
            width: 200px;
            background-color: #A9E2F3;
            font-size: 14px;
            border-color: #00BFFF;
            position: absolute;
            left: 30px;
            top: 180px;

            

}

#darcita{
    border-radius: 5px;
            width: 200px;
            background-color: #A9E2F3;
            font-size: 14px;
            right: 600px;
            border-color: #00BFFF;
            position: absolute;
            left: 30px;
            top: 230px;


}

#vercita{
    border-radius: 5px;
            width: 200px;
            background-color: #A9E2F3;
            font-size: 14px;
            border-color: #00BFFF;
            position: absolute;
            left: 30px;
            top: 280px;
        

}


  #navas{
    width: 800px;
    height: 70px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom, #00cccc ,#00e6e6); 
    left: 310px;
    top: 100px;
    
    
  

  }

  


  #age{
    color: black;
    font-size: 30px; font-family: "Times New Roman", Times, serif; 
  
  position: absolute;
          
            top: 2px;
            left:30px;
  }

  #control{
    width: auto;
    
    border-radius: 12px;
     /*background-image: linear-gradient(to bottom,  #ccffff ,#ff9933); */
    position: absolute;
    left: 700px;
    


  }

  #cont{
    background-color: #00ccff;

  }

  

  #lo1{
    width: 70px;
    border-radius: 50%;
     /*background-image: linear-gradient(to bottom,  #ccffff ,#ff9933); */
    position: absolute;
    top: 0px;
    left: 5px;
    

  }

  


</style>



</head>
@section('contenido')
<body >

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
  
<div class="container" >
<nav class="navbar navbar-light bg-light"  id="navas" >
  <h5 id="age">Agenda</h5>

  <div class="btn-group" role="group" aria-label="Basic outlined example"  style="  position: absolute;
    top: 15px;
    left: 270px; ">

  @can('view', App\Cita::class)
  <a type="button" class="btn btn-outline-primary" href="/pantallainicio/calendario/citadiaria" style=" background-image: linear-gradient(to bottom, #adebeb ,#b3ffe6); color:#000033; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-day" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
</svg>Citas</a>

@endcan


@can('view3', App\Cita::class)
  <a type="button" class="btn btn-outline-primary" href="/pantallainicio/calendario/semanal" style=" background-image: linear-gradient(to bottom, #adebeb ,#b3ffe6);color:#000033; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
</svg>Semanal</a>

@endcan


@can('create', App\Cita::class)
  <a type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#create" style=" background-image: linear-gradient(to bottom, #adebeb ,#b3ffe6);color:#000033; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
  <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>Dar Cita</a>
@endcan


@can('DescargarCitas',App\Cita::class)
  <a type="button"  href="/pdfcitasimpresion"class="btn btn-outline-primary"style=" background-image: linear-gradient(to bottom, #adebeb ,#b3ffe6);color:#000033; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
<path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
</svg>Descargar Citas</a>
</div>

@endcan

</nav>

<div style="position:static;" >
<div class="">
@yield('cuerpo')
</div>
<!-- ---------------------------------------------- -->
</div>
     
@include('darcita')<!-- esta seccion hace que funcione modal dar cita -->
@endsection
</body>

</html>