<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
      #divv9{

        
        
    background-color:#293d3d; color:white;  height:100px;
  }

  #myModalLabel{
    text-shadow: -1px 0 #ccfff5, 0 1px #ccfff5, 1px 0 #009999, 0 -1px #009999;
  font-family: "Times New Roman";
            font-size: 30px;
            border-bottom: 5px solid #00cccc;
  }


      #botonContinuar{
        position: absolute;
    top: 990px;
    left:100px;
    width: 100px;
  height: 40px;

          
          text-align: center;}

          #bu1{

            position: absolute;
    top:990px;
    left:220px;
    width: 200px;
  height: 40px;

            

          }
      
</style>
  
  <body>
  <!-- Este codigo es para la ventana modal de crear nuevo paciente -->
<div class="modal fade" id="create" data-keyboard="false" data-backdrop="static" >
  
	<div class="modal-dialog" role="document">
		<div class="modal-content" style=" color:#666699; ">
			<div id="divv9"class="modal-header">
	
				<h4  class="modal-title" id="myModalLabel">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        Crear Paciente</h4>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
    <div class="content" id="nuevodoctor">
    <form method="post" action="/pantallainicio/vista/pacienteNuevo" file="true" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="nombres">Nombres:</label>
                          <input required type="text" class="form-control-file" name="nombres" id="nombres" placeholder="ingresar nombre del paciente">
                      </div>

                      <div class="form-group">
                          <label for="apellidos">Apellidos:</label>
                          <input required type="text" class="form-control-file" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente">
                      </div>

                      <div class="form-group">
                        <label for="identidad">Identidad:</label>
                        <input required type="number" class="form-control-file" name="identidad" id="identidad" placeholder="ingresar identidad del paciente">
                    </div>
                    <div class="form-group">

                        <label for="sexo">Sexo :</label>
                        <select required  name="sexo" id="">
                        <option disabled selected>Seleccione el sexo</option>
                          <option>Masculino</option>
                          <option>Femenino</option>
                        
                        </select>
                    </div>

                    

                    <div class="form-group">
                      <label for="fechaNacimiento">Fecha de nacimiento:</label>
                      <input required type="date" class="form-control-file" name="fechaNacimiento" id="fechaNacimiento" placeholder="ingresar fecha de nacimiento del paciente">
                  </div>

                  <div class="form-group">
                    <label for="departamento">Departamento:</label>
                    <select  name="departamento" id="departamento" class="form-control" required>
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
                    <input type="text" required class="form-control-file" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente">
                  
                  </div><div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" required class="form-control-file" name="direccion" id="direccion" placeholder="ingresar direccion del paciente">
                  </div>
               
                  <div class="form-group">
                    <label for="telefonoFijo">Telefono fijo:</label>
                    <input type="number"  required class="form-control-file" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente">
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular">Telefono celular:</label>
                    <input  required type="number" class="form-control-file" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente">
                  </div>

                  <div class="form-group">
                    <label for="profesion">Profesion:</label>
                    <input  required type="text" class="form-control-file" name="profesion" id="profesion" placeholder="ingresar profesion del paciente">
                  </div>

                  <div class="form-group">
                    <label for="empresa">Empresa:</label>
                    <input required type="text" class="form-control-file" name="empresa" id="empresa" placeholder="ingresar la empresa donde trabaja el paciente">
                  </div>

                  <div class="form-group">
                    <label for="observaciones">Observaciones:</label>
                    <input  required type="text" class="form-control-file" name="observaciones" id="observaciones" placeholder="Alguna observacion?">
                   
                  </div>

                  <div class="form-group">
                    <input   type="file" class="form-control-file" name="file" id="" placeholder="Seleccione una Imagen">
                  </div>

                  <div class="modal-footer">
                  <button type="button" onclick="location.href='/pantallainicio/vista'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                  <input type="reset" class="btn btn-danger">
                  <button type="submit" class="btn btn-primary" >Guardar </button>
              </div>
                  </form>

<body>

</html>