<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cita de los Pacientes Impresion</title>
<link rel="stylesheet" href="{{asset('css/estilospdf.css')}}">
</head>
<body>
<header>
<p><strong> Reportes </strong></p>
</header>
  <div class="container"> 

<h4 align="center">Clínica Odontólogica: Smile Software</h4>

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
            <tr>
                <td>     
                        @forelse($citas as $cita)
                            <tr>
                                <!-- Id -->
                                <td> {{$cita->id}}</td>   
                                <!-- Paciente -->
                                <td> {{$cita->paciente->nombres}} <br>{{$cita->paciente->apellidos}}<br>
                                <!-- Odontologo -->
                                <td> {{$cita->odontologo->nombres}}<br>{{$cita->odontologo->apellidos}}</td>
                                <!-- Fecha -->
                                <td>{{$cita->stard}}</td>
                                <td>{{$cita->paciente->telefonoFijo}}
                                <br>{{$cita->paciente->telefonoCelular}} 
                                </td>
                                @empty
                            No hay citas programadas
                            </tr>
                        @endforelse
                </td>
            </tr> 
        </tbody>

</div> 
<!-- <footer>
<p aling="center"> <strong> Clínica Odontólogica Smile Software </strong> </p>
</footer> -->
</body>
</html>