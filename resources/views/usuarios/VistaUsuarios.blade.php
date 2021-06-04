@extends('Plantilla.dashboard')
@canany('isAdmin, isSecretaria, isOdontologo')
@section('content')


<!DOCTYPE html>
<html lang="en">
@section('titulo','Usuario')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--<link rel="stylesheet" href="/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.material.min.css">
    
</head>


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


@section('contenido')
@can('isAdmin')
<body id="page-top">
        <div class="card mb-3">
            <div class="card-header" id="na">
                <h2 id="dire">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                  </svg>Usuarios de la clínica
                </h2>
        
            </div>
         </div>

        <div class="" id="d1">
            <button type="button" href="/pantallainicio/usuarios/NuevoUsuario" style="background-color:#ffdb4d; color:#666699;  position: absolute; left: 840px; top:  40px;" class="btn"  data-toggle="modal" data-target="#create">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>Nuevo Usuario
            </button> 
                @endcan
        </div>

         </div>
          <div class="card-body" id="dd">
            <div class="table-responsive">
              <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                <thead>
                  <tr id="can" >
                      <th>Usuario</th>
                      <th>Correo</th>
                      <th>Roles</th>
                      <th>Permisos</th>
                      <th>Tools</th>
                  </tr>
                </thead>
                <tbody>
                     @forelse($usuarios as $usuario)
                      <tr id="" {{ Auth::user()->id == $usuario->id  ?  'bgcolor=#c2d6d6' : ''}} >
                                <td>@canany(['isAdmin','isOdontologo','isSecretaria'])
                                    <a  href="/pantallainicio/usuarios/VistaUsuarios/{{$usuario->id}}/editar" >@endcanany
                                        <img class="logo" src='/Imagenes/{{$usuario->imagen}}'  width="60px" height= "60px" style="border-radius:50%;">
                                    </a>  {{$usuario->usuario}} 
                                </td>
                                <td>{{$usuario->correo}}</td>
                                <td> 
                                    @if($usuario->roles->isNotEmpty())
                                    @foreach ($usuario->roles as $role )
                                          <span class="badge badge-secondary" >
                                              {{ $role->Nombre }}                                    
                                          </span>
                                    @endforeach
                                    @endif
                                </td>
                                <td> 
                                    @if($usuario->permisos->isNotEmpty())
                                    @foreach ($usuario->permisos as $permiso )
                                          <span class="badge badge-secondary" >
                                                {{ $permiso->Permiso }}                                    
                                          </span>
                                    @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a type="button"style="background-color:#70db70; color:#666699;" class="btn" href="{{route('usuario.verUsuario',$usuario->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                        </svg>
                                    </a>
                                    <a type="button"style="background-color:#70db70; color:#666699;" class="btn" href="{{route('usuario.actualizar',$usuario->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                        </svg>
                                    </a>
                                  @canany(['isAdmin'])
                                    
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$usuario->id}}">
                                        <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                      
                                  @endcanany 
                                  </button> 
                                </td>


                                  <div class="modal fade" id="modal-{{$usuario->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document" style="position: absolute; left: 480px; top:  50px;">
                                          <div class="modal-content">
                                              <div class="modal-header" style="background-color:#293d3d; color:white;  height:60px;  ">
                                                  <h5 class="modal-title" id="exampleModalLabel">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                    </svg> Eliminar Usuario
                                                  </h5>

                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      </button>

                                                </div>

                                                <div class="modal-body"  >
                                                ¿Desea realmente eliminar el usuario {{$usuario->name}}?
                                                </div>
                                                <div class="modal-footer" style=" width: 500px; height: 80px;">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"  style="background-color:#ff704d;  position: absolute; left: 300px; top:  160px;">Cerrar</button>
                                                      <form method="post" action="{{route('usuario.borrar',['id'=>$usuario->id])}}">
                                                            @csrf
                                                            @method('delete')
                                                              <input type="submit" value="Eliminar" class="btn btn-danger"  style="background-color:#ff9999;  position: absolute; left: 380px; top:  160px;">
                                                      </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                            @empty
                                <td colspan="5">
                                  <h3>No hay Usuario Disponibles</h3>
                                </td>
                       </tr>
                                @endforelse
                                
                                            
                                              
                </tbody>
              </table>
          </div> 
      </div>
  
              
              

  





          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <!-- script de jquery para que funcione el buscador de nombre-->
          <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
          <!-- script de datatable para que funcione el buscado de nombre-->

          <script type="text/javascript">
          $(document).ready( function () {
              $('#datatable').DataTable( {
            
              language: {
                  search: "Busqueda por nombre o correo:","decimal": "",
                  "emptyTable": "No hay información",
                  "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                  "infoEmpty": "Mostrando 0 to 0 of 0 Usuarios",
                  "infoFiltered": "(Filtrado de _MAX_ total usuarios)",
                  "infoPostFix": "",
                  "thousands": ",",
                  "lengthMenu": "Mostrar _MENU_ usuarios",
                  "loadingRecords": "Cargando...",
                  "processing": "Procesando...",
                  "zeroRecords": "Sin resultados encontrados",
                  "paginate": {
                      "first": "Primero",
                      "last": "Ultimo",
                      "next": " Siguiente",
                      "previous": " Anterior  "
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