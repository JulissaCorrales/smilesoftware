@extends('datosPersonales')
@section('cuerpo')
<!DOCTYPE html>
<html lang="en">
@section('titulo','Editar Cita Indivual del Paciente')
<head>
    <meta charset="UTF-8">
    <style>
   
    #padre{
        padding:2em;
        margin:1em;
        font-family: georgia; 
    }
    #titulo{
        font-family: georgia;
        text-align:center;
    }
    #nombrePaciente{
        font-family: georgia;
        text-align:center;
    }
    #formulario{
        padding:2em; 
        background-image: linear-gradient(to left,  #AFEEEE,#00FF99); 
        text-align:center;
    }
    #botonatras{
        background-color:#CC00FF;
    }
    </style>
</head>
<body>
    <div class="container" id="padre">
    <!--  ggg-->
    <h3 id="titulo">Edición de la Cita del Paciente:</h3>
    <h2 id="nombrePaciente">{{$pacientes->nombres}} {{$pacientes->apellidos}}</h2>
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
    <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
    <!-- Formulario -->
    <form id="formulario" method="post" action="{{route('citaindividual.update',['id'=>$citas->paciente->id,'citaid'=>$citas->id])}} "  enctype="multipart/form-data">   
     
    @csrf
    @method('put')
       
        <!-- Doctor -->
        <label for="state_id" class="control-label">Doctor y su especialidad:</label>
        <select name="odontologo_id" class="form-control">
       
        <option value="{{$citas->odontologo->id}}" selected >Odontologo Actual: {{$citas->odontologo->nombres}}  {{$citas->odontologo->apellidos}}</option>
    
        <?php
        $getDoctor =$mysqli->query("select * from odontologos order by id");
        while($f=$getDoctor->fetch_object()) {
          echo $f->id;
          echo $f->nombres;
          echo $f->apellidos;
          echo $f->especialidad_id;

          ?>
         
          <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos?>
          || Especialidad: {{$citas->odontologo->especialidad->Especialidad}}</option>
          <?php
        } 
        ?>
        </select>
        <hr>
       <!-- Duracion-->
       <label for="duracionCita" class="control-label">Duracion de la cita:</label>
        <select name="duracionCita" id="duracionCita" class="form-control">
        <option selected value="{{$citas->duracionCita}}">Duracion Actual: {{$citas->duracionCita}}</option>
        <option value="10m">10 minutos</option>
        <option value="15m">15 minutos</option>
        <option value="20m">20 minutos</option>
        <option value="30m">30 minutos</option>
        <option value="40">40 minutos</option>
        <option value="50m">50 minutos</option>
        </select>
        <br>
        <label for="hora" class="control-label">Fecha y Hora:</label>
        <option   selected >Fecha y Hora Actual: {{$citas->stard}}</option>
        <input  name="stard" id="hora" value="{{$citas->stard}}" >
        <hr>
         <div>
         <!-- comentario -->
         <label for="comentarios" id="comentariolabel"class="control-label">Comentarios:</label>
         <br>
         <option  disabled selected >Comentario Actual: {{$citas->comentarios}}</option>
         <input value="{{$citas->comentarios}}" type="text" name="comentarios" id="comentarios" placeholder="Edita aquí"> 
         </div>
        <br>
        @can('viewIndividual',App\Cita::class)
        <button id="botonatras" class="btn btn-secondary" type="button" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/citaindividual'" data-dismiss="modal" >
          Atrás
        </button>
        @endcan
        <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
          Continuar
        </button>
      
        
        
        </form>
    <!-- ggg -->
    </div>
</body>
</html>
@endsection






