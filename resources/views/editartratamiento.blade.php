@extends('Plantilla.Plantilla')
@section('titulo','Edicion del Tratamiento')
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
    <h3 id="titulo">Edición del Tratamiento</h3>
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
    <form method="post" action="{{route('tratamiento.update',['id'=> $tratamientos-> id])}} ">

    @csrf
    @method('put')
     <!-- Categoria-->
                
     <div class="form-group" id="divcate">
                    <label for="categoria" class="control-label">Nombre del Tratamiento:</label>
                    <input type="text"  class="form-control-file" placeholder="Ingrese la categoria del gasto" name="categoria" id="categoria  "   value="{{ $tratamientos->categoria }}"> 
                    </div>
                   
                    <!-- Tipo-->
                    <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Tipo:</label>
                    <input type="text"  class="form-control-file" name="tipo" id="tipo" placeholder="Ingrese el tipo de gasto" value="{{ $tratamientos->tipo }}">
                    </div>
                 
                   
                 
                   
                    
                   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='/tratamiento'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
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