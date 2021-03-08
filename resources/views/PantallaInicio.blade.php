@extends('VistaMenuAgenda')

@section('cuerpo')


<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <style>
        #padre {
        overflow: hidden;
        border:2px ;
        font-family: georgia; 
        }
        #hijo1 {
          
            margin: 10px;
            position: absolute;
            top: 235px;
            
            }
        #hijo2{
            width:700px;
            margin: 10px;
            position: absolute;
            top: 330px;
            left: 290px;
        }  
        #encabezado{
            background-color: #ffad33;

        }
        #cuerpo{
            border: #00cccc  2px solid;
        }
        
        a:link, a:visited, a:active {
            text-decoration:none;
        }
        #botondesplegable{
            background-image: linear-gradient(to left,  #CCFF33 ,#00FF99); 
        color:#ffffff;
    }
        
    </style>
</head>
<body id="body">
<div class="container" id="padre">
<div  id="hijo1">
</div>

<div  id="hijo2">
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
<table class="table">
        <thead class="table table-striped table-bordered">
            <tr id="encabezado">
                <th scope="col">Numero</th>
                <th scope="col">Paciente</th>
                <th scope="col">Doctor</th>
                <th scope="col">Fecha y Hora</th>
                <th>Acción</th>
                
            </tr>  
        </thead>
        <tbody>
            <tr>
                <td >    
                        @forelse($citas as $cita)
                        
                            <tr id="cuerpo">
                            <!-- numero cita -->
                                <td>@can('view',$cita->paciente) <a href="{{route('citaIndividual',['id'=>$cita->paciente->id])}}">@endcan{{$cita->id}}</td>
                                <!-- Paciente -->
                                <td>@can('update',$cita->paciente) <a href="{{route('paciente.editar',['id'=>$cita->paciente->id])}}">@endcan{{$cita->paciente->nombres}} <br>{{$cita->paciente->apellidos}}<br>{{$cita->paciente->telefonoFijo}}<br>{{$cita->paciente->telefonoCelular}} </td>
                                <!-- Odontologo -->
                                <td>@can('view',$cita->odontologo) <a href="{{route('odontologo.vista',['id'=>$cita->odontologo->id])}}">@endcan{{$cita->odontologo->nombres}}<br>{{$cita->odontologo->apellidos}}</td>
                                <!-- Fecha -->
                                <td>{{$cita->stard}}</td>
                                <td>
                                <div class="dropdown" >
                                <button id="botondesplegable" class="btn btn-primary" type="button" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                </svg></button>

                                <ul class="dropdown-menu" >
                                <!-- Editar -->
                                    @can('updateCitaIndividual',$cita)
                                    <li> <a  class="dropdown-item"  class="btn btn-secondary" href="{{route('citaindividual.editar',['id'=>$cita->paciente->id,'citaid'=>$cita->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                    </svg>  Editar Cita</a></li>@endcan
                                    <!-- ver planes de tratamiento -->
                                    @can('view',App\Plantratamiento::class)
                                    <li><a  class="dropdown-item"href="{{route('tratamiento.ver',['id'=>$cita->paciente->id])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                    </svg>  Ver Planes de Tratamiento</a></li>
                                    @endcan
                                    <!-- ver recaudación -->
                                    <li><a  class="dropdown-item"href="/pantallainicio/vista/paciente/{{$cita->paciente->id}}/VistaRecaudacionesD">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                      Ver Recaudación</a></li>

                                      <li><a href="/pdfcitasimpresion"class="dropdown-item"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                                      <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                                      </svg>  Descargar</a></li>  





                                    <!-- Eliminar -->
                                </ul>
                                </div>
                                </td>
                                
                                @empty
                            No hay citas programadas
                            </tr>
                           
                        @endforelse
                </td>
            </tr>
            <tr>
            <td id="paginacion"> 
         
                    {{$citas->links()}}


            
            </td>
            
            <tr>
        
            
        </tbody>

    </table>
    </div>

   
    
</div>


</body>



</html>

@include('darcita')<!-- esta seccion hace que funcione modal dar cita -->
@endsection