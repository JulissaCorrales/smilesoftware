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

<h6>Citas  del Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}}</h6>
     
<table class="table">
        <thead class="table table-striped table-bordered">
            <tr>
            <th scope="col">#Numero de cita</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Dentista</th>
            <th scope="col">Duración</th>
            <th scope="col">Fecha y Hora</th>
            <th scope="col">Comentarios</th>
            </tr>  
        </thead>

        <tbody>
          
           
           
           @forelse ($pacientes->citas as $tag) 
           <tr>
         <td>{{ $tag->id}}</td>
         <td>{{ $tag->odontologo->especialidad_id}} </td>
         <td>{{ $tag->odontologo->nombres}} {{ $tag->odontologo->apellidos}}</td>
         <td>{{ $tag->duracionCita}} minutos</td>
         <td>{{ $tag->stard}}</td>
         <td>{{ $tag->comentarios}}</td>
        
        @empty
         vacio
         </tr> 
        @endforelse
           
          
     
       
        </tbody>

</div> 

</body>
</html>