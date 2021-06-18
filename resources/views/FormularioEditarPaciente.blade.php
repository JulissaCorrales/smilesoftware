@extends('datospersonales')
@section('titulo','EditarPaciente')
@section('cuerpo') 

@canany(['isAdmin','isSecretaria','isOdontologo'])
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body id="page-top">
<div>@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                </li>
            @endforeach
         
        </ul>
        
    </div>
@endif</div>
 <div class="card mb-3">
  <div class="card-header">
           <h4><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
          </svg>Editar Datos del Pacientes</h4>
          <p>En esta ventana  muestra los pacientes que se han registrado  en la clínica, <br> en esta misma se podrá crear un nuevo paciente, editar información, eliminar el paciente.</p>
      </div>
  <div class="card-body">
      
      <table  style=" border-spacing: 5px;">
            <form method="post" action="{{route('paciente.update',['id'=> $pacientes-> id])}} " file="true" enctype="multipart/form-data"   id="scroll"  class="row g-3">
                      @csrf
                      @method('put')
                      <div class="row">
                      <div class="col-md-6" >
                        <label for="nombres" lass="form-label " > Nombres: </label>
                        <input required type="text" class="form-control " style="font-size:18px; font-family: Times New Roman, Times, serif;" name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $pacientes->nombres }}" >
                       </div>

                     
                      <div class="col-md-6">
                          <label for="apellidos" lass="form-label " >Apellidos:</label>
                          <input required type="text" class="form-control " name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $pacientes->apellidos }}">
                        </div>
                      </div>
                     <div class="row">
                      <div class="col-md-6">
                        <label for="identidad"lass="form-label " >Identidad:</label>                
                        <input required type="number"style="font-size:18px; font-family: Times New Roman, Times, serif;" class="form-control " name="identidad" id="identidad" placeholder="ingresar identidad del paciente" maxlength="13"value="{{ $pacientes->identidad }}">
                        </div>

                      <div class="col-md-6">
                        <label for="identidad" class="form-label ">Género:</label>
 
                      <select class="form-control"  name="sexo" id="sexo">
                            <option value="{{ $pacientes->sexo }}" selected>Género Actual:{{ $pacientes->sexo }}</option>
                            <option>Masculino</option>
                            <option>Femenino</option>                        
                          </select>
                          </div>
                       </div>

                      <div class="row">
                      <div class="col-md-6">
                        <label for="fechaNacimiento" lass="form-label " >Fecha de Nacimiento:</label>
                      
                        <input type="date" required class="form-control " name="fechaNacimiento" id="fechaNacimiento" placeholder="ingresar fecha de nacimiento del paciente"  value="{{ $pacientes->fechaNacimiento }}">
                        </div>
                      

                      <div class="col-md-6">
                        <label for="departamento" lass="form-label ">Departamento:</label>
                        <select name="departamento" id="departamento" class="form-control select-css">
                            <option name="departamento" selected value="{{ $pacientes->departamento }}"
                             >Departamento Actual: {{ $pacientes->departamento }}</option>
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
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                        <label for="ciudad" lass="form-label ">Ciudad:</label>

                        <input required type="text"class="form-control " name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $pacientes->ciudad }}">
                          </div>

                  
                      <div class="col-md-6">
                        <label for="direccion"lass="form-label ">Dirección:</label>

                            <input required type="text" class="form-control " name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $pacientes->direccion }}">
                          </div>
                      </div>

                       <div class="row">
                      <div class="col-md-6">
                        <label for="telefonoCelular" lass="form-label ">Número Teléfonico:</label>

                            <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;"class="form-control " name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $pacientes->telefonoCelular }}">
                          </div>


                   
                      <div class="col-md-6">
                        <label for="observaciones" class="col-sm form-label">Observaciones:</label>
                        
                            <textarea   type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;"class="form-control " name="observaciones" id="observaciones" placeholder="Alguna observacion?"  value="{{ $pacientes->observaciones }}">{{ $pacientes->observaciones }}</textarea>
                          </div>
                    
                     </div>
                    <div class="row" style="margin-top:1em;">
                     <div class="col-md-6">
                         <label  class=" form-label">Cambie la foto de perfil aquí:</label>
                        <input accept="image/*" type="file" class="form-control-file" name="file" id="imagen" placeholder="Seleccione una Imagen">
                        </div>
                         <div class="col-md-6">
                        <label for="direccion" class="form-label ">Direccion:</label>

                            <textarea  required type="text" class="form-control" name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $pacientes->direccion }}">{{ $pacientes->direccion }}</textarea>
                          </div>
                     </div>
                      <div class="modal-footer" >
                      @canany('update',$pacientes)
                        
                          <button  type="button" onclick="location.href='/pantallainicio/vista'" class="btn btn-secondary" data-dismiss="modal" >Atrás</button>
                            <input type="reset" class="btn btn-danger">           
                          <button type="submit" class="btn btn-primary" style="background-color:#276678; " >Guardar Paciente</button>
                      
                   @endcan</div>
                      <div class="card-footer"></div>
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
            </form>
                    
      </table>
 </div>         
               
   </div>           

</body>


</html>
@endcanany
@endsection 
