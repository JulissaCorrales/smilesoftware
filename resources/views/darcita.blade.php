  <!-- Este codigo es para la ventana modal darcita -->
<div class="modal fade" id="create">
  
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			
				<h4 class="modal-title" id="myModalLabel">Dar cita(agendar)</h4>
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

				<form method="post" action="/tipoPaciente">
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
        
       <!-- Duracion (en duda)-->
       <label for="duracionCita" class="control-label">Duracion de la cita:</label>
        <select name="duracionCita" class="form-control">

        <option value="10m">10 minutos</option>
        <option value="15m">15 minutos</option>
        <option value="20m">20 minutos</option>
        <option value="30m">30 minutos</option>
        <option value="40">40 minutos</option>
        <option value="50m">50 minutos</option>
        </select>
        <!-- Hora -->
        <label for="hora" class="control-label">Hora:</label>
        <input type="time" name="hora" id="hora">
        <hr>
        <!-- Fecha -->      
        <label for="fecha" class="control-label">Fecha:</label>
        <input type="week" name="fecha" id="fecha"> 
        <hr>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tipoPaciente">
          continuar
        </button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <!-- Modal -->
        <div class="modal fade" id="tipoPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">tipo de paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"><!--inicio del cuerpo del modal-->

                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#pacienteExistente" role="tab" aria-controls="v-pills-home" aria-selected="true">pacienteExistente</a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#pacienteNuevo" role="tab" aria-controls="v-pills-profile" aria-selected="false">pacienteNuevo</a>
                  
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="pacienteExistente" role="tabpanel" aria-labelledby="v-pills-home-tab">formulario para paciente existente

                    <form method="post" action="">
                      @csrf
                      <div class="form-group">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control-file" name="nombre" id="nombre" placeholder="ingresar nombre del estudiante">
                      </div>
                      <div class="form-group">
                          <label for="apellido">comentarios:</label>
                          <input type="text" class="form-control-file" name="comentarios" id="comentarios" placeholder="comentarios">
                      </div>
               
                      <button type="submit" class="btn btn-primary">Guardar</button>
                      <button type="reset" class="btn btn-danger">borrar</button>
               
                  </form>
                  </div>

                  <div class="tab-pane fade" id="pacienteNuevo" role="tabpanel" aria-labelledby="v-pills-profile-tab">formulario para paciente nuevo
                    <form method="post" action="">
                      @csrf
                      <div class="form-group">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control-file" name="nombre" id="nombre" placeholder="ingresar nombre del estudiante">
                      </div>

                      <div class="form-group">
                          <label for="apellido">Apellidos:</label>
                          <input type="text" class="form-control-file" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente">
                      </div>

                      <div class="form-group">
                        <label for="identidad">identidad:</label>
                        <input type="text" class="form-control-file" name="identidad" id="identidad" placeholder="ingresar identidad del paciente">
                    </div>

                    <div class="form-group">
                      <label for="fecha_de_nacimiento">fecha de nacimiento:</label>
                      <input type="text" class="form-control-file" name="fecha_de_nacimiento" id="fecha_de_nacimiento" placeholder="ingresar fecha de nacimiento del paciente">
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
                    <input type="text" class="form-control-file" name="empresa" id="empresa" >
                  </div>

                  <div class="form-group">
                    <label for="observaciones">observaciones:</label>
                    <input type="text" class="form-control-file" name="observaciones" id="observaciones" placeholder="Alguna observacion?">
                  </div>

                      <button type="submit" class="btn btn-primary">Guardar</button>
                      <button type="reset" class="btn btn-danger">borrar</button>
               
                  </form>

                  </div>
                </div>
                
              </div><!--final del cuerpo del modal-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        
        </form>
      </div>
      @include('tipoPaciente')<!-- esta seccion hace que funcione modal dar cita -->
</div>