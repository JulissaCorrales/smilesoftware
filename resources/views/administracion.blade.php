@extends('Plantilla.dashboard')

@section('titulo','Administracion')


@section('content')

<style>

@media all and (max-width: 600px){
    div.primerdiv1{
        width:100%;
        height:auto;
        margin-left:100px;

    }
}





@media all and (max-width: 520px) {
    a.menu{
        padding-left:30%;
         margin:0px 4px;
    }
}




@media all and (max-width: 520px) {
    div.primerdiv1{
        display: inline-block;
        padding:2px 6px;
        margin:0px 4px;
    }
}


@media all and (max-width: 1200px) {
    div.primerdiv1 {
        display: inline-block;
        padding:2px 6px;
        margin:0px 4px;
    }
}



@media all and (max-width: 1200px) {
    div.segundodiv1 {
        display: inline-block;
        padding:0px 6px;
        margin:0px 4px;
    }
}




#primerdiv1{

width:100%;
max-width:120%;
margin-left: 50px;
margin-top:50px;


}



#segundodiv1{

width:100%;
max-width:100%;

margin-top: 5%;



}  


#imagen{
width: 0 auto;
height:0 auto;


} 

</style>


 <div class="card mb-3">
          <div class="card-header">
           <h4 style="color:#1687a7"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
  <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
  <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
</svg>Administración</h4>
 <p>En esta se sección muestra las opciones: Odontólogos ,Inventarios, Gastos, Logotipo, Tratamiento, Medios de Pagos, Laboratorios para que el usuario pueda interactuar en la sección que desee.</p>


            </div>
          <div class="card-body">

           <div id="primerdiv1">
            

               

 @canany(['isAdmin','isSecretaria'])
              <a class="btn btn-outline-info" href="/pantallainicio/odontologo" style="background-color:white; color:#009999;border-color:white; position:static; margin:10px;"    >

   <img  id="imagen" src="{{ asset('Imagenes/Doctor1.png')}}" alt="Avatar" class="three-columns" width="200" height="220" >
      <br>      Odontólogos  <br>  <p></p>

              <br>
              </a>
            @endcanany









 
   @can('view',App\Inventario::class)
            <a class="btn btn-outline-info"  href="/inventariovista/" style=" background-color:white; color:#009999;  border-style: solid; border-color:white;  position:static; margin:10px;">
              
 
          <img src="{{ asset('Imagenes/inventario.jpeg')}}" alt="Avatar" id="imagen" class="three-columns" width="200" height="220">
<br>
Inventarios <br>  <p></p>

              <br>
</a>
           @endcan




            @can('view',App\Gasto::class)
              <a class="btn btn-outline-info" href="/pantallainicio/gastos" style=" background-color:white; color:#009999;  border-style: solid; border-color:white; position:static; margin:10px;">
               
              <img src="{{ asset('Imagenes/gastos.jpeg')}}" alt="Avatar" class="three-columns" width="200" height="220" > <br>

Gastos<br>  <p></p>

              <br>
              </a>
            @endcan


   @can('view',App\Logotipo::class)
              <a class="btn btn-outline-info" href="{{route('logotipo.ver')}}" style=" background-color:white; border-style: solid; border-color:white; color:#009999;  position:static; margin:10px; ">
  
               

<img src="{{ asset('Imagenes/logotipo1.jpeg')}}" alt="Avatar"class="three-columns" id="imagen" width="200" height="220">
<br>

Logotipo <br>  <p></p>

              <br>
             
              </a>
            @endcan



            @canany(['isAdmin','isSecretaria'])
            <a class="btn btn-outline-info"href="/tratamiento/"  style=" background-color:white; border-style: solid; border-color:white; color:#009999; position:static; margin:10px;" >
               
  <img src="{{ asset('Imagenes/tratamiento.jpeg')}}" alt="Avatar" class="three-columns "  width="200" height="220" id= "imagen" >
<br>
Tratamientos <br>  <p></p>

              <br>
            </a>
            @endcanany



    

         



           @canany(['isAdmin','isSecretaria'])
            <a class="btn btn-outline-info" href="/pantallainicio/mediopago" style=" background-color:white; border-style: solid; border-color:white; color:#009999; position:static; margin:10px;" >
            
  <img src="{{ asset('Imagenes/pagos.jpeg')}}" alt="Avatar" class="two-columns " id="imagen" width="200" height="220"> <br>

Medios de Pagos  <br>  <p></p>

              <br>
            </a>
            @endcanany




             
 
            <a class="btn btn-outline-info" href="/pantallainicio/laboratorios" style=" background-color:white;  border-style: solid; border-color:white; color:#009999;  position:static; margin:10px;">
            
              <img src="{{ asset('Imagenes/laboratorios1.jpeg')}}" alt="Avatar" class="two-columns " id="imagen" width="200" height="220">
 <br>
Laboratorios <br>  <p></p><br>

            </a>





  <a  class="btn btn-outline-info"  href="/pantallainicio/especialidad" style=" background-color:white;  border-style: solid; border-color:white; color:#009999;  position:static; margin:10px;">

  <img src="{{ asset('Imagenes/especialidades.jpeg')}}" alt="Avatar" class="two-columns " id="imagen" width="200" height="220">

<br>
   Especialidades <br><p></p><br></a>




      

</div>











          </div>
        

@endsection

