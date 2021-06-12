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
<body id="page-top">
  
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
 <div class="card mb-3">
  <div class="card-header">
           <h4><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
          </svg>Editar Datos del Pacientes</h4>
          <p>En esta ventana  muestra los pacientes que se han registrado  en la clínica, <br> en esta misma se podra crear un nuevo paciente, editar informacion, eliminar el paciente.</p>
      </div>
  <div class="card-body">
      
      <table  style=" border-spacing: 5px;">
            <form method="post" action="{{route('paciente.update',['id'=> $pacientes-> id])}} " file="true" enctype="multipart/form-data"  style="
  
                      width: 800px; position: absolute;
                      left: 450px; top: 150px; " id="scroll"  class="row g-3">
                      @csrf
                      @method('put')

                      <div class="col-md-12" >
                        <label for="nombres" class=" col-sm form-label" style="font-size:20px; font-family: Times New Roman, Times, serif; "> Nombres: </label>
                        <input required type="text" class="form-control form-control-sm" style="font-size:18px; font-family: Times New Roman, Times, serif;" name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $pacientes->nombres }}" >
                       </div>

              
                      <div class="col-md-12">
                          <label for="apellidos" class="col-sm form-label " style="font-size:20px; font-family: Times New Roman, Times, serif; " >Apellidos:</label>
                          <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif; "class="form-control form-control-sm" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $pacientes->apellidos }}">
                        </div>

                      <div class="col-md-12">
                        <label for="identidad"class="col-sm form-label" style="font-size:20px; font-family: Times New Roman, Times, serif; ">Identidad:</label>                
                        <input type="text" required style="font-size:18px; font-family: Times New Roman, Times, serif;" class="form-control form-control-sm" name="identidad" id="identidad" placeholder="ingresar identidad del paciente"  value="{{ $pacientes->identidad }}">
                        </div>

                      <div class="col-md-12">
                        <label for="identidad" class="col-sm  form-label " style="font-size:20px; font-family: Times New Roman, Times, serif; ">Sexo:</label>

                        <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;" class="form-control form-control-sm" name="sexo" id="sexo" placeholder="ingresar el sexo del paciente"  value="{{ $pacientes->sexo }}" >
                          </div>


                      <div class="col-md-12">
                        <label for="fechaNacimiento" class="col-sm col-form-label " style="font-size:20px; font-family: Times New Roman, Times, serif; ">Fec.Nacimiento:</label>
                      
                        <input type="date" required style="font-size:18px; font-family: Times New Roman, Times, serif; "class="form-control form-control-sm" name="fechaNacimiento" id="fechaNacimiento" placeholder="ingresar fecha de nacimiento del paciente"  value="{{ $pacientes->fechaNacimiento }}">
                        </div>
                      

                      <div class="col-md-12">
                        <label for="departamento" class="col-sm form-label"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Departamento:</label>

                        <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif; " class="form-control form-control-sm" name="departamento" id="departamento" placeholder="ingresar departamento del paciente"  value="{{ $pacientes->departamento }}">
                          </div>


                      <div class="col-md-12">
                        <label for="ciudad" class="col-sm form-label"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Ciudad:</label>

                        <input required type="text"style="font-size:18px; font-family: Times New Roman, Times, serif;" class="form-control form-control-sm" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $pacientes->ciudad }}">
                          </div>

                  
                      <div class="col-md-12">
                        <label for="direccion" class="col-sm form-label "style="font-size:20px; font-family: Times New Roman, Times, serif; ">Direccion:</label>

                            <input required type="text" class="form-control form-control-sm" style="font-size:18px; font-family: Times New Roman, Times, serif; "name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $pacientes->direccion }}">
                          </div>

                  
                      <div class="col-md-12">
                        <h1 for="telefonoFijo" class="col-sm form-label" style="font-size:20px; font-family: Times New Roman, Times, serif; ">Tel.Fijo:</h1>

                          <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;"class="form-control form-control-sm" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente"  value="{{ $pacientes->telefonoFijo}}">
                        </div>


                      <div class="col-md-12">
                        <label for="telefonoCelular" class="col-sm form-label"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Tel.Celular:</label>

                            <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;"class="form-control form-control-sm" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $pacientes->telefonoCelular }}">
                          </div>


                      <div class="col-md-12">
                          <label for="profesion" class="col-sm form-label "style="font-size:20px; font-family: Times New Roman, Times, serif; ">Profesion:</label>
                          <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif; " class="form-control form-control-sm" name="profesion" id="profesion" placeholder="ingresar profesion del paciente"  value="{{ $pacientes->profesion }}">
                      
                        </div>

                      <div class="col-md-12">
                            <label for="empresa" class="col-sm form-label " style="font-size:20px; font-family: Times New Roman, Times, serif; ">Empresa:</label>
                          
                            <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;  "class="form-control form-control-sm" name="empresa" id="empresa" placeholder="ingresar la empresa donde trabaja el paciente"  value="{{ $pacientes->empresa }}">
                          </div>
                   

                      <div class="col-md-12">
                        <label for="observaciones" class="col-sm form-label"style="font-size:20px; font-family: Times New Roman, Times, serif; ">Observaciones:</label>
                        
                            <input required  type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;"class="form-control form-control-sm" name="observaciones" id="observaciones" placeholder="Alguna observacion?"  value="{{ $pacientes->observaciones }}">
                          </div>
                    

                     <div class="col-md-12">
                        <input type="file" style="font-size:18px; font-family: Times New Roman, Times, serif; "class="form-control-file" name="file" id="imagen" placeholder="Seleccione una Imagen">
                        </div>
                      <diV class="card-body" >
                      @canany('update',$pacientes)
                      
                          <button  style="font-size:18px; font-family: Times New Roman, Times, serif; "type="button" onclick="location.href='/pantallainicio/vista'" class="btn btn-secondary" data-dismiss="modal" >Atrás</button>
                            <input style="font-size:18px;  font-family: Times New Roman, Times, serif; "type="reset" class="btn btn-danger">           
                          <button type="submit" class="btn btn-primary" style="font-size:18px; font-family: Times New Roman, Times, serif; " >Guardar Paciente</button>
                      
                   @endcan</div>
                      <div class="card-footer"></div>
                
            </form>
                    
      </table>
 </div>         
               
   </div>           

</body>


</html>
@endcanany
@endsection 
