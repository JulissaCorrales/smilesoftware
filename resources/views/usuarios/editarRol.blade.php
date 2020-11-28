@extends('Plantilla.Plantilla')
@section('titulo','Editar Rol de Usuario')
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
    background-color:#A3E4D7  ;
}   #titulo{
    text-align:center;
}
</style>
</head>
<body>
    
    <div  class="container" id="padre">
    <h3 id="titulo">Editar Rol</h3>
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

    <form method="post" action=" ">

    @csrf
    @method('put')
   
    <div class="form-group">
        <label for="rol">Nombre del Rol</label>
        <input type="text" class="form-control-file" value="{{$roles->Nombre}}" name="name" id="name" >
    </div>

    <div class="form-group">
        <label for="usuario">Slug</label>
        <input type="text" class="form-control-file" name="slug" id="slug" placeholder="Ingrese el slug" value="{{$roles->slug}}">
    </div>
    <div class="form-group">
        <label for="permisos">Permisos</label>
        <input type="text" value="" placeholder="Ingrese los permisos separados por una coma" data-role="tagsinput" >
    </div>
    

   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='{{route('roles.ver')}}'" class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Guardar
                    </button>
                    
                   
                    </div>

    
    
    </form>

    
    
    
    </div><!-- fin div padre -->
</body>
</html>
@endsection