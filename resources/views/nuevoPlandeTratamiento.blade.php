@extends('Plantilla.datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Plan de Tratamiento</title>
    
    
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

<div class="card mb-3">
    <div class="card-header">
    <h3>Creación de Plan de Tratamiento</h3>
    <h4>Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}}</h4>
    </div>

     <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
     <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
<div class="card-body">
        <form method="post" action="">

                      @csrf
                    <div class="row" >
                      <div class="col-md-10" >
                    <label for="nombreTratamiento">Nombre del Tratamiento:</label>
                    <select required name="tratamiento_id" class="form-control">
                        <option value="" disabled selected>Seleccione el Nombre del Tratamiento</option>
                        
                                @forelse ($tratamientos as $tag) 
                                <option value={{$tag->id}} >{{$tag->categoria}} </option>
                                @empty
                                <option disabled selected> ¡¡La clínica todavia no tiene un tratamiento.!!Cree uno por favor</option>
                               
                                @endforelse 

                    </select>
                     
                    </div></div>

                      <div class="row" >
                      <div class="col-md-10" >
                            <label for="estado" class="control-label">Estado:</label>
                <select required name="estado" id="estado" class="form-control">
                <option value="" disabled selected>Seleccione el estado del tratamiento</option>
                <option >Activo</option>
                <option >Finalizado</option>
                </select>
                </div></div>

  <!-- paciente -->
        <!--cita --><div class="row" >
                      <div class="col-md-8" >
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
                        </div>
                        <div class="col-md-2" >
                        @can('create',App\Cita::class)
                                    <button  type="button" style="margin:3em;"class="btn btn-outline-info" id="darcita" style="background-color:#1687a7; color:white; "  data-toggle="modal" data-target="#create" >  
                                    <svg width="15" height="15" viewBox="0 0 16 16" class="bi bi-calendar2-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5c0-.276.244-.5.545-.5h10.91c.3 0 .545.224.545.5v1c0 .276-.244.5-.546.5H2.545C2.245 5 2 4.776 2 4.5v-1zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z"/>
                                    </svg>
                                    Agendar Cita </button>
                                    @endcan
                        </div>
        
    
    <div class="modal-footer">
    <br>
    <button type="button" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/plandetratamiento'"class="btn btn-outline-secondary" data-dismiss="modal">Atrás</button>
        <input type="reset" class="btn btn-outline-danger">
         <button type="submit" class="btn btn-outline-primary" >Guardar Tratamiento</button>
       
        </div>
     </form>

</div>
</div>
</body>

</html>
@include('darcita')
@endsection