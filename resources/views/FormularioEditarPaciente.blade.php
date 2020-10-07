@extends('Plantilla.Plantilla')
@section('contenido')  
<h3>formulario de edicion de datos del paciente</h3> 
<div></div>    
<div></div>    
                    <form method="post" action="{{route('paciente.update',['id'=> $pacientes-> id])}} ">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label for="nombres" class="col-sm-2 col-form-label col-form-label-lg" >Nombres:</label>
                        <div class ="col-sm-6">
                        <input type="text" class="form-control form-control-sm" name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $pacientes->nombres }}" >
                      </div>
                    </div>

              
                      <div class="form-group">
                          <label for="apellidos" class="col-sm-2 col-form-label col-form-label-lg" >Apellidos:</label>
                          <div class="col-sm-6">
                          <input type="text" class="form-control form-control-sm" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $pacientes->apellidos }}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="identidad"class="col-sm-2 col-form-label col-form-label-lg">identidad:</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" name="identidad" id="identidad" placeholder="ingresar identidad del paciente"  value="{{ $pacientes->identidad }}">
                    </div>
                  </div>

                    <div class="form-group">
                        <label for="identidad" class="col-sm-2 col-form-label col-form-label-lg">Sexo :</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" name="sexo" id="sexo" placeholder="ingresar el sexo del paciente"  value="{{ $pacientes->sexo }}" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="fechaNacimiento" class="col-sm-2 col-form-label col-form-label-lg">fecha de nacimiento:</label>
                     <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" name="fechaNacimiento" id="fechaNacimiento" placeholder="ingresar fecha de nacimiento del paciente"  value="{{ $pacientes->fechaNacimiento }}">
                    </div>
                    </div>

                  <div class="form-group">
                    <label for="departamento" class="col-sm-2 col-form-label col-form-label-lg">Departamento:</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" name="departamento" id="departamento" placeholder="ingresar departamento del paciente"  value="{{ $pacientes->departamento }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="ciudad" class="col-sm-2 col-form-label col-form-label-lg">ciudad:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $pacientes->ciudad }}">
                  </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="direccion" class="col-sm-2 col-form-label col-form-label-lg">Direccion:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $pacientes->direccion }}">
                  </div>
                  </div>
               
                  <div class="form-group">
                    <label for="telefonoFijo" class="col-sm-2 col-form-label col-form-label-lg">Telefono fijo:</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente"  value="{{ $pacientes->telefonoFijo}}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular" class="col-sm-2 col-form-label col-form-label-lg">Telefono celular:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $pacientes->telefonoCelular }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="profesion" class="col-sm-2 col-form-label col-form-label-lg">Profesion:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" name="profesion" id="profesion" placeholder="ingresar profesion del paciente"  value="{{ $pacientes->profesion }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="empresa" class="col-sm-2 col-form-label col-form-label-lg">Empresa:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" name="empresa" id="empresa" placeholder="ingresar la empresa donde trabaja el paciente"  value="{{ $pacientes->empresa }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="observaciones" class="col-sm-2 col-form-label col-form-label-lg">observaciones:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" name="observaciones" id="observaciones" placeholder="Alguna observacion?"  value="{{ $pacientes->observaciones }}">
                  </div>
                  </div>

                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Guardar Pacientes</button>
              </div>
                  </form>
                  </div>
                  </div>
               


      
        
        
        
        
        
      </div>
      
 
      
</div>
@endsection 
