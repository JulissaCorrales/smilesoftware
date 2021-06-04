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
</head>
<body>
<header>
<p><strong> Reportes </strong></p>
</header>

    <div class="container">
    <h5 style="text-align : center ">Tabla de Pacientes de la Clínica</h5>
    <table class="table table-striped" >
<thead class="table-light">
<tr>
<th scope="col">#</th>
<th scope="col">Nombres</th>
<th scope="col">Apellidos </th>
<th scope="col">Identidad </th>
<th scope="col">Sexo </th>
<th scope="col">Fecha de Nacimiento </th>
<th scope="col">Departamento </th>
<th scope="col">Ciudad </th>
<th scope="col">Teléfono Celular </th>
</tr>
</thead>

<tbody>
@foreach($pacientes as $paciente)
<tr>
<th scope="row">{{$paciente->id}}</th>
<th scope="row">{{$paciente->nombres}}</th>
<th scope="row">{{$paciente->apellidos}}</th>
<th scope="row">{{$paciente->identidad}}</th>
<th scope="row">{{$paciente->sexo}}</th>
<th scope="row">{{$paciente->fechaNacimiento}}</th>
<th scope="row">{{$paciente->departamento}}</th>
<th scope="row">{{$paciente->ciudad}}</th>
<th scope="row">{{$paciente->telefonoCelular}}</th>
</tr>
@endforeach
  </tbody>
</table>
</div>
<footer>
<p> <strong> Clínica Odontologica Smile Software </strong> </p>
</footer>



</body>
</html>