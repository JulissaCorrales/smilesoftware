@extends('Plantilla.Plantilla')
@section('titulo','Edicion de datos del laboratorio')
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
    <h3 id="titulo">Edicion de los datos del laboratorio: {{$labs->nombreLaboratorio}}</h3>
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
    
    <form method="post" action="{{route('laboratorio.actualizar',['id'=> $labs-> id])}} ">
                      
                      @csrf
                        @method('put')
                      
                      <div class="form-group">
                          <label for="nombre">Nombre del Laboratorio:</label>
                          <input type="text" class="form-control-file" name="nombreLaboratorio" id="nombreLaboratorio" value="{{$labs->nombreLaboratorio}}">
                      </div>

                      <div class="form-group">
                        <label for="nombre">detalle:</label>
                        <input type="text" class="form-control-file" name="detalle" id="detalle" value="{{$labs->detalle}}" >
                    </div>

                    <div class="form-group">
                        <label for="nombre">por Pagar:</label>
                        <input type="text" class="form-control-file" name="porPagar" id="porPagar" value="{{$labs->porPagar}}">
                    </div>
                              
                  <div class="modal-footer">
                    <button type="button" onclick="location.href='/pantallainicio/laboratorios'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button type="submit" class="btn btn-primary" >Guardar Laboratorio</button>
                 </div>
              </form>


    </div><!-- fin div padre -->
</body>
</html>
@endsection