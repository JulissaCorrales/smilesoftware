
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
 form{padding:30px;}
 #div1{background-color: #AED6F1}    
    </style>
</head>
<body>
   <div class="container"><!-- padre -->
     <!-- Este codigo es para la ventana modal gasto nuevo -->
        <div class="modal fade" id="creategasto" >
            <div class="modal-dialog" role="document">
                <div class="modal-content" >
                <div id="div1"class="modal-header" style="background-color:#276678; color:white;  height:80px;">
                
  
                    <h4  class="modal-title" id="myModalLabel">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                        Nuevo Gasto
                    </h4>
                    <button type="button" class="close" data-dismiss="modal"    aria-label="Close">
                    <span span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            
                <form action="{{ route('gastos.guardar') }}" method="post">
                    @csrf
                    <!-- Categoria-->
                
                    <div class="form-group" id="divcate">
                    <label for="categoria" class="control-label">Categoria:</label>
                    <input required type="text"  class="form-control-file" placeholder="Ingrese la categoria del gasto" name="categoria" id="categoria  "> 
                    </div>
                   
                    <!-- Detalle-->
                    <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Detalle:</label>
                    <input required type="text"  class="form-control-file" name="detalle" id="detalle" placeholder="Ingrese el detalle del gasto">
                    </div>
                 
                    <!-- Monto-->
                    <div class="form-group" id="div3">
                    <label for="monto" class="control-label">Monto:</label>
                    <input required type="number"  step="any" class="form-control-file" name="monto" id="monto" placeholder="Ingrese el monto del gasto">
                    </div>
                 
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div4">
                    <label for="fechafactura" class="control-label">Fecha de la Factura:</label>
                    <input required type="date"  class="form-control-file" name="fechafactura" id="fechafactura" >
                    </div>
                   
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div5">
                    <label for="fechapago" class="control-label">Fecha de Pago de la Factura:</label>
                    <input required type="date"  class="form-control-file"  name="fechapago" id="fechapago">
                    </div>
                   
                    <div class="form-group" id="div6">
                    <input  type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Continuar
                    </button>
                    
                   
                    </div>
                </form>
            </div>
        </div>
     </div>

   
   </div><!-- fin padre -->
</body>
</html>