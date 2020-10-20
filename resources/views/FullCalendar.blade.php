<head>
   <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
   <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js"></script>
   <link rel='stylesheet' href='//fullcalendar.io/js/fullcalendar-3.6.2/fullcalendar.min.css'>
   <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js'></script>
   <script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js'></script>
   <script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/locale/en.js'></script>
   <script src='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.1/fullcalendar.min.js'></script>
   <script src='//cdnjs.cloudflare.com/ajax/libs/vue/1.0.22/vue.min.js'></script>
   <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
   <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.min.css">
   <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
 
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
 
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
   <link href='fullcalendar/main.css' rel='stylesheet' />
<script src='fullcalendar/main.js'></script>
<style>
     .comp-full-calendar {
       padding: 20px;
       background: #fff;
       max-width: 960px;
       margin: 0 auto;
     }
   </style>
</head>
<body>

  <div id="app" class="wrapper">
    <div class="comp-full-calendar test-fc" id="calendar"> 
     
      <calendar  :events="events" :editable="true"></calendar>
    </div>    
</div>

<script type="text/javascript">
Vue.component('calendar', {
  template: '<div></div>',

  ready: function()
  {



    var self = this;
    self.cal = $(self.$el);

    var args = {
      lang: 'de',
      header: {
        left:   'prev,next today',
        center: 'title',
        right:  'agendaWeek'
        //initialView: 'basicWeek'
      
      },
      height: "auto",
      allDaySlot: false,
      slotEventOverlap: false,
      timeFormat: 'HH:mm',
    

      events: self.events,


      dayClick: function(date)
	    {
            self.$dispatch('day::clicked', date);
            self.cal.fullCalendar('gotoDate', date.start);
            self.cal.fullCalendar('changeView', 'AgendaDay');
           
            
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

 
//muestra el calendario
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
});


</script>


</body>