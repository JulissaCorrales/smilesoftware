@extends('Plantilla.dashboard')
@section('titulo','HorarioOdontologo')
@section('content')
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
            align: center;
            top: -350px;
            font-size:25px;
left:-350px;
height: 450px;
color: #1f2e2e;
 background-image: linear-gradient(to bottom,  #ffc34d ,#c2d6d6);
width:900px;

        
}


#td1{

position: absolute;
          left: 180px;
          

}


#table1{
    position: absolute;
            left: 350px;
            top: 260px;
            font-size:15px;
            width:900px;
            
}


#table2{
    position: absolute;
            left: 350px;
            top: 300px;
            font-size:15px;
            width:900px;
            
}

#table3{
    position: absolute;
            left:500px;
            top: 230px;
            font-size:15px;
            width:600px;
}


#table4{
    position: absolute;
            left: 550px;
            top: 350px;
            font-size:15px;
            width:780px;
            
}



#table5{
    position: absolute;
            left: 350px;
            top: 400px;
            font-size:15px;
            width:900px;
            
}


#table6{
    position: absolute;
            left: 350px;
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
            left: 450px;
            top:10px;
}


#buton2{
    position: absolute;
            left: 380px;
            top:10px;
}


#buton3{

    position: absolute;
            left: 200px;
            top: 205px;

}







#datos{
position: absolute;
    left: 450px;
   top: 700px;
    font-size:16px;
    width: 800px;
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


#image1{
    margin-left: auto;
  margin-right: auto;

  border-radius: 70%;
  position: relative;
  top: -5px;
  left:180px;
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
           <h4><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
            </svg>Horarios</h4>
            <p>En esta ventana  muestra los pacientes que se han registrado  en la clínica, esta misma se podrá crear un nuevo paciente, editar información, eliminar el paciente.</p>
           
      
    </div>
    
          <div class="card-body">
            <div class="table-responsive">
               

             
<form method="post" action="\create\{{$odontologos->id}}\nuevo " file="true" enctype="multipart/form-data">
@csrf

<?php 
for($i=1; $i <= 1; $i++) {?>


              <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
                <thead>
                  <tr>
                         <th></th>
                    <th ><input type="radio" name="dias" value="Lunes" >Lunes</th>

                    <th ><input type="radio" name="dias" value="Martes">Martes</th>

                    <th ><input type="radio" name="dias" value="Miércoles">Miércoles</th>

                     <th ><input type="radio" name="dias" value="Jueves">Jueves</th>

                      <th ><input type="radio" name="dias" value="Viernes">Viernes</th>

                      <th ><input type="radio" name="dias" value="Sábado">Sábado</th>

                     <th ><input type="radio" name="dias" value="Domingo">Domingo</th>

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
                   
                   <td><select name="horafin" class="form-control" value="Lunes" >
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

                <td>    <select name="horafin" class="form-control" value="Martes" >
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

                 <td>   <select name="horafin" class="form-control" value="Miercoles" >
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


                 <td>   <select name="horafin" class="form-control" value="Jueves" >
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


                   <td> <select name="horafin" class="form-control" value="Viernes" >
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

                   <td> <select name="horafin" class="form-control" value="Sabado" >
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

                  <td>  <select name="horafin" class="form-control" value="Domingo" >
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
                    <tr align="center;" >

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