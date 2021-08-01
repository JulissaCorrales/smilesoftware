@extends('Plantilla.datosPersonales')
@section('cuerpo')
<!DOCTYPE html>
<html lang="en">
@section('titulo','Editar Cita Indivual del Paciente')
<head>
    <meta charset="UTF-8">
 <!--   <style>
   textarea{  
        display:block;
        box-sizing: padding-box;
        overflow:hidden;
        width:100%;
        border-radius:6px; 
      }
    #padre{
        padding:2em;
        margin:1em;
        font-family: georgia; 
position:relative;
width:auto;
border: 2px solid gray;



    }
    #titulo{
        font-family: georgia;
        text-align:center;
font-size:30px;
background-color:#293d3d;
color:white;
    }
    #nombrePaciente{
        font-family: georgia;
        text-align:center;
font-size: 25px;
color:#b33c00;
background-color:#009999;
    }
    #formulario{
        padding:2em; 
        
        text-align:center;
    }
    #botonatras{
        background-color:#CC00FF;
    }
    </style>-->
</head>
<body>
    
    <div>
<div>@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                </li>
            @endforeach
         
        </ul>
        
    </div>
@endif</div>
</div>


<div class="card" id="padre">
        <div class="card">
                <div id="dd" class="card-header" style=" background-color:#276678; color:white;">
                    <!--  ggg-->
                    <h3 id="titulo"> <img  src="{{ asset('Imagenes/editar.png') }}"   width="7%;" height="7%">Edición de la Cita del Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}} </h3>
                    </div>
                    <div class="card-body">
                    <?php
                        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                        $mysqli->set_charset("utf8");
                    ?>
                    <!-- Formulario -->
                    <form id="formulario" method="post" action="{{route('citaindividual.update',['id'=>$citas->paciente->id,'citaid'=>$citas->id])}} "  enctype="multipart/form-data">   
                    
                    @csrf
                    @method('put')
                    <div class="row">

                
                          <div class="col-md-6">
                                <!-- Doctor -->
                                <label for="state_id" class="control-label"><b>Doctor y su especialidad:</b></label>
                                <select required name="odontologo_id" class="form-control">
                                
                                    <option value="{{$citas->odontologo->id}}" selected ><b>Odontologo Actual: </b>{{$citas->odontologo->nombres}}  {{$citas->odontologo->apellidos}}</option>
                                
                                    <?php $odontologos=App\Odontologo::all();?>
                                    @foreach($odontologos as $odontologo)
                                    <option value=" {{$odontologo->id}}">
                                
                                        {{$odontologo->nombres}}  {{$odontologo->apellidos}} |
                                        Especialidades:  @foreach($odontologo->especialidades as $especialidadodontologo)
                                        {{$especialidadodontologo->Especialidad}}, 
                                        @endforeach
                                    </option>
                                    @endforeach
                                    </select>
                                    <hr>
                                    </div>
                            <div class="col-md-6">
                                    <!-- Duracion-->
                                    <label for="duracionCita" class="control-label"><b>Duración de la cita:</b></label>
                                        <select required name="duracionCita" id="duracionCita" class="form-control">
                                        <option selected value="{{$citas->duracionCita}}">Duración Actual: {{$citas->duracionCita}}</option>
                                        <option value="10m">10 minutos</option>
                                        <option value="15m">15 minutos</option>
                                        <option value="20m">20 minutos</option>
                                        <option value="30m">30 minutos</option>
                                        <option value="40">40 minutos</option>
                                        <option value="50m">50 minutos</option>
                                        </select>
                                       </div> 
                            </div>
                            <div class="row">
                                     <div class="col-md-6">
                                        <label for="hora" class="control-label"><b>Fecha y Hora:</b></label>

                                      <input class="form-control"type="datetime" required name="stard" id="hora" value="{{$citas->stard}}" >
                                            <br>
                                        <option   selected >Fecha y Hora Actual: {{$citas->stard}} </option>
                                       
                                        <hr>
                                    </div>
                            
                                     <div class="col-md-6">
                    
                                    <!-- comentario -->
                                    <label for="comentarios" id="comentariolabel"class="control-label"><b>Comentarios:</b></label>
                                    <br>
                                    <!-- <option  disabled selected >Comentario Actual: {{$citas->comentarios}}</option> -->
                                    <textarea required  value="{{$citas->comentarios}}" type="text" name="comentarios" id="comentarios" class='autoExpand'  rows='3' data-min-rows='3'>{{$citas->comentarios}}</textarea>
                                    </div>
                        
                            </div>
                </div>
                        <div class="container">
                            <div class="modal-footer">
                                @can('viewIndividual',App\Cita::class)
                                <button id="botonatras" class="btn btn-secondary" type="button" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/citaindividual'" data-dismiss="modal" >
                                Atrás
                                </button>
                                @endcan
                                 <button type="reset" class="btn btn-danger"  >Restablecer</button>
                                <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                                Continuar
                                </button>
                            </div>
                        </div>
                        
                        
                        </form>
                    <!-- ggg -->
    </div>
</div>
</body>
<!-- script para que textarea de cita se adecue al texto que se va ingresando -->
<script>
// Applied globally on all textareas with the "autoExpand" class
$(document)
    .one('focus.autoExpand', 'textarea.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', 'textarea.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
        this.rows = minRows + rows;
    });
</script>
<!--  -->
</html>
@endsection






