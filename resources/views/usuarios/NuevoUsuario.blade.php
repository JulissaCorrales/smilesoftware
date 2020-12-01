@extends('Plantilla.PermisoPlantilla')
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

/*#role{
    position: absolute;
    top: 400px;
    width: 300px;
    left:500px;

}

#role3{
    position: absolute;
    top: 900px;
   
    left:390px;

}*/





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
                            <label for="roles" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                            <div class="col-md-6">
                            <select class="role form-control" name="role" id="role">
            <option value="">Select Role...</option>
            @foreach ($roles as $role)
            <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{$role->Nombre}}</option>
            @endforeach
        </select>
                            </div>
                        </div>



                        <div class="form-group row" id="permissions_box">
                            <label for="permiso" class="col-md-4 col-form-label text-md-right">{{ __('Seccione Permiso') }}</label>

                            <div class="col-md-6" id="permissions_ckeckbox_list"> </div>
                        </div>

                    
      
                        <!-- esDentista -->
                        
                        <!--  -->
                        <!-- Roles -->
                        
    
                        <!--  -->

                   
                    <div class="form-group" align=center id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='{{route('usuarios.indice')}}'" class="btn btn-secondary" data-dismiss="modal" id="atras">Atrás</button>
                    <input type="reset" class="btn btn-danger" id="reset">
                    <button id="registrar "type="submit"class="btn btn-primary" data-toggle="modal" >
                        Registrar
                    </button>
                    
                   
                    </div>

    
    
    </form>

    
    
    
    </div><!-- fin div padre -->
    @section('js_user_page')

    <script>
        $(document).ready(function(){
            var permissions_box = $('#permissions_box');
            var permissions_ckeckbox_list = $('#permissions_ckeckbox_list');
            permissions_box.hide(); // hide all boxes
            $('#role').on('change', function() {
                var role = $(this).find(':selected');    
                var role_id = role.data('role-id');
                var role_slug = role.data('role-slug');
                permissions_ckeckbox_list.empty();
              // console.log(role_slug);


               $.ajax({
                url: "/pantallainicio/usuarios/nuevo",
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

@endsection
</body>
</html>
@endsection