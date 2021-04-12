@extends('datospersonales')

@section('cuerpo')

<head>

<style>

 #text{
  position: relative;
  background-color: #AFEEEE;
  height: 350px;
  width: 800px;
  bottom: -40px;
  

  
  
 }

 #w3review{

  position: relative;
  bottom: -60px;
  left: 20px;
  


 }

 #guardar{

    position: relative;
 top: 100px;
  left: 650px;

 }

 #disv3{

    position: absolute;
  
  height: 40px;
  width: 300px;
  top: 200px;
  left:30px;

 }

 



</style>


</head>

  @if(session('mensaje'))
        <div class="alert alert-success">
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
<body>


<div class="container">

<nav class="navbar navbar-light bg-light">
<h6>Evoluciones</h6>

</nav>
<div id="text">

<form method="POST" action="">
@csrf
<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>


<textarea required id="w3review" placeholder="Escriba la evolucion del plan de tratamiento" name="caja" value="text" rows="4" cols="100" ></textarea>

<div id="disv4">
        <select required name="tratamiento_id" id="disv3">
        <option value="" disabled selected>Seleccione un Plan de Tratamiento</option>
        @forelse ($pacientes->planestratamientos as $tag) 
        <option value={{$tag->id}} >{{$tag->tratamiento->categoria}}</option>
        @empty
        <option disabled selected>¡¡Todavia no tiene un plan de tratamiento!! Asignele uno por favor.</option>
        todavia no tiene una evolucion de algun plan de tratamiento.
        @endforelse
        </select>

       


</div>


<div id="disv4">

<button type="submit" class="btn btn-primary" id="guardar" >Guardar </button>
</div>

</form>

</div>


</body>


@endsection