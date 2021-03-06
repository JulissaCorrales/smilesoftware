@extends('datospersonales')
@section('titulo','EditarPaciente')
@section('cuerpo') 

@canany(['isAdmin','isSecretaria','isOdontologo'])
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
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
      @if(session('mensaje'))
      <div class="alert alert-success">
      {{session('mensaje')}}
      </div>
      @endif
<div id="padre"> 

<h3 id="titulo"><svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg> Editar Datos Personales</h3>
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

  
            <form method="post" action="{{route('paciente.update',['id'=> $pacientes-> id])}} " file="true" enctype="multipart/form-data"  style="
  
                      width: 500px; position: absolute;
                      left: 150px; top: 130px;  background-color: #e6f9ff; " id="scroll" >
                      @csrf
                      @method('put')
                      <div class="form-group" >
                        <label for="nombres" class="col-sm-2 col-form-label col-form-label-lg" style="font-size:20px; font-family: Times New Roman, Times, serif; ">Nombres:</label>
                        <div >
                        <input required type="text" class="form-control form-control-sm" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; " name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $pacientes->nombres }}" >
                        </div>
                       </div>

              
                      <div class="form-group">
                          <label for="apellidos" class="col-sm-2 col-form-label col-form-label-lg" style="font-size:20px; font-family: Times New Roman, Times, serif; " >Apellidos:</label>
                          <div >
                          <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; "class="form-control form-control-sm" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $pacientes->apellidos }}">
                        </div>
                        </div>

                      <div class="form-group">
                        <label for="identidad"class="col-sm-2 col-form-label col-form-label-lg" style="font-size:20px; font-family: Times New Roman, Times, serif; ">Identidad:</label>
                        <div>
                        <input required type="number" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; " class="form-control form-control-sm" name="identidad" id="identidad" placeholder="ingresar identidad del paciente"  value="{{ $pacientes->identidad }}"maxlength="13" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)">
                         </div>
                          </div>

                    <div class="form-group">
                        <label for="sexo" class="col-sm-2 col-form-label col-form-label-lg" style="font-size:20px; font-family: Times New Roman, Times, serif; ">Sexo:</label>
                        <div >
                        <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; " class="form-control form-control-sm" name="sexo" id="sexo" placeholder="ingresar el sexo del paciente"  value="{{ $pacientes->sexo }}" >
                          </div>
                        </div>

                    <div class="form-group">
                      <label for="fechaNacimiento" class="col-sm-2 col-form-label col-form-label-lg" style="font-size:20px; font-family: Times New Roman, Times, serif; ">Fec.Nacimiento:</label>
                     <div>
                      <input type="date" required style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; "class="form-control form-control-sm" name="fechaNacimiento" id="fechaNacimiento" placeholder="ingresar fecha de nacimiento del paciente"  value="{{ $pacientes->fechaNacimiento }}">
                      </div>
                      </div>

                  <div class="form-group">
                    <label for="departamento" class="col-sm-2 col-form-label col-form-label-lg"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Departamento:</label>
                    <div >
                    <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; " class="form-control form-control-sm" name="departamento" id="departamento" placeholder="ingresar departamento del paciente"  value="{{ $pacientes->departamento }}">
                      </div>
                      </div>

                  <div class="form-group">
                    <label for="ciudad" class="col-sm-2 col-form-label col-form-label-lg"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Ciudad:</label>
                     <div >
                    <input required type="text"style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; " class="form-control form-control-sm" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $pacientes->ciudad }}">
                      </div>
                      </div>
                  
                  <div class="form-group">
                    <label for="direccion" class="col-sm-2 col-form-label col-form-label-lg"style="font-size:20px; font-family: Times New Roman, Times, serif;background-color:#e6f9ff; ">Direccion:</label>
                      <div >
                        <input required type="text" class="form-control form-control-sm" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; "name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $pacientes->direccion }}">
                      </div>
                      </div>
               
                  <div class="form-group">
                    <h1 for="telefonoFijo" class="col-sm-2 col-form-label col-form-label-lg" style="font-size:20px; font-family: Times New Roman, Times, serif; ">Tel.Fijo:</h1>
                    <div >
                      <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; "class="form-control form-control-sm" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente"  value="{{ $pacientes->telefonoFijo}}">
                    </div>
                    </div>

                  <div class="form-group">
                    <label for="telefonoCelular" class="col-sm-2 col-form-label col-form-label-lg"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Tel.Celular:</label>
                      <div >
                        <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; "class="form-control form-control-sm" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $pacientes->telefonoCelular }}">
                      </div>
                      </div>

                  <div class="form-group">
                      <label for="profesion" class="col-sm-2 col-form-label col-form-label-lg"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Profesion:</label>
                    <div >
                      <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; " class="form-control form-control-sm" name="profesion" id="profesion" placeholder="ingresar profesion del paciente"  value="{{ $pacientes->profesion }}">
                    </div>
                    </div>

                  <div class="form-group">
                        <label for="empresa" class="col-sm-2 col-form-label col-form-label-lg"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Empresa:</label>
                      <div >
                        <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; "class="form-control form-control-sm" name="empresa" id="empresa" placeholder="ingresar la empresa donde trabaja el paciente"  value="{{ $pacientes->empresa }}">
                      </div>
                      </div>

                  <div class="form-group">
                    <label for="observaciones" class="col-sm-2 col-form-label col-form-label-lg"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Observaciones:</label>
                      <div >
                        <input required  type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; "class="form-control form-control-sm" name="observaciones" id="observaciones" placeholder="Alguna observacion?"  value="{{ $pacientes->observaciones }}">
                      </div>
                      </div>

                  <div class="form-group">
                    <input type="file" style="font-size:18px; font-family: Times New Roman, Times, serif;  background-color: #e6f9ff; "class="form-control-file" name="file" id="imagen" placeholder="Seleccione una Imagen">
                   </div>

                  @canany('update',$pacientes)
                  
   
                <button  style="position: absolute;
                    left: 800px;  top: 850px;font-size:18px; font-family: Times New Roman, Times, serif; "type="button" onclick="location.href='/pantallainicio/vista'" class="btn btn-secondary" data-dismiss="modal" >Atrás</button>
                  <input style="position: absolute;
                               left: 880px;font-size:18px; top:850px; font-family: Times New Roman, Times, serif; "type="reset" class="btn btn-danger">           
                <button type="submit" class="btn btn-primary" style="position: absolute;
                      left: 1000px;  top: 850px;font-size:18px; font-family: Times New Roman, Times, serif; " >Guardar Paciente</button>
                
              
                   @endcan
            </form>
        </div>
               
               
</div>
</body>
</div>
</html>
@endcanany
@endsection 
