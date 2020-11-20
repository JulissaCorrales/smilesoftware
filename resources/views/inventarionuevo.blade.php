@extends('Plantilla.Plantilla')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Nuevo</title>
    <style>

#table{
}

td{
 border: 1px solid #00cccc;
 text-align: left;
 padding: 20px;
 text-align: left;
 background-color: #ccffff
 
} 


btn{
text-align: center;
}



#lista{
}

#lista:hover{
  border: 1px solid #FF4500;
  color: hotpink;
}

#can{
 background-color: #ffad33;
}

#cue{
 border: #00cccc  2px solid;
}

#na{
 width: 600px;
 height: 60px;
   border-radius: 12px;
   background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff); 
   position: absolute;
   top:250px;
   left:150px;
 
}

#dd{
 position: absolute;
   top:400px;
   left:150px;
}


#b1{
 position: absolute;
   top:300px;
   left:780px;
}

#b2{
 position: absolute;
   top:300px;
   left:1030px;
}

#b3{
 position: absolute;
   top:300px;
   left:1140px;
}

#dire{
 color: #ff9933;
 text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;
 font-family: serif;
 position: absolute;
           font-size:30px;
           top: 2px;
           left:30px;
}

#bo{
 background-color: #ccffff;
}
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