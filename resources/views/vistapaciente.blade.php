@extends('Plantilla.Plantilla2')
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

#tablaprincipal{
  position: absolute;
  left: 50px;
  top:  190px;
  width: 1000px;
}

#imagen{
  border-radius: 50%;
  position: absolute;
  left: -5px;
  top:  35px;
  width: 50px;
  height: 50px;
}

/* CSS DEL navas de Abajo */
#footer1{
       position: absolute;
  left:0px;
  top: 300px;
  width: 1120px;
 
    } 

    #num8{
        position: absolute;
  left: 100px;
  top: 0px;
    }





</style>

</head>

@section('contenido')
<body>





@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(session('mensaje'))
<div class="alert alert-success">
{{session('mensaje')}}
</div>
@endif

    <div class="container">

   <!-- <nav class="navbar navbar-light bg-light" id="na">
  <h1 style="    color: #ff9933;
  text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;
  font-family: serif;position: absolute;font-size:35px;top: 2px;left:90px;;"id="dire">Directorio de Paciente</h1>
    @canany(['isAdmin','isSecretaria','isOdontologo'])
 <div class="dropdown" style="  background-color: #00ccff;border-radius: 12px;
position: absolute;top: 10px;left: 510px;" >

 <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
</svg></button>
 <ul class="dropdown-menu">
 @can('create', App\Paciente::class)
 <li><a class="dropdown-item" href="{{route('paciente.nuevo')}}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>  Nuevo Paciente </a></li>
@endcan

 




 </ul>
 </div>
 @endcanany

</nav>-->
</div> 



<div class="" id="dd">

</div>



<a href="/pantallainicio/vista"><h1 style="background-color:#d6f5f5;  position: absolute;
  left: 70px;
  top:  110px;  width: 970px; height: 50px; color: #4d4d4d;
  text-shadow: 1px 0 #ff9966, 0 1px #ff9966, 1px 0 #ff9966, 0 1px #ff9966; font-family: Times New Roman, Times, serif; "><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>         Pacientes</h1> </a>

@can('descargarPacientes', App\Paciente::class)
<div>
<a type="button"style="background-color:#28a4a4; color:#c1f0f0; position: absolute;
  left: 850px;
  top:  125px;"  class="btn" href="{{route('descargarPDFPacientes')}}"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
  <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
</svg> 
         Descargar Paciente </a>
</div>
@endcan


<div>@can('create', App\Paciente::class)
    <button type="button"style="background-color:#ffdb4d; color:#666699;  position: absolute; 
  left: 790px;
  top:  125px;   " class="btn"  data-toggle="modal" data-target="#create"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
 </button> @endcan
</div>




<div class="container" id="tablaprincipal">

<table   class="table table-striped table-info" id="datatable1" >
  <thead  class="thead-dark" style="background-color:#595959; font-size:18px; font-family: Times New Roman, Times, serif;">
    <tr>
      <th  style=" font-size:15px; font-family: Times New Roman, Times, serif; color:white;">Nombre</th>
      <th  style=" font-size:15px; font-family: Times New Roman, Times, serif; color:white;">Identidad</th>
      <th  style=" font-size:15px; font-family: Times New Roman, Times, serif; color:white;">Accion</th>
    </tr>
  </thead>
  <tbody style="background-color:#e6e6e6;">
  @forelse($pacientes as $paciente)
    <tr style="background-color:#e6e6e6;">
     <td>@canany(['isAdmin','isOdontologo','isSecretaria'])

<a  href="/pantallainicio/vista/paciente/{{$paciente->id}}/editar" >@endcanany<img class="logo" src='/Imagenes/{{$paciente->imagen}}'  width="60px"
height= "60px" style="border-radius:50%;">
</a>  {{$paciente->nombres}} {{$paciente->apellidos}} </td>

<td>{{$paciente->identidad}}</td>
     
    <td>
    

    <a type="button"style="background-color:#70db70; color:#666699;" class="btn" href="/pantallainicio/vista/paciente/{{$paciente->id}}/editar"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
  <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
</svg>
          </a>
          @canany(['isAdmin'])
        
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$paciente->id}}"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
        </svg>
          
       @endcanany  </button> 
    </td>


  <div class="modal fade" id="modal-{{$paciente->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="background-color:#f2e6ff;  position: absolute;
  left: 480px;
  top:  190px; ">
          <div class="modal-content">
              <div class="modal-header" style="background-color:#b3f0ff; color:#666699; ">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> Eliminar Paciente</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 
                  </button>
              </div>
              <div class="modal-body"  style="background-color:#e6faff;">
                  ¿Desea realmente eliminar el paciente {{$paciente->nombres}} {{$paciente->apellidos}}?
              </div>
              <div class="modal-footer" style="background-color:#b3f0ff; width: 500px;
  height: 80px;">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background-color:#ff704d;  position: absolute;
  left: 300px;
  top:  160px;">Cerrar</button>
                  <form method="post" action="{{route('paciente.borrar',['id'=>$paciente->id])}}">
                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger"  style="background-color:#d580ff;  position: absolute;
  left: 380px;
  top:  160px;">
 
          
                  </form>
              </div>
          </div>
      </div>
  </div>

  @empty
     <td colspan="5"><h3>¡¡No hay Pacientes Existentes!!</h3></td>
  
    </tr>
    @endforelse
    

  

  </tbody>
</table>
</div>


<div id="nu">
            
            <footer class="footer" id="footer1">
                <div class="container-fluid">
                    <nav id="num8">
                        <ul class="footer-menu">
                        <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="/">Smile Software</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
</div>
    </div>
 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->



</body>

<script type="text/javascript">
/*$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Busqueda por nombre o identidad:"
    }
});
} ); */




$(document).ready( function () {
    $('#datatable1').DataTable( {
    language: {
        search: "Busqueda por nombre o identidad:",
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
        "infoEmpty": "Mostrando 0 to 0 of 0 Pacientes",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Pacientes",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    }
});
} );
</script>

<!-- escript de datatable con el id de la tabla este muy importante en este caso la tabla es id="datatable"-->
</div>
</div><!-- fin del DIV contenedor de la buscador!!!  -->
@include('Crearpaciente')
@endsection

</html>

@endcanany