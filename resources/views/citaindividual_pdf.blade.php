<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
    <title>Cita del Paciente Impresion</title>
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
line-height: 2;
}
td,th {
  padding: 7px;
     
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


</table>
</div> 
<footer>
<p> <b> Clínica Odontologica Smile Software </b> </p>
</footer>

</body>
</html>