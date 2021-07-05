@extends('Plantilla.dashboard')
@canany(['isAdmin','isSecretaria','isOdontologo'])
@section('content')

<!DOCTYPE html>

<!--<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@section('titulo', 'DirectorioPaciente')</title>-->

  <!-- Custom fonts for this template-->
 <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->

  <!-- Page level plugin CSS-->
  <!--<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">-->

  <!-- Custom styles for this template-->
  <!--<link href="css/sb-admin.css" rel="stylesheet">-->

<!--</head> -->
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(session('mensaje'))
<div class="alert alert-success">
{{session('mensaje')}}
</div>
@endif

<body id="page-top">

  
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <h4><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
            </svg>Pacientes</h4>
            <p>En esta ventana  muestra los pacientes que se han registrado  en la clínica, en esta misma se podrá crear un nuevo paciente, editar información, eliminar el paciente.</p>
            
    </div>

            <div style="width:;">@can('descargarPacientes', App\Paciente::class)
            <button type="button"style="position:relative; margin: 10px;"  class="btn btn-warning" href="{{route('descargarPDFPacientes')}}"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
              <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
            </svg> 
                    Descargar Paciente </button>
            </div>
            @endcan
        <!-- boton de nuevo paciente -->
        <div style="width:;">
            <button type="button"  class="btn btn-outline-info" data-toggle="modal" data-target="#Crearpaciente" style="position:relative; margin: 10px; " >
              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-node-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5a.5.5 0 0 0-1 0v2h-2a.5.5 0 0 0 0 1h2v2a.5.5 0 0 0 1 0v-2h2a.5.5 0 0 0 0-1h-2v-2z"/>
            </svg>
            Nuevo Paciente
            </button>
        </div>
    <!-- 1.modal crear paciente -->
    <div class="modal fade bd-example-modal-lg" id="Crearpaciente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #276678;color:white;">
            <h5 class="modal-title" id="exampleModalLabel">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
             <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            Crear Paciente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- <div style="width: 450px; height: 550px; overflow-y: scroll;"> -->
        <div class="modal-body">
            <!--Contenido -->
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
                      <label for="fechaNacimiento">Fecha de Nacimiento:</label>
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
                    <textarea  class="autoExpand form-control" rows='2' data-min-rows='2' type="text" style="  width:700;" class="form-control text-center" name="observaciones" id="observaciones" placeholder="Ingrese la Observación (opcional)"></textarea>
                    
                  </div>
                  </div>
                  </div>

                  <div class="modal-footer">
                  <button type="button" onclick="location.href='/pantallainicio/vista'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                  <input type="reset" class="btn btn-danger">
                <button type="submit" class="btn btn-primary" >Guardar Paciente</button>
              </div>
                  </form> 
            <p id="resultado"></p>
            <!-- fin contenido -->
        </div>
    </div>
  
    <!-- Fin modal nuevo paciente -->
</div>

            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Identidad</th>
                    <th>Acción</th>
                  
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Identidad</th>
                    <th>Acción</th>
                    
                  </tr>
                </tfoot>
                <tbody>
                @forelse($pacientes as $paciente)
    <tr >
     <td>@canany(['isAdmin','isOdontologo','isSecretaria'])

<a  href="/pantallainicio/vista/paciente/{{$paciente->id}}/editar" >@endcanany<img class="logo" src='/Imagenes/{{$paciente->imagen}}'  width="60px"
height= "60px" style="border-radius:50%;">
</a>  {{$paciente->nombres}} {{$paciente->apellidos}} </td>

<td>{{$paciente->identidad}}</td>
     
    <td>
    

    <a type="button" class="btn btn-outline-success" href="/pantallainicio/vista/paciente/{{$paciente->id}}/editar"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
  <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
</svg>Editar
          </a>
          @canany(['isAdmin'])
        
      <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-{{$paciente->id}}"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
        </svg>
          
       @endcanany  </button> 
    </td>


  <div class="modal fade" id="modal-{{$paciente->id}}"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="  position: absolute;
  left: 480px;
  top:  50px; ">
          <div class="modal-content">
              <div class="modal-header" style="background-color:#276678; color:white;    ">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> Eliminar Paciente</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 
                  </button>
              </div>
              <div class="modal-body"  >
                  ¿Desea realmente eliminar el paciente {{$paciente->nombres}} {{$paciente->apellidos}}?
              </div>
              <div class="modal-footer" style=" width: 500px;
  height: 80px;">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"  >Cerrar</button>
                  <form method="post" action="{{route('paciente.borrar',['id'=>$paciente->id])}}">
                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger"  ;
  left: 380px;
  top:  160px;">
 
          
                  </form>
              </div>
          </div>
      </div>
  </div>

  @empty
     <td colspan="5"><h3>¡¡No hay Pacientes Existentes!!</h3></td>
  
    </tr>
    @endforelse
    
                
                  
                </tbody>
              </table>
            </div>
          </div>
        
  

  </div>
  <!-- /#wrapper -->

<script>
$(document).ready( function () {
    $('#datatable1').DataTable( {
    language: {
        search: "Búsqueda por nombre o identidad:",
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
        "infoEmpty": "Mostrando 0 to 0 of 0 Pacientes",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Pacientes",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    }
});
} );

</script>

<script>
fuction existeFecha(fechaNacimiento){

var fechaf= fechaNacimiento.split("/");

var day = fechaf[0];
var month= fechaf[1];
var year= fechaf[2];
var date = new Date(year,month,'0');
 
if((day-0) >(date.getDate()-0)){
return false; }

return true;
}

</script>
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

<script>



</script>

</body>

</html>

@endsection

@endcanany