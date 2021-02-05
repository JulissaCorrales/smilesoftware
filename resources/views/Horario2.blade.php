@extends('Plantilla.Plantilla')

@section('contenido')

<style>

#horario{
  color: #007399;
 
  font-family: serif;
  position: absolute;
            left: 250px;
            top: 320px;
            font-size:20px;
            background-color: #c1f0f0;
}

#ho1{
  position: absolute;
            left: 150px;
            top: 250px;
            font-size:20px;
            
            
            background-color: #c1f0f0;
           
 
}

#nav1{
  height:400px;
  
}

#ho2{
  position: absolute;
            left: 150px;
            top: 600px;
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

#select1{
  position: absolute;
            left: 160px;
            top: 150px;
            font-size:20px;
            font-family: serif;
            color: #007399;
           
           
}

#select2{
  position: absolute;
            left: 160px;
            top: 180px;
            font-size:20px;
            font-family: serif;
            color: #007399;
           
           
}


#select3{
  position: absolute;
            left: 280px;
            top: 150px;
            font-size:20px;
            font-family: serif;
            color: #007399;
           
           
}

#select4{
  position: absolute;
            left: 280px;
            top: 180px;
            font-size:20px;
            font-family: serif;
            color: #007399;
           
           
}

#table2{

  font-family: serif;
  position: absolute;
            left: 460px;
            top: 290px;
            font-size:20px;
            width: 800px;
            height:150px;
}


#table3{

font-family: serif;
position: absolute;
          left: 450px;
          top: 150px;
          font-size:20px;
          width: 900px;
          height:150px;
}

#descanso{
  position: absolute;
            left: 3px;
            top: 20px;
            

}


#td2{
  position: absolute;
            left: 150px;
}


#td3{
  position: absolute;
            left: 150px;
}


#td4{
  position: absolute;
            left: 160px;
}


#td5{
  position: absolute;
            left: 150px;
}

#selecinicio{
    position: absolute;
            left: 430px;
            width: 105px;
            
           
        
} 

#selecinicio1{
    position: absolute;
            left: 540px;
            width: 105px;
           
        
} 

#selecinicio2{
    position: absolute;
            left: 655px;
            width: 105px;
           
        
} 


#selecinicio3{
    position: absolute;
            left: 770px;
            width: 105px;
           
        
} 

#selecinicio4{
    position: absolute;
            left: 880px;
            width: 105px;
           
        
} 


#selecinicio5{
   
    position: absolute;
            left: 990px;
            width: 105px;
           
        
} 

#selecinicio6{
    position: absolute;
            left: 1100px;
            width: 105px;
           
        
} 


#selecinicio20{

    position: absolute;
            left: 430px;
            width: 105px;
            top:400px;
            

}

#selecinicio21{

    position: absolute;
            left: 540px;
            width: 105px;
        top:400px;
        

}


#selecinicio22{

    position: absolute;
            left: 655px;
            width: 105px;
    top:400px;
    

}

#selecinicio23{

    position: absolute;
            left: 770px;
            width: 105px;
top:400px;


}

#selecinicio24{

    position: absolute;
            left: 880px;
            width: 105px;
top:400px;


}

#selecinicio25{

    position: absolute;
            left: 990px;
            width: 105px;
top:400px;


}


#selecinicio26{

    position: absolute;
            left: 1100px;
            width: 105px;
top:400px;


}


#selecinicio27{

    position: absolute;
            left: 430px;
            width: 105px;
top:450px;


}


#selecinicio28{

    position: absolute;
            left: 540px;
            width: 105px;
top:450px;


}


#selecinicio29{

    position: absolute;
            left: 655px;
            width: 105px;
top:450px;


}

#selecinicio30{

    position: absolute;
            left: 770px;
            width: 105px;
top:450px;


}


#selecinicio31{

    position: absolute;
            left: 880px;
            width: 105px;
top:450px;


}

#selecinicio32{

    position: absolute;
            left: 990px;
            width: 105px;
top:450px;


}


