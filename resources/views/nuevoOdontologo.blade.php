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
  <h1 id="cre">Creacion de Odontologo</h1>
   </nav>
  </div>
  <div id="mo" >
<div class="content" id="n">
<form method="post" action="">
<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

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
                    <label for="telefonoFijo">Telefono fijo:</label>
                    <input type="text" class="form-control-file" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente">
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular">Telefono celular:</label>
                    <input type="text" class="form-control-file" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente">
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control-file" name="email" id="email" placeholder="ingresar telefono Celular del paciente">
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
               
        <!-- especialidad -->
             <label for="state_id" class="control-label">Especialidad:</label>
                <select name="especialidad" class="form-control">
          <option disabled selected>Seleccione una especialidad</option>
          <option >General</option>
                    <option >Cirugia y Maxilofacial</option>
                    <option>Radiologia oral y maxilofacial</option>
                    <option >Ortodoncia</option>
                    <option >Endodoncia</option>
                    <option >Prostodoncia</option>
                    <option >Periodancia</option>
                    <option >Patologogia oral y maxilofacial</option>
                  
        </select>

        <label for="intervalo" class="control-label">Duracion de la cita:</label>
        <select name="intervalo" id="intervalo" class="form-control">
        <option disabled selected>Seleccione la duracion de la cita</option>
        <option value="10m">10 minutos</option>
        <option value="15m">15 minutos</option>
        <option value="20m">20 minutos</option>
        <option value="30m">30 minutos</option>
        <option value="40">40 minutos</option>
        <option value="50m">50 minutos</option>
        </select>

                

                  <div class="modal-footer">
                  <button type="button" onclick="location.href='/pantallainicio/vista'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                  <input type="reset" class="btn btn-danger">
                <button type="submit" class="btn btn-primary" >Guardar Paciente</button>
              </div>
                  </form>


</div>

  </div>
</body>
@endsection
</html>
