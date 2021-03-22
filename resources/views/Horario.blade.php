@extends('Plantilla.Plantilla2')

@section('contenido')
<style>
#ho2{
  position: absolute;
            left: 750px;
            top: 500px;
            font-size:40px;
            width:500px;

            background-color: #00cccc;
}

#texto4{
  color: #007399;
 
  font-family: serif;
  position: absolute;
            left: -650px;
            top: -280px;
            font-size:25px;
        
}


#td1{

position: absolute;
          left: 180px;
          

}

#table1{
    position: absolute;
            left: 400px;
            top: 260px;
            font-size:15px;
            width:900px;
            
}


#table2{
    position: absolute;
            left: 400px;
            top: 300px;
            font-size:15px;
            width:900px;
            
}

#table3{
    position: absolute;
            left:550px;
            top: 230px;
            font-size:15px;
            width:600px;
}


#table4{
    position: absolute;
            left: 600px;
            top: 350px;
            font-size:15px;
            width:780px;
            
}



#table5{
    position: absolute;
            left: 400px;
            top: 400px;
            font-size:15px;
            width:900px;
            
}


#table6{
    position: absolute;
            left: 400px;
            top: 450px;
            font-size:15px;
            width:900px;
            
}
#lunes{

position: absolute;
    left: 50px;
    top:-5px;
    font-size:15px;

}


#martes{
position: absolute;
left: 150px;
    top:-5px;
    font-size:15px;
    width:105px; 
} 

#miercoles{
position: absolute;
left: 250px;
    top:-5px;
    font-size:15px;
    width:105px; 
   

} 

#jueves{
position: absolute;
left: 370px;
    top:-5px;
    font-size:15px;
    width:105px; 
       
} 

#viernes{
    position: absolute;
    left: 480px;
    top:-5px;
    font-size:15px;
  
       
} 

#sabado{
position: absolute;
left: 590px;
    top:-5px;
   
    font-size:15px;
    width:105px; 
       
} 

#domingo{

position: absolute;
    left: 690px;
    top:-5px;
    font-size:15px;
    width:105px; 
} 


    #selecinicio{

        position: absolute;
            left: 170px;
           
            font-size:15px;
            width:105px; 
    }


    #selecinicio1{
    position: absolute;
            left: 280px;
           
            font-size:15px;
            width:105px; 
} 

#selecinicio2{
    position: absolute;
            left: 390px;
           
            font-size:15px;
            width:105px; 
           
        
} 

#selecinicio3{
    position: absolute;
            left: 500px;
           
            font-size:15px;
            width:105px; 
               
} 

#selecinicio4{
    position: absolute;
            left: 610px;
           
            font-size:15px;
            width:105px; 
               
} 

#selecinicio5{
   
    position: absolute;
            left: 720px;
           
            font-size:15px;
            width:105px; 
} 
#selecinicio6{
    position: absolute;
            left: 830px;
           
            font-size:15px;
            width:105px; 
} 


#selecinicio7{

position: absolute;
    left: 170px;
   
    font-size:15px;
    width:105px; 
}

#selecinicio8{
    position: absolute;
            left: 280px;
           
            font-size:15px;
            width:105px; 
} 

#selecinicio9{
    position: absolute;
            left: 390px;
           
            font-size:15px;
            width:105px; 
           
        
} 

#selecinicio10{
    position: absolute;
            left: 500px;
           
            font-size:15px;
            width:105px; 
               
} 

#selecinicio11{
    position: absolute;
            left: 610px;
           
            font-size:15px;
            width:105px; 
               
} 

#selecinicio12{
   
    position: absolute;
            left: 720px;
           
            font-size:15px;
            width:105px; 
} 
#selecinicio13{
    position: absolute;
            left: 830px;
           
            font-size:15px;
            width:105px; 
} 

#hofin{

            position: absolute;
            left: 50px;
            top:5px;
            font-size:15px;
            width:105px; 
}

 #horaini{

    position: absolute;
            left: 50px;
            top:5px;
            font-size:15px;
            width:105px; 

 }



 #hoofinal{
    position: absolute;
            left: 50px;
            top:5px;
            font-size:15px;
            width:105px; 
 }

 #hoinicio{
    position: absolute;
            left: 50px;
            top:5px;
            font-size:15px;
            width:105px; 
 }


 #hodescanso{
    position: absolute;
            left: -150px;
            top:5px;
            font-size:15px;
          

 }


 #selecinicio14{

position: absolute;
    left: 170px;
   
    font-size:15px;
    width:105px; 
}


#selecinicio15{
position: absolute;
    left: 280px;
   
    font-size:15px;
    width:105px; 
} 

#selecinicio16{
position: absolute;
    left: 390px;
   
    font-size:15px;
    width:105px; 
   

} 

