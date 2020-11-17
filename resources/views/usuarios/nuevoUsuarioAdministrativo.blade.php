
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>

    
    </style>
</head>
<body>
   <div class="container"><!-- padre -->
     <!-- Este codigo es para la ventana modal gasto nuevo -->
        <div class="modal fade" id="createadministrativo" >
            <div class="modal-dialog" role="document">
                <div class="modal-content" >
                <div id="div1"class="modal-header">
                
  
                    <h4  class="modal-title" id="myModalLabel">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                         Nuevo Usuario Administrativo
                    </h4>
                    <button type="button" class="close" data-dismiss="modal"    aria-label="Close">
                    <span span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            
            <form method="post" action="{{route('usuario.guardar')}} ">
                    
                    @csrf
                       <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
                       <?php
                        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                        $mysqli->set_charset("utf8");
                    ?>
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
                        <!-- usuario -->
                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario">

                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--  -->
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
                       

                        <!--  -->
                        <!-- esDentista -->
                        <div class="form-group row">
                            <label for="esDentista" class="col-md-4 col-form-label text-md-right">{{ __('Es Dentista') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="esDentista" type="text" class="form-control @error('esDentista') is-invalid @enderror" name="esDentista" value="{{ old('esDentista') }}" required autocomplete="esDentista"> -->
                               
                              
                                <select class="form-control @error('esDentista') is-invalid @enderror" name="esDentista" value="{{ old('esDentista') }}" required autocomplete="esDentista" id="esDentista" class="form-control">
                                <option disabled selected>Seleccione una opción</option>
                                <option >si</option>
                                <option >no</option>
                            </select>


                                @error('esDentista')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--  -->
                        <!-- Roles -->
                        <div class="form-group row">
                            <label for="rol_id" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                            <div class="col-md-6">
                                <select id="rol_id" name="rol_id" class="form-control" class="form-control @error('name') is-invalid @enderror" name="rol_id" value="{{ old('rol_id') }}" required autocomplete="rol_id" autofocus>
                                <option disabled selected>Seleccione un Rol</option>
                                <?php
                                $getRol =$mysqli->query("select * from rols where id=2");
                                while($f=$getRol->fetch_object()) {
                                echo $f->nombreRol;
                                echo $f->id;
                                

                                ?>
                                
                                <option value="<?php echo $f->id;?>"><?php echo $f->nombreRol;?></option>
                                <?php
                                } 
                                ?>
                                
                                </select>
                    
                                @error('rol_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--  -->

                   
                    <div class="form-group" align=center id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='/pantallainicio/usuarios'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Registrar
                    </button>
                    
                   
                    </div>

                </form>
            </div>
        </div>
     </div>

   
   </div><!-- fin padre -->
</body>
</html>