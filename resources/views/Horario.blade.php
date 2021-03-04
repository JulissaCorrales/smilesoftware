@extends('Plantilla.Plantilla')

@section('contenido')
<style>
#ho2{
  position: absolute;
            left: 150px;
            top: 500px;
            font-size:20px;
}

#texto4{
  color: #007399;
 
  font-family: serif;
  position: absolute;
            left: 40px;
            top: 30px;
            font-size:20px;
        
}


#td1{

position: absolute;
          left: 180px;
          

}

#table1{
    position: absolute;
            left: 300px;
            top: 260px;
            font-size:15px;
            width:900px;
            
}


#table2{
    position: absolute;
            left: 300px;
            top: 300px;
            font-size:15px;
            width:900px;
            
}

#table3{
    position: absolute;
            left: 450px;
            top: 230px;
            font-size:15px;
            
}


#table4{
    position: absolute;
            left: 500px;
            top: 350px;
            font-size:15px;
            width:800px;
            
}



#table5{
    position: absolute;
            left: 300px;
            top: 400px;
            font-size:15px;
            width:900px;
            
}


#table6{
    position: absolute;
            left: 300px;
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
            left: 100px;
}

















</style>

<div  class="container">
<nav class="navbar navbar-light bg-light" id="na">
  <div class="container">
   <h4 id="texto4">Horarios Odontologo</h4>
  </div>
</nav>
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


                  <td>  <select name="horainicio" class="form-control" value="Martes" id="selecinicio1">
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


                 <td>   <select name="horainicio" class="form-control" value="Miercoles" id="selecinicio2">
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


                  <td>  <select name="horainicio" class="form-control" value="Jueves" id="selecinicio3">
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

                 <td>   <select name="horainicio" class="form-control" value="Viernes" id="selecinicio4">
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

               <td>     <select name="horainicio" class="form-control" value="Sabado" id="selecinicio5">
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


                  <td>  <select name="horainicio" class="form-control" value="Domingo" id="selecinicio6">
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
<td>Si  <input type="checkbox" id="" name="descanso">
</td>

<td>Si  <input type="checkbox" id="" name="descanso" >
</td>

<td>Si  <input type="checkbox" id="" name="descanso"  >
</td>

<td>Si  <input type="checkbox" id="" name="descanso"  >
</td>

<td>Si  <input type="checkbox" id="" name="descanso"  >
</td>
<td>Si  <input type="checkbox" id="" name="descanso"  >
</td>
<td>Si  <input type="checkbox" id="" name="descanso" >
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
<nav class="navbar navbar-light bg-light">
  <div class="container">
  <a type="button" class="btn btn-info" href="{{route('odontologo.vista')}}">Atras</a>

  <button type="submit" class="btn btn-primary" id="butongua" >Guardar</button>
  </form>
  </div>
</nav>
</div>




@endsection