<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
      #divv9{

        
        
        background-color:#33cccc;
    height: 100px;
  }

  #myModalLabel{
    
  font-family: "Times New Roman";
            font-size: 25px;
            border-bottom: 5px solid #00cccc;
  }

  #w3review{

position: absolute;
top: 20px;
left: 20px;
overflow-y:scroll;
      overflow-x:hidden;



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
  <!-- Este codigo es para la ventana modal darcita -->
<div class="modal fade" id="create" >
  
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content" style=" position: absolute;width: 500px;height: 400px;  background-color:#c1f0f0; ">
			<div id="divv9"class="modal-header">
	
				<h6  class="modal-title" id="myModalLabel">
        <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
              </svg> Crear Comentario Administrativo</h6>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"  style=" position: absolute;top:90px; width: 100px;height: 100px;  " >

     <form method="POST" action="">
           @csrf
<div>

<textarea required id="w3review" name="caja" value="" rows="4" cols="50" placeholder="ingresar comentario  del paciente" ></textarea>


<button type="submit" class="btn btn-primary" style=" position: absolute;top:170px;left: 400px;" >Guardar </button>
</div>
</form>
  
</div>

<body>

</html>