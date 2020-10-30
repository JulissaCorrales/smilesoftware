
@extends('VistaMenuAgenda')
@section('Titulo','AgendaSemanal')

@section('cuerpo')
<?php 

try
{
  $mbd = new PDO('mysql:host=127.0.0.1;dbname=smilesoftware', "root", "");
  $sth= $mbd->query('select * from citas');

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

<html>

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
  
<style>

@import  '@fullcalendar/common/main.css';
 @import '@fullcalendar/daygrid/main.css';
 
     .comp-full-calendar {

       background: #cceeff;
       width: 940px;
       color: #ff4d4d;
       height: 1200px; 
       background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);

       padding: 25px 25px 25px 25px;
     
      
     }

     #app{
      position:absolute;
            top: 390px;
            color: #ff4d4d;
            left: 400px;

           

     }

    

     #cal{
      color: #ff4d4d;
      border-color: #00BFFF;
      

     }

     #did{
      position:absolute;
            top: 500px;
            color: #ff4d4d;
            left: 50px;
            border-color: #00BFFF;
            width: 320px; 
            height: 70px;
            background-color: #ccffff;

     }

     #can{

      position:absolute;
            top: 400px;
            color: #ff4d4d;
            left: 50px;
            border-color: #00BFFF;
            width: 320px; 
            height: 100px;
            background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);

     }

     #te{
      color: #ff4d4d;
      position:absolute;
      left: 50px;
      font-size:29px;
      top: 20;
      text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;
     }

     #cantidad{
      color: #ff4d4d;
      position:absolute;
      left: 150px;
      font-size:29px;
      top: 10;
      text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;

     }


     .fc-event{
      background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);
     


     }


    

     .fc table {
    border-top-color: #000066;
    
    font-size: 1em; /* normalize cross-browser */
    width: 900px; 
            height: 1100px;
  }

  .fc th {
    text-align: center;
    border-color: #000066;
  }
  .fc th,
  .fc td {
    vertical-align: top;
    border-color: #000066;
    padding: 2px;
    
  }
    
   </style>
</head>
<body id="body">


<div id="can">
<h1 id="te">Cantidad de Citas</h1>

</div>

<div id ="did">
 <h1 id="cantidad"></h1>
</div>

  <div id="app" class="wrapper">

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
        center: 'title',
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
      args.editable = true;
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
      args.droppable = true;
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
          title:"<?php echo "paciente". $fila["paciente_id"]; ?>",
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

<div style="position:static;"  id='hijo'>
<div >
<!--@yield('cuerpo') -->
</div>


</div>

@endsection

</body>

</html>