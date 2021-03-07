<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cita del Paciente Impresion</title>
</head>
<body>

  <div class="container"> 

<h1>Clinica Odontologica Smile Software</h1>

<h6>Descripcion de cita paciente</h6>
     
<table class="table">
        <thead class="table table-striped table-bordered">
            <tr>
                <th scope="col">Paciente</th>
                <th scope="col">Doctor</th>
                <th scope="col">Fecha y Hora</th>
            </tr>  
        </thead>

        <tbody>
            <tr>
                <td>     
                        @forelse($citas as $cita)
                            <tr>
                                <!-- Paciente -->
                                <td> {{$cita->paciente->nombres}} <br>{{$cita->paciente->apellidos}}<br>{{$cita->paciente->telefonoFijo}}<br>{{$cita->paciente->telefonoCelular}} </td>
                                <!-- Odontologo -->
                                <td> {{$cita->odontologo->nombres}}<br>{{$cita->odontologo->apellidos}}</td>
                                <!-- Fecha -->
                                <td>{{$cita->stard}}</td>
                                @empty
                            No hay citas programadas
                            </tr>
                        @endforelse
                </td>
            </tr> 
        </tbody>

</div> 

</body>
</html>