@extends('Plantilla.Plantilla')
@section('titulo','Crear Rol')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
<style>

  #titulo{
    text-align:center;
}
</style>

<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">
<script src="/tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css" rel="stylesheet" />


</head>
<body>
    
    <div  class="container" id="padre">
    <h3 id="titulo">Crear Rol</h3>
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
   
    <div class="form-group">
        <label for="name">Nombre del Rol</label>
        <input type="text" class="form-control-file" name="rol" id="name" placeholder="Ingrese el nombre del Rol">
    </div>

    <div class="form-group">
        <label for="usuario">Slug</label>
        <input type="text" class="form-control-file" name="slug" id="slug" placeholder="Ingrese el slug">
    </div>

    <div class="form-group">
        <label for="permisos">Permisos</label>
        <input type="text" value="" data-role="tagsinput" >
    </div>

    
    

   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='{{route('administrativo.indice')}}'" class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Guardar
                    </button>
                    
                   
                    </div>

    
    
    </form>

    
    
    
    </div><!-- fin div padre -->

@section('css_role')

<link rel="stylesheet" href="/css/bootstrap-tagsinput.css">

@endsection

@section('js_role')
<script src="/js/bootstrap-tagsinput.js"></script>
@endsection



</body>



</html>
@endsection