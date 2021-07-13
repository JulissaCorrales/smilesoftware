@extends('Plantilla.datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    
 
    <title>Plan de Tratamiento</title>
</head>
<body>

@section('cuerpo')
@canany(['isAdmin','isOdontologo'])
@if(session('mensaje'))
        <div class="alert alert-success" style="position:absolute; top:240px; left:420px;">
            {{session('mensaje')}}
        </div>
    @endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card mb-3">
    <div class="card-header">
        <h4>
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
        </svg>Planes de Tratamiento</h4>
        <p>En esta sección se muestra el plan del tratamiento que esta llevando el paciente</p>
        
    
        @can('create',App\Plantratamiento::class)
        <button id="btnuevot" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/tratamientonuevo'" type="button" class="btn btn-outline-info"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg>Nuevo Plan de Tratamiento</button>
        @endcan
        </div>
<br><h4  style="padding-left: 20px;">          Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}}</h4>
    <div class="card-body">
        <div id="divtabla" class="table-responsive">
            <table id="datatable" class="table table-bordered"width="100%" cellspacing="0">
            <thead >
            <tr style="text-align: center">
                <th>N°</th>
                <th>Plan de Tratamiento </th>
                <th>Dentista</th>
                <th>Estado</th>
                <th>Fecha y Hora de Cita</th>
            
                <th>Acción</th>
               
                                
            </tr>
            </thead>
            <tbody> 
             @forelse ($pacientes->planestratamientos as $tag)               
            <tr>
            <!-- N° -->
                <td>{{ $tag->id}}</td>
                <!-- Plan de tratamiento -->
                <td>{{ $tag->tratamiento->categoria}}</td>
                <!-- Dentista -->
                <td>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                    <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    
                    {{ $tag->cita->odontologo->nombres }}  {{ $tag->cita->odontologo->apellidos }}</td>
                <!-- Estado -->
                <td>{{ $tag->estado}}</td>
               <!-- Fecha y Hora de Cita -->
                <td>
                <span class="badge">{{ $tag->cita->stard}} </span></td>
                <!-- Acciones -->
                <!-- Para boton borrar -->
                <td>
                @can('update',$tag)
                    <button  onclick="location.href='{{route('plantratamiento.editar',['id'=>$pacientes->id,'idplantratamiento'=>$tag->id])}}'"  class="btn btn-outline-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                    </svg></button>
                @endcan
                @can('delete',$tag)
                    <button type="button"  class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}">
                    <!-- Eliminar -->
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg>
                    </button>
                 @endcan
                 <!-- Modal -->
                <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" style="position:absolute; left:50px; top:100px;">
                            <div class="modal-header" style="background-color:#293d3d; color:white;  height:80px;">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Plan de Tratamiento</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            ¿Desea realmente eliminar el plan de tratamiento {{ $tag->tratamiento->categoria}} ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <form method="post" action="{{route('plandetratamiento.borrar',['id'=>$tag->id])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin modal -->
         
                <button onclick="location.href='{{route('factura.ver',['id'=>$pacientes->id,'idplantratamiento'=>$tag->id])}}'"  class="btn btn-outline-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-ruled" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6H6v2h7V7zm0 3H6v2h7v-2zm0 3H6v2h6a1 1 0 0 0 1-1v-1zm-8 2v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2z"/>
                    </svg>
                Factura</button>
    
        
                </td>
            </tr>
        @empty
        <tr><td>No tiene plan de tratamiento</td></tr> 
        @endforelse
            </tbody>
            </table>   
        </div>
</div>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->

<script>
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Buscar Plan de tratamiento:",
      "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Tratamientos",
        "infoEmpty": "Mostrando 0 to 0 of 0 Plan de Tratamientos",
        "infoFiltered": "(Filtrado de _MAX_ total Plan de Tratamientos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Plan de Tratamientos",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }

    }
});
} );
</script>          
</div>

</div>
</body>
</html>
@endcanany
@endsection