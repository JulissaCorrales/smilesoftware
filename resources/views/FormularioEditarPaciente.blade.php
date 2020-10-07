
                    <form method="post" action="{{route('paciente.update',['id'=> $pacientes-> id])}} ">
                      @csrf
                      <div class="form-group">
                          <label for="nombres">Nombres:</label>
                          <input type="text" class="form-control-file" name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $pacientes->nombres }}" >
                      </div>

                      <div class="form-group">
                          <label for="apellidos">Apellidos:</label>
                          <input type="text" class="form-control-file" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $pacientes->apellidos }}">
                      </div>

                      <div class="form-group">
                        <label for="identidad">identidad:</label>
                        <input type="text" class="form-control-file" name="identidad" id="identidad" placeholder="ingresar identidad del paciente"  value="{{ $pacientes->identidad }}">
                    </div>
                    <div class="form-group">
                        <label for="identidad">Sexo :</label>
                        <input type="text" class="form-control-file" name="sexo" id="sexo" placeholder="ingresar el sexo del paciente"  value="{{ $pacientes->sexo }}" >
                    </div>

                    <div class="form-group">
                      <label for="fechaNacimiento">fecha de nacimiento:</label>
                      <input type="text" class="form-control-file" name="fechaNacimiento" id="fechaNacimiento" placeholder="ingresar fecha de nacimiento del paciente"  value="{{ $pacientes->fechaNacimiento }}">
                  </div>

                  <div class="form-group">
                    <label for="departamento">Departamento:</label>
                    <input type="text" class="form-control-file" name="departamento" id="departamento" placeholder="ingresar departamento del paciente"  value="{{ $pacientes->departamento }}">
                  </div>

                  <div class="form-group">
                    <label for="ciudad">ciudad:</label>
                    <input type="text" class="form-control-file" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $pacientes->ciudad }}">
                  
                  </div><div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control-file" name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $pacientes->direccion }}">
                  </div>
               
                  <div class="form-group">
                    <label for="telefonoFijo">Telefono fijo:</label>
                    <input type="text" class="form-control-file" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente"  value="{{ $pacientes->telefonoFijo}}">
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular">Telefono celular:</label>
                    <input type="text" class="form-control-file" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $pacientes->telefonoCelular }}">
                  </div>

                  <div class="form-group">
                    <label for="profesion">Profesion:</label>
                    <input type="text" class="form-control-file" name="profesion" id="profesion" placeholder="ingresar profesion del paciente"  value="{{ $pacientes->profesion }}">
                  </div>

                  <div class="form-group">
                    <label for="empresa">Empresa:</label>
                    <input type="text" class="form-control-file" name="empresa" id="empresa" placeholder="ingresar la empresa donde trabaja el paciente"  value="{{ $pacientes->empresa }}">
                  </div>

                  <div class="form-group">
                    <label for="observaciones">observaciones:</label>
                    <input type="text" class="form-control-file" name="observaciones" id="observaciones" placeholder="Alguna observacion?"  value="{{ $pacientes->observaciones }}">
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
