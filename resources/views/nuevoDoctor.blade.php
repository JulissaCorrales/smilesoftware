<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
      #divv9{

        
        
    background-image: linear-gradient(to top, #33d6ff ,#e6ffff );
    height: 100px;
  }

  #myModalLabel{
    text-shadow: -1px 0 #ccfff5, 0 1px #ccfff5, 1px 0 #009999, 0 -1px #009999;
  font-family: "Times New Roman";
            font-size: 30px;
            border-bottom: 5px solid #00cccc;
  }


    #botonContinuar{
    position: relative;
    bottom: 50px;
    left:100px;
    width: 100px;
    height: 40px;


    text-align: center;}

    #bu1{

    position: relative;
    bottom: 90px;
    left:220px;
    width: 200px;
    height: 40px;

            

          }
      
</style>
  
  <body>
  <!-- Este codigo es para la ventana modal darcita -->
<div class="modal fade" id="create" >
  
	<div class="modal-dialog" role="document">
		<div class="modal-content" >
			<div id=""class="modal-header" style=" background-color:#293d3d; color:white;  height:100px;">
	
				<h4  class="modal-title" id="myModalLabel">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        Crear Odontologo</h4>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
    <div class="content" id="nuevodoctor">
<form method="post" action="/odontologo/nuevo" file="true" enctype="multipart/form-data">
<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

                      @csrf
                      <div class="form-group">
                          <label for="nombres">Nombres:</label>
                          <input required type="text" class="form-control-file" name="nombres" id="nombres" placeholder="Ingrese el Nombre ">
                      </div>

                      <div class="form-group">
                          <label for="apellidos">Apellidos:</label>
                          <input required type="text" class="form-control-file" name="apellidos" id="apellidos" placeholder="Ingrese el Apellido">
                      </div>

                      <div class="form-group">
                        <label for="identidad">Identidad:</label>
                        <input required type="number" class="form-control-file" name="identidad" id="identidad" placeholder="Ingrese la Identidad ">
                    </div>

                    <div class="form-group">
                    <label for="telefonoFijo">Telefono fijo:</label>
                    <input required type="number" class="form-control-file" name="telefonoFijo" id="telefonoFijo" placeholder="Ingrese el  Numero del Telefono Fijo">
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular">Telefono celular:</label>
                    <input required  type="number" class="form-control-file" name="telefonoCelular" id="telefonoCelular" placeholder="Ingrese el Numero de Celular">
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input required type="email" class="form-control-file" name="email" id="email" placeholder="Ingrese el Correo Electronico">
                  </div>

                  <div class="form-group">
                    <label for="departamento">Departamento:</label>
                    <select required name="departamento" id="departamento" class="form-control">
                    <option value="" disabled selected>Seleccione un departamento</option>
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
                    <input required type="text" class="form-control-file" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad  en que reside ">
                  
                  </div><div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input required type="text" class="form-control-file" name="direccion" id="direccion" placeholder="Ingrese su direccion">
                  </div>


                 <!-- </div><div class="form-group">
                    <label for="especialidad">Especialidad:</label>
                    <input type="text" class="form-control-file" name="especialidad" id="especialidad" placeholder="Ingrese la Especialidad">
                  </div>  -->

                  <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

            <label for="state_id" class="control-label">Especialidad:</label>
                <select required name="especialidad" class="form-control">
          <option value="" disabled selected>Seleccione una especialidad</option>
         
                    <?php
        $getDoctor =$mysqli->query("select * from especialidads order by id");
        while($f=$getDoctor->fetch_object()) {
          echo $f->id;
          echo $f->Especialidad;

          ?>
          <option value="<?php echo $f->id; ?>"><?php echo $f->Especialidad ?></option>
          <?php
        } 
        ?>


                  
        </select> 
     
        

        <label for="intervalo" class="control-label">Intervalo</label>
        <select required  name="intervalo" id="intervalo" class="form-control">
        <option value="" disabled selected>Seleccione la duracion de la cita</option>
        <option value="10m">10 minutos</option>
        <option value="15m">15 minutos</option>
        <option value="20m">20 minutos</option>
        <option value="30m">30 minutos</option>
        <option value="40">40 minutos</option>
        <option value="50m">50 minutos</option>
        </select>
           <!-- usuario -->
           <label for="user_id" class="control-label">Usuario:</label>
                <select required  name="user_id" class="form-control">
          <option value="" disabled selected>Seleccione un usuario</option>
         
                    <?php
        $getUsuario =$mysqli->query("select * from users order by id");
        while($f=$getUsuario->fetch_object()) {
          echo $f->id;
          echo $f->name;

          ?>
          <option value="<?php echo $f->id; ?>"><?php echo $f->name ?></option>
          <?php
        } 
        ?>


                  
        </select>
        <!-- fin usuario -->
<hr>
        <div class="form-group">
        <label for="file" class="control-label">Fotografia del Odontologo:</label>
        <input type="file" class="form-control-file" name="file" id="direccion" placeholder="Seleccione una Imagen">
      </div>


        </div>
        
        
</div>
 <br>
 <br>

<div>
        <br>
        <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
         Guardar
        </button>
    
        <br>
        <div>
         
        </form  action="">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button id="bu1" type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#especia">Agregar Especialidad</button>
        </div>
        </div>
        </div>

<!-- Modal 2 -->
        <div class="modal fade" id="especia">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Agregar Especialidad Nueva</h4>      
            </div>
              <!--Barra de desplazamiento-->
              <div style="width: 450px; height: 550px; overflow-y: scroll;">
            <div class="modal-body"> 


                    <form method="post" action="/pantallainicio/nueva/especialidad">
                      @csrf
                      <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
       <div class="form-group">
                          <label for="nombres">Nombre:</label>
                          <input required  type="text" class="form-control-file" name="nombres" id="nombres" placeholder="ingresar nombre de la especialidad">
                      </div>

                     
                      
                  <div class="modal-footer">
                  <button type="button" onclick="location.href='/pantallainicio/especialidad'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                  <input type="reset" class="btn btn-danger">
                <button type="submit" class="btn btn-primary" >Guardar </button>
              </div>
                  </form>
                    
                      
                 
      </div>
      
 
      
</div>

<body>

</html>