#selecinicio17{
position: absolute;
    left: 500px;
   
    font-size:15px;
    width:105px; 
       
} 

#selecinicio18{
position: absolute;
    left: 610px;
   
    font-size:15px;
    width:105px; 
       
} 

#selecinicio19{

position: absolute;
    left: 720px;
   
    font-size:15px;
    width:105px; 
} 
#selecinicio20{
position: absolute;
    left: 830px;
   
    font-size:15px;
    width:105px; 
} 


#selecinicio21{

position: absolute;
    left: 170px;
   
    font-size:15px;
    width:105px; 
}


#selecinicio22{
position: absolute;
    left: 280px;
   
    font-size:15px;
    width:105px; 
} 

#selecinicio23{
position: absolute;
    left: 390px;
   
    font-size:15px;
    width:105px; 
   

} 

#selecinicio24{
position: absolute;
    left: 500px;
   
    font-size:15px;
    width:105px; 
       
} 

#selecinicio25{
position: absolute;
    left: 610px;
   
    font-size:15px;
    width:105px; 
       
} 

#selecinicio26{

position: absolute;
    left: 720px;
   
    font-size:15px;
    width:105px; 
} 
#selecinicio27{
position: absolute;
    left: 830px;
   
    font-size:15px;
    width:105px; 
} 

#butongua{
    position: absolute;
            left: 500px;
            top:10px;
}


#buton2{
    position: absolute;
            left: 420px;
            top:10px;
}


#buton3{

    position: absolute;
            left: 200px;
            top: 205px;

}







#datos{
position: absolute;
    left: 50px;
   top: 270px;
    font-size:12px;
    width: 380px;
    border-collapse: collapse;
    background-color: #f2f2f2;

} 


#image{
    margin-left: auto;
  margin-right: auto;

  border-radius: 70%;
  position: relative;
  top: 5px;
  left:150px;
  border: 4px solid  #00ccff;

  width: 100px;

}





#dat2{
position: relative;
  top: -100px;
  left:20px;
  width: 250px;
}


#dat3{
position: relative;
  top: -5px;
  left:20px;
  width: 250px;
}


#dat4{
position: relative;
  top: -20px;
  left:20px;
  width: 250px;
}


#dat5{
position: relative;
  top: -13px;
  left:20px;
  width: 250px;
}















</style>


<div class="container">
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
</div>

<table class="container" id="datos">

  <tbody>
    <tr>
      
      <td><img src='/Imagenes/{{$odontologos->imagen}}' class="card-img-top" id="image" ></td>
      
    </tr>
    <tr>
      <th>Odontologo:</th>
      <td>{{$odontologos->nombres}} {{$odontologos->apellidos}}</td>
    </tr>
    @forelse ($horario as $tag) 


    <tr>
    @if($tag->dias !=null)
                                @foreach ($tag->dias as $dia )
                                <th >
                                        {{ $dia->dias }} </th>
                                @endforeach
                            @endif
      
      <td colspan="2">Hora de Atencion:{{$tag->HoraInicio}}-{{$tag->HoraFinal}} <br>
      Descanso:{{$tag->Descanso }} <br>
      {{$tag->DescansoInicial}}-{{$tag->DescansoFinal}}</td>

      <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalll3-{{$tag->id}}" id="buton"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>
   
  </button></td>


  
  <div class="modal fade" id="modalll3-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> Eliminar Horario de Atencion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el Horario de atencion {{$tag->HoraInicio}}-{{$tag->HoraFinal}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
    </tr>

  </tbody>
</table>

<div  class="container" id="ho2">

   <h4 id="texto4">Horarios Odontologo</h4>
  </div>





<form method="post" action="\create\{{$odontologos->id}}\nuevo " file="true" enctype="multipart/form-data">
@csrf

