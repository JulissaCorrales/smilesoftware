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

</style>

<div  class="container"id="ho1">
<nav class="navbar navbar-light bg-light" id="nav1">
  <div class="container">
   <h4 id="texto4">Horarios Odontologo</h4>
  </div>
</nav>
</div>


<div id="horario">
<table  class="container">
  <thead>
  
    <tr>
    @foreach($dias as $dia)
    <th scope="col"></th>
      <th scope="col">{{$dia->primerdia}}</th>
      <th scope="col">{{$dia->segundodia}}</th>
      <th scope="col">{{$dia->tercerdia}}</th>
      <th scope="col">{{$dia->cuartodia}}</th>
      <th scope="col">{{$dia->quintodia}}</th>
      <th scope="col">{{$dia->sextodia}}</th>
      <th scope="col">{{$dia->septimodia}}</th>
     
      </tr>
      @endforeach
  </thead>
  <tbody>
    <tr>
      <th scope="row">Hora de Inicio</th>
      <td> <select name="lunes" class="form-control" value="">
          
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
      <td> <select name="martes" class="form-control" value="">
          
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
      <td> <select name="miercoles" class="form-control" value="">
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

                  <td> <select name="jueves" class="form-control" value="">
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

                  <td> <select name="viernes" class="form-control" value="">
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

                  <td> <select name="Sabado" class="form-control" value="">
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
                  <td> <select name="domingo" class="form-control" value="">
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
                <select name="lunesfin" class="form-control" value="">
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
      <td> <select name="martesfin" class="form-control" value="">
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
      <td> <select name="miercolesfin" class="form-control" value="">
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

                  <td> <select name="juevesfin" class="form-control" value="">
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

                  <td> <select name="viernesfin" class="form-control" value="">
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

                  <td> <select name="sabadofin" class="form-control" value="">
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

                  <td> <select name="domingofin" class="form-control" value="">
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


        <td  id="td1"> Si  <input type="checkbox" id="siprimero"  onclick="mostrartabla()">
                  </td>
      <td>  Si  <input type="checkbox" id="simartes" onclick="mostrartabla1()">
                  </td>

                  <td>  Si  <input type="checkbox" id="simiercoles"  onclick="mostrartabla2()">
                  </td>

                  <td>  Si  <input type="checkbox" id="sijueves"  onclick="mostrartabla()">
                  </td>

                  <td> Si  <input type="checkbox" id="siviernes"  onclick="mostrartabla()">
                  </td>

                  <td> Si  <input type="checkbox"id="sisabado"  onclick="mostrartabla()">
                  </td>

                  <td>  Si  <input type="checkbox" id="sidomingo"  onclick="mostrartabla()">
                  </td>
    </tr>
  </tbody>
</table> 

 <div id="table2">
 </div>

 <div id="table3">
 </div>



<script>
function mostrartabla(){

var segundo = document.getElementById("ocho");
var tercero= document.getElementById("nueve");
var cuarto= document.getElementById("diez");
var quinto= document.getElementById("once");
var sexto= document.getElementById("doce");
var septimo= document.getElementById("una");
var octavo= document.getElementById("do");
var noveno= document.getElementById("tre");
var decimo= document.getElementById("cua");
var onceavo= document.getElementById("cin");
var doceavo= document.getElementById("seis");


var salida= document.getElementById("table2");
var salida2= document.getElementById("table3");


if(document.getElementById("siprimero").checked){
salida.innerHTML= "<h4>Hora de Inicio</h4>" +
       "<select id='select1'>" + "<option>" + segundo.value +"</option>"
+ "<option>" + tercero.value +"</option>" +
"<option>" + cuarto.value +"</option>" +
"<option>" + quinto.value +"</option>" +
"<option>" + sexto.value +"</option>" +
"<option>" + septimo.value +"</option>" +
"<option>" + octavo.value + "</option>" +
"<option>" + noveno.value +"</option>" +
"<option>" +  decimo.value +"</option>" +
"<option>" + onceavo.value +"</option>" +
"<option>" + doceavo.value +"</option>" ;

salida2.innerHTML="<h4>Hora de Final</h4>" +
       "<select id='select2'>" + "<option>" + segundo.value +"</option>"
+ "<option>" + tercero.value +"</option>" +
"<option>" + cuarto.value +"</option>" +
"<option>" + quinto.value +"</option>" +
"<option>" + sexto.value +"</option>" +
"<option>" + septimo.value +"</option>" +
"<option>" + octavo.value + "</option>" +
"<option>" + noveno.value +"</option>" +
"<option>" +  decimo.value +"</option>" +
"<option>" + onceavo.value +"</option>" +
"<option>" + doceavo.value +"</option>";

}else{
  salida.innerHTML= " ";
  salida2.innerHTML="";
}





}
</script>