#selecinicio33{

    position: absolute;
            left: 1100px;
            width: 105px;
top:450px;


}

#descanso1{
    position: absolute;
            left: 100px;
            width: 1200px;
            top: 290px;
}


#descanso2{
    position: absolute;
            left: 430px;
            
            top: 350px;
}


#lunes{
    position: absolute;
            left: 20px;
            
            top: 60px;

}

#martes{
    position: absolute;
            left: 120px;
            
            top: 60px;

}

#miercoles{
    position: absolute;
            left: 220px;
            
            top: 60px;

}

#jueves{
    position: absolute;
            left: 350px;
            
            top: 60px;

}


#viernes{
    position: absolute;
            left: 450px;
            
            top: 60px;

}

#sabado{
    position: absolute;
            left: 560px;
            
            top: 60px;

}

#domingo{
    position: absolute;
            left: 670px;
            
            top: 60px;

}


#horaini{
    position: absolute;
            left: 300px;
            
            top: 240px;

}

#hoinicio{
    position: absolute;
            left: 300px;
            
            top: 400px;


}

#hodescanso{
    position: absolute;
            left: -200px;
            
            top: 60px;


}

#hofin{
    position: absolute;
            left: 300px;
            
            top: 290px;


}


#hoofinal{
    position: absolute;
            left: 300px;
            
            top: 460px;


}




</style>

<div  class="container"id="h">
<nav class="navbar navbar-light bg-light" id="na">
  <div class="container">
   <h4 id="texto4">Horarios Odontologo</h4>
  </div>
</nav>
</div>

<form method="post" action="\create\{{$odontologos->id}}\nuevo " file="true" enctype="multipart/form-data">
@csrf


            <div  class="container">
            <table class="container" id="table3">

            <?php 

try
{
  $mbd = new PDO('mysql:host=127.0.0.1;dbname=smilesoftware', "root", "");
  $sth= $mbd->query('select dias from dias where id= 1');

  $sth1= $mbd->query('select dias from dias where id= 2');
  $sth2= $mbd->query('select dias from dias where id= 3');

  $sth3= $mbd->query('select dias from dias where id= 4');
  $sth4= $mbd->query('select dias from dias where id= 5');
  $sth5= $mbd->query('select dias from dias where id= 6');
  $sth6= $mbd->query('select dias from dias where id= 7');
  
  //foreach($sth as $fila){
     // echo $fila["nombres"];
   // echo "<br>";
   //}






  
}
catch(Exception $e)
{
        echo "no conectado";
}

 ?>

                
