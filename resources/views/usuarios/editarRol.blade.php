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
    margin: center;
    margin-top: 2em;
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
    <h3 id="titulo"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>Editar Rol</h3>
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
    <br><br>
    <form method="post" action=" ">

    @csrf
    @method('put')
   
    <div class="form-group">
        <label for="rol">Nombre del Rol</label>
        <input type="text" class="form-control" value="{{$roles->Nombre}}"  required name="rol" id="name" >
    </div>

    <div class="form-group">
        <label for="usuario">Slug</label>
        <input type="text" class="form-control" name="slug" id="slug" placeholder="Ingrese el slug" value="{{$roles->slug}}" required>
    </div>
    <div class="form-group">
        <label for="roles_permisos">Permisos</label>
        <input type="text" data-role="tagsinput"  class="form-control" id="roles_permisos" name="roles_permisos" value="@foreach ($roles->permisos as $permiso)
            {{$permiso->Permiso. ','}}
        @endforeach" 
        >   
    </div>
    

   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='{{route('roles.ver')}}'" class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Guardar
                    </button>
                    
                   
                    </div>

    
    
    </form>

    @section('css_role')
    <link rel="stylesheet" href="\css\bootstrap-tagsinput.css">
@endsection

@section('js_role')
    <script src="\js\bootstrap-tagsinput.js"></script>

    <script>
        $(document).ready(function(){
            $('#name').keyup(function(e){
                var str = $('#name').val();
                str = str.replace(/\W+(?!$)/g, '-').toLowerCase();//rplace stapces with dash
                $('#slug').val(str);
                $('#slug').attr('placeholder', str);
            });
        });
        
    </script>

@endsection
    
    
    
    </div><!-- fin div padre -->
</body>
</html>
@endsection