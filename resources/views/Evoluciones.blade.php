@extends('datospersonales')
@section('titulo','Evoluciones')




<style>
#datatable2{
  width: 900px;
  height: 60px;
  
  position: absolute;
    left:450px;
    top: 500px;

 }


 #datatable3{
  width: 500px;
  height: 60px;
  
  position: absolute;
    left:900px;
    top: 500px;

 }

 td{
   
   text-align: left;
   font-family: "Times New Roman";
   border-bottom: 5px solid #00cccc;
   width: 800px;
  height: 80px;
  
 } 

 #na2a2{
  width: 950px;
  height: 100px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);
    position: absolute;
    top:250px;width: 940px;
  
 }

 #dis1{

  width: 940px;
  height: 50px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);
    position: absolute;
    top:20px;
    left:0px;
  

 }

 #dis2{
  width: 940px;
  height: 50px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);
    position: absolute;
    top:80px;
    left:0px;



 }

 #evolucion{

  width: 200px;
  height: 50px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);
    position: absolute;
    top:1px;
    left:350px;

 }

 


</style>

<body>
@section('cuerpo')

@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
<div class="container">

    <nav class="navbar navbar-light bg-light" id="na2a2">
    <div id="dis1">
  <h1 id="dire1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v13h-1V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51L2 2.118V15H1V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zM0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
  <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
</svg>Evoluciones</h1>


</div>


  <!--Menu desplegable  -->


  <div id="dis2" >
  @can('create',App\Evoluciones::class)
    <button  id="evolucion" type="button"  class="btn btn-outline-info" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/evolucion/nueva'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Nueva Evolucion </button>
   @endcan 
  </div>
</nav>
</div>

<table id="datatable2">
            <thead>
            <tr>
                            
                             
                                                    
            </tr>
            </thead>
            <tbody>               
            <tr>
             <!--  <td>
                   @forelse ($pacientes->planestratamientos as $tag) 
                    <p>{{ $tag->id}}</p>
                    Plan de tratamiento: {{ $tag->tratamiento->categoria}}
                  
                    <hr>      
                    @empty
                    vacio
                    @endforelse 

                  
                </td> -->

               
                <td>  
                @forelse ($pacientes->evoluciones as $tag)
                PlanTratamiento: {{ $tag->planestratamiento->tratamiento->categoria}} <br>
                Paciente:{{$pacientes->nombres}}  {{$pacientes->apellidos}} <br>
               {{ $tag->evolucion}}
              
          

                         <hr> 
                 <hr>
                 @empty
                 No tiene ninguna Evolucion
                 @endforelse
                 

               
                  
                    
                </td>

  
 
  

  
    
  </div>

     
     </tbody>
</table>





  
 
  

  
    
 


  

<body>

@endsection
