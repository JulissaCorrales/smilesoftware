@extends('Plantilla.datospersonales')
@section('titulo','EditarPaciente')
@section('cuerpo') 

@canany(['isAdmin','isSecretaria','isOdontologo'])

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
           <h4> <img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/editar.png') }}"  id="logo1" width="3%;" height="3%"><b>Editar Datos Personales del Paciente:</b>   {{$pacientes->nombres}} {{$pacientes->apellidos}}</h4>
          <p>En esta sección se puede editar los datos personales del Paciente.</p>
      </div>
  <div class="card-body">
      
      <table  style=" border-spacing: 5px;">
            <form method="post" action="{{route('paciente.update',['id'=> $pacientes-> id])}} " file="true" enctype="multipart/form-data"   id="scroll"  class="row g-3" >
                      @csrf
                      @method('put')
                      <div class="row" style=" margin:25px;">
                      <div class="col-md-6" >
                        <label for="nombres" class="form-label " > Nombres: </label>
                        <input required type="text" class="form-control " style="font-size:18px; font-family: Times New Roman, Times, serif; " name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $pacientes->nombres }}" >
                       </div>

                     
                      <div class="col-md-6">
                          <label for="apellidos" class="form-label " >Apellidos:</label>
                          <input required type="text" class="form-control " name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $pacientes->apellidos }}">
                        </div>
                      </div>
                     <div class="row" style=" margin:25px;">
                      <div class="col-md-6">
                        <label for="identidad" class="form-label " >Identidad:</label>                
                        <input required type="number"style="font-size:18px; font-family: Times New Roman, Times, serif;" class="form-control " name="identidad" id="identidad" placeholder="Ingresar identidad del paciente" maxlength="13"value="{{ $pacientes->identidad }}">
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

                      <div class="row" style=" margin:25px;">
                      <div class="col-md-6">
                        <label for="fechaNacimiento" class="form-label " >Fecha de Nacimiento:</label>
                      
                        <input type="date" required class="form-control " name="fechaNacimiento" id="fechaNacimiento" placeholder="Ingresar Fecha de nacimiento del paciente"  value="{{ $pacientes->fechaNacimiento }}">
                        </div>
                      

                      <div class="col-md-6">
                        <label for="departamento" class="form-label ">Departamento:</label>
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
                      <div class="row" style=" margin:25px;">
                      <div class="col-md-6">
                        <label for="ciudad" class="form-label ">Ciudad:</label>

                        <input required type="text"class="form-control " name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $pacientes->ciudad }}">
                          </div>

                  
                      <div class="col-md-6">
                        <label for="direccion" class="form-label ">Dirección:</label>

                            <input required type="text" class="form-control " name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $pacientes->direccion }}">
                          </div>
                      </div>

                       <div class="row" style=" margin:25px;">
                      <div class="col-md-6">
                        <label for="telefonoCelular" class="form-label ">Número Teléfonico:</label>

                            <input required type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;"class="form-control " name="telefonoCelular" id="telefonoCelular" placeholder="ingresar teléfono Celular del paciente"  value="{{ $pacientes->telefonoCelular }}">
                          </div>


                   
                      <div class="col-md-6">
                        <label for="observaciones" class="col-sm form-label">Observaciones:</label>
                        
                            <textarea   type="text" style="font-size:18px; font-family: Times New Roman, Times, serif;"class="form-control " name="observaciones" id="observaciones" placeholder="Alguna observación?"  value="{{ $pacientes->observaciones }}">{{ $pacientes->observaciones }}</textarea>
                          </div>
                    
                     </div>

                    <div class="row" style=" margin:25px;">
                     <div class="col-md-6">
                         <label  class=" form-label">Cambie la foto de perfil aquí:</label>
                        <input accept="image/*" type="file" class="form-control-file" name="file" id="imagen" placeholder="Seleccione una Imagen">
                        </div>
                        
                     </div>

                      <div class="modal-footer" >
                      @canany('update',$pacientes)
                        
                          <button  type="button" onclick="location.href='/pantallainicio/vista'" class="btn btn-secondary" data-dismiss="modal" >Atrás</button>
                            <input type="reset" class="btn btn-danger">           
                          <button type="submit" class="btn btn-primary" style="background-color:#276678; " >Guardar Paciente</button>
                      
                   @endcan</div>

                      
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
@endcanany
@endsection 
