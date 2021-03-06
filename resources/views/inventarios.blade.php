@extends('Plantilla.Plantilla')
@canany(['isAdmin','isSecretaria','isOdontologo'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventarios</title>
    <style>
#table{
}

td{
 border: 1px solid #00cccc;
 text-align: left;
 padding: 20px;
 text-align: left;
 background-color: #ccffff
} 



btn{
text-align: center;
}



#lista{
}

#lista:hover{
  border: 1px solid #FF4500;
  color: hotpink;
}

#can{
 background-color: #ffad33;
}

#cue{
 border: #00cccc  2px solid;
}

#na{
 width: 600px;
 height: 60px;
   border-radius: 12px;
   background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff); 
   position: absolute;
   top:250px;
   left:150px;  
}

#dd{
 position: absolute;
   top:250px;
   left:150px;
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
 color: #ff9933;
 text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;
 font-family: serif;
 position: absolute;
           font-size:30px;
           top: 2px;
           left:30px;
}

#bo{
 background-color: #ccffff;

}
</style>
</head>
@section('contenido')
<body>
<div class="container" id="dd">
<h2 align="center">Inventarios De la Clinica</h2><br><br>
      

<!-- Button trigger modal 
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Ingresar Inv por modal
</button>-->
@can('create',App\Inventario::class)
<button type="button" class="btn btn-success" onclick="window.location.href='/inventarionuevo'">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-dotted" viewBox="0 0 16 16">
  <path d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0H2.5zm2.292 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zm1.833 0h-.916v1h.916V0zm1.834 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0zm2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1V2.5zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 5.708v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 7.542v.916h1v-.916H0zm15 .916h1v-.916h-1v.916zM0 9.375v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .916v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458H0zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487zM.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029l-.194.981zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1h.458zm-9.625 0h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zm1.834-1v1h.916v-1h-.916zm1.833 1h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg>
  Ingresar Inventario
</button><br><br>
@endcan

@can('create',App\Inventario::class)
<li><a href="{{route('descargarPDFInventarios')}}" class="dropdown-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
  <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
</svg>  Descargar Inventario</a></li>
@endcan





 <div class="list-group">


<table id="datatable" class="table">
 <thead class="table table-striped table-bordered">
  <tr id="can">
     <th>Inventario</th>
     <th>Stock de Seguridad</th>
     <th>Stock de Actual</th>
     <th>Precio</th>
     <th>Accion</th>
  </tr>
  </thead>
  <tbody> 
       <tr>
       @forelse($inventarios as $inventario)
           <td>{{$inventario->producto}}</td>
           <td>{{$inventario->stockseguridad}}</td>
           <td>{{$inventario->stockactual}}</td>
           <td>{{$inventario->monto}}</td>
           <td>
           @can('update',$inventario)
               <a class="btn btn-warning " href="{{route('inventario.editar',['id'=>$inventario->id])}}">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
              Editar</a>
            @endcan 
            @can('delete',$inventario)
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$inventario->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
            </svg>
            Sacar Inventario
            </button>
            @endcan
            
 <!-- Modal -->
<div class="modal fade" id="modal-{{$inventario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
          </svg> Eliminar Inventario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el inventario {{$inventario->producto}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form method="post" action="{{route('inventario.borrar',['id'=>$inventario->id])}}">

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
     <td colspan="5"><h3>¡¡No hay Inventarios Existentes!!</h3></td>
     @endforelse
 <tbody>
  </table>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->


  </div>
  </div>



  

</body>

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Buscador de Inventario :"
    }
});
} );
</script>



@endcanany
@endsection
</html>