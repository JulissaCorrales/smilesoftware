<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cita de los Pacientes Impresion</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/estilospdf.css')}}">

<style>
table, th, td {
  border: 1px solid #00303F; 
  border-collapse: collapse;
}
th {
  background-color:#276678; 
  color:white;
  text-align: center;    
line-height: 1;
}
td,th {
  padding: 5px;
     
}


</style>
</head>


<body>
<header>
@forelse($logotipos  as $tag)
    <img  class="logo" src="{{Storage::url($tag->logo)}}"  alt="image" width="20%;" height="110%";>
    @empty
 
    <img class="logo"  src="{{ asset('Imagenes/logo4.jpg') }}"  id="logo1" width="20%;" height="110%"> 
    @endforelse 

</header>
<strong>Reporte de la Clínica Odontólogica</strong>

  <div class="container"> 



<h5>Citas:</h5>
     
<table class="table" style="width: 100%; border: 1px solid #ccc;">
        <thead style="background-color:#D3E0EA">
            <tr>
                 <th scope="col">N°</th>
                <th scope="col">Paciente</th>
                <th scope="col">Doctor</th>
                <th scope="col">Fecha y Hora</th>
                <th scope="col">Teléfonos</th>
            </tr>  
        </thead>

        <tbody>
                
                        @forelse($citas as $cita)
                            <tr>
                                <!-- Id -->
                                <td> {{$cita->id}}</td>   
                                <!-- Paciente -->
                                <td> {{$cita->paciente->nombres}} {{$cita->paciente->apellidos}}<br>
                                <!-- Odontologo -->
                                <td> {{$cita->odontologo->nombres}} {{$cita->odontologo->apellidos}}</td>
                                <!-- Fecha --> 
                                <td>{{$cita->stard}}</td>
                                <td>{{$cita->paciente->telefonoFijo}}
                                <br>{{$cita->paciente->telefonoCelular}} 
                                </td>
                                @empty
                            No hay citas programadas
                            </tr>
                        @endforelse
                
        </tbody>
</table>
</div> 
 <footer>
<p aling="center"> <b> Clínica Odontólogica Smile Software </b> </p>
</footer> 
</body>
</html>