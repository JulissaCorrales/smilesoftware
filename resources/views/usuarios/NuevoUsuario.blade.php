@extends('Plantilla.Plantilla')
@section('titulo','Nuevo Usuario')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
#padre{
    width:auto;
    font:1em Tahoma;
    margin: 5rem;
    padding: 2rem;
    border: 2px solid #ccc;
}   #titulo{
    text-align:center;
}

#role{
    position: absolute;
    top: 550px;
    width: 300px;
    left:400px;

}
</style>
</head>
<body>
    
    <div  class="container" id="padre" style="background-color: #FEF9E7;">
    <h3 id="titulo">Ingresar Datos del Usuario</h3>
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

   <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
                        <?php
                        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                        $mysqli->set_charset("utf8");
                    ?>
                     <form method="post" action="{{route('usuario.guardar')}} ">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                              
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     


  <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="rol_id" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                            <div class="col-md-6">
                                <select id="rol_id" name="rol_id" class="form-control" class="form-control @error('name') is-invalid @enderror" name="rol_id" value="{{ old('rol_id') }}" required autocomplete="rol_id" autofocus>
                                <option disabled selected>Seleccione un Rol</option>
                                @foreach ($roles as $role)
            <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{$role->Nombre}}</option>
            @endforeach
                                
                                </select>
                    
                               
                            </div>
                        </div>


                    
                       
                        <div class="form-group row">
                            <label for="rol_id" class="col-md-4 col-form-label text-md-right">{{ __('Permiso') }}</label>

                            <div class="col-md-6">
                                <select id="rol_id" name="rol_id" class="form-control" class="form-control @error('name') is-invalid @enderror" name="rol_id" value="{{ old('rol_id') }}" required autocomplete="rol_id" autofocus>
                                <option disabled selected>Seleccione un Rol</option>
                                @foreach ($roles as $role)
            <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{$role->Nombre}}</option>
            @endforeach
                                
                                </select>
                    
                               
                            </div>
                        </div>
                        <!--  -->
                        <!-- esDentista -->
                        
                        <!--  -->
                        <!-- Roles -->
                        
    
                        <!--  -->

                   
                    <div class="form-group" align=center id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='{{route('usuarios.indice')}}'" class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Registrar
                    </button>
                    
                   
                    </div>

    
    
    </form>

    
    
    
    </div><!-- fin div padre -->
</body>
</html>
@endsection