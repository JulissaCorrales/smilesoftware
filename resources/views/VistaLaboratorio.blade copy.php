@extends('Plantilla.Plantilla2')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorios</title>
    <style>
#table{width: 100%;
   text-align:center;
}
td{
 border: 1px solid #4c4d4d;
 text-align: left;
 padding: 20px;
 text-align: left;
 background-color: #bebebe
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
  width: 950px;
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
#padre{
    width:auto;
    margin: 5rem;
    padding: 2rem;
    border: 2px solid #ccc;
}
#divhijo1{
        position: relative;
    } 

    * {
  margin: 0;
  padding: 0;
}









#dd{
 position: absolute;
   top:110px;
   left:90px;

}

#titulo{
font-weight: bold; 
  font-style: italic;
border-style: outset;
background-color: #57ECC7
}

#botonN{ margin: 1em;
}

#internoC{background-color:#57EC7F }
</style>
</head>
@section('contenido')
<body style="background-image: url('../assets/img/fondo lab.jpg');">
@if ($errors->any())
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
@endif
    
    <div  class="container" id="dd">
<h3 style='text-align:center;' id="titulo" >Laboratorios</h3>
 <div class="list-group">
 

    <div class="buttons" id="botonN">

        <div class="container">
        @can('create',App\Laboratorio::class)
            

        <button id="internoC" type="button"class="btn btn-outline-info" data-toggle="modal" data-target="#nuevoLab" ><span id="interno"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
</svg>Nuevo Laboratorio</span>
        </button>

        <!-- modal para crear nuevo laboratorio -->
<div class="modal fade" id="nuevoLab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="background-color:#26A69A;color:white">
        <h5 class="modal-title" id="exampleModalLabel">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
        <path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/>
        </svg>

        Creación de un Nuevo Laboratorio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <form method="post" action="/laboratorioNuevo">
                      @csrf
                      
                      <div class="form-group">
                          <label for="nombre">Nombre del Laboratorio:</label>
                          <input required type="text" class="form-control-file" name="nombreLaboratorio" id="nombreLaboratorio" placeholder="ingresar nombre del Laboratorio">
                      </div>

                      <div class="form-group">
                        <label for="nombre">detalle:</label>
                        <input required type="text" class="form-control-file" name="detalle" id="detalle" placeholder="detalle del laboratorio">
                    </div>

                    <div class="form-group">
                        <label for="nombre">por Pagar:</label>
                        <input required type="number" class="form-control-file" pattern="^[0-9]+" name="porPagar" id="porPagar" placeholder="por pagar">
                    </div>
                              
                  <div class="modal-footer">
                    <button type="button" onclick="location.href='/pantallainicio/laboratorios'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button type="submit" class="btn btn-primary" >Guardar Laboratorio</button>
                 </div>
              </form>



      </div>
    </div>
  </div>
</div>
<!--fin del modal-->


        @endcan
        </div>
      </div>
      



<table id="datatable" class="table table-striped table-bordered">
 <thead class="thead-dark">
  <tr id="can">
     <th>laboratorio</th>
     <th>detalle</th>
     <th>por pagar</th>

     <th>editar</th>
     <th>eliminar</th>
  </tr>
  </thead>
  <tbody> 
    @forelse ($laboratorios as $lab)
       <tr>
        
      <td>{{$lab->nombreLaboratorio}}</td>
           
      <td>{{$lab->detalle}}</td>

      <td>{{$lab->porPagar}}</td>

      <td> 
        @can('update',$lab)
        
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong-{{$lab->id}}" >
            Editar laboratorio<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
          </button>

<!-- modal editar -->
          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong-{{$lab->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
          <div class="modal-header" style="background-color:#26A69A;color:white">
          <h5 class="modal-title"  id="exampleModalLongTitle">
           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>

          Editar laboratorio
               
          </h5>
          <button type="button"  style="color:white"class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">


          <form method="post" action="{{route('laboratorio.actualizar',['id'=> $lab-> id])}} ">
                      
                      @csrf
                        @method('put')
                      
                      <div class="form-group">
                          <label for="nombre">Nombre del Laboratorio:</label>
                          <input required type="text" class="form-control-file" name="nombreLaboratorio" id="nombreLaboratorio" value="{{$lab->nombreLaboratorio}}">
                      </div>

                      <div class="form-group">
                        <label for="nombre">detalle:</label>
                        <input required type="text" class="form-control-file" name="detalle" id="detalle" value="{{$lab->detalle}}" >
                    </div>

                    <div class="form-group">
                        <label for="nombre">por Pagar:</label>
                        <input required type="number" class="form-control-file" pattern="^[0-9]+" name="porPagar" id="porPagar" value="{{$lab->porPagar}}">
                    </div>
                              
                  <div class="modal-footer">
                    <button type="button" onclick="location.href='/pantallainicio/laboratorios'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button type="submit" class="btn btn-primary" >Guardar Laboratorio</button>
                 </div>
              </form>
          


          </div>
          </div>
          </div>
          </div>


        @else
        No autorizado
        @endcan
        </td>
      
           

           <td>
           @can('delete',$lab)
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$lab->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                </svg>
                Eliminar Laboratorio
                </button>
                @else
        No autorizado
        @endcan
               
                
     <!-- Modal -->
    <div class="modal fade" id="modal-{{$lab->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
              </svg> Eliminar laboratorio</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <!--<span aria-hidden="true">&times;</span>-->
                      </button>
                  </div>
                  <div class="modal-body">
                      ¿Desea realmente eliminar el laboratorio?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      
                      <form method="post" action="{{route('laboratorio.borrar',['id'=>$lab->id])}}">

                          @csrf
                          @method ('delete')

                          <input type="submit" value="Eliminar" class="btn btn-danger">

                      </form>
                  </div>
              </div>
          </div>
      </div>
           </td>
           
</tr>
@empty
    <h1> No hay laboratorios disponibles!</h1>
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
        search: "Buscar laboratorio :",
  "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "Mostrando 0 to 0 of 0 laboratorios",
        "infoFiltered": "(Filtrado de _MAX_ total laboratorios)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ laboratorios",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        

    }}
});
} );
</script>


@endsection
</html>