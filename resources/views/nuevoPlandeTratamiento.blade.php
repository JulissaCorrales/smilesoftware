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
    border: 5px solid gray;
    background-color: #b3cccc;
position:absolute;
left: 400px;
width: 800px;
top: 100px;
    }
    h2{
      text-align:center;
    }
  
    </style>
    
</head>
@section('cuerpo')
<body>

    @section('cuerpo')
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
    <div id="todo">
    <h2>Creación de Nuevo Tratamiento</h2>
    <h4>Paciente # {{$pacientes->id}}</h4>


     <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
     <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

        <form method="post" action="">
                      @csrf
                    <div class="form-group">
                    <label for="nombreTratamiento">Nombre del Tratamiento:</label>
                    <select required name="tratamiento_id" class="form-control">
                    <label for="nombreTratamiento">Nombre del Tratamiento:</label>
                        <option value="" disabled selected>Seleccione el Nombre del Tratamiento</option>
                        
                                @forelse ($tratamientos as $tag) 
                                <option value={{$tag->id}} >{{$tag->categoria}} </option>
                                @empty
                                <option disabled selected> ¡¡La clinica todavia no tiene un tratamiento.!!Cree uno por favor</option>
                               
                                @endforelse 


                     
                    </select>
                          <!-- <label for="nombreTratamiento">Nombre del Tratamiento:</label>
                          <input type="text" class="form-control-file" name="nombreTratamiento" id="nombreTratamiento" placeholder="ingresar nombre del tratamiento"> -->
                    </div>

                      <div class="form-group">
                            <label for="estado" class="control-label">Estado:</label>
                <select required name="estado" id="estado" class="form-control">
                <option value="" disabled selected>Seleccione el estado del tratamiento</option>
                <option >Activo</option>
                <option >Finalizado</option>
                </select>
                

  <!-- paciente -->
        <!--cita -->
  <label for="state_id" class="control-label">Cita:</label>
        <select required name="cita_id" class="form-control">
        <option value="" disabled selected>Seleccione la cita </option>
        @forelse ($pacientes->citas as $tag) 
        <option value={{$tag->id}} >{{$tag->stard}} Con el Doctor: {{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</option>
        @empty
        <option disabled selected>¡¡Todavia no tiene una cita!! Asignele una por favor.</option>
        todavia no tiene una cita
        @endforelse
        </select>

        
    
    
    <br>
    <button style="background-color:purple"type="button" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/plandetratamiento'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
        <input type="reset" class="btn btn-danger">
         <button type="submit" class="btn btn-primary" >Guardar Tratamiento</button>
       
        
     </form>

</div>
</body>
@endsection
</html>