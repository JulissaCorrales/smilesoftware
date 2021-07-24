@extends('Plantilla.dashboard')
@section('titulo','Editar Usuario')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
#padre{
    width:auto;
    font:1em Tahoma;
    
   
    
}   #titulo{
    
}


#imagen{
    margin-left:15em;
}
</style>
</head>
<body>
 
    <div  class="card " id="padre">
                
                     
        <div class="card-header">              
        <h2 id="titulo" ><img class="logo" style="border-radius: 70%;" src='/Imagenes/{{$user->imagen}}'   width="100px" height="100px">
 Editar Usuario: {{$user->name}}     
        
        
        </h2>
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
<div class="card-body">  
       <form method="post" action="{{route('usuario.actualizar',$user->id)}} " enctype="multipart/form-data">
                @method('PATCH')
                @csrf() 
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="name" class=" col-form-label">{{ __('Nombre:') }}</label>
                            <div>             
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div >
                            <label for="email" class=" col-form-label">{{ __('Correo Electrónico') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

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
                    <div class="col-md-12">
                        <div>
                            <label for="password" class=" col-form-label">{{ __('Contraseña:') }}</label>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{$user->password}}"> 
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <label for="password-confirm" class="col-form-label">{{ __('Confirme Contraseña') }}</label>
                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="{{$user->password}}">
                            </div>
                        </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Roles y permisos -->
                        <div>
                            <label for="roles" class=" col-form-label">{{ __('Rol') }}</label>
                            <div>
                                <select class="role form-control" name="role" id="role">
                                    <option disabled>Seleccione el Rol...</option>
                                    @foreach ($roles as $role)
                                    <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}" {{ $user->roles->isEmpty() || $role->Nombre != $userRole->Nombre? "" : "selected"}}>{{$role->Nombre}}</option>                
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <!--  -->
                        <div id="permissions_box" >
                            <label class=" col-form-label " for="roles">Seleccione el Permiso</label>   <br>     
                            <input type="checkbox" id="marcarTodas2">Seleccionar todos los permisos</input><hr>
                            <div id="permissions_ckeckbox_list"></div>
                            </div>   
                        <div>
                            @if($user->permisos->isNotEmpty())
                                @if($rolePermissions != null)
                                    <div id="user_permissions_box" >
                                        <label class=" col-form-label "for="roles">Permisos del Usuario</label>
                                        <div    id="user_permissions_ckeckbox_list">   
                                                        
                                            @foreach ($rolePermissions as $permission)
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
                            <!-- fin roles y permisos -->
                    </div>
                    <div class="col-md-12">
                        <label  class=" col-form-label">{{ __('Fotografía de usuario:') }}</label>
                        <div   class="form-group" id="imagen">       
                            <input accept="image/*" type="file" class="form-control-file" name="file" id="file" value="{{$user->imagen}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                        <button style="background-color:#276678;color:white"type="button" onclick="location.href='{{route('usuarios.indice')}}'" class="btn " data-dismiss="modal" id="atras">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-skip-backward-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5z"/>
                    <path d="M.904 8.697l6.363 3.692c.54.313 1.233-.066 1.233-.697V4.308c0-.63-.692-1.01-1.233-.696L.904 7.304a.802.802 0 0 0 0 1.393z"/>
                    <path d="M8.404 8.697l6.363 3.692c.54.313 1.233-.066 1.233-.697V4.308c0-.63-.693-1.01-1.233-.696L8.404 7.304a.802.802 0 0 0 0 1.393z"/>
                    </svg>
                    Atrás</button>
                    <!-- <input type="reset" class="btn btn-danger" id="reset" > -->
                    <button id="registrar "type="submit"class="btn" style="background-color:#1687a7;color:white;" data-toggle="modal" >
                        Guardar Cambios
                    </button>
                </div>
        </form>
 </div>
          
        @section('js_user_page')


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
<script>
$(document).ready(()=>{
      $('#marcarTodas2').click(function () {
        $('input[type="checkbox"]').attr('checked', $('#marcarTodas2').is(':checked'));
    });
});
</script>

@endsection

    </div><!-- fin div padre -->
  
  
</body>
</html>
@endsection 