
@extends('Plantilla.dashboard')


@section('titulo','Calendario')

@section('content')


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- modal -->
  <!--  -->
  <!--Estos son  Importante -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>

  <!-- este es importante -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
  <!-- Este Tambien es Importante -->
  <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
  <!-- Este tambien es importante -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
  <!-- Fecha -->
  <!-- fecha -->
<script src='{{asset("vendor/moment.min.js")}}'></script>
  <!-- idioma -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/es.min.js"></script>
  <!--  -->

   <?php 
  try
  {
  $mbd = new PDO('mysql:host=127.0.0.1;dbname=smilesoftware', "root", "");
  $sth= $mbd->query('select * from citas');
  }
  catch(Exception $e)
  {
  echo "no conectado";
  }
  ?>
<!--  -->

<style>
#calendar {

width: 90%;
margin-top:5%;
margin-bottom:0;
/* margin-right:; */
margin-left:5%;
/*padding: 9px 9px 9px 9px;  */
background: url("/imagenes/fond.jpg");
background-repeat: no-repeat;
/*background-image: linear-gradient(to top, #00cccc ,#e6ffff );*/
background-position: center center;
  background-size: cover;
/*font-size: 100%; */
font-size: 15px;

}

.fc table {
width: 100%;

border-spacing: 0;
/*font-size: 105%; */ /* normalize cross-browser */
  
}
.fc th {
text-align: center;
background-color:#c1d7d7;



}
.fc th,
.fc td {
vertical-align: top;
padding: 0;
/*border: #00cccc  2px solid; */

}



#app{
color: #ABEBC6;
  


}
#cal{
color: #343a40;
border-color: #b3ffff;


}


.fc-event{
background-image: linear-gradient(to bottom,  #d1e0e0 ,#d1e0e0);
color:#1f2e2e;
border-color:white;
height: 64px;
font-weight: 600;


}
   textarea{  
        display:block;
        box-sizing: padding-box;
        overflow:hidden;
        width:300px;

        border-radius:6px; 
      }
      #comentarios{margin-left:2em;
      margin-right:2em;}

</style>


</head>
<div class="container">
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
<div class="card mb-3">
          <div class="card-header">
           <h4> <img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/calendario.png') }}"  id="logo1" width="3%;" height="3%"> <b>    Agenda</b></h4>
 <p>En esta sección se muestra un calendario, al dar click se podrá agendar una cita también tiene las opciones:Citas, ver citas semanales, Dar cita y descargar la cita en un archivo Pdf.</p>



  @can('view', App\Cita::class)
  <a type="button" class="btn btn-info" href="/pantallainicio/calendario/citadiaria" style="  color:white; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-day" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
</svg>Citas</a>

@endcan



@can('view3', App\Cita::class)
  <a type="button" class="btn btn-info" href="/pantallainicio/calendario/semanal" style=" color:white; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
</svg>Semanal</a>

@endcan


@can('create', App\Cita::class)
  <a type="button" class="btn btn-info" data-toggle="modal" data-target="#create" style=" color:white; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
  <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>Dar Cita</a>
@endcan


@can('DescargarCitas',App\Cita::class)
  <a type="button"  href="/pdfcitasimpresion"class="btn btn-info"style=" color:white; "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
<path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
</svg>Descargar Citas</a>
</div>

@endcan



<body>



@canany(['isAdmin','isSecretaria','isOdontologo'])
<div class="container">

</div>
<div  id="app">
  <div>
    <div   id="calendar"> 
        <calendar  :events="events" :editable="true" id="cal"></calendar>
    </div> 
  </div>
  
