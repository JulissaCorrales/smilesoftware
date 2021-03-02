@extends('Plantilla.Plantilla')
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














.btn:hover {
  text-decoration: none;
}

/*btn_background*/
.effect04 {
  --uismLinkDisplay: var(--smLinkDisplay, inline-flex);
  display: var(--uismLinkDisplay);
  color: #000;
  outline: solid 2px #000;
  position: relative;
  transition-duration: 0.4s;
  overflow: hidden;
}

.effect04::before,
.effect04 span {
  margin: 0 auto;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  transition-duration: 0.4s;
}

/* 文字1を上に */
.effect04:hover {
  background-color: #000;
}

/* HOVERしたら文字1を上に */
.effect04:hover span {
  -webkit-transform: translateY(-400%) scale(-0.1, 20);
  transform: translateY(-400%) scale(-0.1, 20);
}

/*文字2*/
.effect04::before {
  content: attr(data-sm-link-text);
  color: #fff;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  -webkit-transform: translateY(500%) scale(-0.1, 20);
  transform: translateY(500%) scale(-0.1, 20);
}

/* HOVERしたら文字2を上に */
.effect04:hover::before {
  letter-spacing: 0.05em;
  -webkit-transform: translateY(0) scale(1, 1);
  transform: translateY(0) scale(1, 1);
}





</style>
</head>
@section('contenido')
<body>
 
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif

    <div  class="container" id="dd">
 <div class="list-group">
 

    <div class="buttons">
        <div class="container">
            <a href="/laboratorioNuevo" class="btn effect04" data-sm-link-text="Agregar" ><span>Nuevo Laboratorio</span></a>
        </div>
      </div>
      



<table id="datatable" class="table">
 <thead class="table table-striped table-bordered">
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

        <a class="btn btn-warning " href="{{route('laboratorio.editar',['id'=>$lab->id])}}">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
        Editar</a>
        
        </td>
      
           

           <td>
            
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$lab->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                </svg>
                Eliminar Laboratorio
                </button>
               
                
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
        search: "Buscar laboratorio :"
    }
});
} );
</script>


@endsection
</html>