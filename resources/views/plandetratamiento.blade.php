@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <style>
    #divtitulo{
        text-align: center;
  padding: 1rem;
  font-size:15px; 
  font-family: Times New Roman, Times, serif; 
  color: white; 
  background-color:#334d4d;
       
    } 
    #btnuevot{
       
        font: 700 1em Tahoma, Arial, Verdana, sans-serif;
        color: black; background-color: #00b3b3;
        border: 1px solid #0074a5;
        border-top: 1px solid #004370;
        border-left: 1px solid #004370;
        cursor: pointer;
        padding: 4px 8px 4px 6px;
        float:right;
        
        
    }
    #padre{
    width:900px;
    font:1em Tahoma;
    margin: 2rem;
    padding: 2rem;
    margin-top: 5rem;
    
    
    position: absolute;
  left: 360px;
  top:  60px;
    
    }
    table {
    margin:-15px;
    width:900px;;
     height:100px;
     position: absolute;
  left: 20px;
  top:  200px;

    }
    table, th, td {
    border: 3px solid #85929E;
    border-collapse: collapse;
    }
    th, td {
    padding: 5px;
    text-align: center;
    width:auto;
    }
    #t01 tr:nth-child(even) {
    background-color: #eee;
    }
    #t01 tr:nth-child(odd) {
    background-color: #fff;
    }
    #t01 th {
    background-color: #4acfcf;
    color: black;
    text-align:center;
    }
    h4{
        font-family:arial;
    }
    </style>
 
    <title>Plan de Tratamiento</title>
</head>
<body>

@section('cuerpo')
@canany(['isAdmin','isOdontologo'])
@if(session('mensaje'))
        <div class="alert alert-success" style="position:absolute; top:270px; left:420px;">
            {{session('mensaje')}}
        </div>
    @endif

<div class="container" id="padre">
        <div id="divtitulo" class="card-body d-flex justify-content-between align-items-center">
        <h4>Planes de Tratamiento del Paciente:<br> {{$pacientes->nombres}} {{$pacientes->apellidos}}</h4>
    
        @can('create',App\Plantratamiento::class)
        <a id="btnuevot" onclick="location.href='/pantallainicio/vista/paciente/{{ $pacientes->id}}/tratamientonuevo'"> 
     
        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-patch-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
        <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
        <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8z"/>
        </svg> Nuevo Plan de Tratamiento</a>
        @endcan
        </div>
<br>
            <table id="t01">
            <thead>
            <tr>
                              <th>N°</th>
                              <th>Plan de Tratamiento</th>
                              <th>Dentista</th>
                              <th>Estado</th>
                              <!-- <th>Paciente</th> -->
                              <th>Fecha/ Hora de Cita</th>
                              <th colspan="2">Acción</th>
                              
                                
            </tr>
            </thead>
            <tbody>               
            <tr>
            <!-- N° -->
                <td>
                    @forelse ($pacientes->planestratamientos as $tag) 
                  <p>{{ $tag->id}}</p>
                    <hr>
                    @empty
                    vacio
                    @endforelse
                </td>
                <!-- Plan de tratamiento -->
                <td>
                    @forelse($pacientes->planestratamientos as $plantratamiento)
                            <p>{{ $plantratamiento->tratamiento->categoria}}</p><hr>
                     
                    @empty
                    No tiene plan de tratamiento
                    @endforelse
                    
                </td>
                <!-- Dentista -->
                <td>
                    @forelse($pacientes->planestratamientos as $tag)
                    <p>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                    <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    
                    {{ $tag->cita->odontologo->nombres }}  {{ $tag->cita->odontologo->apellidos }}</p>
                    <hr>
                    @empty
                    No tiene plan de tratamiento
                    @endforelse
                </td>
                <!-- Estado -->
                <td>
                @forelse ($pacientes->planestratamientos as $tag) 
                <p> {{ $tag->estado}}</p> <hr>
                @empty
                    No tiene estado
                    @endforelse
                </td>
                <!-- <td>{{$pacientes->nombres}} {{$pacientes->apellidos}}</td> -->
               <!-- Fecha y Hora de Cita -->
                <td>
                @forelse ($pacientes->planestratamientos as $tag) 
                <span class="badge">{{ $tag->cita->stard}} </span> <hr>
                @empty
                    No tiene 
                    @endforelse
                </td>
                <!-- Acciones -->
<!-- Para boton borrar -->
                <td>
                @forelse ($pacientes->planestratamientos as $tag) 
                @can('update',$tag)
                <button onclick="location.href='{{route('plantratamiento.editar',['id'=>$pacientes->id,'idplantratamiento'=>$tag->id])}}'" style="border-style: solid;
  border-color:#00cc99; background-color:white; color:#00cc99;
    " class="btn btn-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
  <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
</svg></button>
@endcan
            
                @can('delete',$tag)
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}">
                 <!-- Eliminar -->
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                </svg>
                 </button>
                 @endcan
                 <hr>
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
                @empty
                No tiene 
                @endforelse
                </td>
                <td>
                @forelse ($pacientes->planestratamientos as $tag) 
                <button onclick="location.href='{{route('factura.ver',['id'=>$pacientes->id,'idplantratamiento'=>$tag->id])}}'" style="background-color:purple;" class="btn btn-secondary">

                
                Factura</button>
                <hr>
                @empty
                No tiene 
                @endforelse
                </td>
            </tr>
            </tbody>
            </table>             
</div>

</div>
</body>
</html>
@endcanany
@endsection