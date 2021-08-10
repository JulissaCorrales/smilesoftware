@extends('Plantilla.dashboard')
@section('titulo','Ver Usuarios')
@section('content')
<!DOCTYPE html>
<html lang="en">


<head>
<style>
#padre{

  
  text-align:center;
position: relative; 
width: auto;
 
}
#dd{
  background-color:  #276678;
color: white;
}


</style>
</head>
<body>
<!-- alerta -->
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
<!-- fin de la alerta -->

    <div id="padre"class="card">
        <div class="card">
                  <div id="dd" class="card-header">
                    <h4>Nombre de Usuario: {{$usuarios->name}}</h4>
                    


                  </div>
    <div id="imagen4">
    <img style="  border-radius: 70%;margin-top:1em"src='/Imagenes/{{$usuarios->imagen}}' width=" 200px" height="200px"id="datos6">
    </div>
<!-- edicion -->
<div class="card-body">  
       <form style="margin: 5em;margin-top:1em;margin-bottom:1em;" method="post" action="{{route('usuario.actualizar',$usuarios->id)}} " enctype="multipart/form-data">
                @method('PATCH')
                @csrf() 
<div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="name" class=" col-form-label">{{ __('Nombre de usuario:') }}</label>
                            <div>             
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$usuarios->name}}" required autocomplete="name" minlength="3" maxlength="15"  onkeypress="return SoloLetras(event);" required oninput="check_text(this);"  autofocus>
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuarios->email}}" required autocomplete="email">

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
                        <div>
                            <label for="password" class=" col-form-label">{{ __('Contraseña:') }}</label>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{$usuarios->password}}"> 
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label for="password-confirm" class="col-form-label">{{ __('Confirme Contraseña') }}</label>
                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" minlength="8" value="{{$usuarios->password}}">
                            </div>
                        </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label  class=" col-form-label">{{ __('Cambiar fotografía de usuario:') }}</label>
                        <div   class="form-group" id="imagen">       
                            <input accept="image/*" type="file" class="form-control-file" name="file" id="file" value="{{$usuarios->imagen}}">
                        </div>
                    </div>
                </div>

             <!-- Roles y permisos ocultos solo es para que se guarden ya que si no no se puede-->
<?php
$roles=$usuarios->roles;
$userRole = $usuarios->roles->first();
if($userRole != null){
$rolePermissions = $userRole->allRolePermissions;
}else{
$rolePermissions = null;
}
$userPermissions = $usuarios->permisos;
?> 
                        <div style="display: none">
                            <label for="roles" class=" col-form-label">{{ __('Rol') }}</label>
                            <div type="hidden">
                                <select class="role form-control" name="role" id="role">
                                    <option disabled>Seleccione el Rol...</option>
                                    @foreach ($roles as $role)
                                    <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}" {{ $usuarios->roles->isEmpty() || $role->Nombre != $userRole->Nombre? "" : "selected"}}>{{$role->Nombre}}</option>                
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <!--  -->
                        <div id="permissions_box" style="display: none" >
                            <label class=" col-form-label " for="roles">Seleccione el Permiso</label>   <br>     
                            <input type="checkbox" id="marcarTodas2">Seleccionar todos los permisos</input><hr>
                            <div id="permissions_ckeckbox_list"></div>
                            </div>   
                        <div style="display: none">
                            @if($usuarios->permisos->isNotEmpty())
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
<!-- ver roles -->
   <div class="card-body">
                  <div class="row">
                          <div class="col-md-12">
                            <h5 class="card-title">Roles</h5>
                            <p>
                              @if($usuarios->roles->isNotEmpty())
                                  @foreach ($usuarios->roles as $role )
                                      <span style="background-color:#d3e0ea;color:black;"class="badge badge-secondary" >
                                      {{ $role->Nombre }}                                    
                                  </span>
                                
                                  @endforeach
                                  @endif
                            </p>
                          </div>

                            <div class="col-md-12">
                          @isset($usuarios->odontologo)
                        <h5 class="card-title"> Odontólogo  Asignado a este Usuario</h5>
                          <span style="background-color:#d3e0ea;color:black;"class="badge badge-secondary" >
                            {{$usuarios->odontologo->nombres}} {{$usuarios->odontologo->apellidos}}
                          </span>
                            @endisset
                          </div>
                   </div>
                <br>
                <h5 style="margin: top 1em; "class="card-title">Permisos</h5>
                <div class="row" style="padding-bottom: 3em;">

                        <div class="col-md-12 card-body">
                          <p  class="card-text" style="margin:1em;">
                          @if($usuarios->permisos->isNotEmpty())
                          @foreach ($usuarios->permisos as $permisos )
                          <span class="badge badge-secondary" >
                          {{ $permisos->Permiso}}                                
                          </span>

                          @endforeach
                          @endif

                            </p>
                        </div>

                   
                  </div>
                  

               
             
                 


            </div><!-- fin del <div class="card"> -->  
                <div class="modal-footer">
                       @can('isAdmin')
                      <a type="button" class="btn btn-info"  href="/pantallainicio/usuarios/ver">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-skip-backward" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z"/>
                      </svg>

                      Atrás</a>
                    @endcan
                    <input type="reset" class="btn btn-danger" id="reset" >
                    <button id="registrar "type="submit"class="btn" style="background-color:#1687a7;color:white;" data-toggle="modal" >
                        Guardar Cambios
                    </button>
                  
                </div>
        </form>
 </div>
<!-- fin edicion -->
           


</div>  <!--fin -->
</body>

</html>
@endsection