@extends('Plantilla.Plantilla2')
@section('titulo','Ingreso del Medio de Pago')
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
    <h3 id="titulo">Ingreso del Medio de Pago</h3>
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
    
    <form method="post" action="/mediopagoNuevo">
                      @csrf
                      
                      <div class="form-group">
                          <label for="nombre">Medio de Pago:</label>
                          <input type="text" class="form-control-file" name="nombre" id="nombre" placeholder="ingresar nombre del medio de pago">
                      </div>
                              
                  <div class="modal-footer">
                    <button type="button" onclick="location.href='/pantallainicio/mediopago'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button type="submit" class="btn btn-primary" >Guardar Medio de Pago</button>
                 </div>
              </form>




    </div><!-- fin div padre -->
</body>
</html>
@endsection