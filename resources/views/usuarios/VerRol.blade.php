@extends('Plantilla.Plantilla')
@section('titulo','Ver Rol')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  #padre{
    margin:center;
    margin-top:4em
  }
  
  </style>
</head>
<body>
<div class="container" id="padre" >
<div class="card" >
<div class="card-header" style="background-color:#E8DAEF;font-family:Helvetica ">

<h3>Nombre del Rol: {{$roles->Nombre}}</h1>
<h3>Slug:{{$roles->slug}}</h1>


</div>

<div class="card-body" >

<h5 class="card-title" style="text-align:center">Permisos</h5>
<p class="card-text">
@forelse ($roles->permisos as $permiso)
          <span style="font-size: 20px; color: #F7DC6F;" class="badge badge-secondary">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-diamond-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/>
        </svg>
          {{$permiso->Permiso.','}}</span> 
          @empty
          Todavia no se le ha asignado permisos
        @endforelse
</p>



</div>
<div class="card-footer">
<button style="background-color:#16A085"type="button" onclick="location.href='{{route('roles.ver')}}'" class="btn btn-secondary" data-dismiss="modal">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-skip-backward" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z"/>
</svg>

Atrás</button>

</div>

</div>


</div>
  
</body>
</html>


@endsection