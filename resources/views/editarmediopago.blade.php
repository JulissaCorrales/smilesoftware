@extends('Plantilla.Plantilla2')
@section('titulo','Edicion del Medio de Pago')
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
                    <label for="nombre" class="control-label">Nombre del Medio de Pago:</label>
                    <input type="text"  class="form-control-file" placeholder="Ingrese nombre del inventario" name="nombre" id="nombre"   value="{{$mediopagos->nombre}}"> 
                    </div>
                    
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='/pantallainicio/mediopago'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
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