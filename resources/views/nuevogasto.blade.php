
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
        <div class="modal fade" id="creategasto" data-keyboard="false" data-backdrop="static"tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" >
                <div id="div1"class="modal-header" style="background-color:#276678; color:white; ">
                
  
                    <h3  class="modal-title" id="myModalLabel">
                    <img style=" margin-left:0%;" src="{{ asset('Imagenes/editg.png') }}"   width="20%;" height="20%">
                        Nuevo Gasto
                    </h3>
                    <button type="button" class="close" data-dismiss="modal"    aria-label="Close" id="btncerrar">
                        <span aria-hidden="true">×</span>
                      <span class="sr-only">Cerrar</span></button>
                </div>
            <div class="modal-body">
            
                <form id="formug" action="{{ route('gastos.guardar') }}" method="post">
                    @csrf
                    <!-- Categoria-->
                
                     <div class="form-group" id="divcate">
                    <label for="categoria" class="control-label">Categoría:</label>
              <select required name="categoria" id="categoria" class="form-control">
              <option value="" disabled selected>Seleccione la Categoría</option>
              <option value="Servicios Públicos">Servicios Públicos</option>
              <option value="Provision por Contingencias">Provision por Contingencias</option>
              <option value="Compra de Material de la Clínica">Compra de Material de la Clínica</option>
              <option value="Pago por Alquiler">Pago por Alquiler</option>
              <option value="Marketing, Públicidad y Diseño">Marketing, Públicidad y Diseño</option>
              <option value="Gastos Financieros y Administrativo">Gastos Financieros y Administrativos</option>
            <option value="Mantenimiento y Reparaciones Imprevistas">Mantenimiento y Reparaciones Imprevistas</optio>
            <option value="Nóminas, Salarios y Seguridad Social">Nóminas, Salarios y Seguridad Social</optio>
            <option value="Transportes y logística">Transportes y logísticar</optio>
            <option value="Gastos de kilometraje">Gastos de kilometraje</optio>
            <option value="Impuestos y Tasa">Impuestos y Tasas</option>
            <option value="Gastos por Suministros y Facturas de Servicios">Gastos por Suministros y Facturas de Servicios</option>
            <option value="Servicios de Empresas Externa">Servicios de Empresas Externas</option>
            <option value="Costes de Persona">Costes de Personal</option>
            <option value="Impuestos Específicos y Costos de Distribución">Impuestos Específicos y Costos de Distribución</option>
            <option value="Materias Primas">Materias Primas</option>


              </select>
                    </div>
                   
                    <!-- Detalle-->
                    <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Detalle:</label>
                    <input required type="text" maxlength="150" minlength="3"class="form-control-file" name="detalle" id="detalle" placeholder="Ingrese el detalle del gasto">
                    </div>
                 
                    <!-- Monto-->
                    <div class="form-group" id="div3">
                    <label for="monto" class="control-label">Monto:</label>
                    <input  required type="number" min="1" pattern="^[0-9]+" class="form-control custom-select" name="monto" id="monto" placeholder="Ingrese el monto del gasto" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)">
                    </div>
                 
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div4">
                    <label for="fechafactura" class="control-label">Fecha de la Factura:</label>
                    <input required type="date"  class="form-control-file" name="fechafactura" id="fechafactura" value="2021-01-01">
                    </div>
                   
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div5">
                    <label for="fechapago" class="control-label">Fecha de Pago de la Factura:</label>
                    <input required type="date"  class="form-control-file"  name="fechapago" id="fechapago">
                    </div>
                   
                    <div class="form-group" id="div6">
                    <input  type="reset" class="btn btn-outline-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-outline-info" data-toggle="modal" >
                        Guardar
                    </button>
                    
                   
                    </div>
                </form>
            </div>
        </div>
     </div>

   
   </div><!-- fin padre -->

</body>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
   $("#btncerrar").click(function(event) {
	   $("#formug")[0].reset();
   });
</script>
</html>