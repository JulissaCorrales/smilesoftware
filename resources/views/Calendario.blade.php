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
       width: 500px;
       color: #ccf2ff;
       background-color: #ccf2ff;
       padding: 25px 25px 25px 25px;
     
      
     }

     #app{
      position:absolute;
            top: 250px;
            color: #ff4d4d;
            right: 900px;
           

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
            right: 800px;
        
}

#semanal{
    border-radius: 12px;
            width: 100px;
            background-color: #A9E2F3;
            font-size: 14px;
            border-color: #00BFFF;
            position: absolute;
            right: 690px;
        

}


#mensual{
    border-radius: 12px;
            width: 100px;
            background-color: #A9E2F3;
            font-size: 14px;
            border-color: #00BFFF;
            position: absolute;
            right: 580px;

            

}

#darcita{
    border-radius: 12px;
            width: 100px;
            background-color: #A9E2F3;
            font-size: 14px;
            right: 600px;
            border-color: #00BFFF;
            position: absolute;
            right: 470px;


}

#fecha{
    border-radius: 12px;
            width: 100px;
            background-color: #A9E2F3;
            font-size: 14px;
            border-color: #00BFFF;
        
        

}
     </style>

</head>
<body>
<div class="container"  id="conte" >
<nav class="navbar navbar-light bg-light"  id="navasdeBotones" >
  <h5>Agenda</h5>
  <button type="button" class="btn btn-outline-info" id="diaria" onClick="location.href='/pantallainicio/calendario/citadiaria'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-day" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
</svg>Diaria</butoon>
  <button type="button" class="btn btn-outline-info" id="semanal"onClick="location.href='/pantallainicio/calendario/calendar'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
</svg>Semanal</button>
  <button type="button" class="btn btn-outline-info"  id="mensual"onClick="location.href='/vistamensual'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-month" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M2.56 11.332L3.1 9.73h1.984l.54 1.602h.718L4.444 6h-.696L1.85 11.332h.71zm1.544-4.527L4.9 9.18H3.284l.8-2.375h.02zm5.746.422h-.676V9.77c0 .652-.414 1.023-1.004 1.023-.539 0-.98-.246-.98-1.012V7.227h-.676v2.746c0 .941.606 1.425 1.453 1.425.656 0 1.043-.28 1.188-.605h.027v.539h.668V7.227zm2.258 5.046c-.563 0-.91-.304-.985-.636h-.687c.094.683.625 1.199 1.668 1.199.93 0 1.746-.527 1.746-1.578V7.227h-.649v.578h-.019c-.191-.348-.637-.64-1.195-.64-.965 0-1.64.679-1.64 1.886v.34c0 1.23.683 1.902 1.64 1.902.558 0 1.008-.293 1.172-.648h.02v.605c0 .645-.423 1.023-1.071 1.023zm.008-4.53c.648 0 1.062.527 1.062 1.359v.253c0 .848-.39 1.364-1.062 1.364-.692 0-1.098-.512-1.098-1.364v-.253c0-.868.406-1.36 1.098-1.36z"/>
</svg>Mensual</button>
  <button type="button" class="btn btn-outline-info" id="darcita"  data-toggle="modal" data-target="#create" >Dar cita</button>
  <button type="button" class="btn btn-outline-info" id="fecha"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
  <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>Fecha</button>



</nav>

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
      defaultView:'month',
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
@yield('cuerpo')
</div>


</div>
@include('darcita')
@endsection

</body>