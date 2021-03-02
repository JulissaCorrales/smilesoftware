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
 

<button type="button" class="btn btn-success" onclick="">
  Ingresar Laboratorio
</button>



<table id="datatable" class="table">
 <thead class="table table-striped table-bordered">
  <tr id="can">
     <th>laboratorio</th>
     <th>detalle</th>
     <th>por pagar</th>
     <th>acciones</th>
  </tr>
  </thead>
  <tbody> 
       <tr>
       
           <td></td>
           
           <td>
           
            
            </td>

             <td>
           </td>
           <td>
            
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                </svg>
                Eliminar Laboratorio
                </button>
               
                
     <!-- Modal -->
    <div class="modal fade" id="modal-" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <form method="post" action="">
    
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