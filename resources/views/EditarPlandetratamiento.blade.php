@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Plan de Tratamiento</title>
    <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
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
    <h2>Editar Plan de Tratamiento</h2>
    <h4>Paciente # {{$pacientes->id}}</h4>


     <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
     <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

        <form method="post" action="{{route('plantratamiento.update',['id'=>$pacientes->id,'idplantratamiento'=>$plantratamientos->id])}}">
                      @csrf
                      @method('put')
                    <div class="form-group">
                    <select name="tratamiento_id" class="form-control" onchange="mostrarValor(this.options[this.selectedIndex].innerHTML); mostrarValor(this.value);">
                    <label for="nombreTratamiento">Nombre del Tratamiento:</label>
    
                    <option selected  value="{{$plantratamientos->tratamiento->id}}">@forelse ($pacientes->planestratamientos as $tag) 
                         Categoria Actual:{{$tag->tratamiento->categoria}}
        @empty
        @endforelse</option>
                        
                        @forelse ($tratamientos as $tag)
                        <option value={{$tag->id}} >{{$tag->categoria}}</option> 
                       
                        @empty
                        <option disabled selected> ¡¡La clinica todavia no tiene un tratamiento.!!Cree uno por favor</option>
                       
                        @endforelse 

            </select> 
                    </div>
                      <div class="form-group">
                            <label for="estado" class="control-label">Estado:</label>
                <select name="estado" id="estado" class="form-control" onchange="mostrarValor2(this.options[this.selectedIndex].innerHTML); mostrarValor2(this.value);">
                <option selected value="{{$plantratamientos->estado}}">Estado Actual:{{$plantratamientos->estado}}</option>
                <option >Activo</option>
                <option >Finalizado</option>
                </select>
                

  <!-- paciente -->
        <!--cita -->
  <label for="state_id" class="control-label">Cita:</label>
        <select name="cita_id" class="form-control" onchange="mostrarValor3(this.options[this.selectedIndex].innerHTML); mostrarValor3(this.value);">
        
        <option  value="{{$plantratamientos->cita->id}}" selected>Cita Actual:{{$plantratamientos->paciente->nombres}} {{$plantratamientos->paciente->apellidos}}  
         @forelse ($pacientes->citas as $tag) 
        {{$tag->stard}} Con el Doctor: {{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</option>
        @empty
       
        @endforelse

        @forelse ($pacientes->citas as $tag) 
        <option value="{{$tag->id}}">{{$pacientes->nombres}} {{$pacientes->apellidos}}{{$tag->stard}} Con el Doctor: {{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</option>
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

<<script>
    var mostrarValor = function(x){
            document.getElementById('input1').value=x;
            }
 
    var mostrarValor2 = function(x){
            document.getElementById('input2').value=x;
            }


            var mostrarValor3 = function(x){
            document.getElementById('input3').value=x;
            }
</script>
</body>
@endsection
</html>