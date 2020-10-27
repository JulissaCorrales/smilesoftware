@extends('Plantilla.Plantilla')
<!DOCTYPE html>
<html lang="en">
@section('Titulo','Paciente')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>
</head>
@section('contenido')
<body>
<div id="todo">
<h2>Creación un nuevo archivo del paciente</h2>

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

              <label for="identidad">imagen a subir:</label>
              <input type="file" class="form-control-file" name="imagen" id="imagen">
                    
            

              <div class="form-group">
                <label for="observaciones">observaciones:</label>
                <input type="text" class="form-control-file" name="observaciones" id="observaciones" placeholder="Alguna observacion?">
              </div>
              

              <div class="modal-footer">
              <button type="button" onclick="location.href='/pantallainicio/vista'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
              <input type="reset" class="btn btn-danger">
            <button type="submit" class="btn btn-primary" >Guardar Paciente</button>
          </div>
              </form>

</div>
</body>
@endsection
</html>