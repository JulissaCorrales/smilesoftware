@extends('Plantilla.Plantilla')
@section('titulo','Especialidad Odontologo')
@section('contenido')



<style>
#datatable1{
  width: 800px;
  height: 60px;
  
  position: absolute;
    left:180px;
    top: 300px;

 }

 td{
   
   text-align: left;
   font-family: "Times New Roman";
   border-bottom: 5px solid #00cccc;
   width: 800px;
  height: 80px;
   
   
   
 } 


</style>
<body>

<table id="datatable1" class="container">
<thead class="table table-striped table-bordered">
  <tr id="can">
   
      <th id="thh2"  >
      Odontologo</th>

      <th id="thh2"  >
      Especialidades</th>

  </tr>
  </thead>
  <tbody>
  
        
        <tr>
        

        <td><h2>{{$odontologos->nombres}}  {{$odontologos->apellidos}}   </h2></td>

        <td>
        {{$odontologos->especialidad->Especialidad}} <br>
        @forelse ($odontologos->especialidadOdontologos as $tag) 
          
                    {{ $tag->especialidad->Especialidad}}
                    <hr>
                    @empty
                    vacio
                    @endforelse
        
        </td>

  
    </tr>
    
  

  
 
  

  
    
  </div>

     
     </tbody>
</table>



  

<body>

@endsection
