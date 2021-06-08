@extends('Plantilla.dashboard')

@section('titulo','Administracion')


@section('content')

<style>



#primerdiv1{

width:100%;
max-width:1200px;
min-width:500px;

margin: 10px;


}



#segundodiv1{

width:100%;
max-width:1200px;

margin-top: 50px;



}


#imagen{
width:0 auto;
height:0 auto;


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

           <div id="primerdiv1">
            

               

 @canany(['isAdmin','isSecretaria'])
              <a class="btn btn-outline-info" href="/pantallainicio/odontologo" style="border-style: solid;background-color:white; color:#009999; border-color:#009999; position:static;"  >

   <img  id="imagen" src="{{ asset('Imagenes/Doctor1.png')}}" alt="Avatar" class="three-columns" width="210" height="220" style="">
      <br>      Odontólogos 
              </a>
            @endcanany









 
   @can('view',App\Inventario::class)
            <a class="btn btn-outline-info"  href="/inventario/" style=" background-color:white; color:#009999;  border-style: solid; border-color:#009999;position:static;  ">
              
 
          <img src="{{ asset('Imagenes/inventario.jpeg')}}" alt="Avatar" id="imagen" class="three-columns" width="210" height="220">
<br>
Inventarios </a>
           @endcan




            @can('view',App\Gasto::class)
              <a class="btn btn-outline-info" href="/pantallainicio/gastos" style=" background-color:white; color:#009999;  border-style: solid; border-color:#009999;position:static;  ">
               
              <img src="{{ asset('Imagenes/gastos.jpeg')}}" alt="Avatar" class="three-columns" width="210" height="220" > <br>

Gastos
              </a>
            @endcan


   @can('view',App\Logotipo::class)
              <a class="btn btn-outline-info" href="{{route('logotipo.ver')}}" style=" background-color:white; border-style: solid; border-color:#009999; color:#009999;position:static; ">
  
               

<img src="{{ asset('Imagenes/logotipo1.jpeg')}}" alt="Avatar"class="three-columns" id="imagen" width="210" height="220">
<br>

Logotipo
             
              </a>
            @endcan



            @canany(['isAdmin','isSecretaria'])
            <a class="btn btn-outline-info"href="/tratamiento/"  style=" background-color:white; border-style: solid; border-color:#009999; color:#009999; position:static;" >
               
  <img src="{{ asset('Imagenes/tratamiento.jpeg')}}" alt="Avatar" class="three-columns "  width="210" height="220" id= "imagen" >
<br>
Tratamientos
            </a>
            @endcanany


<div id="segundodiv1">
    

         






           @canany(['isAdmin','isSecretaria'])
            <a class="btn btn-outline-info" href="/pantallainicio/mediopago" style=" background-color:white; border-style: solid; border-color:#009999; position:static;" >
            
  <img src="{{ asset('Imagenes/pagos.jpeg')}}" alt="Avatar" class="two-columns " id="imagen" width="210" height="220"> <br>

Medios de Pagos 
            </a>
            @endcanany




             @canany(['isAdmin','isSecretaria'])
 
            <a class="btn btn-outline-info" href="/pantallainicio/laboratorios" style=" background-color:white; border-style: solid; border-color:#009999; position:static;">
            
              <img src="{{ asset('Imagenes/laboratorios1.jpeg')}}" alt="Avatar" class="two-columns " id="imagen" width="210" height="220">
 <br>
Laboratorios
            </a>

@endcanany



      </div>

</div>











          </div>
        

@endsection

