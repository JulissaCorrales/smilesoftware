@extends('datosPersonales')
@section('cuerpo')
<!DOCTYPE html>
@section('titulo','Cita Indivual del Paciente')
<head>

     
    
    <style>
    #divtitulo{
        padding: 2rem;
        width:auto;
    } 
  
    #btnuevot{
        font: 10 1em Tahoma, Arial, Verdana, sans-serif;
        color: #fff; background-color: #59B0E5;
        border: 1px solid #0074a5;
        border-top: 1px solid #004370;
        border-left: 1px solid #004370;
        cursor: pointer;
        padding: 4px 8px 4px 6px;
        float:right;
    }
    #padre{
    
    border: 2px solid #ccc;
    width: 70%;
    height: 600px;
    
  border: 5px solid gray;
    position: absolute;
    top:100px;
    left: 350px;
    

    }
    table {
        width: 100%;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 15px;
    text-align: center;
    }
    th{
        background-color:#32cdcd  ;
        font-size:18px; font-family: Times New Roman, Times, serif; color:#293d3d;
    }
    td{
        background-color:#eafafa;
        font-size:18px; font-family: Times New Roman, Times, serif; color:#293d3d;
    }
    #t01 tr:nth-child(even) {
    background-color: #eee;
    }
    #t01 tr:nth-child(odd) {
    background-color: #fff;
    }
    #t01 th {
    background-color:  #85C1E9;
    color: black;
    }




</style>

<body>
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
<!--  -->

    <div class="container" id="padre">
        <div id="divtitulo" class="card-body d-flex justify-content-between     align-items-center">
            <h2 style="
  font-size:20px; font-family: Times New Roman, Times, serif;  background-color: #b3cbcb;
  color: #293d3d;">Citas del Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}}</h2>

    

            @can('create',App\Cita::class)
            <button   class="btn btn-outline-info" id="darcita" style="background-color:#00cc99; color:#c1f0f0; position: absolute;
  left: 740px;
  top:  40px; width:180px;"  data-toggle="modal" data-target="#create"class="btn btn-light" width="50px" id="datos">  
            <svg width="15" height="15" viewBox="0 0 16 16" class="bi bi-calendar2-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5c0-.276.244-.5.545-.5h10.91c.3 0 .545.224.545.5v1c0 .276-.244.5-.546.5H2.545C2.245 5 2 4.776 2 4.5v-1zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z"/>
            </svg>
            Agendar Cita</button>
            @endcan
         
        </div>
        <br>
                <!-- descargar -->
        @can('DescargarCitasPaciente',App\Cita::class)         
        <a href="{{route('descargarPDFCitasindividuales',['id'=>$pacientes->id])}}" style="background-color:#28a4a4; color:#c1f0f0; position: absolute;
  left: 600px;
  top:  40px; width:150px; "class="dropdown-item"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
        <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
        </svg>Descargar</a>
        @endcan
        <!--  -->
    <div id="ta">
        <hr>
        <table >
        <thead>
            <tr> 
            <th scope="col">N. de cita</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Dentista</th>
            <th scope="col">Duración</th>
            <th scope="col">Fecha/Hora</th>
            <th scope="col">Comentarios</th>
            <th scope="col" colspan="2">Acción</th>
            </tr>
        </thead>
        <tbody>
        <tr>
        <td>
        @forelse ($pacientes->citas as $tag) 
         <p>{{ $tag->id}}</p>
         <hr>
        @empty
         vacio
        @endforelse
        </td>
        <td>
        @forelse ($pacientes->citas as $tag) 
         <p>{{ $tag->odontologo->especialidad_id}} 
         
           </p>
         <hr>
        @empty
         vacio
        @endforelse
        </td>
        <td>
        @forelse ($pacientes->citas as $tag) 
         <p>{{ $tag->odontologo->nombres}} {{ $tag->odontologo->apellidos}}</p>
         <hr>
        @empty
         vacio
        @endforelse
        </td>
        <td>
        @forelse ($pacientes->citas as $tag) 
         <p>{{ $tag->duracionCita}} minutos</p>
         <hr>
        @empty
         vacio
        @endforelse
        </td>
        <td>
        @forelse ($pacientes->citas as $tag) 
         <p>{{ $tag->stard}}</p>
         <hr>
        @empty
         vacio
        @endforelse
        </td>
        <td>
        @forelse ($pacientes->citas as $tag) 
         <p>{{ $tag->comentarios}}</p>
         <hr>
        @empty
         vacio
        @endforelse
        </td>
        <!-- editar -->
        <td>
     
        @forelse ($pacientes->citas as $tag) 
        @can('updateCitaIndividual',$tag)
        <a style="background-color:green;" class="btn btn-secondary" href="{{route('citaindividual.editar',['id'=>$pacientes->id,'citaid'=>$tag->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg></a>@else -- @endcan
         <hr>
        @empty
         vacio
        @endforelse
        </td>
        
        <!-- Para boton borrar -->
        </td>
        @canany(['isAdmin','isSecretaria'])
        <td>
   
                @forelse ($pacientes->citas as $tag) 
            
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
                        <div class="modal-content">
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
                @endcanany
                
                 <hr>
                
                @empty
                No tiene 
                @endforelse
                @endcanany
                </td>
              
     
        </tr>
        
        </tbody>
        </table>

       
    </div>

    
</body>
@include('darcita')<!-- esta seccion hace que funcione modal dar cita -->
</html>
@endsection






