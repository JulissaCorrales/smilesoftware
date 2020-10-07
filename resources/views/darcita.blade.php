<style>
      #div1{background-color:#00AAE4}
      #botonContinuar{text-align: center;}
     
      
</style>
  
  
  <!-- Este codigo es para la ventana modal darcita -->
<div class="modal fade" id="create">
  
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="div1"class="modal-header">
	
				<h4  class="modal-title" id="myModalLabel">Dar Cita(Agendar)</h4>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
      <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

				<form method="post" action="/darcita">
        @csrf
        <!-- especialidad -->
        <label for="state_id" class="control-label">Especialidad:</label>
        <select name="especialidad_id" class="form-control">
       
         <?php
        $getEspecialidad =$mysqli->query("select * from especialidads order by id");
        while($f=$getEspecialidad->fetch_object()) {
          echo $f->id;
          echo $f->nombreEspecialidad;
          ?>
          <option value="<?php echo $f->id; ?>"><?php echo $f->nombreEspecialidad;?></option>
          <?php
        } 
        ?>
        </select>
        <hr>
        <!-- Doctor -->
        <label for="state_id" class="control-label">Doctor:</label>
        <select name="odontologo_id" class="form-control">
        <?php
        $getDoctor =$mysqli->query("select * from odontologos order by id");
        while($f=$getDoctor->fetch_object()) {
          echo $f->id;
          echo $f->nombres;
          echo $f->apellidos;

          ?>
          <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos;?></option>
          <?php
        } 
        ?>
        </select>
        <hr>
       <!-- Duracion (en duda)-->
       <label for="duracionCita" class="control-label">Duracion de la cita:</label>
        <select name="duracionCita" id="duracionCita" class="form-control">

        <option value="10m">10 minutos</option>
        <option value="15m">15 minutos</option>
        <option value="20m">20 minutos</option>
        <option value="30m">30 minutos</option>
        <option value="40">40 minutos</option>
        <option value="50m">50 minutos</option>
        </select>
        <br>
        <!-- Hora -->
        <label for="hora" class="control-label">Hora:</label>
        <input type="time" name="hora" id="hora">
        
        
        <!-- Fecha -->      
        <label for="fecha" class="control-label">Fecha:</label>
        <input type="date" name="fecha" id="fecha"> 
        <br>
        <!-- Paciente_id -->

        <div class="form-group">
                        <label for="state_id" class="control-label">Paciente:</label>
                        <select name="paciente_id" id="paciente_id" class="form-control">
                        <?php
                        $getPaciente =$mysqli->query("select * from pacientes order by id");
                        while($f=$getPaciente->fetch_object()) {
                        echo $f->nombres;
                        echo $f->apellidos;
  
                         ?>
                          <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos;?></option>
                        <?php
                        } 
                        ?>
                        </select>
                        
        </div>
         <div>
         <!-- comentario -->
         <label></label>
         <label for="comentarios" id="comentariolabel"class="control-label">Comentarios:</label>
         <br>
         <input type="text" name="comentarios" id="comentarios"> 
         </div>
        <br>
        <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
          Continuar
        </button>
        
        
         
        </form>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#npaciente">Paciente Nuevo</button>
        </div>
        </div>
        </div>

<!-- Modal 2 -->
        <div class="modal fade" id="npaciente">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Paciente Nuevo</h4>      
            </div>
              <!--Barra de desplazamiento-->
              <div style="width: 450px; height: 550px; overflow-y: scroll;">
            <div class="modal-body"> 


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
                          <option></option>
                          <option>Masculino</option>
                          <option>Femenino</option>
                        
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="fechaNacimiento">fecha de nacimiento:</label>
                      <input type="text" class="form-control-file" name="fechaNacimiento" id="fechaNacimiento" placeholder="ingresar fecha de nacimiento del paciente">
                  </div>

                  <div class="form-group">
                    <label for="departamento">Departamento:</label>
                    <input type="text" class="form-control-file" name="departamento" id="departamento" placeholder="ingresar departamento del paciente">
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Guardar Pacientes</button>
              </div>
                  </form>
                  </div>
                  </div>
               


      
        
        
        
        
        
      </div>
      
 
      
</div>
