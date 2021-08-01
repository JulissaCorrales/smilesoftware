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

<h3 align="center">Clínica Odontólogica: Smile Software</h3>

<h5 style="margin-top:3em;">Citas  del Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}}</h5>
     
<table class="table" style="width: 100%; border: 1px solid #ccc;margin-top:3em;" >
<thead style="background-color:#D3E0EA">
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Especialidades</th>
            <th scope="col">Dentista</th>
            <th scope="col">Duración</th>
            
           
            </tr> 
        </thead>

        <tbody>
          
           
           
           @forelse ($pacientes->citas as $tag) 
           <tr>
         <td>{{ $tag->id}}</td>
        <td>
        @foreach($tag->odontologo->especialidades as $especialidadodontologo)
        {{$especialidadodontologo->Especialidad}}
        @endforeach
        </td>
         <td>{{ $tag->odontologo->nombres}} {{ $tag->odontologo->apellidos}}</td>
         <td colspan="1">{{ $tag->duracionCita}} minutos</td>
       
         
        
     
         </tr> 
        <tr><th scope="col">Fecha y Hora</th>  <td colspan="4">{{ $tag->stard}}</td></tr>
        <tr><th scope="col">Comentarios:</th><td colspan="4">{{ $tag->comentarios}}</td></tr>
           @empty
         vacio
        @endforelse
           
          
     
       
        </tbody>

</div> 

</body>
</html>