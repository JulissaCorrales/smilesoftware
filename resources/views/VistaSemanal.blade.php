
@extends('Plantilla.dashboard')
@section('titulo','AgendaSemanal')

@section('content')


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
           <h4> <img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/calendario.png') }}"  id="logo1" width="3%;" height="3%"> <b>Agenda Semanal</b></h4>
 <p>En esta Sección  muestra las citas por semana y la cantidad de citas por semana que tiene el odontólogo</p></p>


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

@endcan

<h4 id="te" style=" margin-left:70%; margin-top:-5%; color:#004d4d;">Cantidad de Citas</h4>
<h4 id="cantidad" style="margin-left:77%; color:#004d4d; "></h4>
<br>


</div>


<body>



        <?php 

try
{
  $mbd = new PDO('mysql:host=127.0.0.1;dbname=smilesoftware', "root", "");
  $sth= $mbd->query('

SELECT p.nombres,p.apellidos , c.stard
FROM pacientes p
JOIN  citas c ON  p.id= c.paciente_id;');
  //foreach($sth as $fila){
  //echo $fila["odontologo_id"];
  //echo "<br>";
  //}


 $mos= $mbd->query('select odontologo_id, count(*) as cita
  from citas 
  group by odontologo_id');
 /* foreach($mos as $fila){
    echo $fila["odontologo_id"] . " " . $fila["cita"];
    echo "<br>";
    }
*/


  //$sth=array("Volvo","BMW","Toyota");
//echo  "hola" .count($sth);

  //$count= $mbd->query('select count(*) from citas');
  
  //echo "Total de Paciente". $count;

 

  //foreach($sth as $fila){
  // echo "paciente".$fila["hora"];
   // echo "<br>";

 // } 
//echo "conectado";
}
catch(Exception $e)
{
        echo "no conectado";
}

 ?>


<head>

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
<!-- idioma español para calendario-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/es.min.js"></script>
<!--  -->
  
<style>

.fc-event{
background-image: linear-gradient(to bottom,  #d1e0e0 ,#d1e0e0);
color:#1f2e2e;
height: 85px;
width: ;
border-color:white;
/*font-size: 12px; */
font-weight: 600;

}
.fc table {
font-size: ; /* normalize cross-browser */
/*border: #00cccc  1px solid; */

}

.fc tr{
height: 50px;
}
.fc th {
text-align: center;
background-image: linear-gradient(to bottom,  #f0f5f5 ,#f0f5f5);
/*border: #00cccc  2px solid; */
}

.fc th,
.fc td {
vertical-align: center;
/*border: #00cccc  2px solid; */
height: 50px;

}
.comp-full-calendar {

/*    background: #cceeff; */

font-size: px; 

/* padding: 25px 25px 25px 25px; */


}

#app{

font-size: px; 



}

</style>

</head>







<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");

        ?>
      
    <div>


    


  <div id="app" class="wrapper" >

    <div class="comp-full-calendar test-fc" id="calendar"> 
     
      <calendar  :events="events" :editable="true" id="cal"></calendar>
     
    </div>    
</div>

<script type="text/javascript" id="ve">
Vue.component('calendar', {
  template: '<div></div>',
  props: {
    events: {
      type: Array, 
      required: false
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
      cal: true
    }
  },

  ready: function()
  {



    var self = this;
    self.cal = $(self.$el);

    var args = {
      lang: 'es',
      header: {
        left:   'prev,next today',
        center: 'title' ,
        right:  ''
       //initialView: 'basicWeek'
      
      },
      defaultView:'agendaWeek',
      height: "auto",
      allDaySlot: false,
      slotEventOverlap: false,
      timeFormat:'HH:mm',
      
      
      
      events: self.events,

     /* dayClick: function(date)
	    {
            self.$dispatch('day::clicked', date);
            self.cal.fullCalendar('gotoDate', date.start);
            self.cal.fullCalendar('changeView', 'agendaDay');
      },
      */

       

      
      eventAfterAllRender: function (view) {
    // Count events
     var quantity = $('.fc-event').length;

      $("#cantidad").html(quantity);
},
         


      eventClick: function(event)
	    {
	    	    self.$dispatch('event::clicked', event);
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
    //print_r($fila);
    //echo "paciente".$fila["paciente_id"];
    //echo "<br>";

    {  
            title:"<?php echo"Paciente:". $fila["nombres"]; ?> ",
            start: "<?php echo $fila["stard"]; ?>",
            end: " "


/*
     
 */
    },
<?php
  }
 ?>
 /*
        {

          title: "Event1",
          start:  startDate,
          
        },

/*
        {

title: "Event3",
start: "2020-10-12 12:30:00",
end: "2020-10-13 16:30:00"
}, */

        /*
        {
          title: 'Event2',
         start: '2020-10-07 17:30:00',
          end: '2020-10-07 21:30:00'
        } */
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
  

 <script>







</script>

       
       
</div>







</body>
@include('darcita')<!-- esta seccion hace que funcione modal dar cita -->

@endsection

