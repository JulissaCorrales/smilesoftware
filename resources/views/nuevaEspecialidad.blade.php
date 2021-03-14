@extends('Plantilla.Plantilla2')
@canany(['isAdmin','isSecretaria'])
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
  <h1 id="cre">Creacion de Especialidad</h1>
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
                     <!-- <label for="state_id" class="control-label">Doctor:</label>
        <select name="odontologo_id" class="form-control">
        <option disabled selected>Seleccione un Doctor</option>
       
        </select> -->

        

        
<div class="form-group">
                          <label for="nombres">Nombre:</label>
                          <input type="text" class="form-control-file" name="nombres" id="nombres" placeholder="ingresar nombre de la especialidad">
                      </div>

                     
                      
                  <div class="modal-footer">
                  <button type="button" onclick="location.href='/pantallainicio/especialidad'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
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