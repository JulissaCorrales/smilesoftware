@extends('Plantilla.Plantilla')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medio de pago nuevo</title>
    <style>


</style>
</head>
@section('contenido')

<body id="bii">
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
  <div id="mo" >
<div class="content" id="n">
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


</div>

  </div>
</body>

</div>

@if(session('mensaje'))
<div class="alert alert-success">
{{session('mensaje')}}
</div>
@endif

</body>

@endsection
</html>