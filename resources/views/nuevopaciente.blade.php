@extends('Plantilla.Plantilla')
<!DOCTYPE html>
<html lang="en">
@section('Titulo','Paciente')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Paciente</title>
    <style>
    #todo{
    margin: 5rem;
    padding: 2rem;
    border: 2px solid #ccc;
    background-color:#F4ECF7;
    }
    h2{
      text-align:center;
    }
  
    </style>
    
</head>
@section('contenido')
<body>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="todo">
    <h2>Creación de Nuevo Paciente</h2>

<form method="post" action="/pacienteNuevo">
                      @csrf
                      <div class="form-group">
                          <label for="nombres">Nombres:</label>
                          <input type="text" class="form-control-file" name="nombres" id="nombres" placeholder="ingresar nombre del paciente">
                      </div>

                      <div class="form-group">
                          <label for="apellidos">Apellidos:</label>
                          <input type="text" class="form-control-file" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente">
                      </div>

                      <div class="form-group">
                        <label for="identidad">identidad:</label>
                        <input type="text" class="form-control-file" name="identidad" id="identidad" placeholder="ingresar identidad del paciente">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo :</label>
                        <select  name="sexo" id="sexo">
                        <option disabled selected>Seleccione el sexo</option>
                          <option>Masculino</option>
                          <option>Femenino</option>
                        
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="fechaNacimiento">fecha de nacimiento:</label>
                      <input type="date" class="form-control-file" name="fechaNacimiento" id="fechaNacimiento" placeholder="ingresar fecha de nacimiento del paciente">
                  </div>

                  <div class="form-group">
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
                  </div>

                  <div class="form-group">
                    <label for="ciudad">ciudad:</label>
                    <input type="text" class="form-control-file" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente">
                  
                  </div><div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control-file" name="direccion" id="direccion" placeholder="ingresar direccion del paciente">
                  </div>
               
                  <div class="form-group">
                    <label for="telefonoFijo">Telefono fijo:</label>
                    <input type="text" class="form-control-file" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente">
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular">Telefono celular:</label>
                    <input type="text" class="form-control-file" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente">
                  </div>

                  <div class="form-group">
                    <label for="profesion">Profesion:</label>
                    <input type="text" class="form-control-file" name="profesion" id="profesion" placeholder="ingresar profesion del paciente">
                  </div>

                  <div class="form-group">
                    <label for="empresa">Empresa:</label>
                    <input type="text" class="form-control-file" name="empresa" id="empresa" placeholder="ingresar la empresa donde trabaja el paciente">
                  </div>

                  <div class="form-group">
                    <label for="observaciones">observaciones:</label>
                    <input type="text" class="form-control-file" name="observaciones" id="observaciones" placeholder="Alguna observacion?">
                  </div>

                  <div class="modal-footer">
                  <button type="button" onclick="location.href='/pantallainicio/vista'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                  <input type="reset" class="btn btn-danger">
                <button type="submit" class="btn btn-primary" >Guardar Paciente</button>
              </div>
                  </form>

</div>
</body>
@endsection
</html>
