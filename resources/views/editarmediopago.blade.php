@extends('Plantilla.Plantilla')
@section('titulo','Edicion del Inventario')
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
    <h3 id="titulo">Edición del Medio de Pagos</h3>
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
    <form method="post" action="{{route('mediopago.update',['id'=> $mediopagos-> id])}} ">

    @csrf
    @method('put')
     <!-- Producto-->
                
     <div class="form-group" id="divcate">
                    <label for="producto" class="control-label">Nombre del Inventario:</label>
                    <input type="text"  class="form-control-file" placeholder="Ingrese nombre del inventario" name="producto" id="producto"   value="{{$mediopagos->producto}}"> 
                    </div>
                   
                    <!-- stockseguridad-->
                    <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Stock de Seguridad:</label>
                    <input type="text"  class="form-control-file" name="stockseguridad" id="stockseguridad" placeholder="Ingrese inventario" value="{{$mediopagos->stockseguridad}}">
                    </div>
                 
                   <!-- stockactual-->
                   <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Stock de Actual:</label>
                    <input type="text"  class="form-control-file" name="stockactual" id="stockactual" placeholder="Ingrese inventario" value="{{$mediopagos->stockactual}}">
                    </div>
                   
                 <!-- monto-->
                 <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Precio:</label>
                    <input type="text"  class="form-control-file" name="monto" id="monto" placeholder="Ingrese valor" value="{{$mediopagos->monto}}">
                    </div>
                   
                    
                   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='/mediopago'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
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