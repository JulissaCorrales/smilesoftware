@extends('Plantilla.Plantilla2')
@section('titulo','Roles de Usuario')
@section('contenido')
@can('isAdmin')



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
   margin:1em;
   float:right;
   margin-right:18em;
   
 }


</style>
<body>
<div><p>  @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif</p></div><br><br>
<div class="container">

<div>
<button id="boton" type="button"class="btn btn-outline-info" data-toggle="modal" data-target="#nuevotratamiento" >crear rol <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-node-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5a.5.5 0 0 0-1 0v2h-2a.5.5 0 0 0 0 1h2v2a.5.5 0 0 0 1 0v-2h2a.5.5 0 0 0 0-1h-2v-2z"/>
        </svg></button>

<!-- modal para crear nuevo tratamiento -->
<div class="modal fade" id="nuevotratamiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="background-color:#26A69A;color:white">
        <h5 class="modal-title" id="exampleModalLabel">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
        <path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/>
        </svg>

        Creación de un Nuevo Rol De Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<form method="post" action="/rol/nuevo ">

    @csrf
   
    <div class="form-group">
        <label for="name">Nombre del Rol</label>
        <input type="text" class="form-control-file" name="name" id="name" placeholder="Ingrese el nombre del Rol">
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control-file" name="slug" id="slug" placeholder="Ingrese el slug" tag="slug">
    </div>

    <div class="form-group">
        <label for="permisos">Permisos</label>
        <input type="text" value="" data-role="tagsinput" name="roles_permisos" >
    </div>

    
    

   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='{{route('roles.ver')}}'" class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Guardar
                    </button>
                    
                   
                    </div>

    
    
    </form>


      </div>
    </div>
  </div>
</div>
<!--fin del modal-->
</div>

<!--  -->

<div>
<table id="datatable1" >
<thead class="table table-striped table-bordered">
  <tr id="can">
   
      <th id="thh2"  >Id</th>
      <th id="thh2"  > Roles</th>
      <th id="thh2"  >Slug</th>
      <th id="thh2"  > Permisos</th>
      <th id="thh2" colspan="3" > Tools</th>

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
                                <span class="badge badge-secondary" >
                                    {{ $permission->Permiso }}                                  
                                </span><br>
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
        <!-- editar -->
        <td><a  class="btn btn-outline-info"  href="{{route('rol.editar',$tag->id)}}"  id="lista"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a></td>
        <!-- Eliminar -->
        <td>
     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>
   
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

<script src="/js/bootstrap-tagsinput.js"></script>


<script>

$(document).ready(function(){
    $('#name').keyup(function(e){
        var str= $('#name').val();
        str = str.replace(/\W+(?!$)/g,'.').toLowerCase();
        $('#slug').val(str);
        $('#slug').attr('placeholder',str);

    });
});




</script>

  </td>

  
    </tr>
    @empty
    vacio
    @endforelse

    
  

  
 
  

  
    
  </div>

     
     </tbody>
</table>
  </div>


</div>



  

<body>
@endcan
@endsection