<script>
function mostrartabla1(){

var segundo = document.getElementById("ocho");
var tercero= document.getElementById("nueve");
var cuarto= document.getElementById("diez");
var quinto= document.getElementById("once");
var sexto= document.getElementById("doce");
var septimo= document.getElementById("una");
var octavo= document.getElementById("do");
var noveno= document.getElementById("tre");
var decimo= document.getElementById("cua");
var onceavo= document.getElementById("cin");
var doceavo= document.getElementById("seis");


var salida= document.getElementById("table2");
var salida2= document.getElementById("table3");


if(document.getElementById("simartes").checked){
salida.innerHTML= "<h4>Hora de Inicio</h4>" +
       "<select id='select3'>" + "<option>" + segundo.value +"</option>"
+ "<option>" + tercero.value +"</option>" +
"<option>" + cuarto.value +"</option>" +
"<option>" + quinto.value +"</option>" +
"<option>" + sexto.value +"</option>" +
"<option>" + septimo.value +"</option>" +
"<option>" + octavo.value + "</option>" +
"<option>" + noveno.value +"</option>" +
"<option>" +  decimo.value +"</option>" +
"<option>" + onceavo.value +"</option>" +
"<option>" + doceavo.value +"</option>" ;

salida2.innerHTML="<h4>Hora de Final</h4>" +
       "<select id='select4'>" + "<option>" + segundo.value +"</option>"
+ "<option>" + tercero.value +"</option>" +
"<option>" + cuarto.value +"</option>" +
"<option>" + quinto.value +"</option>" +
"<option>" + sexto.value +"</option>" +
"<option>" + septimo.value +"</option>" +
"<option>" + octavo.value + "</option>" +
"<option>" + noveno.value +"</option>" +
"<option>" +  decimo.value +"</option>" +
"<option>" + onceavo.value +"</option>" +
"<option>" + doceavo.value +"</option>";

}else{
  salida.innerHTML= " ";
  salida2.innerHTML="";
}





}
</script>

<script>
function mostrartabla2(){

var segundo = document.getElementById("ocho");
var tercero= document.getElementById("nueve");
var cuarto= document.getElementById("diez");
var quinto= document.getElementById("once");
var sexto= document.getElementById("doce");
var septimo= document.getElementById("una");
var octavo= document.getElementById("do");
var noveno= document.getElementById("tre");
var decimo= document.getElementById("cua");
var onceavo= document.getElementById("cin");
var doceavo= document.getElementById("seis");


var salida= document.getElementById("table2");
var salida2= document.getElementById("table3");


if(document.getElementById("simiercoles").checked){
salida.innerHTML= "<h4>Hora de Inicio</h4>" +
       "<select id='select3'>" + "<option>" + segundo.value +"</option>"
+ "<option>" + tercero.value +"</option>" +
"<option>" + cuarto.value +"</option>" +
"<option>" + quinto.value +"</option>" +
"<option>" + sexto.value +"</option>" +
"<option>" + septimo.value +"</option>" +
"<option>" + octavo.value + "</option>" +
"<option>" + noveno.value +"</option>" +
"<option>" +  decimo.value +"</option>" +
"<option>" + onceavo.value +"</option>" +
"<option>" + doceavo.value +"</option>" ;

salida2.innerHTML="<h4>Hora de Final</h4>" +
       "<select id='select4'>" + "<option>" + segundo.value +"</option>"
+ "<option>" + tercero.value +"</option>" +
"<option>" + cuarto.value +"</option>" +
"<option>" + quinto.value +"</option>" +
"<option>" + sexto.value +"</option>" +
"<option>" + septimo.value +"</option>" +
"<option>" + octavo.value + "</option>" +
"<option>" + noveno.value +"</option>" +
"<option>" +  decimo.value +"</option>" +
"<option>" + onceavo.value +"</option>" +
"<option>" + doceavo.value +"</option>";

}else{
  salida.innerHTML= " ";
  salida2.innerHTML="";
}





}
</script>
</div>

<div  class="container" id="ho2">
<nav class="navbar navbar-light bg-light">
  <div class="container">
  <a type="button" class="btn btn-info" href="{{route('odontologo.vista')}}">Atras</a>
  </div>
</nav>
</div>



@endsection