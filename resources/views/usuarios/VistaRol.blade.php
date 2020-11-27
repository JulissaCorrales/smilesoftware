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

<div>
<a type="button" class="btn btn-danger" href="/rol/nuevo" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>
      Crear Rol
  </a>

</div>

<table id="datatable1" class="container">
<thead class="table table-striped table-bordered">
  <tr id="can">
   
      <th id="thh2"  >Id</th>

      <th id="thh2"  > Roles</th>
      <th id="thh2"  >Slug</th>
      <th id="thh2"  > Permisos</th>
      <th id="thh2"  > Tools</th>

  </tr>
  </thead>
  <tbody>
  
        
        <tr>
        @forelse ($rols as $tag) 
    
        <td>{{ $tag->id}} </td>
        <td>{{ $tag->nombreRol}} </td>
        <td>{{ $tag->slug}} </td>
        <td>permisoss</td>
        <td>

        <a type="button" class="btn btn-danger" href="{{route('rol.verroles',$tag->id)}}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>
      Ver
  </a>
        
        </td>

  
    </tr>
    @empty
                    vacio
                    @endforelse
        
    
  

  
 
  

  
    
  </div>

     
     </tbody>
</table>



  

<body>

@endsection