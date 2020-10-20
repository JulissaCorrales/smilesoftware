@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Plan de Tratamiento</title>
    <style>
    #todo{
    margin: 5rem;
    padding: 2rem;
    border: 2px solid #ccc;
    background-color:#F4ECF7;
    }
    h2{
      text-align:center;
    }
  
    </style>
    
</head>
@section('cuerpo')
<body>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="todo">
    <h2>Creación de Nuevo Tratamiento</h2>


     <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
     <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

<form method="post" action="/tratamientoNuevo/{$pacientes->id}">
                      @csrf
                      <div class="form-group">
                          <label for="nombreTratamiento">Nombre del Tratamiento:</label>
                          <input type="text" class="form-control-file" name="nombreTratamiento" id="nombreTratamiento" placeholder="ingresar nombre del tratamiento">
                      </div>

                      <div class="form-group">
                            <label for="estado" class="control-label">Estado:</label>
                <select name="estado" id="estado" class="form-control">
                <option disabled selected>Seleccione el estado del tratamiento</option>
                <option >Activo</option>
                <option >Finalizado</option>
                </select>
                

  <!-- paciente -->
  <label for="state_id" class="control-label">Paciente:</label>
        <select name="paciente_id" class="form-control">
        <option disabled selected>Seleccione el paciente </option>
        <?php
        $getPacientes =$mysqli->query("select * from pacientes order by id");
        while($f=$getPacientes->fetch_object()) {
          echo $f->id;
          echo $f->nombres;
          echo $f->apellidos;

          ?>
         
          <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos;?></option>
          <?php
        } 
        ?>
        </select>
        <!-- Doctor -->
        <label for="state_id" class="control-label">Doctor:</label>
        <select name="odontologo_id" class="form-control">
        <option disabled selected>Seleccione un Odontologo</option>
        <?php
        $getDoctor =$mysqli->query("select * from odontologos order by id");
        while($f=$getDoctor->fetch_object()) {
          echo $f->id;
          echo $f->nombres;
          echo $f->apellidos;

          ?>
         
          <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos;?></option>
          <?php
        } 
        ?>
        </select>
        <hr>
        <!--cita -->
  <label for="state_id" class="control-label">Cita:</label>
        <select name="cita_id" class="form-control">
        <option disabled selected>Seleccione la cita(El numero despues de la fecha indica el numero de Paciente, si no está debe crear la cita) </option>
        <?php
        $getCitas =$mysqli->query("select * from citas where paciente_id= order by id");
        while($f=$getCitas->fetch_object()) {
          echo $f->id;
          echo $f->fecha;
          echo $f->hora;
          echo $f->paciente_id;

          ?>
         
          <option value="<?php echo $f->id; ?>"><?php echo $f->fecha." ".$f->hora." ".$f->paciente_id;?></option>
          <?php
        } 
        ?>
        </select>
        
    
    
    <br>
        <input type="reset" class="btn btn-danger">
         <button type="submit" class="btn btn-primary" >Guardar Tratamiento</button>
         
    
     </form>

</div>
</body>
@endsection
</html>
