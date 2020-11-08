@extends('VistaMenuAgenda')

@section('cuerpo')

@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #padre {
        overflow: hidden;
        border=2px ;
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
        
        
        
    </style>
</head>
<body id="body">
<div class="container" id="padre">
<div  id="hijo1">
</div>

<div  id="hijo2">
<table class="table">
        <thead class="table table-striped table-bordered">
            <tr id="encabezado">
                <th scope="col">Paciente</th>
                <th scope="col">Doctor</th>
                <th scope="col">Fecha y Hora</th>
                
            </tr>  
        </thead>
        <tbody>
            <tr>
                <td >    
                        @forelse($citas as $cita)
                            <tr id="cuerpo">
                                <td>{{$cita->paciente->nombres}} <br>{{$cita->paciente->apellidos}}<br>{{$cita->paciente->telefonoFijo}}<br>{{$cita->paciente->telefonoCelular}} </td>
                                <td>{{$cita->odontologo->nombres}}<br>{{$cita->odontologo->apellidos}}</td>
                                <td>{{$cita->stard}}</td>
                                
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