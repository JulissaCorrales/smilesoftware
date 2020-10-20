
@extends('Plantilla.Plantilla')
@section('Titulo','Agenda')

@section('contenido')

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
       width: 1000px;
       color: #ff4d4d;
       background-color: #A9E2F3;
       padding: 25px 25px 25px 25px;
     
      
     }

     #app{
      position:absolute;
            top: 250px;
            color: #ff4d4d;
            left: 300px;

           

     }

    

     #cal{
      color: #ff4d4d;
      border-color: #00BFFF;
      

     }

     #diaria{
    border-radius: 12px;
            width: 100px;
            background-color: #A9E2F3;
            font-size: 14px;
            border-color: #00BFFF;
            position: absolute;
            left: 100px;
        
}






#darcita{
    border-radius: 12px;
            width: 100px;
            background-color: #A9E2F3;
            font-size: 14px;
            right: 600px;
            border-color: #00BFFF;
            position: absolute;
            left: 250px;


}

#fecha{
    border-radius: 12px;
            width: 100px;
            background-color: #A9E2F3;
            font-size: 14px;
            border-color: #00BFFF;
            left: 100px;

        
        
        

}

 #navasdeBotones{
            width: 500px;
            background-color: #A9E2F3;
            font-size: 14px;
            left: 1000px;
            border-color: #00BFFF;
            position: absolute;
            right: 470px;


 }
   </style>
</head>
<body>
<!--
<div class="container"   >
<nav class="navbar navbar-light bg-light"  id="navasdeBotones" >
  <h5>Agenda</h5>
  <a type="button" class="btn btn-outline-info" id="diaria" href="/pantallainicio/pantallainicio/pantallainicio/calendar/citadiaria/citadiaria"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-day" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
</svg>Ver Cita</a>
  
  <button type="button" class="btn btn-outline-info" id="darcita"  data-toggle="modal" data-target="#create">Dar cita</button>
  <button type="button" class="btn btn-outline-info" id="fecha"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
  <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>Fecha</button>


</nav>


</nav>
-->

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
        right:  ''
       //initialView: 'basicWeek'
      
      },
      defaultView:'agendaWeek',
      height: "auto",
      allDaySlot: false,
      slotEventOverlap: false,
      timeFormat: 'HH:mm',

      events: self.events,

      dayClick: function(date)
	    {
            self.$dispatch('day::clicked', date);
            self.cal.fullCalendar('gotoDate', date.start);
            self.cal.fullCalendar('changeView', 'agendaDay');
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
        {
          title: 'Event1',
          start: '2017-10-10 12:30:00',
          end: '2017-10-13 16:30:00'
        },
        {
          title: 'Event2',
          start: '2017-10-07 17:30:00',
          end: '2017-10-07 21:30:00'
        }
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