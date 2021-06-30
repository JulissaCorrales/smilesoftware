@extends('Plantilla.dashboard')
@section('titulo','HorarioOdontologo')
@section('content')

<body id="page-top">

  <div class="container">
@if(session('mensaje'))
        <div class="alert alert-success" >
            {{session('mensaje')}}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <h4><img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/Horario.png') }}"  id="logo1" width="4%;" height="4%"><b>Crear Horario</b></h4>
            <p>En esta Sesión se podra crear un horario al odontólogo(a), en el cuál debera de seleccionar el día y la Hora inicio,Hora final, la Hora de Descanso (Opcional).
               El Horario  creado  se visualizará al dar click en la opción de ver Horario que tendrá la opción de  eliminar Horario creado.
</p>
     
<button type="button" style="color:#006622; background-color: #d1e0e0; border-color:white; width:160px; margin-left:0%;"class="btn btn-primary" data-toggle="modal" data-target="#modalll3-{{$odontologos->id}}" id="buton">

<img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/calendarioo.png') }}"  id="logo1" width="35%;" height="4%">
  Ver Horario</button>

    </div>

<!-- ventana Modal -->
  
      
      <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
     
  
  <div class="modal fade bd-example-modal-lg" id="modalll3-{{$odontologos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-lg" role="document" >
          <div class="modal-content" style=" width:80%; margin-top:10%; margin-left:15%; ">
              <div class="modal-header" style="background-color: #d3e0ea; height:100px; color:black;">
                  <h5 class="modal-title" id="exampleModalLabel"><img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/calendarioo.png') }}"  id="logo1" width="9%;" height="4%">
