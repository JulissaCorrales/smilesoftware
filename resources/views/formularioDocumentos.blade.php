@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Documento</title>
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
<h2>Creación de un Nuevo Documento del Paciente:</h2>

                    <?php
                    $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                     $mysqli->set_charset("utf8");
                    ?>

        <form method="post" action="" enctype="multipart/form-data">
                  @csrf
                  <hr>
        <!-- Doctor -->
        <label for="state_id" class="control-label">Doctor responsable del tratamiento:</label>
        <select name="odontologo_id" class="form-control">
        <option disabled selected>Seleccione un Doctor</option>
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
        <hr>

              <label for="identidad">Documento a subir:</label>
              <input type="file" class="form-control-file" name="imagen1" id="imagen1">
                    
            

              <div class="form-group">
                <label for="observaciones">observaciones:</label>
                <input type="text" class="form-control-file" name="observaciones" id="observaciones" accept="application/pdf" placeholder="Seleccione un archivo a subir dpf, word, excel, etc.. ">
              </div>
              

              <div class="modal-footer">
              <button type="button" onclick="location.href='{{route('documentos.ver',['id'=>$pacientes->id])}}'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
              <input type="reset" class="btn btn-danger">
            <button type="submit" class="btn btn-primary" >Guardar Archivo</button>
          </div>
              </form>

</div>
</body>
@endsection
</html>
