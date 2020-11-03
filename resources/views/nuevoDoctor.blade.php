<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
      #div1{background-color:#00cccc;}
      #botonContinuar{
        position: absolute;
    top:820px;
    left:150px;
    width: 100px;
  height: 40px;

          
          text-align: center;}

          #bu1{

            position: absolute;
    top:820px;
    left:300px;
    width: 150px;
  height: 40px;

            

          }
      
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
        Crear Odontologo</h4>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
    <div class="content" id="n">
<form method="post" action="/odontologo/nuevo">
<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

                      @csrf
                      <div class="form-group">
                          <label for="nombres">Nombres:</label>
                          <input type="text" class="form-control-file" name="nombres" id="nombres" placeholder="Ingrese el Nombre ">
                      </div>

                      <div class="form-group">
                          <label for="apellidos">Apellidos:</label>
                          <input type="text" class="form-control-file" name="apellidos" id="apellidos" placeholder="Ingrese el Apellido">
                      </div>

                      <div class="form-group">
                        <label for="identidad">Identidad:</label>
                        <input type="text" class="form-control-file" name="identidad" id="identidad" placeholder="Ingrese la Identidad ">
                    </div>

                    <div class="form-group">
                    <label for="telefonoFijo">Telefono fijo:</label>
                    <input type="text" class="form-control-file" name="telefonoFijo" id="telefonoFijo" placeholder="Ingrese el  Numero del Telefono Fijo">
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular">Telefono celular:</label>
                    <input type="text" class="form-control-file" name="telefonoCelular" id="telefonoCelular" placeholder="Ingrese el Numero de Celular">
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control-file" name="email" id="email" placeholder="Ingrese el Correo Electronico">
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
                    <label for="ciudad">Ciudad:</label>
                    <input type="text" class="form-control-file" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad  en que reside ">
                  
                  </div><div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control-file" name="direccion" id="direccion" placeholder="Ingrese su direccion">
                  </div>


                  <label for="state_id" class="control-label">Especialidad:</label>
                  <select name="especialidad" class="form-control">
                 <option disabled selected>Seleccione una especialidad</option>
              <?php
                 $getEspecialidad =$mysqli->query("select * from especialidads order by id");
                 while($f=$getEspecialidad->fetch_object()) {
                  echo $f->id;
                  echo $f->Especialidad;
          ?>
          
          <option value="<?php echo $f->id;?>"><?php echo $f->Especialidad;?></option>
          <?php
        } 
        ?>
        </select>
               
        <!-- especialidad -->
        <!--
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
        -->

        <label for="intervalo" class="control-label">Intervalo</label>
        <select name="intervalo" id="intervalo" class="form-control">
        <option disabled selected>Seleccione la duracion de la cita</option>
        <option value="10m">10 minutos</option>
        <option value="15m">15 minutos</option>
        <option value="20m">20 minutos</option>
        <option value="30m">30 minutos</option>
        <option value="40">40 minutos</option>
        <option value="50m">50 minutos</option>
        </select>

</div>
 <br>
 <br>

<div>
        <br>
        <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
          Continuar
        </button>
    
        <br>
        <div>
         
        </form  action="">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button id="bu1" type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#ndoctor">Especialidad</button>
        </div>
        </div>
        </div>

<!-- Modal 2 -->
        <div class="modal fade" id="ndoctor">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Especialidad Nueva</h4>      
            </div>
              <!--Barra de desplazamiento-->
              <div style="width: 450px; height: 550px; overflow-y: scroll;">
            <div class="modal-body"> 


                    <form method="post" action="/pantallainicio/nueva/especialidad">
                      @csrf
                      
                      <div class="form-group">
                          <label for="nombres">Nombre:</label>
                          <input type="text" class="form-control-file" name="nombres" id="nombres" placeholder="Ingresar el  nombre de la Especialidad">
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