Horario del  odontólogo(a) {{$odontologos->nombres}} {{$odontologos->apellidos}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                

               
<table class="table">
 
<tr style="background-color: #f0f5f5;" >
 <th>Día</th>
 <th>Horario de Atención</th>
<th>Descanso</th>
<th>Eliminar</th>
 

</tr>

  <tbody>
  
         <tr>
@forelse($odontologos->horarios as $tag)
  
          
       
        
 @if($tag->dias !=null)
                                @foreach ($tag->dias as $dia )
                                <td >
                                        {{ $dia->dias }} </td>
                                @endforeach
                            @endif

           
           
       <td><b>Hora Inicio:</b>{{$tag->HoraInicio}}   <br><b>Hora Final:</b>{{$tag->HoraFinal}}</td>

      
                               
                        <td >   @if($tag->Descanso == null)
                               <b>No tiene descanso</b>  @endif  @if($tag->Descanso !=null)<b>Hora Inicio:</b>{{$tag->DescansoInicial}} <br><b>Hora Final:</b>{{$tag->DescansoFinal}} @endif</td>
                            

      
     
      <td> <button   style="color:#006622; background-color: #d1e0e0; border-color:white; width:150px; margin-left:0%;"type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalll5-{{$tag->id}}" id="buton">
<img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/eliminar.png') }}"  id="logo1" width="25%;" height="4%">
   
  </button></td>

   

    
  
    </tr>
@empty
    <tr>
    <td  colspan="4"><p align="center" ><b>No hay Registro de Horarios</b></p></td> 
    @endforelse
     </tr>
   
  

  </tbody>
</table>
   
              </div>
              <div class="modal-footer">
                  
                  
               </div>
           </div>
       </div>
</div>

@forelse ($horario as $tag) 
 

  <div class="modal fade" id="modalll5-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="width:80%; margin-top:-10%; margin-left:15%; ">
              <div class="modal-header" style="background-color: #d3e0ea;; height:100px; color:black;">
                  <h5 class="modal-title" id="exampleModalLabel"><img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/eliminar.png') }}"  id="logo1" width="8%;" height="4%">

 Eliminar el Horario de Atención  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el Horario de Atención {{$tag->HoraInicio}}-{{$tag->HoraFinal}}?
              </div>
              <div class="modal-footer">
                  
                  <form method="post" action="{{route('horario.borrar',['id'=>$tag->id])}}">

                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger">
                   </form>
               </div>
           </div>
       </div>
   </div>

@endforeach 


<!-- Fin del Modal de Editar Datos -->
<!-- cierre de ventana modal -->
  




     


    
          <div class="card-body">
            <div class="table-responsive">
               

             
<form method="post" action="\create\{{$odontologos->id}}\nuevo " file="true" enctype="multipart/form-data">
@csrf

<?php 
for($i=1; $i <= 1; $i++) {?>


              <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
                <thead>
                  <tr style="background-color: #f0f5f5;">
                         <th></th>
                    <th ><input type="radio" name="Día" value="Lunes" require >Lunes</th>

                    <th ><input type="radio" name="Día" value="Martes" require >Martes</th>

                    <th ><input type="radio" name="Día" value="Miércoles" require >Miércoles</th>

                     <th ><input type="radio" name="Día" value="Jueves" require >Jueves</th>

                      <th ><input type="radio" name="Día" value="Viernes" require  >Viernes</th>
                     

                      <th ><input type="radio" name="Día" value="Sábado" require >Sábado</th>

                     <th ><input type="radio" name="Día" value="Domingo" require >Domingo</th>

<?php
}
?>
                  </tr>
                </thead>
               
                <tbody>


               <!--Hora de Inicio -->

                                   
    <?php
 for($i=1; $i <= 1; $i++) {?>

  <br> <br>
                    <tr>
   
                      <th>Hora Inicio</th>

                      
             <td><select name="horainicio" class="form-control" value="Lunes" >
                    <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>


                 
                  <td>  <select name="horainicio" class="form-control" value="Martes" >
                    <option  >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>


                 <td>   <select name="horainicio" class="form-control" value="Miercoles" >
                    <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>


                  <td>  <select name="horainicio" class="form-control" value="Jueves" >
                    <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>

                 <td>   <select name="horainicio" class="form-control" value="Viernes" >
                    <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>

               <td>     <select name="horainicio" class="form-control" value="Sabado" >
                    <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>


                  <td>  <select name="horainicio" class="form-control" value="Domingo">
                    <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>



<?php
}
    ?> 

                    </tr>  

<!--Cierre de Hora Inicio -->


<!-- inicio de Hora Final -->


      <?php
 for($i=1; $i <= 1; $i++) {?>


                  <tr>
                  <th>Hora Final</th>
                   
                   <td><select name="horafinal" class="form-control" value="Lunes" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>

                <td>    <select name="horafinal" class="form-control" value="Martes" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>

                 <td>   <select name="horafinal" class="form-control" value="Miercoles" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>


                 <td>   <select name="horafinal" class="form-control" value="Jueves" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>


                   <td> <select name="horafinal" class="form-control" value="Viernes" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>

                   <td> <select name="horafinal" class="form-control" value="Sabado" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>

                  <td>  <select name="horafinal" class="form-control" value="Domingo" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>
<?php
}
    ?> 

                 </tr>
                   <!-- cierre de la hora final -->


                   <!-- descanso -->
                 <?php 
for($i=1; $i <= 1; $i++) {?> 
                    <tr align="center;"  style="background-color: #f0f5f5;">

                        <th>Hora Descanso</th>

                        <td >Si  <input type="checkbox" id="" value="si" name="descanso"></td>

<td>         Si<input type="checkbox" id="" value="si" name="descanso" ></td>

<td>         Si<input type="checkbox" id=""  value="si" name="descanso"  ></td>

<td>         Si<input type="checkbox" id="" value="si" name="descanso"  ></td>

<td>         Si<input type="checkbox" id="" value="si" name="descanso"  ></td>

<td>         Si<input type="checkbox" id="" value="si" name="descanso"  ></td>

<td>         Si<input type="checkbox" id=""  value="si" name="descanso" ></td>

<?php
}
?>

                       </tr>
                     
<!--cierre de hora de descanso -->



                     <!--Hora Inicio descanso -->
                       
      <?php
 for($i=1; $i <= 1; $i++) {?>

                        <tr>

              <th>Hora Inicio Descanso</th>
            

             
<td> <select name="horadescansoini" class="form-control" value="Lunes" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select>
</td>

              <td>      <select name="horadescansoini" class="form-control" value="Martes" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>


                <td>    <select name="horadescansoini" class="form-control" value="Miercoles" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>

                <td>    <select name="horadescansoini" class="form-control" value="Jueves" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>

                  <td>  <select name="horadescansoini" class="form-control" value="Viernes" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>

                  <td>  <select name="horadescansoini" class="form-control" value="Sabado" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>

                 <td>   <select name="horadescansoini" class="form-control" value="Domingo" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>
<?php
}
    ?> 
</tr>

        <!-- cierre de hora inicio de descando -->

               

   <!-- hora final de descanso -->

          
          <?php
        for($i=1; $i <= 1; $i++) {?>
           <tr>
          <th>Hora Final Descanso</th>

          
 <td><select name="horadescansofin" class="form-control" value="Lunes" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>


                 <td>   <select name="horadescansofin" class="form-control" value="Martes" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>


                   <td> <select name="horadescansofin" class="form-control" value="Miercoles" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>

                   <td> <select name="horadescansofin" class="form-control" value="Jueves" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>


                   <td> <select name="horadescansofin" class="form-control" value="Viernes" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>


                  <td>  <select name="horadescansofin" class="form-control" value="Sabado" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select> </td>

                  <td>  <select name="horadescansofin" class="form-control" value="Domingo" >
                    <option disabled selected >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>

                    </select></td>
<?php
}
    ?> 


          </tr>



               
                </tbody>
              </table>
            </div>
          </div>
        
  

  <a type="button" class="btn btn-info" href="{{route('odontologo.vista')}}"  style="width:100px; margin-left:2%;">Atras</a>
  <button type="submit" class="btn btn-primary"  style="width:100px; margin-top:-3%;  margin-left:11%; ">Guardar</button>
  </form>

<br>
  

  </div>
 

</body>











@endsection