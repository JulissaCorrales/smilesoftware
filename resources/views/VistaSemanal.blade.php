
@extends('Plantilla.Plantilla')
@section('titulo','AgendaSemanal')

@section('contenido')
<?php 

try
{
  $mbd = new PDO('mysql:host=127.0.0.1;dbname=smilesoftware', "root", "");
  $sth= $mbd->query('select * from citas');
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

   /*    background: #cceeff; */
       width: 940px;
       color: #ff4d4d;
      
     
      /* padding: 25px 25px 25px 25px; */
     
      
     }

     #app{
      position:absolute;
            top: 100px;
            color: #ff4d4d;
            left: 400px;

           

     }

    

     #cal{
      color: #ff4d4d;
    

     }

     #did{
      position:absolute;
            top: 100px;
            color: #ff4d4d;
            left: 700px;
            border-color: #00BFFF;
       

            background-color: #ccffff;

     }

     #can{

      position:absolute;
            top: 100px;
            color: #ff4d4d;
            left: 900px;
            border-color: #00BFFF;
            font-size:10px;

width: 300px;
            background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);


     }

     #te{
      color: #ff4d4d;
      position:absolute;
      left: -10px;
      font-size: 20px;
      top: 5px;
      text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;
     }

     #cantidad{
      color: #ff4d4d;
      position:absolute;
   
      font-size: 25px;
     
left:480px;
      text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;

     }


     .fc-event{
      background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);
     


     }


    

     .fc table {
    
    
    font-size: 1em; /* normalize cross-browser */
  border: #00cccc  2px solid;
    
  }

  .fc th {
    text-align: center;
    border: #00cccc  2px solid;
  }
  .fc th,
  .fc td {
    vertical-align: center;
     border: #00cccc  2px solid;
    
height: 100px;
    
  }

  #formul{
    position:absolute;
            top: 250px;
            color: #ff4d4d;
            left: 1000px;
            border-color: #00BFFF;
            width: 320px; 
            height: 100px;

  }
    
   </style>
</head>
<body id="body">


<div id="can">

<h1 id="te">Cantidad de Citas:</h1>

</div>

<div id ="did">
 <h1 id="cantidad"></h1>
</div>

<div>





<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");

        ?>
      
    <div>


    


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
  

 <script>
function  vai()
{

  document.getElementById('doct').options[document.getElementById('doct').selectedIndex].text;
  
  
 // var texto = 
 // window.location.href= document.getElementById("doct").value;

  var combo = document.getElementById("doct");
var selected = combo.options[combo.selectedIndex].text;


/*var myOptions = document.getElementById ("doct").options;
            for (var i=0; i < myOptions.length; i++) {
                if(myOptions.text ==""){
                  alert ("bla bla bla")
                  return true
                }
                return false;
            }
    
    
  */
    



  /* Para obtener el texto 
var combo = document.getElementById("doct");
var selected = combo.options[combo.selectedIndex].text;
alert(selected); */


}





</script>




<div style="position:static;"  id='hijo'>
<div >
<!--@yield('cuerpo') -->
</div>


</div>
 
@endsection

</body>

</html>