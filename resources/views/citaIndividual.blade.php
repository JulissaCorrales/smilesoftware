@extends('datosPersonales')
@section('cuerpo')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     
    
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
    width: 900px;
    height: 600px;
    background-color:#F4F6F6  ;
    position: absolute;
    top:250px;
    left: 400px;
    

    }
    table {
    width: 50px;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 15px;
    text-align: left;
    }
    th{
        background-color:#ffad33 ;
    }
    td{
        background-color:#FEF5E7 ;
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
            <h2>Citas del Paciente: {{$pacientes->nombres}}<br>  {{$pacientes->apellidos}}</h2>
            <button   class="btn btn-outline-info" id="darcita"  data-toggle="modal" data-target="#create"class="btn btn-light" width="50px" id="datos">  
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar2-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5c0-.276.244-.5.545-.5h10.91c.3 0 .545.224.545.5v1c0 .276-.244.5-.546.5H2.545C2.245 5 2 4.776 2 4.5v-1zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z"/>
            </svg>
            Agendar Cita</button>
        </div>
    <div id="ta">
        <hr>
        <table>
        <thead>
            <tr> 
            <th scope="col">#Numero de cita</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Dentista</th>
            <th scope="col">Duración</th>
            <th scope="col">Fecha y Hora</th>
            <th scope="col">Comentarios</th>
            <th>Acción</th>
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
         <p>{{ $tag->odontologo->especialidad}}</p>
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
        <!-- Para boton borrar -->
        <td>
                @forelse ($pacientes->citas as $tag) 
            

                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}">
                 Eliminar
                 </button>
                 <!-- Modal -->
                <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Plan de Tratamiento</h5>
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
                 <hr>
                @empty
                No tiene 
                @endforelse
                </td>
     
        </tr>
        
        </tbody>
        </table>
    </div>
</body>
@include('darcita')<!-- esta seccion hace que funcione modal dar cita -->
</html>
@endsection