<th scope="col" name="miercoles"></th>         
<?php 
      
    
      foreach($sth as $fila){

?>
    <th scope="col"><h6 id="lunes"><?php  echo  $fila["dias"];  ?></h6></th>
    <?php
      }
      ?>

     <?php 
      
    
      foreach($sth1 as $fila){

?>
    <th scope="col"><h6 id="martes"><?php  echo  $fila["dias"];  ?></h6></th>
    <?php
      }
      ?>
      <?php 
      
    
      foreach($sth2 as $fila){

?>
    <th scope="col" ><h6 id="miercoles" ><?php  echo  $fila["dias"];  ?></h6></th>
    <?php
      }
      ?>
     <?php 
      
    
      foreach($sth3 as $fila){

?>
    <th scope="col"><h6 id="jueves"><?php  echo  $fila["dias"];  ?></h6></th>
    <?php
      }
      ?>
     <?php 
      
    
      foreach($sth4 as $fila){

?>
    <th scope="col"><h6 id="viernes"><?php  echo  $fila["dias"];  ?></h6></th>
    <?php
      }
      ?>
     <?php 
      
    
      foreach($sth5 as $fila){

?>
    <th scope="col"><h6 id="sabado"><?php  echo  $fila["dias"];  ?></h6></th>
    <?php
      }
      ?>
      <?php 
      
    
      foreach($sth6 as $fila){

?>
    <th scope="col" ><h6 id="domingo"><?php  echo  $fila["dias"];  ?></h6></th>
    <?php
      }
      ?>
     


     
      </tr>
      
  </thead>
            
            
            </table>
            
            </div>    
                    


    <?php
 for($i=1; $i <= 1; $i++) {?>

  <br> <br>
  <div class="container" id="">
  
 <table class="container">

  <tbody>
  <tr>
  <th id="horaini">Hora Inicio</th>

 <td><select name="horainicio" class="form-control" value="1" id="selecinicio">
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


                  <td>  <select name="horainicio" class="form-control" value="1" id="selecinicio1">
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


                 <td>   <select name="horainicio" class="form-control" value="1" id="selecinicio2">
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


                  <td>  <select name="horainicio" class="form-control" value="1" id="selecinicio3">
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

                 <td>   <select name="horainicio" class="form-control" value="1" id="selecinicio4">
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

               <td>     <select name="horainicio" class="form-control" value="1" id="selecinicio5">
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


                  <td>  <select name="horainicio" class="form-control" value="1" id="selecinicio6">
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

      <?php
 for($i=1; $i <= 1; $i++) {?>

  <br> <br>

  <div class="container">

  <table>
<tbody>
 <tr>

<th id="hofin">Hora Final</th>

 <td><select name="horafin" class="form-control" value="1" id="selecinicio">
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

                <td>    <select name="horafin" class="form-control" value="1" id="selecinicio1">
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

                 <td>   <select name="horafin" class="form-control" value="1" id="selecinicio2">
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


                 <td>   <select name="horafin" class="form-control" value="1" id="selecinicio3">
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


                   <td> <select name="horafin" class="form-control" value="1" id="selecinicio4">
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

                   <td> <select name="horafin" class="form-control" value="1" id="selecinicio5">
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

                  <td>  <select name="horafin" class="form-control" value="1" id="selecinicio6">
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
<tbody>
</table>
    </div>
      

      <div id="">

      <table class="container" id="table2">

      <tbody>
     
      <tr>
      <th id="hodescanso">Hora descanso</th>
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
      
      
      </tr>
      
      </tbody>
      </table>

     
    
    </div>

      <?php
 for($i=1; $i <= 1; $i++) {?>

  <br> <br>
  <div class="container">
  <table>
  <tbody>
  <tr>
  <th id="hoinicio">Hora Inicio</th>

<td> <select name="horadescansoini" class="form-control" value="1" id="selecinicio20">
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

              <td>      <select name="horadescansoini" class="form-control" value="1" id="selecinicio21">
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


                <td>    <select name="horadescansoini" class="form-control" value="1" id="selecinicio22">
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

                <td>    <select name="horadescansoini" class="form-control" value="1" id="selecinicio23">
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

                  <td>  <select name="horadescansoini" class="form-control" value="1" id="selecinicio24">
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

                  <td>  <select name="horadescansoini" class="form-control" value="1" id="selecinicio25">
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

                 <td>   <select name="horadescansoini" class="form-control" value="1" id="selecinicio26">
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

<?php
 for($i=1; $i <= 1; $i++) {?>

  <br> <br>
  <div class="container">
  <table>
  <tbody>
  
  <tr>
  <th id="hoofinal">Hora Final</th>

 <td><select name="horadescansofin" class="form-control" value="1" id="selecinicio27">
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


                 <td>   <select name="horadescansofin" class="form-control" value="1" id="selecinicio28">
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


                   <td> <select name="horadescansofin" class="form-control" value="1" id="selecinicio29">
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

                   <td> <select name="horadescansofin" class="form-control" value="1" id="selecinicio30">
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


                   <td> <select name="horadescansofin" class="form-control" value="1" id="selecinicio31">
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


                  <td>  <select name="horadescansofin" class="form-control" value="1" id="selecinicio32">
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

                  <td>  <select name="horadescansofin" class="form-control" value="1" id="selecinicio33">
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

  <button type="submit" class="btn btn-primary" >Guardar</button>
  </form>
  </div>
</nav>
</div>



@endsection