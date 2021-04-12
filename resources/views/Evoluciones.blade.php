@extends('datospersonales')
@section('titulo','Evoluciones')




<style>
#datatable2{
  width: 700px;
  height: 60px;
  
  position: absolute;
    left:500px;
    top: 250px;

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



 #evolucion{

  width: 200px;
  height: 50px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff);
    position: absolute;
    top: 190px;
    left:990px;

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

  
  <!--Menu desplegable  -->


  <div id="" >
  <h3 style="text-align: center;
  padding: 1rem;
  font-size:30px; font-family: Times New Roman, Times, serif;  background-color: #98e6e6;
  color: #476b6b; position: absolute;
  top:60px; width: 700px; left:500px;
  
  "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-clockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
               </svg> 
               Evoluciones Medicas del Paciente</h3>
  @can('create',App\Evoluciones::class)
    <button  id="evolucion" type="button"  class="btn btn-outline-info" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/evolucion/nueva'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Nueva Evolucion </button>
   @endcan 
  </div>



<table id="datatable2" class="table table-hover">
          <thead>

          <th>Evoluciones Medicas</th>
          <th>Accion</th>
          </thead>
            <tbody>               
            <tr>
         
                <td>  
                @forelse ($pacientes->evoluciones as $tag)
                
               <h4> PlanTratamiento: {{ $tag->planestratamiento->tratamiento->categoria}} <br>
                Paciente:{{$pacientes->nombres}}  {{$pacientes->apellidos}} <br>
               {{ $tag->evolucion}} 
               </h4>
              
          

                         <hr> 
                 <hr>
                 @empty
                 No tiene ninguna Evolucion
                 @endforelse
                 
                    
                </td>

                <td>
                </td>

  
 </tr>
    
     </tbody>
</table>

<div class="modal-footer" style="position: absolute;
  left: 320px;
  width: 1070px;
  top: 750px; height:50px;
  background-color: #e6f9ff;">
                
                
              <a style="position: absolute;
  left: 830px; font-size:18px; font-family: Times New Roman, Times, serif; color:#7a7a52; " href="/">@Smile Software 2021</a>  

              @forelse($logotipos  as $tag)
    <img  class="logo" id="logo4"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" style="border-radius: 50%;
  position: absolute;
  left: 1005px;
  top: 0px;
  width: 40px;
  border-color: #33ccff , 2px;   height: 40px;" >
    @empty

    <img class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3"  style="border-radius: 50%;
  position: absolute;
  left: 1005px;
  top: 0px;
  width: 40px;
  border-color: #33ccff , 2px;   height: 40px;"  > 
    @endforelse 
              </div>

</div>





  
 
  

  
    
 


  

<body>

@endsection
