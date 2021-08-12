<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Clientes</title>
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
<strong id="report" name=>Reportes</strong>
    <div class="container">
    <h5 style="text-align : center ">Tabla de Pacientes de la Clínica</h5>
    <table  class="table" style="width: 100%; border: 1px solid #ccc;margin-top:3em;"  >
<thead style="background-color:#D3E0EA">
<tr>
<th scope="col">N°</th>
<th scope="col">Nombre</th>
<th scope="col">Identidad </th>
<th scope="col">Sexo </th>
<th scope="col">Fecha de Nacimiento </th>
<th scope="col">Departamento </th>
<th scope="col">   Ciudad  </th>
<th scope="col">Teléfono</th>
</tr>
</thead>

<tbody>
@foreach($pacientes as $paciente)
<tr>
<td >{{$paciente->id}}</td>
<td >{{$paciente->nombres}} {{$paciente->apellidos}}</td>
<td >{{$paciente->identidad}}</td>
<td >{{$paciente->sexo}}</td>
<td >{{$paciente->fechaNacimiento}}</td>
<td >{{$paciente->departamento}}</td>
<td >{{$paciente->ciudad}}</td>
<td >{{$paciente->telefonoCelular}}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
<footer>
<p> <b> Clínica Odontologica Smile Software </b> </p>
</footer>



</body>
</html>