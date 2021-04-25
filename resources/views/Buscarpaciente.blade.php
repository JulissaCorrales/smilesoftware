@extends('Plantilla.PlantillaBuscador')
@canany(['isAdmin','isSecretaria','isOdontologo'])
<!DOCTYPE html>
<html lang="en">
@section('titulo','Paciente')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    
    <style>

 #datatable{
position:absolute;
left:350px;
top:200px;
width:900px;
 }

td {
  border: 2px solid #ff8533;
  text-align: left;
  padding: 20px;
  text-align: left;
  
}

 th{
background-color:#669999;
color:white;
 border: 4px solid #ff8533;
  text-align: left;
  padding: 20px;
  text-align: left;
}





btn{
text-align: center;

}



#lista{
  background-color: ;
  

}

 #lista:hover{
   border: 1px solid #FF4500;
   color: hotpink;
 

 }

</style>

</head>
@section('contenido')
<body>
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif

    <div class="container">

    <nav class="navbar navbar-light bg-light" style="position:absolute; top:100px; left:350px; font-size:25px; font-family: Times New Roman, Times, serif;
  
  color: white;
 background-image: linear-gradient(to bottom,  #3c5d5d ,#1f2e2e);">
  <h4 syle="color:white;">Directorio de Pacientes</h4>
</nav>

<div  class="container"><!-- es necesario para que funcione el boton de buscar por nombre
y numero de identidad agrupar todo en un un vid ya que no se hace crea u conflicto la pantilla de extencion
 ademas se debe incluir la liberia de boostrap y la libreria de datatable en la vista 
 ademas de al final de la pagina el scritp de java y despues el scritp de date table
 para que funcione correctamente-->
 <div class="list-group">
 
<table id="datatable">
<thead>
  <tr style="">
    <th >Nombre</th>
    <th >Identidad</th>
    <th>Accion</th>
  </tr>
  </thead>
  <tbody>
  <tr>
      @forelse($pacientes as $paciente)
     <td>@canany(['isAdmin','isOdontologo','isSecretaria'])

<a  href="/pantallainicio/vista/paciente/{{$paciente->id}}/editar" >@endcanany<img class="logo" src='/Imagenes/{{$paciente->imagen}}'  width="60px"
height= "60px" style="border-radius:50%;">
</a>  {{$paciente->nombres}} {{$paciente->apellidos}} </td>
     <td>{{$paciente->identidad}}</td>
     <td>

     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$paciente->id}}">
      Eliminar
  </button>

  </td>

  <!-- Modal -->
  <div class="modal fade" id="modal-{{$paciente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Eliminar Paciente</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el paciente {{$paciente->nombres}} {{$paciente->apellidos}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form method="post" action="{{route('paciente.borrar',['id'=>$paciente->id])}}">

                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger">
                  </form>
              </div>
          </div>
      </div>
  </div>
@empty
            <td colspan="5"> No Existe el Paciente</td>
    
     </tr> 
 
         
     @endforelse
     </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscado de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->



</body>



<!-- escript de datatable con el id de la tabla este muy importante en este caso la tabla es id="datatable"-->
</div>
</div><!-- fin del DIV contenedor de la buscador!!!  -->
@endcanany
@endsection

</html>

