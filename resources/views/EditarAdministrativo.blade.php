@extends('Plantilla.Plantilla')
@section('titulo','Edicion de usuario administrativo')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
#padre{
    width:auto;
    font:1em Tahoma;
    margin: 5rem;
    padding: 2rem;
    border: 2px solid #ccc;
}   #titulo{
    text-align:center;
}
</style>
</head>
<body>
    
    <div  class="container" id="padre">
    <h3 id="titulo">Editar datos del Usuario Administrativo {{ $administrativos->nombres}} {{ $administrativos->apellidos}}</h3>
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
    <form method="post" action="{{route('administrativo.actualizar',['id'=> $administrativos-> id])}} ">

    @csrf
    @method('put')
     <!-- Categoria-->
                
     <div class="form-group">
        <label for="nombres">Nombres:</label>
     <input type="text" class="form-control-file" name="nombres" id="nombres" placeholder="Ingrese el Nombre " value="{{$administrativos->nombres}}">
    </div>

    <div class="form-group">
        <label for="apellidos">Apellidos:</label>
        <input type="text" class="form-control-file" name="apellidos" id="apellidos" placeholder="Ingrese el Apellido" value="{{$administrativos->apellidos}}">
    </div>

    <div class="form-group">
      <label for="identidad">Identidad:</label>
      <input type="text" class="form-control-file" name="identidad" id="identidad" placeholder="Ingrese la Identidad " value="{{$administrativos->identidad}}">
  </div>

  <div class="form-group">
  <label for="telefonoFijo">Telefono fijo:</label>
  <input type="text" class="form-control-file" name="telefonoFijo" id="telefonoFijo" placeholder="Ingrese el  Numero del Telefono Fijo" value="{{$administrativos->telefonoCelular}}">
</div>

<div class="form-group">
  <label for="telefonoCelular">Telefono celular:</label>
  <input type="text" class="form-control-file" name="telefonoCelular" id="telefonoCelular" placeholder="Ingrese el Numero de Celular" value="{{$administrativos->telefonoFijo}}">
</div>

<div class="form-group">
  <label for="email">Email:</label>
  <input type="email" class="form-control-file" name="email" id="email" placeholder="Ingrese el Correo Electronico" value="{{$administrativos->email}}">
</div>

<div class="form-group">
    <label for="departamento">Email:</label>
    <input type="text" class="form-control-file" name="departamento" id="departamento" placeholder="Ingrese el Correo departamento" value="{{$administrativos->departamento}}">
  </div>

<!--<div class="form-group">
  <label for="departamento">Departamento:</label>
  <select name="departamento" id="departamento" class="form-control">
  <option disabled selected>Seleccione un departamento</option>
  <option >Atlántida</option>
  <option >Choluteca</option>
  <option>Colón</option>
  <option >Comayagua</option>
  <option >Copán</option>
  <option >Cortés</option>
  <option >El Paraíso</option>
  <option >Francisco Morazán</option>
  <option >Gracias a Dios</option>
  <option >Intibucá</option>
  <option >Islas de la Bahía</option>
  <option >La Paz</option>
  <option >Lempira</option>
  <option >Ocotepeque</option>
  <option >Olancho</option>
  <option >Santa Bárbara</option>
  <option >Valle</option>
  <option >Yoro:</option>

</select>
</div>-->

<div class="form-group">
  <label for="ciudad">Ciudad:</label>
  <input type="text" class="form-control-file" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad  en que reside " value="{{$administrativos->ciudad}}">

</div><div class="form-group">
  <label for="direccion">Direccion:</label>
  <input type="text" class="form-control-file" name="direccion" id="direccion" placeholder="Ingrese su direccion" value="{{$administrativos->direccion}}">
</div>

                   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='/pantallainicio/usuariosAdministrativos'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Continuar
                    </button>
                    
                   
                    </div>

    
    
    </form>

    
    
    
    </div><!-- fin div padre -->
</body>
</html>
@endsection