</div>
<!-- Modal -->
<div class="modal"  id="modalejemplo" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#276678;color:white">
        <h5 class="modal-title" >
        <svg width="2em" height="2em" color="white" viewBox="0 0 16 16" class="bi bi-file-ruled" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6H6v2h7V7zm0 3H6v2h7v-2zm0 3H6v2h6a1 1 0 0 0 1-1v-1zm-8 2v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2z"/>
      </svg>
        Agendar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
      <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
  
       <?php $odontologos=App\Odontologo::all();?>
				<form method="post"  action="/darcita">
        @csrf
       
        <!-- Doctor -->
        <label for="state_id" class="control-label">Doctor y su especialidad:</label>
        <select required  name="odontologo_id" class="form-control">
        <option value="" disabled selected>Seleccione un Doctor</option>
        
           @forelse($odontologos as $odontologos)
         <option value="{{$odontologos->id}}">
         {{$odontologos->nombres}}  {{$odontologos->apellidos}}
          --|Especialidades:
                   @forelse ($odontologos->especialidades as $tag) 
                    {{ $tag->Especialidad}},
                    <hr>
                    @empty
                    @endforelse
          </option>
              @empty
          No hay odontologo.¡¡Cree uno por favor!!
          @endforelse
      
        </select>
        
       <!-- Duracion (en duda)-->
        <div class="row">
          <div class="col-md-6">
              <label for="duracionCita" class="control-label">Duración de la cita:</label>
              <select required name="duracionCita" id="duracionCita" class="form-control">
              <option value="" disabled selected>Seleccione la duración de la cita</option>
              <option value="10m">10 minutos</option>
              <option value="15m">15 minutos</option>
              <option value="20m">20 minutos</option>
              <option value="30m">30 minutos</option>
              <option value="40">40 minutos</option>
              <option value="50m">50 minutos</option>
              </select>
          </div>
          <div class="col-md-6">
           <label for="hora" class="control-label">Fecha y Hora:</label>
        <input required type="datetime-local"  name="stard" id="stard">
          </div>
        
        </div>
        
        <!-- Paciente_id -->


          
        <label for="state_id" class="control-label">Paciente:</label>
        <div class="row">
          <div class="col-md-10"> 
            <select required name="paciente_id" id="paciente_id" class="form-control">
            <option value="" disabled selected>Seleccione el paciente</option>
            <?php
            $getPaciente =$mysqli->query("select * from pacientes order by id");
            while($f=$getPaciente->fetch_object()) {
            echo $f->nombres;
            echo $f->apellidos;
            ?>
            <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos;?></option>
            <?php
            } 
            ?>
            </select>
          </div>
          <div class="col-md-2">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <button type="button"  class="btn btn-outline-info form-control" data-toggle="modal" data-target="#npaciente">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
              <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
                </button> 
          </div>
                 
    
        </div>
        <div class="container">
          <!-- comentario -->
          <label for="comentarios" id="comentariolabel" class="control-label">Comentarios:</label>
          <textarea class='autoExpand' cols="40"  rows='3' data-min-rows='3'class="form-control" required type="text" name="comentarios" id="comentarios" placeholder="Escriba el comentario sobre el paciente aquí"></textarea>
        
        </div>
        <!-- boton continuar -->
        <div class="container-fluid h-100"> 
        <div class="row w-100">
            <div class="col v-center">
                  <button id="botonContinuar" style="margin:1em;" type="submit"class="btn btn-primary d-block mx-auto" data-toggle="modal" >
                    Continuar
                  </button>
            </div>  
        </div>


    </div>

      
      
        
        
        </form>
      
       
        </div>
      </div>
      </div>
      </div>
      </div>
        
        
       
<!--  -->

<?php $pacientes=App\Paciente::all();?>

<script type="text/javascript" id="ve">

Vue.component('calendar', {
template: '<div></div>',
props: {
events: {
type: Array, 
required: true
},

editable: {
type: Boolean,
required: false,
default: false
},

droppable: {
type: Boolean,
required: false,
default: false
},
},

data: function()
{
return {
cal: null
}
},

ready: function()
{



var self = this;
self.cal = $(self.$el);

var args = {
lang: 'de',
header: {
left:   'prev,next today',
center: 'title',
right:  '',

//initialView: 'basicWeek'

},

defaultView:'month',
height: "auto",
allDaySlot: false,
slotEventOverlap: false,
timeFormat: 'HH:mm',
events: self.events,
  monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
    dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],


dayClick: function(date)
{
  $("#modalejemplo").modal();
  $('#stard').val(moment(date).format('YYYY-MM-DDThh:mm'));


// self.$dispatch('day::clicked', date);
// self.cal.fullCalendar('gotoDate', date.start);
// self.cal.fullCalendar('changeView', 'agendaDay');
},
eventColor: '#F7DC6F',



eventClick: function(event)
{

self.$dispatch('event::clicked', event);
window.open("{{route('cita.diaria')}}");
console.log(event)
}
}

if (self.editable)
{
args.editable = false;
args.eventResize = function(event)
{
self.$dispatch('event::resized', event);
}

args.eventDrop = function(event)
{
self.$dispatch('event::dropped', event);
}
}

if (self.droppable)
{
args.droppable = false;
args.eventReceive = function(event)
{
self.$dispatch('event::received', event);
}
}

this.cal.fullCalendar(args);

}

})

new Vue({
el: '#app',

data: {    
events: [
<?php
foreach($sth as $fila){
?>
{
title:"<?php echo "Cita:" ." ".$fila["id"];?>"  ,
 start: "<?php echo  $fila["stard"]; ?>", 

end: " " 

},
<?php
}
?>
]
},

events: {
'day::clicked': function(date)
{
console.log(date);
}
}
})


</script>




@include('darcita')
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

</div>



</div>



@endSection
@endcanany


