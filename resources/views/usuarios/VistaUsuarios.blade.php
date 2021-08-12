@extends('Plantilla.dashboard')
@can('isAdmin')
@section('content')
@section('titulo','Usuarios')
<!DOCTYPE html>
<html lang="en">
<body>
<div class="card mb-3">
    <div class="card-header">
        <h4>
        <img src='/Imagenes/group.png' width="10%" height="10%" id="datosme"> Usuario</h4>
        <p>En esta sección se muestra los usuarios registrados y también se podrá editar los datos, crear un nuevo usuario, borrar el usuario registrado, ver la especialidad del usuario y la identidad del mismo.</p>
        <!-- boton de nuevo usuario -->
        
           
           
        
    </div>
 <div><button id="boton" style="margin:1em;" type="button"class="btn btn-outline-info" data-toggle="modal" data-target="#Crearusuario" >Nuevo Usuario <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-node-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5a.5.5 0 0 0-1 0v2h-2a.5.5 0 0 0 0 1h2v2a.5.5 0 0 0 1 0v-2h2a.5.5 0 0 0 0-1h-2v-2z"/>
        </svg></button>
    <!-- 1.modal crear usuario -->
    <div class="modal fade" id="Crearusuario" class="modal fade bd-example-modal-lg" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header" style=" background-color:#276678; color:white;" >
            <h5 class="modal-title" id="exampleModalLabel">
            <img src='/Imagenes/agregarusua.png' width="15%" height="15%" >    
            Crear Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!--Contenido -->
            <form id="frmusuarios" method="post" action="{{route('usuario.guardar')}} " enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="name" class=" col-form-label">{{ __('Nombre del usuario:') }}</label>
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" minlength="3" maxlength="15"  onkeypress="return SoloLetras(event);" required oninput="check_text(this);"  autocomplete="name" autofocus placeholder="Escriba su nombre de usuario aquí">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="col-form-label">{{ __('Correo Electrónico') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Escriba su correo gmail aquí">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label" for="password">{{ __('Contraseña') }}</label>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Escriba su contraseña de 8 o mas caracteres aquí" minlength="8">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label" for="password-confirm">{{ __('Confirme Contraseña') }}</label>
                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña de 8 o mas caracteres aquí" minlength="8">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label" for="permiso" >{{ __('Fotografía de usuario:') }}</label>
                            <input type="file" accept="image/*" class="form-control-file" name="file" id="file" placeholder="Seleccione una Imagen">
                        </div>
                    </div>
                    <div class="col-md-6">    
                        <div class="form-group row">
                            <label class="col-form-label" style="margin-left:1em;margin-right:1em;" for="roles">{{ __('Rol:') }}</label>
                            <div>
                                <br>
                                <select required class="role form-control" name="role" id="role2">
                                    <option value="">Seleccione el Rol...</option>
                                        @foreach ($roles as $role)
                                        <option data-role-id2="{{$role->id}}" data-role-slug2="{{$role->slug}}" value="{{$role->id}}">{{$role->Nombre}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="permissions_box2">
                            <label class="col-form-label" for="permiso">{{ __('Seleccione los Permiso: ') }}</label><br>
                            <input type="checkbox" id="marcarTodas">Seleccionar todos los permisos</input>
                            <div id="permissions_ckeckbox_list2"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-danger" id="reset">
                    <button style="background-color:#1687a7;border: 2px solid #276678;" id="registrar "type="submit"class="btn btn-secondary" data-toggle="modal" >
                    Registrar
                    </button>
                </div>
            </form>     
            <p id="resultado"></p>
            <!-- fin contenido -->
        </div>
    </div>
    </div>
    </div>
    <!-- Fin modal nuevo usuario -->
</div>










<div>
<div>@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                </li>
            @endforeach
         
        </ul>
        
    </div>
@endif</div>
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
                            <td>
                                <a type="button" class="btn btn-outline-info" style="margin:6px;"  href="{{route('usuario.verusuario',$usuario->id)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>
                                </a>
                            <a type="button" class="btn btn-outline-success" style="margin:6px;" href="{{route('usuario.actualizar',$usuario->id)}}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg> </a>
                            
                                <button type="button" class="btn btn-outline-danger" style="margin:6px;" data-toggle="modal" data-target="#modal-{{$usuario->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                </svg>
                                </button>
<!-- 
                                1.modal editar usuario 
                                <div class="modal fade" id="exampleModalLong-{{$usuario->id}}"  class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                                                <div class="modal-header" style=" background-color:#276678; color:white;  height:100px;">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    <img style=" border-radius: 50%; " src='/Imagenes/{{$usuario->imagen}}' width=" 70px" height="70px"  >
                                                                            Editar Usuario </h4>  
                                                                    <p style="margin-top:50px; margin-left:-180px;">{{$usuario->nombres}} {{$usuario->apellidos}} </p>
                                                                        </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                            <div class="modal-body">
                                                Contenido 
                                                    <form id="frmusuarios" method="post" action="{{route('usuario.actualizar',['id'=>$usuario->id])}}" enctype="multipart/form-data">
                                                            <?php
                                                                $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                                                                $mysqli->set_charset("utf8");
                                                                ?>                
                                                            @csrf
                                                            @method('patch')
                                                        <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="name" class=" col-form-label">{{ __('Nombre del usuario:') }}</label>
                            <div>
                                <input id="name"value="{{$usuario->name}}"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Escriba su nombre de usuario aquí">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="col-form-label">{{ __('Correo Electrónico') }}</label>
                            <div>
                                <input id="email" type="email" value="{{$usuario->email}}"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Escriba su correo gmail aquí">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label" for="password">{{ __('Contraseña') }}</label>
                            <div>
                                <input id="password" value="{{$usuario->password}}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Escriba su contraseña de 8 o mas caracteres aquí">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label" for="password-confirm">{{ __('Confirme Contraseña') }}</label>
                            <div>
                                <input id="password-confirm"value="{{$usuario->password}}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña de 8 o mas caracteres aquí">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label">{{ __('Fotografía de usuario:') }}</label>
                            <input type="file" accept="image/*"value="{{$usuario->imagen}}" class="form-control-file" name="file" id="file" placeholder="Seleccione una Imagen">
                        </div>
                    </div>
                    <div class="col-md-6">    
                        <div class="form-group row">
                            <label class="col-form-label" style="margin-left:1em;margin-right:1em;" for="roles">{{ __('Rol:') }}</label>
                            <div>
                                <br>
                                <select class="role form-control" name="role" id="role">
                                    <option disabled>Seleccione el Rol...</option>
                                        @foreach ($roles as $role)
                                        <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{$role->Nombre}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="permissions_box">
                            <label class="col-form-label" for="roles">{{ __('Seleccione los Permiso: ') }}</label><br>
                            <input type="checkbox" id="marcarTodas2">Seleccionar todos los permisos</input>
                            <div id="permissions_ckeckbox_list"></div>
                        </div>
                        <div>
                            @if($usuario->permisos->isNotEmpty())
                                @if($usuario->rolePermissions != null)
                                    <div id="user_permissions_box" >
                                        <label class=" col-form-label "for="roles">Permisos del Usuario</label>
                                        <div    id="user_permissions_ckeckbox_list">   
                                                        
                                            @foreach ($usuario->rolePermissions as $permission)
                                                <div class="custom-control custom-checkbox">                         
                                                    <input class="custom-control-input" type="checkbox" name="permissions[]" id="{{$permission->slug}}" value="{{$permission->id}}" {{ in_array($permission->id, $userPermissions->pluck('id')->toArray() ) ? 'checked="checked"' : '' }}>
                                                        <label class="custom-control-label" for="{{$permission->slug}}">{{$permission->Permiso}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-danger" id="reset">
                    <button style="background-color:#1687a7;border: 2px solid #276678;" id="registrar "type="submit"class="btn btn-secondary" data-toggle="modal" >
                    Registrar
                    </button>
                </div>
            </form> 
                                                    
                                                </div>FIN DEL CONTENIDO 
                                            </div>
                                            </div>
                                        </div>
 Fin modal editar usuario -->



                                <!-- Modal eliminar  -->
                                <div class="modal fade" id="modal-{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="position:absolute; top:100px;">
                                            <div class="modal-header" style=" background-color:#276678; color:white;">
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

</div>
<script>
$(document).ready( function () {
    $('#datatable1').DataTable( {
    language: {
        search: "Búsqueda por nombre",
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
        "infoEmpty": "Mostrando 0 to 0 of 0 Usuarios",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Usuarios",
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
</body>
</html>

<!-- Scripts para roles y permisos  -->
<!-- Script que servira en modal nuevo usuario -->
 @section('js_user_page')


    <script>
        $(document).ready(function(){
            var permissions_box = $('#permissions_box2');
            var permissions_ckeckbox_list = $('#permissions_ckeckbox_list2');
            permissions_box.hide(); // hide all boxes
            $('#role2').on('change', function() {
                var role = $(this).find(':selected');    
                var role_id = role.data('role-id2');
                var role_slug = role.data('role-slug2');
                permissions_ckeckbox_list.empty();
              // console.log(role_slug);
               $.ajax({
                url: "/pantallainicio/usuarios/ver",
                    method: 'get',
                    dataType: 'json',
                    data: {
                        role_id: role_id,
                        role_slug: role_slug,
                    }
                   
               }).done(function(data){
            console.log(data);
           permissions_box.show();
           permissions_ckeckbox_list.empty();
           $.each(data, function(index, element){
                        $(permissions_ckeckbox_list).append(       
                            '<div class="custom-control custom-checkbox">'+                         
                                '<input class="custom-control-input" type="checkbox" name="permissions[]" id="'+ element.slug +'" value="'+ element.id +'">' +
                                '<label class="custom-control-label" for="'+ element.slug +'">'+ element.Permiso +'</label>'+
                            '</div>'
                        );
                    });
               });
               
                
            });
        });
    </script>

<!-- scripdt para seleccionar todos los checkbox -->
<script>
$(document).ready(()=>{
      $('#marcarTodas').click(function () {
        $('input[type="checkbox"]').attr('checked', $('#marcarTodas').is(':checked'));
    });
});
</script>

<!-- fin scrip-t para seleccionar todos los checkbox  -->



<script>
    $(document).ready(function(){
        var permissions_box = $('#permissions_box');
        var permissions_ckeckbox_list = $('#permissions_ckeckbox_list');
        var user_permissions_box = $('#user_permissions_box');
        var user_permissions_ckeckbox_list = $('#user_permissions_ckeckbox_list');
        permissions_box.hide(); // hide all boxes
        $('#role').on('change', function() {
            var role = $(this).find(':selected');    
            var role_id = role.data('role-id');
            var role_slug = role.data('role-slug');
            permissions_ckeckbox_list.empty();
            user_permissions_box.empty();
            $.ajax({
                url: "/pantallainicio/usuarios/ver",
                method: 'get',
                dataType: 'json',
                data: {
                    role_id: role_id,
                    role_slug: role_slug,
                }
            }).done(function(data) {
                
                console.log(data);
                
                permissions_box.show();                        
                // permissions_ckeckbox_list.empty();
                $.each(data, function(index, element){
                    $(permissions_ckeckbox_list).append(       
                        '<div class="custom-control custom-checkbox">'+                         
                            '<input class="custom-control-input" type="checkbox" name="permissions[]" id="'+ element.slug +'" value="'+ element.id +'">' +
                            '<label class="custom-control-label" for="'+ element.slug +'">'+ element.Permiso +'</label>'+
                        '</div>'
                    );
                });
            });
        });
    });
</script>
<script>
$(document).ready(()=>{
      $('#marcarTodas2').click(function () {
        $('input[type="checkbox"]').attr('checked', $('#marcarTodas2').is(':checked'));
    });
});
</script> 

<!-- scrip para validaciones -->
<script>


function SoloLetras(e)
{
key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toString();

letras = "A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Á É Í Ó Ú a b c d e f g h i j k l m n o p q r s t u v w x y z á é í ó ú ";

especiales = [8, 65];
tecla_especial = false
for(var i in especiales) {
if(key == especiales[i]){
 tecla_especial = true;
 break;
}
}

if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
 
 return false;
}
}
</script>


@endsection
@endsection 



@endcanany