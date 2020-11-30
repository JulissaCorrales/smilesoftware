@extends('Plantilla.Plantilla')
@section('titulo','Roles de Usuario')
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
 #crear{
   margin:2em;
 }


</style>
<body>

<div class="container">
<div>
<a id="crear" type="button" class="btn btn-warning" href="/rol/nuevo" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
</svg>
      Crear Rol
  </a>
</div>

<!--  -->

<table id="datatable1" >
<thead class="table table-striped table-bordered">
  <tr id="can">
   
      <th id="thh2"  >Id</th>
      <th id="thh2"  > Roles</th>
      <th id="thh2"  >Slug</th>
      <th id="thh2"  > Permisos</th>
      <th id="thh2" colspan="2" > Tools</th>

  </tr>
  </thead>
  <tbody>
  
        
        <tr>
        @forelse ($rols as $tag) 
     
        <td><a  class="btn btn-outline-info"  href="{{route('rol.editar',$tag->id)}}"  id="lista">{{ $tag->id}}</a></td>
        <td>{{ $tag->Nombre}} </td>
        <td>{{ $tag->slug}} </td>
        <td>
          @if($tag->permisos !=null)
                                    
                                @foreach ($tag->permisos as $permission )
                                <span class"insignia-secundaria" >
                                    {{ $permission->Permiso }}                                    
                                </envergadura>
                                @endforeach
                            @endif
                          
                                
                               
        </td>
        <td>

        <a type="button" class="btn btn-primary" href="{{route('rol.verroles',$tag->id)}}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
        </svg>
              Ver
          </a>
        </td>
        <!-- Eliminar -->
        <td>
     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>
      Eliminar
  </button>

 <!-- <a href="#"  type="button" data-toggle="modal" data-target="#deleteModal" data-roleid="{{$tag['id']}}"></a>-->

  </td>

  <!-- Modal -->
  <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> Eliminar Rol</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el rol {{$tag->nombreRol}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form method="post" action="{{route('rol.borrar',['id'=>$tag->id])}}">

                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger">
                   </form>
               </div>
           </div>
       </div>
   </div>

  </td>

  
    </tr>
    @empty
    vacio
    @endforelse

    
  

  
 
  

  
    
  </div>

     
     </tbody>
</table>



</div>



  

<body>

@endsection