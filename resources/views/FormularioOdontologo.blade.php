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
<div class="modal fade" id="editar" >
  
	<div class="modal-dialog" role="document">
		<div class="modal-content" >
			<div id="div1"class="modal-header">
	
				<h4  class="modal-title" id="myModalLabel">
        <svg width="2em" height="2em" color="#fff" viewBox="0 0 16 16" class="bi bi-file-ruled" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6H6v2h7V7zm0 3H6v2h7v-2zm0 3H6v2h6a1 1 0 0 0 1-1v-1zm-8 2v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2z"/>
      </svg>
        Editar Odontologo</h4>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
    <div class="content" id="n">
    <form method="post"  action=" ">
    <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
                      @csrf
                      @method('put')
                    <div class="form-group">
                        <label for="nombres" class="col-sm-2 col-form-label col-form-label-lg" >Nombres:</label>
                        <div >
                        <input type="text" class="form-control form-control-sm" name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $odontologos->nombres }}" >
                        </div>
                    </div>

              
                      <div class="form-group">
                          <label for="apellidos" class="col-sm-2 col-form-label col-form-label-lg" >Apellidos:</label>
                          <div >
                          <input type="text" class="form-control form-control-sm" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $odontologos->apellidos }}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="identidad"class="col-sm-2 col-form-label col-form-label-lg">Identidad:</label>
                        <div>
                        <input type="text" class="form-control form-control-sm" name="identidad" id="identidad" placeholder="ingresar identidad del paciente"  value="{{ $odontologos->identidad }}">
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="telefonoFijo" class="col-sm-2 col-form-label col-form-label-lg">Teléfono fijo:</label>
                    <div >
                    <input type="text" class="form-control form-control-sm" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente"  value="{{ $odontologos->telefonoFijo}}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular" class="col-sm-2 col-form-label col-form-label-lg">Teléfono celular:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $odontologos->telefonoCelular }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular" class="col-sm-2 col-form-label col-form-label-lg">Email:</label>
                  <div >
                    <input type="email" class="form-control form-control-sm" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $odontologos->telefonoCelular }}">
                  </div>
                  </div>

                    
                  <div class="form-group">
                    <label for="departamento" class="col-sm-2 col-form-label col-form-label-lg">Departamento:</label>
                    <div >
                    <input type="text" class="form-control form-control-sm" name="departamento" id="departamento" placeholder="ingresar departamento del paciente"  value="{{ $odontologos->departamento }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="ciudad" class="col-sm-2 col-form-label col-form-label-lg">Ciudad:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $odontologos->ciudad }}">
                  </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="direccion" class="col-sm-2 col-form-label col-form-label-lg">Dirección:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $odontologos->direccion }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="profesion" class="col-sm-2 col-form-label col-form-label-lg">Especialidad:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="profesion" id="profesion" placeholder="ingresar profesion del paciente"  value="{{ $odontologos->especialidad_id }}">
                  </div>
                  </div>
               
                  

                  

                
               
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

</div>
 <br>
 <br>

<div>
        <br>
        <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
          Continuar
        </button>
    
        <br>
       
                  </div>
                  </div>
               


      
        
        
        
        
        
      </div>
      
 
      
</div>

<body>

</html>