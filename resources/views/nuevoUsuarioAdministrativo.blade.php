
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
 form{background-color:#F2F3F4;padding:30px;}
 #div1{background-color: #AED6F1}
 button{float:right;}
    
    </style>
</head>
<body>
   <div class="container"><!-- padre -->
     <!-- Este codigo es para la ventana modal gasto nuevo -->
        <div class="modal fade" id="createadministrativo" >
            <div class="modal-dialog" role="document">
                <div class="modal-content" >
                <div id="div1"class="modal-header">
                
  
                    <h4  class="modal-title" id="myModalLabel">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                         nuevo usuario administrativo
                    </h4>
                    <button type="button" class="close" data-dismiss="modal"    aria-label="Close">
                    <span span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            
                <form action="{{ route('administrativo.guardar') }}" method="post">
                    
                    @csrf
                    
                    <div class="form-group">
                        <label for="nombres">Nombres:</label>
                        <input type="text" class="form-control-file" name="nombres" id="nombres" placeholder="Ingrese el Nombre ">
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control-file" name="apellidos" id="apellidos" placeholder="Ingrese el Apellido">
                    </div>

                    <div class="form-group">
                      <label for="identidad">Identidad:</label>
                      <input type="text" class="form-control-file" name="identidad" id="identidad" placeholder="Ingrese la Identidad ">
                  </div>

                  <div class="form-group">
                  <label for="telefonoFijo">Telefono fijo:</label>
                  <input type="text" class="form-control-file" name="telefonoFijo" id="telefonoFijo" placeholder="Ingrese el  Numero del Telefono Fijo">
                </div>

                <div class="form-group">
                  <label for="telefonoCelular">Telefono celular:</label>
                  <input type="text" class="form-control-file" name="telefonoCelular" id="telefonoCelular" placeholder="Ingrese el Numero de Celular">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control-file" name="email" id="email" placeholder="Ingrese el Correo Electronico">
                </div>

                <div class="form-group">
                  <label for="departamento">Departamento:</label>
                  <select name="departamento" id="departamento" class="form-control">
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
                  <option >Yoro:</option>

              </select>
                </div>

                <div class="form-group">
                  <label for="ciudad">Ciudad:</label>
                  <input type="text" class="form-control-file" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad  en que reside ">
                
                </div><div class="form-group">
                  <label for="direccion">Direccion:</label>
                  <input type="text" class="form-control-file" name="direccion" id="direccion" placeholder="Ingrese su direccion">
                </div>


                   
                    <div class="form-group" id="div6">
                    <input type="reset" class="btn btn-danger">
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