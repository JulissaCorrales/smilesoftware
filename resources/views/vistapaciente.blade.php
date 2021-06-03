@extends('Plantilla.dashboard')
@canany(['isAdmin','isSecretaria','isOdontologo'])
@section('content')

<!DOCTYPE html>

<!--<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@section('titulo', 'DirectorioPaciente')</title>-->

  <!-- Custom fonts for this template-->
 <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->

  <!-- Page level plugin CSS-->
  <!--<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">-->

  <!-- Custom styles for this template-->
  <!--<link href="css/sb-admin.css" rel="stylesheet">-->

<!--</head> -->
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

<body id="page-top">

  
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <h4><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
</svg>Pacientes</h4>
 <p>En esta ventana  muestra los pacientes que se han registrado  en la clínica, <br> en esta misma se podra crear un nuevo paciente, editar informacion, eliminar el paciente.</p>
@can('descargarPacientes', App\Paciente::class)
<div>
<a type="button"style="background-color:#28a4a4; color:#c1f0f0; position: absolute;
  left: 900px;
  top:  40px;"  class="btn" href="{{route('descargarPDFPacientes')}}"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
  <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
</svg> 
         Descargar Paciente </a>
</div>
@endcan


<div>@can('create', App\Paciente::class)
    <button type="button"style="background-color:#ffdb4d; color:#666699;  position: absolute; 
  left: 840px;
  top:  40px;   " class="btn"  data-toggle="modal" data-target="#create"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
 </button> @endcan
</div>

            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Identidad</th>
                    <th>Acción</th>
                  
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Identidad</th>
                    <th>Acción</th>
                    
                  </tr>
                </tfoot>
                <tbody>
                @forelse($pacientes as $paciente)
    <tr >
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
      <div class="modal-dialog" role="document" style="  position: absolute;
  left: 480px;
  top:  50px; ">
          <div class="modal-content">
              <div class="modal-header" style="background-color:#293d3d; color:white;  height:60px;  ">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> Eliminar Paciente</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 
                  </button>
              </div>
              <div class="modal-body"  >
                  ¿Desea realmente eliminar el paciente {{$paciente->nombres}} {{$paciente->apellidos}}?
              </div>
              <div class="modal-footer" style=" width: 500px;
  height: 80px;">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background-color:#ff704d;  position: absolute;
  left: 300px;
  top:  160px;">Cerrar</button>
                  <form method="post" action="{{route('paciente.borrar',['id'=>$paciente->id])}}">
                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger"  style="background-color:#ff9999;  position: absolute;
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
          </div>
        
  

  </div>
  <!-- /#wrapper -->

<script>
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

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

@endsection

@endcanany