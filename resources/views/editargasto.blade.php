@extends('Plantilla.Plantilla2')
@section('titulo','Edicion del Gasto')
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
    <h3 id="titulo">Edición del Gasto</h3>
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
    <form method="post" action="{{route('gasto.update',['id'=> $gastos-> id])}} ">

    @csrf
    @method('put')
     <!-- Categoria-->
                
     <div class="form-group" id="divcate">
                    <label for="categoria" class="control-label">Categoria:</label>
                    <input type="text"  class="form-control-file" placeholder="Ingrese la categoria del gasto" name="categoria" id="categoria  "   value="{{ $gastos->categoria }}"> 
                    </div>
                   
                    <!-- Detalle-->
                    <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Detalle:</label>
                    <input type="text"  class="form-control-file" name="detalle" id="detalle" placeholder="Ingrese el detalle del gasto" value="{{ $gastos->detalle }}">
                    </div>
                 
                    <!-- Monto-->
                    <div class="form-group" id="div3">
                    <label for="monto" class="control-label">Monto:</label>
                    <input type="number"  class="form-control-file" name="monto" id="monto" placeholder="Ingrese el monto del gasto"  value="{{ $gastos->monto }}">
                    </div>
                 
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div4">
                    <label for="fechafactura" class="control-label">Fecha de la Factura:</label>
                    <input type="date"  class="form-control-file" name="fechafactura" id="fechafactura" value="{{ $gastos->fechafactura }}">
                    </div>
                   
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div5">
                    <label for="fechapago" class="control-label">Fecha de Pago de la Factura:</label>
                    <input type="date"  class="form-control-file"  name="fechapago" id="fechapago" value="{{ $gastos->fechapago }}">
                    </div>
                   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='/pantallainicio/gastos'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
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