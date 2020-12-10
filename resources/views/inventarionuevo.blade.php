@extends('Plantilla.Plantilla')
@section('titulo','Ingreso del Inventario')
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
    <h3 id="titulo">Ingreso de Inventario</h3>
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

    <form method="post" action="/inventarioNuevo">
                      @csrf
                      
                      <div class="form-group">
                          <label for="producto">Inventario:</label>
                          <input type="text" class="form-control-file" name="producto" id="producto" placeholder="ingresar nombre del inventario">
                      </div>
                      <div class="form-group">
                          <label for="stockseguridad">Stock de Seguridad:</label>
                          <input type="text" class="form-control-file" name="stockseguridad" id="stockseguridad" placeholder="ingresar valor">
                      </div>
                      
                      <div class="form-group">
                          <label for="stockactual">Stock de Actual:</label>
                          <input type="text" class="form-control-file" name="stockactual" id="stockactual" placeholder="ingresar valor">
                      </div>

                      <div class="form-group">
                          <label for="monto">Precio:</label>
                          <input type="text" class="form-control-file" name="monto" id="monto" placeholder="ingresar valor">
                      </div>
                  <div class="modal-footer">
                    <button type="button" onclick="location.href='/inventario/'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button type="submit" class="btn btn-primary" >Guardar Inventario</button>
                 </div>
              </form>
    
    
    
    </div><!-- fin div padre -->
</body>
</html>
@endsection