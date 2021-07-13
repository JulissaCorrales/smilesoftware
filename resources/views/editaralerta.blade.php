@extends('Editar.datospersonales')

@section('titulo','Edición de Alertas')
@section('cuerpo')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    #padre{
        margin-top:6em;
        font-family: georgia;
position:absolute;
left: 400px;
top: 50px;
width: 900px;
border: 5px solid gray;
    }
    #botonatras{
        background-color:#CC00FF;
    }
    #formulario{
        padding:1em; 
        background-image: linear-gradient(to left,  #a3c2c2,#a3c2c2); 
        text-align:center;
    }

    </style>
</head>
<body>
<div id="padre" class="container">

<h3 id="titulo">Edición de Alertas</h3><hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
@endif

<!-- Formulario para crearle una alerta al paciente en especifico -->
<form id="formulario" method="POST" action="{{route('alertas.update',['id2'=>$alertas->id,'id'=>$alertas->paciente->id])}}">
        
        @csrf
        @method('put')
        <textarea id="areadetexto" name="alerta" value="" rows="4" cols="50" >
        {{$alertas->alertas}}
       

        </textarea>
        <br>
        <hr>
        <button id="botonatras" class="btn btn-secondary" type="button" onclick="location.href='{{route('alertas.crear',['id'=>$pacientes->id])}}'">
          Atrás
        </button>
        <button type="submit" class="btn btn-primary" id="guardar" >Guardar </button>
        </div>
        </form>
</div>
</body>
</html>
@endsection