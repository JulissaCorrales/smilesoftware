@extends('Plantilla.Plantilla2')
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

    <form method="post" action="/rol/nuevo ">

    @csrf
   
    <div class="form-group">
        <label for="name">Nombre del Rol</label>
        <input type="text" class="form-control-file" name="name" id="name" placeholder="Ingrese el nombre del Rol">
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control-file" name="slug" id="slug" placeholder="Ingrese el slug" tag="slug">
    </div>

    <div class="form-group">
        <label for="permisos">Permisos</label>
        <input type="text" value="" data-role="tagsinput" name="roles_permisos" >
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

@section('css_role')

<link rel="stylesheet" href="/css/bootstrap-tagsinput.css">

@endsection

@section('js_role')
<script src="/js/bootstrap-tagsinput.js"></script>


<script>

$(document).ready(function(){
    $('#name').keyup(function(e){
        var str= $('#name').val();
        str = str.replace(/\W+(?!$)/g,'.').toLowerCase();
        $('#slug').val(str);
        $('#slug').attr('placeholder',str);

    });
});




</script>
@endsection



</body>



</html>
@endsection