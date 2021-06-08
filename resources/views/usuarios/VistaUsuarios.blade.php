@extends('Plantilla.dashboard')
@can('isAdmin')
@section('content')


<!DOCTYPE html>
<html lang="en">









<body>
<div class="card mb-3">
          <div class="card-header">
           <h4><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
            </svg>Usuario</h4>
            <p>En esta Sección se muestra los Usuario registrados y también se podra editar datos, crear un nuevo Usuario, borrar el Usuario registrado, ver la especialidad del Usuario y la Identidad del mismo</p>
            
          <!-- boton de nuevo usuario -->
            <div>
                <a type="button"style="background-color:#28a4a4; color:#c1f0f0; position: relative;border: 2px solid #276678;"  class="btn" href="{{route('usuario.nuevo')}}"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg> 
                                Nuevo Usuario
                            </a>
                        </div>
      
            </div>
        </div>

    <!--contenedor de tabla -->
    <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Usuario</th>
                    <th> Slug</th>
                     <th>Correo Electrónico</th>
                    <th>Roles</th>
                    <th>Permisos</th>
                    
                    <th> Acciones</th>
            
                  
                  </tr>
                </thead>
                
                <tbody>
                    @forelse($usuarios as $usuario)
                        <tr id="" {{ Auth::user()->id == $usuario->id  ?  'bgcolor=#c2d6d6' : ''}}>
                                <td><img style="border-radius: 70%;" src='/Imagenes/{{$usuario->imagen}}' width="70px" height="70px" id="datosme">
                                    {{$usuario->Usuario}}
                                </td>
                                <td>
                                    {{$usuario->name}}
                                </td>
                                <td>{{$usuario->email}}</td>
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
                                <td style="width:;">


                                    <a type="button" class="btn btn-info" style="margin:6px;"  href="{{route('usuario.verusuario',$usuario->id)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                                        <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                    </a>

                                    <a type="button" class="btn btn-success" style="margin:6px;" href="{{route('usuario.actualizar',$usuario->id)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </a>
                                        <button type="button" class="btn btn-danger" style="margin:6px;" data-toggle="modal" data-target="#modal-{{$usuario->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>

                                        </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="position:absolute; top:100px;">
                                                <div class="modal-header" style=" background-color:#276678; color:white;  height:100px;">
                                                    <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                    </svg> Eliminar Usuario</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <!--<span aria-hidden="true">&times;</span>-->
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ¿Desea realmente eliminar el usuario {{$usuario->name}}?
                                                </div>
                                            <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <form method="post" action="{{route('usuario.borrar',['id'=>$usuario->id])}}">

                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" value="Eliminar" class="btn btn-danger">
                                                    </form>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                
                                </td>
                        </tr>
                       @empty
                        <h1>No hay usuarios disponibles</h1>
                    @endforelse
                </tbody>

                </table>
         </div>
    </div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <!-- script de jquery para que funcione el buscador de nombre-->
          <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
          <!-- script de datatable para que funcione el buscado de nombre-->

</body>
 </html>
 @endsection

@endcanany




