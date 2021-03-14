@extends('Plantilla.Plantilla2')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Nuevo</title>
    <style>


#mo{
    margin:2em;
    padding:2em;
    font-family: arial;
    font-size:20px;
    float:center;
    

    }
    h2{
      text-align:center;
      
    }
    #n{
    background-color:#F9E79F  ;
    margin:2em;
    padding:2em;
    border:solid 1px  #E9F7EF ;
    }
</style>




</head>
@section('contenido')

<body id="bii">

    
  <div id="mo" >
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
  <h2>Creación de Nuevo Producto para el Tratamiento: <br>{{$tratamientos->categoria}}</h2>
<div class="content" id="n">

<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>



<form method="post" action="/tratamiento/{{$tratamientos->id}}/producto/Nuevo">
                      @csrf
                      <div class="form-group">
                          <label for="categoria">Nombre:</label>
                          <input type="text" class="form-control-file" name="nombre" id="nombre" placeholder="ingresar nombre del producto">
                      </div>
                     
                    <div class="form-group">
                        <label for="tipo">Permite Descuento :</label>
                        <select  name="permitedescuento" id="permitedescuento">
                        <option disabled selected>Seleccione</option>
                          <option>Si</option>
                          <option>No</option>
                        </select>
                    </div>

                    <div class="form-group">
                          <label for="monto">Monto:</label>
                          <input type="text" class="form-control-file" name="monto" id="monto" placeholder="ingresar el valor">
                      </div>

                     
                  <div class="modal-footer">
                    <button type="button" onclick="location.href='{{route('productos.datos',['id'=>$tratamientos->id])}}'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button type="submit" class="btn btn-primary" >Guardar Producto</button>
                 </div>
              </form>


</div>

  </div>
</body>

</div>



</body>

@endsection
</html>