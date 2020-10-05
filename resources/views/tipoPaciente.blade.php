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
          <div class="tab-pane fade show active" id="pacienteExistente" role="tabpanel" aria-labelledby="v-pills-home-tab">formulario para paciente existente</div>
          <div class="tab-pane fade" id="pacienteNuevo" role="tabpanel" aria-labelledby="v-pills-profile-tab">formulario para paciente nuevo</div>
        </div>
        
      </div><!--final del cuerpo del modal-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>