<?php 
for($i=1; $i <= 1; $i++) {?>

<table class="container" id="table3">

<tbody>

<tr>
<td id="lunes">Lunes<input type="radio" name="dias" value="Lunes" >
</td>

<td id="martes">Martes<input type="radio" name="dias" value="Martes">
</td>

<td id="miercoles">Miercoles<input type="radio" name="dias" value="Miercoles">
</td>

<td id="jueves">Jueves<input type="radio" name="dias" value="Jueves">
</td>

<td id="viernes">Viernes<input type="radio" name="dias" value="Viernes">
</td>
<td id="sabado">Sabado<input type="radio" name="dias" value="Sabado">
</td>
<td id="domingo">Domingo<input type="radio" name="dias" value="Domingo">
</td>

<?php
}
?>
    
      </tr>
      
      </tbody>
      </table>
  
                    


    <?php
 for($i=1; $i <= 1; $i++) {?>

  <br> <br>
  
 <table class="container" id="table1">

  <tbody>
  <tr id="tr1">
  <th id="horaini">Hora Inicio</th>

 <td><select name="horainicio" class="form-control" value="Lunes" id="selecinicio">
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


                  <td>  <select name="horainicio" class="form-control" value="Martes" id="selecinicio1">
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


                 <td>   <select name="horainicio" class="form-control" value="Miercoles" id="selecinicio2">
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


                  <td>  <select name="horainicio" class="form-control" value="Jueves" id="selecinicio3">
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

                 <td>   <select name="horainicio" class="form-control" value="Viernes" id="selecinicio4">
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

               <td>     <select name="horainicio" class="form-control" value="Sabado" id="selecinicio5">
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


                  <td>  <select name="horainicio" class="form-control" value="Domingo" id="selecinicio6">
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
    </tbody>
    </table>
      
    






      <?php
 for($i=1; $i <= 1; $i++) {?>

  <br> <br>

  <div class="">

  <table class="container" id="table2">
<tbody>
 <tr>

<th id="hofin">Hora Final</th>

 <td><select name="horafin" class="form-control" value="Lunes" id="selecinicio7">
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

                <td>    <select name="horafin" class="form-control" value="Martes" id="selecinicio8">
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

                 <td>   <select name="horafin" class="form-control" value="Miercoles" id="selecinicio9">
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


                 <td>   <select name="horafin" class="form-control" value="Jueves" id="selecinicio10">
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


                   <td> <select name="horafin" class="form-control" value="Viernes" id="selecinicio11" >
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

                   <td> <select name="horafin" class="form-control" value="Sabado" id="selecinicio12" >
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

                  <td>  <select name="horafin" class="form-control" value="Domingo" id="selecinicio13">
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
</tbody>
</table>
    </div>
      

      <div id="">
 <?php 
for($i=1; $i <= 1; $i++) {?>

<table class="container" id="table4">

<tbody>

<tr>
<th ><h3 id="hodescanso">Hora descanso</h3></th>
<td>Si  <input type="checkbox" id="" value="si" name="descanso">
</td>

<td>Si  <input type="checkbox" id="" value="si" name="descanso" >
</td>

<td>Si  <input type="checkbox" id=""  value="si" name="descanso"  >
</td>

<td>Si  <input type="checkbox" id="" value="si" name="descanso"  >
</td>

<td>Si  <input type="checkbox" id="" value="si" name="descanso"  >
</td>
<td>Si  <input type="checkbox" id="" value="si" name="descanso"  >
</td>
<td>Si  <input type="checkbox" id=""  value="si" name="descanso" >
</td>

<?php
}
?>
    
      </tr>
      
      </tbody>
      </table>

     
    
    </div>

      <?php
 for($i=1; $i <= 1; $i++) {?>

  <br> <br>

  <table class="container" id="table5">
  <tbody>
  <tr>
  <th id="hoinicio">Hora Inicio</th>

<td> <select name="horadescansoini" class="form-control" value="Lunes" id="selecinicio14">
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

              <td>      <select name="horadescansoini" class="form-control" value="Martes" id="selecinicio15">
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


                <td>    <select name="horadescansoini" class="form-control" value="Miercoles" id="selecinicio16">
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

                <td>    <select name="horadescansoini" class="form-control" value="Jueves" id="selecinicio17">
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

                  <td>  <select name="horadescansoini" class="form-control" value="Viernes" id="selecinicio18">
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

                  <td>  <select name="horadescansoini" class="form-control" value="Sabado" id="selecinicio19">
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

                 <td>   <select name="horadescansoini" class="form-control" value="Domingo" id="selecinicio20">
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
    </tbody>
    </table>

    

<?php
 for($i=1; $i <= 1; $i++) {?>

  <br> <br>
  
  <table class="container" id="table6">
  <tbody>
  
  <tr>
  <th id="hoofinal">Hora Final</th>

 <td><select name="horadescansofin" class="form-control" value="Lunes" id="selecinicio21">
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


                 <td>   <select name="horadescansofin" class="form-control" value="Martes" id="selecinicio22">
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


                   <td> <select name="horadescansofin" class="form-control" value="Miercoles" id="selecinicio23">
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

                   <td> <select name="horadescansofin" class="form-control" value="Jueves" id="selecinicio24">
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


                   <td> <select name="horadescansofin" class="form-control" value="Viernes" id="selecinicio25">
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


                  <td>  <select name="horadescansofin" class="form-control" value="Sabado" id="selecinicio26">
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

                  <td>  <select name="horadescansofin" class="form-control" value="Domingo" id="selecinicio27">
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

<div  class="container" id="ho2">

  
  <button type="submit" class="btn btn-primary" id="butongua" >Guardar</button>
  </form>

  <a type="button" class="btn btn-info" href="{{route('odontologo.vista')}}" id="buton2">Atras</a>
</div>




@endsection