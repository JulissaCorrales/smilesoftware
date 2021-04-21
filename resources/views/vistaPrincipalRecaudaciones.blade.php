@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('titulo','Recaudaciones')</title>

    <style>

body {
  height: 100%;
}
body {
  margin: 0;
  
  font-family: sans-serif;
  font-weight: 100;
}


.container {
  position: absolute;
  top: 20%;
  left: 40%;
}


table {
  width: 700px;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  position: absolute;  

  top: 100px;
  background-color:#c2f0f0;
  
}
th,
td {
  padding: 15px;

  color: #000;
}
th {
  text-align: left;
  
}
thead th {
  background-color:#33cccc;
}
tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
tbody td {
  position: relative;
}
tbody td:hover:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: -9999px;
  bottom: -9999px;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: -1;
}

.button {
  position: relative;
  padding: 1em 1.5em;
  border: none;
  background-color: transparent;
  cursor: pointer;
  outline: none;
  font-size: 18px;
  margin: 1em 0.8em;
}


.button.type2 {
  color: #16a085;
}
.button.type2.type2:after, .button.type2.type2:before {
  content: "";
  display: block;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: #16a085;
  transition: all 0.3s ease;
  transform: scale(0.85);
}
.button.type2.type2:hover:before {
  top: 0;
  transform: scale(1);
}
.button.type2.type2:hover:after {
  transform: scale(1);
}



.button.type1 {
  color: #566473;
}
.button.type1.type1::after, .button.type1.type1::before {
  content: "";
  display: block;
  position: absolute;
  width: 20%;
  height: 20%;
  border: 2px solid;
  transition: all 0.6s ease;
  border-radius: 2px;
}
.button.type1.type1::after {
  bottom: 0;
  right: 0;
  border-top-color: transparent;
  border-left-color: transparent;
  border-bottom-color: #566473;
  border-right-color: #566473;
}
.button.type1.type1::before {
  top: 0;
  left: 0;
  border-bottom-color: transparent;
  border-right-color: transparent;
  border-top-color: #566473;
  border-left-color: #566473;
}
.button.type1.type1:hover:after, .button.type1.type1:hover:before {
  width: 100%;
  height: 100%;
}


    </style>
</head>
  

<body>
    @section('cuerpo')
    <div class="container">
        <h3>Por planes de tratamiento del paciente</h3>
        <table>
            <thead>
                <tr>
                    <th>Prestacion</th>
                    <th>Productos</th>
                    <th>Total Presupuesto</th>
                </tr>
            </thead>
            <tbody>
            <!-- prestacion -->
            @forelse($pacientes->planestratamientos as $planes)
              <tr>
                <td>{{$planes->tratamiento->categoria}}</td>
                 <!-- productos -->
                <td> 
                @forelse($planes->tratamiento->productos as $producto)
                  <p> {{$producto->nombre}}</p>
                @empty
                vacio
                @endforelse
                </td>
              <!-- Total presupuestos -->
                <td>
                @forelse($planes->recaudaciones as $recaudaciones)
                         <p>{{$recaudaciones->preciototal}} </p>    
                           
                          
                          @empty
                          No tiene 
                          @endforelse
                
                </td>
                
            @empty
          <td>Vacio</td>
            @endforelse 
              </tr>
    
 <tr>
<td> 
<?php 

try
{
  $mbd = new PDO('mysql:host=127.0.0.1;dbname=smilesoftware', "root", "");
 

 $mos= $mbd->query('select totalpagar, SUM(totalpagar) as cita
  from recaudacions 
  group by  totalpagar');
  
//foreach($mos as $fila){
  //  echo  $fila["cita"];
  //  echo "<br>";
   // }

}
catch(Exception $e)
{
        echo "no conectado";
}

 ?>


<?php foreach($mos as $fila){

   echo "<h4 style='position:absolute; top:;'> Total a Pagar </h4>". "<h4 style='position:absolute; left:200px;'>". $fila["cita"] ."</h4>";
    echo "<br>";
  ?>  <?php 


} 
?>
</td>

</tr>


            </tbody>
        </table>
      
    </div>

    
    </div>

    <!-- <div class="container2">
        <h3>Por cuotas de finaciamiento</h3>
        <table>
            <thead>
                <tr>
                    <th>Cuotas de credito</th>
                    <th>Monto</th>
                    <th>Pagado</th>
                    <th>Saldo a Abonar</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>cuota#1 <br>credito 14</td>
                    <td>10000</td>
                    <td>1500</td>
                    <td>3000</td>
                    
                </tr> 
            </tbody>
        </table>
        <button class="button type1">
            pagar
          </button>
    </div>
  -->
    
</body>
</html>
@endsection