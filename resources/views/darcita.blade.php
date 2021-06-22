<html>
<!-- para que funcione el auto ecpandir del textarea: -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
      #div1{background-color:#276678;}
      #botonContinuar{text-align: center;}
      .control-label{margin:1em;}
      textarea{  
        display:block;
        box-sizing: padding-box;
        overflow:hidden;
        width:400;

        border-radius:6px; 
      }
      #comentarios{margin-left:2em;
      margin-right:2em;}
      #observaciones{margin-left:2em;
      margin-right:2em
      }


      
      
</style>
  
  <body>
  <!-- Este codigo es para la ventana modal darcita -->
<div class="modal fade" id="create" >
  
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content" >
			<div id="div1"class="modal-header" style="background-color:#276678;color:white">
	
				<h4  style="padding:0.1em;"class="modal-title" id="myModalLabel">
        <svg width="1em" height="1em" color="white" viewBox="0 0 16 16" class="bi bi-file-ruled" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6H6v2h7V7zm0 3H6v2h7v-2zm0 3H6v2h6a1 1 0 0 0 1-1v-1zm-8 2v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2z"/>
      </svg>
        Agendar Cita</h4>
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
				<form method="post"  action="/darcita" >
        @csrf
       
        <!-- Doctor -->
        <label for="state_id" class="control-label">Doctor y su especialidad:</label>
        <select required  name="odontologo_id" class="form-control">
        <option value="" disabled selected>Seleccione un Doctor</option>
        
           @forelse($odontologos as $odontologos)
         <option value="{{$odontologos->id}}">
         {{$odontologos->nombres}}  {{$odontologos->apellidos}}
          --Especialidades:
                   @forelse ($odontologos->especialidades as $tag) 
                    {{ $tag->Especialidad}},
                    <hr>
                    @empty
                    @endforelse
          </option>
              @empty
          No hay odontologo.¡¡Cree uno por favor!!
          @endforelse
      
        </select>
        
       <!-- Duracion (en duda)-->
        <div class="row">
          <div class="col-md-6">
              <label for="duracionCita" class="control-label">Duración de la cita:</label>
              <select required name="duracionCita" id="duracionCita" class="form-control">
              <option value="" disabled selected>Seleccione la duración de la cita</option>
              <option value="10m">10 minutos</option>
              <option value="15m">15 minutos</option>
              <option value="20m">20 minutos</option>
              <option value="30m">30 minutos</option>
              <option value="40">40 minutos</option>
              <option value="50m">50 minutos</option>
              </select>
          </div>
          <div class="col-md-6">
            <label for="hora" class="control-label">Fecha y Hora:</label>
            <input class="form-control" required type="datetime-local" name="stard" id="hora">
          </div>
        
        </div>
        
        <!-- Paciente_id -->


          
        <label for="state_id" class="control-label">Paciente:</label>
        <div class="row">
          <div class="col-md-10"> 
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
          <div class="col-md-2">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <button type="button"  class="btn btn-outline-info form-control" data-toggle="modal" data-target="#npaciente">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
              <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
                </button> 
          </div>
                 
    
        </div>
        <div class="container">
          <!-- comentario -->
          <label for="comentarios" id="comentariolabel" class="control-label">Comentarios:</label>
          <textarea class='autoExpand' rows='3' data-min-rows='3'cols="40" class="form-control" required type="text" name="comentarios" id="comentarios" placeholder="Escriba el comentario sobre el paciente aquí"></textarea>
        
        </div>
        <!-- boton continuar -->
        <div class="container-fluid h-100"> 
        <div class="row w-100">
            <div class="col v-center">
                  <button id="botonContinuar" style="margin:1em;" type="submit"class="btn btn-primary d-block mx-auto" data-toggle="modal" >
                    Continuar
                  </button>
            </div>  
        </div>


    </div>

      
      
        
        
        </form>
      
       
        </div>
        </div>
        </div>
        </div>
        </div>

<!-- Modal 2 -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="npaciente">
        <div class="modal-dialog modal-lg " role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #276678;color:white;">
              <h4 class="modal-title" id="myModalLabel">

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
             <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
              Paciente Nuevo</h4> 
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>     
            </div>
              <!-- Barra de desplazamiento
              <div style="width: 450px; height: 550px; overflow-y: scroll;"> -->
            <div class="modal-body"> 

      <form id="formupaciente" method="post" action="/pantallainicio/vista/pacienteNuevo" enctype="multipart/form-data" onsubmit = "return calcularEdad(document.getElementById('fechanaci').value)">
            @csrf
               <div class="form-group">
                        <div class="row">
                          <div class="col-md-4">
                              <label for="nombres">Nombres:</label>
                               <input  type="text" class="form-control"name="nombres" id="nombres" placeholder="Ingrese los Nombres del Paciente">
                          </div>
                          <div class="col-md-4">
                             
                          <label for="apellidos">Apellidos:</label>
                          <input  type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese los Apellidos del Paciente">
                          </div>
                          <div class="col-md-4">  
                            <label for="direccion">Seleccione una Imagen de Perfil:</label>
                            <input accept="image/*" class="form-control" type="file" class="form-control-file" name="file" id="imagen" placeholder="Seleccione una Imagen">
                          </div>
                        </div>
                          
                      </div>

                      <div class="form-group">

                      <div class="row">
                        <div class="col-md-6">
                          <label for="identidad">Número de identidad:</label>
                          <input type="number" class="form-control" name="identidad" id="identidad" placeholder="Ingrese la  Identidad del Paciente">
                        </div>
                        <div class="col-md-6">
                          <label for="sexo">Género :</label>
                          <select class="form-control"  name="sexo" id="sexo">
                            <option disabled selected>Seleccione el Género</option>
                            <option>Masculino</option>
                            <option>Femenino</option>                        
                          </select>
                        </div>
                      </div>
                       
                    </div>
                    
                           
