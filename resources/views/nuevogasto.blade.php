
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
                <div id="div1"class="modal-header" style="background-color:#276678; color:white; ">
                
  
                    <h3  class="modal-title" id="myModalLabel">
                    <img style=" margin-left:0%;" src="{{ asset('Imagenes/editg.png') }}"   width="20%;" height="20%">
                        Nuevo Gasto
                    </h3>
                    <button type="button" class="close" data-dismiss="modal"    aria-label="Close">
                    <span span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            
                <form action="{{ route('gastos.guardar') }}" method="post">
                    @csrf
                    <!-- Categoria-->
                
                    <div class="form-group" id="divcate">
                    <label for="categoria" class="control-label">Categoría:</label>
                    <input required type="text" maxlength="100" minlength="3" class="form-control  @error('categoria') is-invalid @enderror" placeholder="Ingrese la categoría del gasto" name="categoria" id="categoria  "> 
                    @error('categoria')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                   
                    <!-- Detalle-->
                    <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Detalle:</label>
                    <input required type="text" maxlength="255" class="form-control-file" name="detalle" id="detalle" placeholder="Ingrese el detalle del gasto">
                    </div>
                 
                    <!-- Monto-->
                    <div class="form-group" id="div3">
                    <label for="monto" class="control-label">Monto:</label>
                    <input  required type="number" min="1" pattern="^[0-9]+" class="form-control custom-select" name="monto" id="monto" placeholder="Ingrese el monto del gasto" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)" >
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
                    <input  type="reset" class="btn btn-outline-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-outline-info" data-toggle="modal" >
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