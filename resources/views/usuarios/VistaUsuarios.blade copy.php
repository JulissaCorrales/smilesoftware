@extends('Plantilla.Plantilla')

<!DOCTYPE html>
<html lang="en">
@section('titulo','Usuario')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--<link rel="stylesheet" href="/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.material.min.css">
    
    <style>

 td{
   border: 1px solid #009999;
  text-align: center;
  padding: 20px;
  text-align: left;
 /* background-color: #ccffff */
  
} 



 #lista:hover{
   border: 1px solid #FF4500;
   color: hotpink;
 

 }

 #can{
  background-color:#293d3d;
color: white;

 }

 #cue{
  border: #00cccc  2px solid;
 }

 #na{
  width: 900px;
  height: 60px;
    border-radius: 12px;
  background-image: linear-gradient(to top, #00cccc ,#a3c2c2 );
    position: absolute;
    top:150px;
    left:400px;
 

    
    
 }

#dd{
  position: absolute;
  top:230px;
  position: absolute; top: 230px; left: 400px; width: 900px;

  


}


#b1{
  position: absolute;
    top:300px;
    left:780px;

}

#b2{
  position: absolute;
    top:300px;
    left:1030px;
}

#b3{
  position: absolute;
    top:300px;
    left:1140px;

}

#dire{
  color: #4d4d4d;
  text-shadow: 1px 0 #ff9966, 0 1px #ff9966, 1px 0 #ff9966, 0 1px #ff9966; 
font-family: Times "New Roman", Times, serif;
  position: absolute;
            font-size:30px;
            top: 2px;
            left:10px;
}

#bo{
  
}



#d2{
    background-color: #ccffff;
  position: absolute;
            font-size:30px;
            top: 2px;
            left:10px;

}

#n1{
    background-color: #85e0e0;
  position: absolute;
  width: 170px;
  height: 45px;
  font-size:16px;
            top: 157px;
            left: 1100px;
color: #334d4d;

}

#control{
    background-color: #ccffff;
    position: absolute;
            top: 8px;
            left:550px;

}


</style>

</head>
@section('contenido')
@can('isAdmin')
<body>
    <div class="container" sytle=" background-color:#a2f6f6;">
    <nav class="navbar navbar-light bg-light" id="na"  sytle=" background-color:#a2f6f6;">
  <h1 id="dire" >Usuarios de la clinica</h1>

</nav>

</div>

<div class="" id="d1" >
  <a id ="n1" type="button" class="btn btn-outline-info" href="/pantallainicio/usuarios/nuevo">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>Nuevo usuario</a> </div>

@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
  
<div class="container" id="dd">
 <div class="list-group">
<table id="datatable"  class="table">
<thead class="table table-striped table-bordered">

  <tr id="can" >
    <th>Usuario</th>
    <th>Correo</th>
    <th>Roles</th>
    <th>Permisos</th>
   
    <th>Tools</th>
  </tr>
  </thead>
 
  <tbody>
  @forelse($usuarios as $usuario)
  
  <tr id="" {{ Auth::user()->id == $usuario->id  ?  'bgcolor=#c2d6d6' : ''}} >

    

     <td><img style="border-radius: 70%;" src='/Imagenes/{{$usuario->imagen}}' width="70px" height="70px" id="datosme">
     
    {{$usuario->name}}</td>
     <td>{{$usuario->email}}</td>

    <td> 
      @if($usuario->roles->isNotEmpty())
      @foreach ($usuario->roles as $role )
      <span class="badge badge-secondary" >
      {{ $role->Nombre }}                                    
      </span>

      @endforeach
      @endif
    </td>

    <td> 
    @if($usuario->permisos->isNotEmpty())
    @foreach ($usuario->permisos as $permiso )
    <span class="badge badge-secondary" >
    {{ $permiso->Permiso }}                                    
    </span>

    @endforeach
    @endif</td>


     
     <td style="width:;">
     <a type="button" class="btn btn-info" style="margin:6px;"  href="{{route('usuario.verusuario',$usuario->id)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
  </a>

  <a type="button" class="btn btn-success" style="margin:6px;" href="{{route('usuario.actualizar',$usuario->id)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>

  </a>

     <button type="button" class="btn btn-danger" style="margin:6px;" data-toggle="modal" data-target="#modal-{{$usuario->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>

  </button>

  </td>

  <!-- Modal -->
  <div class="modal fade" id="modal-{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
           <div class="modal-content" style="position:absolute; top:100px;">
              <div class="modal-header" style=" background-color:#293d3d; color:white;  height:100px;">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                  </svg> Eliminar Usuario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el usuario {{$usuario->name}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form method="post" action="{{route('usuario.borrar',['id'=>$usuario->id])}}">

                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger">
                  </form>
              </div>
          </div>
      </div>
  </div>

  </td>

  </div>

     </tr> 
     @empty
     <h1>No hay usuarios disponibles</h1>
     @endforelse

     </tbody>
</table>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    scrollY: "160vh",
  "aoColumnDefs": [ { "sWidth": "10%", "aTargets": [ -1 ] } ]
,

    language: {
        search: "Busqueda por nombre o correo:",
 "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "",
        "infoFiltered": "(Filtrado de _MAX_ total usuarios)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ usuarios",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": " <html><button>Siguiente</button></html>  ",
            "previous": " <html><button>Anterior </button></html>  "
        }
    }
});
} );
</script>

</div>
</div>
</body>
@endcan
@endsection

</html>