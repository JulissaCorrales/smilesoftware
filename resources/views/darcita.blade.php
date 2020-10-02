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
				<form>
        </select> 
            
            
            @foreach($citas as $cita)
              <label for="state_id" class="control-label">Especialidad:</label>
              <select class="form-control" id="state_id">
                  <option value="especialidad">{{$cita->especialidad->nombreEspecialidad}}</option>
              </select>
              <label for="state_id" class="control-label">Doctor:</label>
              <select class="form-control" id="state_id">
              <option value="doctor">{{$cita->odontologo->nombres}} {{$cita->odontologo->apellidos}}</option>
              </select>
              <label for="state_id" class="control-label">Duración:</label>
              <select class="form-control" id="state_id">
              <option value="duracionCita">{{$cita->duracionCita}}</option>
              </select>
              <hr>
              <label for="state_id" class="control-label">Hora:</label>
              <input type="time" name="eta">
              </select>
              <hr>
              <label for="state_id" class="control-label">Fecha:</label>
              <input type="week" name="unasemana"> 
              <hr>
              <button type="submit" class="btn btn-default" formaction="">Continuar</button>
            <input type="reset" class="btn btn-danger">

            
            
            @endforeach 
            
         
          

        
        
        
        </form>
			</div>
</div>