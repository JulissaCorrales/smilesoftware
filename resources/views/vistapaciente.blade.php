@extends('Plantilla.Plantilla')

<!DOCTYPE html>
<html lang="en">
@section('Titulo','Paciente')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

btn{
text-align: center;

}

</style>
</head>
@section('contenido')
<body>



<h3>Directorio de Pacientes </h3>
<div class="item-input-inset" align="right">
<label class="item-input-wrapper" > 
       <button type="button" class="btn btn-secondary">Configuraciones de Pacientes</button>
       <button type="button" class="btn btn-secondary">Descargar</button>
       <a href="http://smilesoftware.test/paciente/nuevo" <button link rel="stylesheet" type="button" class="btn btn-success">Nuevo Paciente </button> </a>  
</div>
<div class="item-input-inset">
       <label class="item-input-wrapper"> 
    <input type="text" placeholder="Numero" />
    <select  id="sel1">
     <option>Tratamiento</option>
     <option>Id. Paciente</option>
     <option>Numero Interno</option>
     </select>
           <button type="button" class="btn btn-success">Buscar </button>
       </label>   
</div>

<DIV align="right">
<a href="" align="right">A</a>
<a href="" align="right">B</a>
<a href="" align="right">C</a>
<a href="" align="right">D</a>
<a href="" align="right">E</a>
<a href="" align="right">F</a>
<a href="" align="right">G</a>
<a href="" align="right">H</a>
<a href="" align="right">I</a>
<a href="" align="right">J</a>
<a href="" align="right">K</a>
<a href="" align="right">L</a>
<a href="" align="right">LL</a>
<a href="" align="right">M</a>
<a href="" align="right">N</a>
<a href="" align="right">O</a>
<a href="" align="right">P</a>
<a href="" align="right">Q</a>
<a href="" align="right">R</a>
<a href="" align="right">S</a>
<a href="" align="right">T</a>
<a href="" align="right">U</a>
<a href="" align="right">V</a>
<a href="" align="right">W</a>
<a href="" align="right">X</a>
<a href="" align="right">Y</a>
<a href="" align="right">Z</a>


</DIV>





<table >
  <tr>
    <th>Nº.</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Identidad</th>
    <th>Accion</th>
  </tr>
  <tr>
    <td>9</td>
    <td>Eduardo</td>
    <td>Aguilar</td>
    <td>0801198505896</td>
    <td><button type="button" class="btn btn-danger">Eliminar Paciente</button></td>
  </tr>
  <tr>
    <td>80</td>
    <td>Alexandra</td>
    <td>Aguilera</td>
     <td>0801198505897</td>
     <td><button type="button" class="btn btn-danger">Eliminar Paciente</button></td>
  </tr> 
  <tr>
    <td>90</td>
    <td>Junior</td>
    <td>Salinas</td>
     <td>0801198505898</td>
     <td><button type="button" class="btn btn-danger">Eliminar Paciente</button></td>
  </tr> 



</table>



</body>

@endsection
</html>