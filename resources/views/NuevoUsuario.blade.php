@extends('Plantilla.Plantilla')
@section('titulo','Edicion de usuario administrativo')
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
</style>
</head>
<body>
    
    <div  class="container" id="padre">
    <h3 id="titulo">ingresar datos del Usuario</h3>
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
     <!-- Categoria-->
                
     </select>
        <hr>
        <!-- Doctor -->
        <label for="state_id" class="control-label">Doctor:</label>
        <select name="nombre" class="form-control">
        <option disabled selected>Seleccione un Doctor</option>
        <?php
        $getDoctor =$mysqli->query("select * from odontologos order by id");
        while($f=$getDoctor->fetch_object()) {
          echo $f->nombres;
          echo $f->apellidos;

          ?>
         
          <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos;?></option>
          <?php
        } 
        ?>
        </select>
        <hr>

    <div class="form-group">
        <label for="usuario">usuario</label>
        <input type="text" class="form-control-file" name="usuario" id="usuario" placeholder="Ingrese su nombre de usuario" >
    </div>

    <div class="form-group">
      <label for="clave">clave</label>
      <input type="text" class="form-control-file" name="clave" id="clave" placeholder="Ingrese su clave ">
  </div>

  <div class="form-group">
  <label for="repetirClave">repetir clave</label>
  <input type="text" class="form-control-file" name="repetirClave" id="repetirClave" placeholder="escribe nuevamente la clave" >
</div>

<div class="form-group">
  <label for="perfilPermisos">perfil de Permisos:</label>
  <input type="text" class="form-control-file" name="perfilPermisos" id="perfilPermisosr" placeholder="permisos del usuario" >
</div>

<div class="form-group">
    <label for="departamento">Es dentista:</label>
    <select name="esDentista" id="esDentista" class="form-control">
    <option disabled selected>es dentista el usuario</option>
    <option >si</option>
    <option >no</option>
</select>
  </div>


<div class="form-group">
  <label for="estadoCuenta">estado de cuenta</label>
  <input type="text" class="form-control-file" name="estadoCuenta" id="estadoCuenta" placeholder="Ingrese su direccion" >
</div>

                   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='/pantallainicio/usuarios'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Continuar
                    </button>
                    
                   
                    </div>

    
    
    </form>

    
    
    
    </div><!-- fin div padre -->
</body>
</html>
@endsection