@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>
    <style>
    #todo{
      margin:4em;
        width:auto;
        border:solid 1px #A2D9CE;
        padding:2em;
        font-family: arial; 
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
<h2>Creación de un Nuevo Archivo del Paciente</h2>

                    <?php
                    $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                     $mysqli->set_charset("utf8");
                    ?>

        <form method="post" action="{{route('archivo.update',['id'=>$pacientes->id,'idarchivo'=>$imagen->id])}}" enctype="multipart/form-data">
        @csrf
                      @method('put')
                  <hr>
        <!-- Doctor -->
        @forelse ($pacientes->archivos as $tag)
        
        <div class="form-group">
        <?php
                    $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                     $mysqli->set_charset("utf8");
                    ?>
                <label for="observaciones">Doctor:</label>
                
                    <select name="odontologo_id" class="form-control">
                    <option value="{{$tag->odontologo->id}}" selected >Odontologo Actual: {{$tag->odontologo->nombres}}  {{$tag->odontologo->apellidos}}</option>
            <?php
            $getDoctor =$mysqli->query("select * from odontologos order by id");
            while($f=$getDoctor->fetch_object()) {
              echo $f->nombres;
              echo $f->apellidos;

              ?>
              
              <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos;?></option>
              <?php
            } 
            ?>
            </select>
              </div>
        <hr>
              <div class="form-group">
              <label for="imagen">Imagen Actual</label>
              <img src="/images/{{$tag->imagen}}" width="150" name="imagen" id="imagen" alt="imagen">
              </div>
              <div class="form-group">
              <label for="identidad">Imagen a subir:</label>
              <input type="file" class="form-control-file" name="imagen" id="imagen">
              </div>
                    
            

              <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <input type="text" class="form-control-file" name="observaciones" id="observaciones" value="{{$tag->observaciones}}">
              </div>
              

              <div class="modal-footer">
              <button type="button" onclick="location.href='{{route('imagenesYarchivos.ver',['id'=>$pacientes->id])}}'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
              <input type="reset" class="btn btn-danger">
            <button type="submit" class="btn btn-primary" >Guardar Paciente</button>
          </div>
        
              </form>

              @endforeach

</div>
</body>
@endsection
</html>
