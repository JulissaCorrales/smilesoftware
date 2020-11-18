@extends('Plantilla.Plantilla')
@section('titulo','Editar Usuario')
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
    <h3 id="titulo">Edición de  datos del Usuario: {{$usuarios->name}}</h3>
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

    <form method="post" action="{{route('usuario.actualizar',$usuarios->id)}} ">

    @csrf
    @method('put')
   
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control-file" name="name" id="name" placeholder="Ingrese su nombre de usuario" value="{{$usuarios->name}}">
    </div>

    <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" class="form-control-file" name="usuario" id="usuario" value="{{$usuarios->usuario}}">
    </div>
    <div class="form-group">
      <label for="email">email</label>
      <input type="email" class="form-control-file" name="email" id="email" placeholder="Ingrese su email " value="{{$usuarios->email}}">
  </div>

  <div class="form-group">
  <label for="password">clave</label>
  <input type="password" class="form-control-file" name="password" id="password" placeholder="escribe nuevamente la clave"value="{{$usuarios->password}}" >
</div>
<div class="form-group">
  <label for="esDentista">Es Dentista</label>
  <input type="text" class="form-control-file" name="esDentista" id="esDentista" placeholder="Es dentista" value="{{$usuarios->esDentista}}" >
</div>
<label for="rol_id">Rol</label>
<div class="form-group">
  <select name="rol_id" id="rol_id">
  <option  selected disabled>Actual:{{$usuarios->rol_id}} </option>
  <option value="1">1.Medico </option>
  <option value="2">2.Administrador</option>
  <option value="3">3.Secretario</option>
  </select>
  
</div>

                   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='{{route('clinico.indice')}}'" class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Actualizar 
                    </button>
                    
                   
                    </div>

    
    
    </form>

    
    
    
    </div><!-- fin div padre -->
</body>
</html>
@endsection