@extends('Plantilla.dashboard')

@section('titulo','Administracion')


@section('content')

<style>
.container {
  position:relative;
 width:900px;

}

.image {
  opacity: 1;
  display: block;
  width: 50px;
  height: 50px;
  transition: .5s ease;
  backface-visibility: hidden;
border-style: solid;
  border-color: #1687a7;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}


</style>


 <div class="card mb-3">
          <div class="card-header">
           <h4 style="color:#1687a7"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
  <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
  <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
</svg>Administración</h4>
 <p>En esta Sección muestra las opciones:Odontólogos ,Inventarios,Gastos,Logotipo,Tratamiento,Medios de Pagos, Laboratorios para que el usuario pueda interactuar en la Sección que desee.</p>


            </div>
          <div class="card-body">

<div class="container">
  <img src="{{ asset('Imagenes/Doctor1.png')}}" alt="Avatar" class="image" style="width:170px; height:170px; position:absolute; left:-160px;">

  <div class="middle">
    <div class="text">


 @canany(['isAdmin','isSecretaria'])
              <a class="btn btn-outline-info" href="/pantallainicio/odontologo"  style=" background-color:#d3e0ea; color:#276678; position:absolute; left:-610px; top:70px; width:169px; height:40px;" >
            Odontólogos 
              </a>
            @endcanany

   </div>
  </div>
</div>
  


<div class="container">
  <img src="{{ asset('Imagenes/inventario.jpeg')}}" alt="Avatar" class="image" style="width:170px; height:170px;">
  <div class="middle">
    <div class="text">


   @can('view',App\Inventario::class)
            <a class="btn btn-outline-info" href="/inventario/" style=" background-color:#d3e0ea; color:#276678; position:absolute; left:-435px; top:-10px; width:169px; height:40px;">
              
 Inventarios
           </a>
           @endcan

   </div>
  </div>
</div>




<div class="container">
  <img src="{{ asset('Imagenes/gastos.jpeg')}}" alt="Avatar" class="image" style="width:170px; height:170px; position:absolute; top:-170px; left:190px;">
  <div class="middle">
    <div class="text">



            @can('view',App\Gasto::class)
              <a class="btn btn-outline-info" href="/pantallainicio/gastos" style=" background-color:#d3e0ea; color:#276678; position:absolute; left:-260px; top:-100px; width:169px; height:40px;">
               
               Gastos
              </a>
            @endcan

   </div>
  </div>
</div>
 





<div class="container">
  <img src="{{ asset('Imagenes/logotipo.jpeg')}}" alt="Avatar" class="image" style="width:170px; height:170px; position:absolute; top:-170px; left:366px;">
  <div class="middle">
    <div class="text">


            @can('view',App\Logotipo::class)
              <a class="btn btn-outline-info" href="{{route('logotipo.ver')}}" style=" background-color:#d3e0ea; color:#276678; position:absolute; left:-84px; top:-100px; width:169px; height:40px;">
  
               

Logotipo
             
              </a>
            @endcan
   </div>
  </div>
</div>

 
<div class="container">
  <img src="{{ asset('Imagenes/tratamiento.jpeg')}}" alt="Avatar" class="image" style="width:170px; height:170px; position:absolute; top:-170px; left:543px;">
  <div class="middle">
    <div class="text">


            @canany(['isAdmin','isSecretaria'])
            <a class="btn btn-outline-info"href="/tratamiento/"  style=" background-color:#d3e0ea; color:#276678; position:absolute; left:95px; top:-100px; width:169px; height:40px;" >
               
 Tratamientos
            </a>
            @endcanany
   </div>
  </div>
</div>
 



 
<div class="container">
  <img src="{{ asset('Imagenes/pagos.jpeg')}}" alt="Avatar" class="image" style="width:170px; height:170px; position:absolute; top:-170px; left:720px;">
  <div class="middle">
    <div class="text">

           @canany(['isAdmin','isSecretaria'])
            <a class="btn btn-outline-info" href="/pantallainicio/mediopago" style=" background-color:#d3e0ea; color:#276678; position:absolute; left:270px; top:-100px; width:169px; height:40px;" >
            
 Medios de Pagos 
            </a>
            @endcanany

            
   </div>
  </div>
</div>
 



 
<div class="container">
  <img src="{{ asset('Imagenes/laboratorios.jpeg')}}" alt="Avatar" class="image" style="width:170px; height:170px; position:absolute; top:-170px; left:900px;">
  <div class="middle">
    <div class="text">

         
            <a class="btn btn-outline-info" href="/pantallainicio/laboratorios" style=" background-color:#d3e0ea; color:#276678; position:absolute; left:450px; top:-100px; width:169px; height:40px;">
            
              Laboratorios
            </a>

            
   </div>
  </div>
</div>
 

<p style="position:relative;"></p>

<p style="position:absolute; left:50px; top:330px; color:#1687a7"> <b>
  Odontólogos </b> </p>

<p style="position:absolute; left:230px; top:330px; color:#1687a7"> <b> Inventarios </b></p>

<p style="position:absolute; left:430px; top:330px; color:#1687a7"><b>Gastos</b></p>

<p style="position:absolute; left:590px; top:330px; color:#1687a7"><b>Logotipos</b></p>

<p style="position:absolute; left:760px; top:330px; color:#1687a7"><b>Tratamientos</b></p>

<p style="position:absolute; left:930px; top:330px; color:#1687a7"><b>Medios Pagos</b></p>

<p style="position:absolute; left:1120px; top:330px; color:#1687a7"><b>Laboratorios</b></p>


<h1></h1>













          </div>
        

@endsection

