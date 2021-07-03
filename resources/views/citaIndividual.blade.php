@extends('datosPersonales')
@section('cuerpo')
<!DOCTYPE html>
@section('titulo','Cita Indivual del Paciente')
<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
     
    
   

<body id="page-top">

@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!--  -->
<div class="card">
    <div class="card-header">
            <h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
            </svg> Citas</h4>
            <p>En esta sección se muestra las citas registrados y también se podrá agendar las nuevas citas</p>
        
            @can('create',App\Cita::class)
            <button  type="button" class="btn btn-outline-info" id="darcita" style="background-color:#1687a7; color:white; "  data-toggle="modal" data-target="#create" width="50px" >  
            <svg width="15" height="15" viewBox="0 0 16 16" class="bi bi-calendar2-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5c0-.276.244-.5.545-.5h10.91c.3 0 .545.224.545.5v1c0 .276-.244.5-.546.5H2.545C2.245 5 2 4.776 2 4.5v-1zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z"/>
            </svg>
            Agendar Cita </button>
            @endcan
         
                            <!-- descargar -->
                    @can('DescargarCitasPaciente',App\Cita::class)         
                    <a href="{{route('descargarPDFCitasindividuales',['id'=>$pacientes->id])}}" style="background-color:#1687a7; color:white;  position: absolute;
            left: 600px;
            top:  40px; width:150px; "class="dropdown-item"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                    <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                    </svg>Descargar</a>
                    @endcan
                    <!--  -->
    
    </div>
       
    <div class="card-body">
        <div id="divtitulo" class="table-responsive">
           <h3 style="font-family: Times New Roman, Times, serif;color: #293d3d;">Citas del Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}}</h3>
         <table id="datatable" class="table table-bordered"  cellspacing="0" >
                <thead class="thead-dark">
                    <tr> 
                    <th >N. de cita</th>
                    <th >Especialidad</th>
                    <th >Dentista</th>
                    <th >Duración</th>
                    <th >Fecha/Hora</th>
                    <th >Comentarios</th>
                    <th >Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pacientes->citas as $tag) 
                        <tr>
                            <td>{{ $tag->id}}</td>
                            <td>
                            @foreach($tag->odontologo->especialidades as $especialidadodontologo)
                            {{$especialidadodontologo->Especialidad}} <hr>
                            @endforeach
                            </td>
                            <td>{{ $tag->odontologo->nombres}} {{ $tag->odontologo->apellidos}}</td>
                            <td>{{ $tag->duracionCita}} minutos</td>
                            <td>{{ $tag->stard}}</td>
                            <td><textarea  class="cajas-texto" disabled style="width:180px; border:0;resize: none;" type="text"  readonly>{{ $tag->comentarios}}</textarea></td>
                            <!-- editar -->
                            <td>
                                @can('updateCitaIndividual',$tag)
                                <a  style="background-color:green;" href="{{route('citaindividual.editar',['id'=>$pacientes->id,'citaid'=>$tag->id])}}" class="btn btn-secondary" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg></a> @endcan
                                
                                <!-- Para boton borrar -->
                                @canany(['isAdmin','isSecretaria'])
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content" style="position:absolute; top:100px;">
                                            <div class="modal-header" style="background-image: linear-gradient(to left,  #EC7063,#F9E79F);">
                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Cita Individual</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            ¿Desea realmente eliminar la cita de {{$tag->paciente->nombres }} ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <form method="post" action="{{route('cita.borrar',['id'=>$tag->id])}}">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Eliminar" class="btn btn-danger">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fin modal -->
                                @endcanany

                         </td>
                     </tr>
                    @empty
                    <!-- No tiene ninguna cita ¡¡Asignele una!! -->
                    @endforelse

                 </tbody>
            </table>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->
       
    

   </div> 
</body>
<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Búscador de citas:",
      "decimal": "",
        "emptyTable": "No Tiene Citas Asignadas ¡¡asignele por favor!!",
        "info": "",
        "infoEmpty": "Mostrando 0 to 0 of 0 citas",
        "infoFiltered": "(Filtrado de _MAX_ total tratamientos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar  citas _MENU_ ",
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
<!-- scrip para textarea -->
    <script>
        let area = document.querySelectorAll(".cajas-texto")
        
        window.addEventListener("DOMContentLoaded", () => {
          area.forEach((elemento) => {
            elemento.style.height = `${elemento.scrollHeight}px`
          })
        })    
    </script>
<!--  -->




</html>

@include('darcita')<!-- esta seccion hace que funcione modal dar cita -->
@endsection




