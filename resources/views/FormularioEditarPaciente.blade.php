@extends('datospersonales')
@section('cuerpo')   
@canany(['isAdmin','isSecretaria','isOdontologo'])
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos Personales Editables</title>
  <style>
#titulo{
  text-align: center;
  padding: 1rem;
}
#padre {
  margin: 2rem;
  padding: 2rem;
  border: 2px solid #ccc;
  background-image: linear-gradient(to bottom, #b3ffff ,#ffd9b3);;
  
}

</style>
</head>
<body>
  
<div id="padre"> 
<h3 id="titulo">Edición de datos del paciente</h3>
  
                    <form method="post" action="{{route('paciente.update',['id'=> $pacientes-> id])}} " file="true" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label for="nombres" class="col-sm-2 col-form-label col-form-label-lg" >Nombres:</label>
                        <div >
                        <input type="text" class="form-control form-control-sm" name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $pacientes->nombres }}" >
                      </div>
                    </div>

              
                      <div class="form-group">
                          <label for="apellidos" class="col-sm-2 col-form-label col-form-label-lg" >Apellidos:</label>
                          <div >
                          <input type="text" class="form-control form-control-sm" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $pacientes->apellidos }}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="identidad"class="col-sm-2 col-form-label col-form-label-lg">Identidad:</label>
                        <div>
                        <input type="text" class="form-control form-control-sm" name="identidad" id="identidad" placeholder="ingresar identidad del paciente"  value="{{ $pacientes->identidad }}">
                    </div>
                    </div>

                    <div class="form-group">
                        <label for="identidad" class="col-sm-2 col-form-label col-form-label-lg">Sexo :</label>
                        <div >
                        <input type="text" class="form-control form-control-sm" name="sexo" id="sexo" placeholder="ingresar el sexo del paciente"  value="{{ $pacientes->sexo }}" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="fechaNacimiento" class="col-sm-2 col-form-label col-form-label-lg">Fecha de nacimiento:</label>
                     <div >
                      <input type="date" class="form-control form-control-sm" name="fechaNacimiento" id="fechaNacimiento" placeholder="ingresar fecha de nacimiento del paciente"  value="{{ $pacientes->fechaNacimiento }}">
                    </div>
                    </div>

                  <div class="form-group">
                    <label for="departamento" class="col-sm-2 col-form-label col-form-label-lg">Departamento:</label>
                    <div >
                    <input type="text" class="form-control form-control-sm" name="departamento" id="departamento" placeholder="ingresar departamento del paciente"  value="{{ $pacientes->departamento }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="ciudad" class="col-sm-2 col-form-label col-form-label-lg">Ciudad:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $pacientes->ciudad }}">
                  </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="direccion" class="col-sm-2 col-form-label col-form-label-lg">Direccion:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $pacientes->direccion }}">
                  </div>
                  </div>
               
                  <div class="form-group">
                    <label for="telefonoFijo" class="col-sm-2 col-form-label col-form-label-lg">Telefono fijo:</label>
                    <div >
                    <input type="text" class="form-control form-control-sm" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente"  value="{{ $pacientes->telefonoFijo}}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular" class="col-sm-2 col-form-label col-form-label-lg">Telefono celular:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $pacientes->telefonoCelular }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="profesion" class="col-sm-2 col-form-label col-form-label-lg">Profesion:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="profesion" id="profesion" placeholder="ingresar profesion del paciente"  value="{{ $pacientes->profesion }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="empresa" class="col-sm-2 col-form-label col-form-label-lg">Empresa:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="empresa" id="empresa" placeholder="ingresar la empresa donde trabaja el paciente"  value="{{ $pacientes->empresa }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="observaciones" class="col-sm-2 col-form-label col-form-label-lg">Observaciones:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="observaciones" id="observaciones" placeholder="Alguna observacion?"  value="{{ $pacientes->observaciones }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <input type="file" class="form-control-file" name="file" id="imagen" placeholder="Seleccione una Imagen">
                  </div>

                          </div>

                  @canany('update',$pacientes)
                  <div class="modal-footer">
                <button type="button" onclick="location.href='/pantallainicio/vista'" class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                <input type="reset" class="btn btn-danger">
               
                <button type="submit" class="btn btn-primary" >Guardar Pacientes</button>
                
              </div>
             @endcan
                  </form>
                  </div>
               
  
</body>
</html>
@endcanany
@endsection 
