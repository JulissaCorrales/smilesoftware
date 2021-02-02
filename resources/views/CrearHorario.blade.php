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
            left: 3px;
            top: 150px;
            font-size:20px;
            background-color: #c1f0f0;

            width: 960px;
            height:150px;
}


#descanso{
  position: absolute;
            left: 3px;
            top: 20px;
            width: 800px;


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



</style>

<div  class="container"id="ho1">
<nav class="navbar navbar-light bg-light" id="nav1">
  <div class="container">
   <h4 id="texto4">Horarios Odontologo</h4>
  </div>
</nav>
</div>

<form method="post" action="\create\{{$odontologos->id}}\nuevo " file="true" enctype="multipart/form-data">
@csrf
                      
                    
<div id="horario">
<table  class="container">
  <thead>
  
    <tr>
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
    <th scope="col"><h4><?php  echo  $fila["dias"];  ?></h4></th>
    <?php
      }
      ?>

     <?php 
      
    
      foreach($sth1 as $fila){

?>
    <th scope="col"><h4><?php  echo  $fila["dias"];  ?></h4></th>
    <?php
      }
      ?>
      <?php 
      
    
      foreach($sth2 as $fila){

?>
    <th scope="col"><h4><?php  echo  $fila["dias"];  ?></h4></th>
    <?php
      }
      ?>
     <?php 
      
    
      foreach($sth3 as $fila){

?>
    <th scope="col"><h4><?php  echo  $fila["dias"];  ?></h4></th>
    <?php
      }
      ?>
     <?php 
      
    
      foreach($sth4 as $fila){

?>
    <th scope="col"><h4><?php  echo  $fila["dias"];  ?></h4></th>
    <?php
      }
      ?>
     <?php 
      
    
      foreach($sth5 as $fila){

?>
    <th scope="col"><h4><?php  echo  $fila["dias"];  ?></h4></th>
    <?php
      }
      ?>
      <?php 
      
    
      foreach($sth6 as $fila){

?>
    <th scope="col"><h4><?php  echo  $fila["dias"];  ?></h4></th>
    <?php
      }
      ?>
     


     
      </tr>
      
  </thead>
  <tbody>
    <tr>
      <th scope="row">Hora de Inicio</th>
      <td> <select name="hoinii" class="form-control" value="1">
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
                    
                  </td>
      <td> <select name="hoini" class="form-control" value="2">
          
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
                  </td>
      <td> <select name="hoini" class="form-control" value="3">
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
                  </td>

                  <td> <select name="hoini" class="form-control" value="4">
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
                  </td>

                  <td> <select name="hoini" class="form-control" value="5">
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
                  </td>

                  <td> <select name="hoini" class="form-control" value="6">
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
                  </td>
                  <td> <select name="hoini" class="form-control" value="7">
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
                  
                  </td>
    </tr>

    <tr>
      <th scope="row">Hora Final</th>
      <td>  
                <select name="hofin" class="form-control" value="1">
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
                
 
        </td>
      <td> <select name="hofin" class="form-control" value="2">
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
                  </td>
      <td> <select name="hofin" class="form-control" value="3">
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
                  </td>

                  <td> <select name="hofin" class="form-control" value="4">
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
                  
                  </td>

                  <td> <select name="hofin" class="form-control" value="5">
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
                  </td>

                  <td> <select name="hofin" class="form-control" value="6">
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
                  </td>

                  <td> <select name="hofin" class="form-control" value="7">
                  <option id="ocho" value="8:00 a.m">8:00 a.m</option>
                    <option id="nueve" value="9:00 a.m">9:00 a.m</option>
                    <option id="diez" value="10:00 a.m">10:00 a.m</option>
                    <option id="once" value="11:00.am">11:00 a.m</option>
                    <option id="doce" value="12:00 p.m">12:00 p.m</option>
                    <option id="una" value="1:00 p.m">1:00 p.m</option>
                    <option id="do" value="2:00 p.m" >2:00 p.m</option>
                    <option id="tre" value="3:00 p.m" >3:00 p.m</option>
                    <option  id="cua" value="4:00 p.m" >4:00 p.m</option>
                    <option id="cin"  value="5:00 p.m" >5:00 p.m</option>
                    <option id="seis" value="6:00 p.m"  >6:00 p.m</option>
                  </td>
    </tr>
    <tr>
      <th scope="row">Hora de Descanso </th>


        <td  id="td1"> Si  <input type="checkbox" id="siprimero" name="descanso"  onclick="mostrartabla()">
                  </td>
      <td>  Si  <input type="checkbox" id="simartes" onclick="mostrartabla1()">
                  </td>

                  <td>  Si  <input type="checkbox" id="simiercoles" name="descanso"  onclick="mostrartabla2()">
                  </td>

                  <td>  Si  <input type="checkbox" id="sijueves" name="descanso"   onclick="mostrartabla()">
                  </td>

                  <td> Si  <input type="checkbox" id="siviernes" name="descanso"   onclick="mostrartabla()">
                  </td>

                  <td> Si  <input type="checkbox"id="sisabado" name="descanso"   onclick="mostrartabla()">
                  </td>

                  <td>  Si  <input type="checkbox" id="sidomingo"  name="descanso"  onclick="mostrartabla()">
                  </td>
    </tr>
  </tbody>
</table> 




<div id="table2">


<table  class="container" >
 
     
  <tbody>
    <tr>
      <th scope="row">Hora de Inicio</th>
      <td> <select name="descaini" class="form-control" value="1">
          
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
                    
                  </td>
      <td> <select name="descaini" class="form-control" value="2">
          
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
                  </td>
      <td> <select name="descaini" class="form-control" value="3">
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
                  </td>

                  <td> <select name="descaini" class="form-control" value="4">
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
                  </td>

                  <td> <select name="descaini" class="form-control" value="5">
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
                  </td>

                  <td> <select name="descaini" class="form-control" value="6">
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
                  </td>
                  <td> <select name="descaini" class="form-control" value="7">
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
                  
                  </td>
    </tr>

    <tr>
      <th scope="row">Hora Final</th>
      <td>  
                <select name="descfin" class="form-control" value="1">
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
                
 
        </td>
      <td> <select name="descfin" class="form-control" value="2">
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
                  </td>
      <td> <select name="descfin" class="form-control" value="3">
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
                  </td>

                  <td> <select name="descfin" class="form-control" value="4">
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
                  
                  </td>

                  <td> <select name="descfin" class="form-control" value="5">
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
                  </td>

                  <td> <select name="descfin" class="form-control" value="6">
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
                  </td>

                  <td> <select name="descfin" class="form-control" value="7">
                  <option id="ocho" value="8:00 a.m">8:00 a.m</option>
                    <option id="nueve" value="9:00 a.m">9:00 a.m</option>
                    <option id="diez" value="10:00 a.m">10:00 a.m</option>
                    <option id="once" value="11:00.am">11:00 a.m</option>
                    <option id="doce" value="12:00 p.m">12:00 p.m</option>
                    <option id="una" value="1:00 p.m">1:00 p.m</option>
                    <option id="do" value="2:00 p.m" >2:00 p.m</option>
                    <option id="tre" value="3:00 p.m" >3:00 p.m</option>
                    <option  id="cua" value="4:00 p.m" >4:00 p.m</option>
                    <option id="cin"  value="5:00 p.m" >5:00 p.m</option>
                    <option id="seis" value="6:00 p.m"  >6:00 p.m</option>
                  </td>
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