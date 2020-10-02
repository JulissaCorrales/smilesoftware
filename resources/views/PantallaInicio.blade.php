@extends('Plantilla.Plantilla')

@section('Titulo','Pantalla de Inico')
@section('contenido')

<table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Hora</th>
                <th scope="col">Paciente</th>
                <th scope="col">Doctor</th>
                
            </tr>  
        </thead>
        <tbody>
            <tr>
                <td>
                        @foreach($pacientes as $paciente)
                            <tr>
                            <th scope="row">{{$paciente->cita->hora}}</th>
                                <td>{{$paciente->nombres}} <br>{{$paciente->apellidos}}<br>{{$paciente->telefonoFijo}}<br>{{$paciente->telefonoCelular}} </td>
                                <td>{{$paciente->cita->odontologo->nombres}}{{$paciente->cita->odontologo->apellidos}}</td>
                                
                        
                            </tr>
                        @endforeach
                </td>
               

            </tr>
        </tbody>
    </table>
@endsection