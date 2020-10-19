@include('FullCalendar')
<body>
  <div id="app" class="wrapper">
    <div class="comp-full-calendar test-fc">
      <calendar  :events="events" :editable="true"></calendar>
    </div>    
</div>


</body>