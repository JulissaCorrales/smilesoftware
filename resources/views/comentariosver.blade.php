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
            font-size: 20px;
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
  
	<div class="modal-dialog" role="document">
		<div class="modal-content" style=" position: absolute;
   
   width: 500px;
 height: 400px;">
			<div id="divv9"class="modal-header">
	
				<h6  class="modal-title" id="myModalLabel">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        Crear Comentario Administrativo</h6>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"  style=" position: absolute;

      top:90px;
   
   width: 100px;
 height: 100px;" >

    <form method="POST" action="">
@csrf
<div>


<textarea id="w3review" name="caja" value="text" rows="4" cols="50" placeholder="ingresar nombre del paciente" >

</textarea>



<button type="submit" class="btn btn-primary" style=" position: absolute;

top:170px;
left: 400px;
" >Guardar </button>
</div>
</form>
  
</div>

<body>

</html>