@extends('Plantilla.Plantilla')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamientos</title>
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
   top:400px;
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
<nav>
<a class="navbar-brand" href="/tratamientonuevo/">Nuevo Tratamiento</a>


</nav>

    <div>
<table id="datatable" class="table">
<thead class="table table-striped table-bordered">
  <tr id="can">
     <th>id</th>
    <th >Categoria</th>
    <th>Tipo</th>
    <th>Acciones</th>
  </tr>
  </thead>
  
  <tbody>
  <tr>
      @forelse($tratamientos as $tratamiento)
      <td><a  class="btn btn-outline-info"  href="/tratamiento/{{ $tratamiento->id}}/producto"  id="lista">{{$tratamiento->id}}</a></td>
     <td>{{$tratamiento->categoria}}</td>
     <td>{{$tratamiento->tipo}}</td>
     <td>
     
       <a class="btn btn-warning " href="{{route('tratamiento.editar',['id'=>$tratamiento->id])}}">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            Editar</a>


     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tratamiento->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
     <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
     </svg>
      Eliminar
      </button>
     </td>
<!-- Modal -->
<div class="modal fade" id="modal-{{$tratamiento->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
          </svg> Eliminar Tratamiento</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el tratamiento {{$tratamiento->categoria}} {{$tratamiento->tipo}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form method="post" action="{{route('tratamiento.borrar',['id'=>$tratamiento->id])}}">

                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger">
                  </form>
              </div>
          </div>
      </div>
  </div>










</tr>
@empty
     <h1>No hay Tratamientos Existentes</h1>
     @endforelse
<tbody>
</table>
</div>



</body>

@endsection
</html>