<?php $fecha_actual= date("d-m-Y");  ?>
                    <div class="form-group">
                      <div class="row">
                         <div class="col-md-6">
                      <label for="fechaNacimiento">Fech.Nacimiento:</label>
                      <input type="date" class="form-control form-control-file" name="fechaNacimiento" id="fechaNacimiento" placeholder="Ingrese la Fech.de Nacimiento "  value="{{old('fechaNacimiento')}}"  min="<?php echo date('Y-m-d',strtotime($fecha_actual."- 100 year")); ?>"
 max="<?php echo date('Y-m-d',strtotime($fecha_actual
."- 5 year"));?>" required>
                  </div>
                        
                    <div class="col-md-6">
                      <label for="telefonoCelular">Número Teléfonico:</label>
                      <input type="number" class="form-control" name="telefonoCelular" id="telefonoCelular" placeholder="Ingrese el Número Teléfonico del Paciente">
                    </div>
                       
                      </div>
                      
                  </div>

                  <div class="form-group">

                  <div class="row">

    <div class="col-md-6">
                          <label for="departamento">Departamento:</label>
                          <select name="departamento" id="departamento" class="form-control select-css">
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
<div class="col-md-6">
                      <label for="ciudad">Ciudad:</label>
                      <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ingrese el Nombre la Ciudad en que reside el Paciente">
                    </div>
                    
                   
                  </div>
                  </div>
            
               
                  <div class="form-group">

                  <div class="row">
                  <div class="col-md-6">
                      <label for="direccion">Dirección:</label>
                      <textarea  class="autoExpand form-control" rows='2' data-min-rows='2' type="text" style="  width:370;"  class="form-control" name="direccion" id="direccion" placeholder="Ingrese la dirección del paciente"></textarea>
                    </div>
              <div class="col-md-6">
                    <label for="observaciones">Observaciones:</label>
                    <textarea  rows='2' data-min-rows='2' type="text" style="  width: 300px;;"  class="autoExpand form-control" name="observaciones" id="observaciones" placeholder="Ingrese la Observación (opcional)"></textarea>
                    
                  </div>
                  </div>
                  </div>

                  <div class="modal-footer">

                  <input type="reset" class="btn btn-danger">
                <button type="submit" class="btn btn-primary" >Guardar Paciente</button>
              </div>
                  </form> 
                  </div>
                  </div>
               


      
        
        
        
        
        
      </div>
      
 
      
</div>

<body>

<!-- script para que textarea de cita se adecue al texto que se va ingresando -->
<script>
// Applied globally on all textareas with the "autoExpand" class
$(document)
    .one('focus.autoExpand', 'textarea.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', 'textarea.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
        this.rows = minRows + rows;
    });
</script>
<!--  -->
<!-- El siguiente script es para que la foto de perfil solo acepte imagenes -->
        <script type="text/javascript">
                    (function(){
                        function filePreview(input){
                            if (input.files && input.files[0]){
                                var reader = new FileReader();

                                reader.onload = function(e){
                                    $('#imagePreview').html("<img src='"+e.target.result+"' />");
                                }

                                reader.readAsDataURL(input.files[0]);
                            }
                        }

                        $('#imagen').change(function(el){
                    if(LimitAttach(this,1))
                            filePreview(this);
                        });
                    })();
                    </script>
                    <script type="text/javascript">
                    function LimitAttach(tField,iType) {
                        file=tField.value;
                        if (iType==1) {
                        extArray = new Array(".jpeg",".jpe",".gif",".jpg",".png");
                        }	
                        allowSubmit = false;
                        if (!file) return false;
                        while (file.indexOf("\\") != -1) file = file.slice(file.indexOf("\\") + 1);
                    ext = file.slice(file.indexOf(".")).toLowerCase();
                    for (var i = 0; i < extArray.length; i++) {
                        if (extArray[i] == ext) {
                        allowSubmit = true;
                        break;
                        }
                        }
                        if (allowSubmit) {
                    return true
                        } else {
                        tField.value="";
                        alert("Usted sólo puede subir archivos con extensiones " + (extArray.join(" ")) + "\n ¡¡Por favor escoja otra imagen!!");
                    return false;
                        setTimeout("location.reload()",2000);
                        }
                        }	
                    </script>
</html>
