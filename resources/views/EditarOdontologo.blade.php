@extends('Plantilla.Plantilla')
@section('contenido')   
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
<h3 id="titulo">Edición de Datos Personales Odontologo</h3>
  
                    <form method="post"  action=" "  file="true" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label for="nombres" class="col-sm-2 col-form-label col-form-label-lg" >Nombres:</label>
                        <div >
                        <input type="text" class="form-control form-control-sm" name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $odontologos->nombres }}" >
                      </div>
                    </div>

              
                      <div class="form-group">
                          <label for="apellidos" class="col-sm-2 col-form-label col-form-label-lg" >Apellidos:</label>
                          <div >
                          <input type="text" class="form-control form-control-sm" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $odontologos->apellidos }}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="identidad"class="col-sm-2 col-form-label col-form-label-lg">Identidad:</label>
                        <div>
                        <input type="text" class="form-control form-control-sm" name="identidad" id="identidad" placeholder="ingresar identidad del paciente"  value="{{ $odontologos->identidad }}">
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="telefonoFijo" class="col-sm-2 col-form-label col-form-label-lg">Telefono fijo:</label>
                    <div >
                    <input type="text" class="form-control form-control-sm" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente"  value="{{ $odontologos->telefonoFijo}}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular" class="col-sm-2 col-form-label col-form-label-lg">Telefono celular:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $odontologos->telefonoCelular }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular" class="col-sm-2 col-form-label col-form-label-lg">Email:</label>
                  <div >
                    <input type="email" class="form-control form-control-sm" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $odontologos->telefonoCelular }}">
                  </div>
                  </div>

                    
                  <div class="form-group">
                    <label for="departamento" class="col-sm-2 col-form-label col-form-label-lg">Departamento:</label>
                    <div >
                    <input type="text" class="form-control form-control-sm" name="departamento" id="departamento" placeholder="ingresar departamento del paciente"  value="{{ $odontologos->departamento }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="ciudad" class="col-sm-2 col-form-label col-form-label-lg">Ciudad:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $odontologos->ciudad }}">
                  </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="direccion" class="col-sm-2 col-form-label col-form-label-lg">Direccion:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $odontologos->direccion }}">
                  </div>
                  </div>
               
                  

                  <div class="form-group">
                    <label for="profesion" class="col-sm-2 col-form-label col-form-label-lg">Especialidad:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="profesion" id="profesion" placeholder="ingresar profesion del paciente"  value="{{ $odontologos->especialidad_id }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="profesion" class="col-sm-2 col-form-label col-form-label-lg">Intervalo:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="intervalo" id="intervalo" placeholder="ingresar profesion del paciente"  value="{{ $odontologos->intervalo}}">
                  </div>
                  </div>

                
                  <div class="modal-footer">
                <button type="button" onclick="location.href='/pantallainicio/vista'" class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                <input type="reset" class="btn btn-danger">
                <button type="submit" class="btn btn-primary" >Guardar Odontologo</button>
                
              </div>
                  </form>
                  </div>
               
  
</body>
</html>
@endsection 