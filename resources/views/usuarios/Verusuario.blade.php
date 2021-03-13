@extends('Plantilla.Plantilla')
@section('titulo','Ver Usuarios')
@section('contenido')
<style>
#padre{

  margin:4em;
  font-family: georgia;
  text-align:center;  
 
}
#dd{
  background-image: linear-gradient(to left,  #AFEEEE,#00FF99);
}
h4{
  text-align:center;
}

</style>
<div id="padre"class="container">
<div class="card">
<div id="dd" class="card-header">
<h4>Nombre de Usuario: {{$usuarios->name}}</h1>
<h4>Correo Electronico:{{$usuarios->email}}</h1>


</div>

<div class="card-body">
<h5 class="card-title">Roles</h5>

<p>

@if($usuarios->roles->isNotEmpty())
                                    @foreach ($usuarios->roles as $role )
                                    <span class="badge badge-secondary" >
                                        {{ $role->Nombre }}                                    
                                    </span>
                                   
                                    @endforeach
                                    @endif

</p>



      <h5 class="card-title">Permisos</h5>
      <p class="card-text">
      @if($usuarios->permisos->isNotEmpty())
      @foreach ($usuarios->permisos as $permisos )
      <span class="badge badge-secondary" >
      {{ $permisos->Permiso}}                                
      </span>

      @endforeach
      @endif

</p>

@isset($usuarios->odontologo)
<h5 class="card-title"> Odontologo Asignado a este Usuario</h5>
{{$usuarios->odontologo->nombres}} {{$usuarios->odontologo->apellidos}}
@endisset






</div>
<div class="card-footer">
<a type="button" class="btn btn-primary"  href="/pantallainicio/usuarios/ver"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward" viewBox="0 0 16 16">
  <path d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z"/>
</svg>
      Atras
  </a>

</div>

</div>


</div>

@endsection