@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Documento</title>
    <style>
    #todo{
      margin:4em;
       
        border:solid 1px #A2D9CE;
        padding:2em;
        font-family: arial; 
position:absolute;
left:400px;
top:100px; 
border: 5px solid gray;
width:800px;


    }
    h2{
      text-align:center;
    }
    </style>
</head>
@section('cuerpo')
<body>
<div id="todo" class="container">
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<h2>Edicion del Archivo</h2>

                    <?php
                    $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                     $mysqli->set_charset("utf8");
                    ?>

        <form method="POST" action="{{route('documento.update',['id'=>$pacientes->id,'iddocumento'=>$imagen->id])}}" enctype="multipart/form-data">
        @csrf
      @method('put')
                  <hr>
        <!-- Doctor -->
    
        <div class="form-group">
                <label for="observaciones">Doctor:</label>
                <input required type="text" class="form-control-file" name="odontologo_id" id="observaciones" value="{{$imagen->odontologo->id}}">
              </div>
        <hr>
              <div class="form-group">
              <label for="identidad">documento a subir:</label>
              <input required type="file" class="form-control-file" name="imagen" id="imagen">
              </div>
                    
            

              <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <input required type="text" class="form-control-file" name="observaciones" id="observaciones" value="{{$imagen->observaciones}}">
              </div>
           

              <div class="modal-footer">
              <button type="button" onclick="location.href='{{route('documentos.ver',['id'=>$pacientes->id])}}'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
              <input type="reset" class="btn btn-danger">
            <button type="submit" class="btn btn-primary" >Guardar Cambios</button>
          </div>
       
              </form>

          

</div>
</body>
@endsection
</html>