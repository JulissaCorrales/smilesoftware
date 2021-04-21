<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
      #div1{background-color:#00cccc;}
      #botonContinuar{text-align: center;}
      
</style>
  
  <body>
  <!-- Este codigo es para la ventana modal darcita -->
<div class="modal fade" id="create" >
  
	<div class="modal-dialog" role="document">
		<div class="modal-content" >
			<div id="div1"class="modal-header">
	
				<h4  class="modal-title" id="myModalLabel">
        <svg width="2em" height="2em" color="#fff" viewBox="0 0 16 16" class="bi bi-file-ruled" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6H6v2h7V7zm0 3H6v2h7v-2zm0 3H6v2h6a1 1 0 0 0 1-1v-1zm-8 2v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2z"/>
      </svg>
        Dar Cita(Agendar)</h4>
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
  
       <?php $odontologos=App\Odontologo::all();?>
				<form method="post" action="/darcita">
        @csrf
       
        <!-- Doctor -->
        <label for="state_id" class="control-label">Doctor y su especialidad:</label>
        <select required  name="odontologo_id" class="form-control">
        <option value="" disabled selected>Seleccione un Doctor</option>
        
           @forelse($odontologos as $odontologos)
         <option value="{{$odontologos->id}}">
         {{$odontologos->id}}--
         {{$odontologos->nombres}}  {{$odontologos->apellidos}}
          --|Especialidades:{{$odontologos->especialidad->Especialidad}},
                   @forelse ($odontologos->especialidadOdontologos as $tag) 
                    {{ $tag->especialidad->Especialidad}},
                    <hr>
                    @empty
                    @endforelse
          </option>
              @empty
          No hay odontologo.¡¡Cree uno por favor!!
          @endforelse
      
        </select>
        <hr>
       <!-- Duracion (en duda)-->
       <label for="duracionCita" class="control-label">Duracion de la cita:</label>
        <select required name="duracionCita" id="duracionCita" class="form-control">
        <option value="" disabled selected>Seleccione la duracion de la cita</option>
        <option value="10m">10 minutos</option>
        <option value="15m">15 minutos</option>
        <option value="20m">20 minutos</option>
        <option value="30m">30 minutos</option>
        <option value="40">40 minutos</option>
        <option value="50m">50 minutos</option>
        </select>
        <br>
        <label for="hora" class="control-label">Fecha y Hora:</label>
        <input required type="datetime-local" name="stard" id="hora">
        <hr>
        <!-- Paciente_id -->

        <div class="form-group">
          <label for="state_id" class="control-label">Paciente:</label>
          <select required name="paciente_id" id="paciente_id" class="form-control">
          <option value="" disabled selected>Seleccione el paciente</option>
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
         <input required type="text" name="comentarios" id="comentarios"> 
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


                    <form method="post" action="/pantallainicio/vista/pacienteNuevo">
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
                      <option >Yoro</option>

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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Guardar Pacientes</button>
              </div>
                  </form>
                  </div>
                  </div>
               


      
        
        
        
        
        
      </div>
      
 
      
</div>

<body>

</html>
