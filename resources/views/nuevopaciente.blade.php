@extends('Plantilla.Plantilla2')
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

    #na{
      width: 800px;
  height: 50px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom, #b3ffff ,#ffd9b3);
    position: absolute;
    top:200px;
    left:300px;
    border: 2px solid #ccc;
    }

    #n{
      position: absolute;
    top:30px;
    left:150px;
    width: 500px;
    border-radius: 12px;
    }

    #mo{
      width: 800px;
  height: 1100px;
  background-image: linear-gradient(to bottom, #b3ffff ,#ffd9b3);
  position: absolute;
    top:250px;
    left:300px;
    border-radius: 12px;
    
    


    }
  
    #cre{
      color: #ff9933;
  text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;
  font-family: serif;
  position: absolute;
            font-size:30px;
            top: 2px;
            left:170px;
            text-aling: center;
}
    }

  
    </style>
    
</head>
@section('contenido')
@canany(['isAdmin','isSecretaria'])
<body id="bii">
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div  class="content" id="ne">
    <nav class="navbar navbar-light bg-light" id="na">
  <h1 id="cre">Creacion de Paciente</h1>
   </nav>
  </div>
  <div id="mo" >
<div class="content" id="n">
<form method="post" action="/pantallainicio/vista/pacienteNuevo" file="true" enctype="multipart/form-data">
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
                        <input required type="number" class="form-control-file" name="identidad" id="identidad" placeholder="ingresar identidad del paciente"maxlength="13" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)">
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

                  <div class="form-group">
                    <input type="file" class="form-control-file" name="file" id="imagen" placeholder="Seleccione una Imagen">
                  </div>

                          </div>

                  <div class="modal-footer">
                  <button type="button" onclick="location.href='/pantallainicio/vista'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                  <input type="reset" class="btn btn-danger">
                <button type="submit" class="btn btn-primary" >Guardar Paciente</button>
              </div>
                  </form>


</div>

  </div>
</body>
@endcanany
@endsection
</html>
