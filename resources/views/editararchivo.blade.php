@extends('Plantilla.datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición Imagen y Archivo</title>
    <style>
    #todo{
      margin:4em;
        width:800px;
      border: 5px solid gray;
        padding:2em;
        font-family: arial; 
position:absolute;
left:400px;
top: 100px;
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
@if($errors->any())
  <div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  </div>
@endif
<h2>Edición Archivo del Paciente</h2>

                    <?php
                    $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                     $mysqli->set_charset("utf8");
                    ?>

        <form method="post" action="{{route('archivo.update',['id'=>$pacientes->id,'idarchivo'=>$imagen->id])}}" enctype="multipart/form-data">
        @csrf
                      @method('put')
                  <hr>
        <!-- Doctor -->
      
        <div class="form-group">
        <?php
                    $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                     $mysqli->set_charset("utf8");
                    ?>
                <label for="observaciones">Doctor:</label>
                
                    <select required name="odontologo_id" class="form-control">
                    <option value="{{$imagen->odontologo->id}}" selected >Odontologo Actual: {{$imagen->odontologo->nombres}}  {{$imagen->odontologo->apellidos}}</option>
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
              <img src="/images/{{$imagen->imagen}}" value="{{$imagen->imagen}}" width="150" name="imagen" id="imagen" alt="imagen">
              </div>
              <div class="form-group">
              <label for="identidad">Imagen a subir:</label>
              <input required type="file" class="form-control-file" name="imagen" id="imagen">
              </div>
                    
            

              <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <input required type="text" class="form-control-file" name="observaciones" id="observaciones" value="{{$imagen->observaciones}}">
              </div>
              

              <div class="modal-footer">
              <button type="button" onclick="location.href='{{route('imagenesYarchivos.ver',['id'=>$pacientes->id])}}'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
              <input type="reset" class="btn btn-danger">
            <button type="submit" class="btn btn-primary" >Guardar Archivo</button>
          </div>
        
              </form>

       

</div>
</body>
@endsection
</html>
