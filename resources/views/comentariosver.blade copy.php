



<!DOCTYPE html>
<html>


  
  <body>
  <!-- Este codigo es para la ventana modal darcita -->
<!-- modal para crear paciente -->
 <div class="modal fade" id="create"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document" >
                                            <div class="modal-content" style="position:absolute; left:50px; top:100px;">
                                                <div class="modal-header"style="background-color:#276678; color:white;  height:80px; ">
                                                    <h5 class="modal-title" id="exampleModalLabel"> <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
                                                </svg>Crear Comentario Administrativo</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
			</div>


		<div class="modal-body"  style=" position: absolute;top:90px; left: 50px; width: 100px;height: 100px;  " >
     <form method="post" action="{{route('comentario.guardar',['id'=>$pacientes->id])}}" enctype="multipart/form-data">
           @csrf
        <?php
          $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
          $mysqli->set_charset("utf8");
          ?>
      <div class="form-group">
        <textarea required id="w3review" name="caja" value="text" rows="4" cols="52" placeholder="ingresar comentario  del paciente" ></textarea>
        
       </div>
        <div id="disv4"class="modal-footer">
<button type="submit" style="margin-left:200%;" class="btn btn-primary" id="guardar" >Guardar </button>
</div>     
 </form>
  
     </div>
</div>
</div>
</div>
<body>

</html>
