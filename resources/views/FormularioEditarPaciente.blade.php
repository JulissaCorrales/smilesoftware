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
                        
                       <input required type="text" class="form-control @error('nombres') is-invalid @enderror"   value="{{ $pacientes->nombres }}" name="nombres" id="nombres" placeholder="Ingrese los Nombres del Paciente"  onkeypress="return SoloLetras(event);" pattern="[A-Za-z ]{3,100}" required oninput="check_text(this);" onblur="valeft()" value="{{ old('nombres') }}">
                                @error('nombres')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
</div>

                     
                      <div class="col-md-6">
                          <label for="apellidos" class="form-label " >Apellidos:</label>
                        <input  required type="text" class="form-control  @error('apellidos') is-invalid @enderror" name="apellidos" id="apellidos" value="{{ $pacientes->apellidos}}" placeholder="Ingrese los Apellidos del Paciente"onkeypress="return SoloLetras(event);" pattern="[A-Za-z ]{3,100}" required oninput="check_text(this);" onblur="valeft2()" >
                            @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
</div>
                      </div>
                     <div class="row" style=" margin:25px;">
                      <div class="col-md-6">
                        <label for="identidad" class="form-label " >Identidad:</label>                
                        <input required type="number" class="form-control " name="identidad" id="identidad" placeholder="Ingresar identidad del paciente" maxlength="13"value="{{ $pacientes->identidad }}">
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
                      <?php $fecha_actual= date("d-m-Y");  ?>
                        <input type="date" required class="form-control " name="fechaNacimiento" id="fechaNacimiento" placeholder="Ingresar Fecha de nacimiento del paciente"  value="{{ $pacientes->fechaNacimiento }}"  min="<?php echo date('Y-m-d',strtotime($fecha_actual."- 100 year")); ?>"
 max="<?php echo date('Y-m-d',strtotime($fecha_actual
." 0 year"));?>">
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

                        <input required type="text"class="form-control " name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $pacientes->ciudad }}" pattern="[A-Za-z]{3,100}"  oninput="check_text2(this); "onkeypress="return SoloLetras(event);">
                          </div>

                  
                      <div class="col-md-6">
                        <label for="direccion" class="form-label ">Dirección:</label>

                            <input required type="text" class="form-control " name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $pacientes->direccion }}">
                          </div>
                      </div>

                       <div class="row" style=" margin:25px;">
                      <div class="col-md-6">
                        <label for="telefonoCelular" class="form-label ">Número Teléfonico:</label>

                            <input required type="number" class="form-control " name="telefonoCelular" id="telefonoCelular" placeholder="ingresar teléfono Celular del paciente"  value="{{ $pacientes->telefonoCelular }}" maxlength="8" minlength="8" pattern="[0-9]+">
                          </div>


                   
                      <div class="col-md-6">
                        <label for="observaciones" class="col-sm form-label">Observaciones:</label>
                        
                            <textarea type="text" class="form-control " name="observaciones" id="observaciones" placeholder="Alguna observación?"  value="{{ $pacientes->observaciones }}">{{ $pacientes->observaciones }}</textarea>
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

              <!-- Función para aceptar espacios -->
<script>
function valeft(){
 
    var val = document.getElementById("nombres").value;
   
    var tam = val.length;
 
        for(i=0;i<tam;i++){
            if(!isNaN(val[i]) && val[i] != " ")
            document.getElementById("nombres").value='';
           
            }
}
</script>
<!-- fin de script -->
<script>
// -- Función para aceptar espacios -- //
function valeft2(){
 
    var val = document.getElementById("apellidos").value;
   
    var tam = val.length;
 
        for(i=0;i<tam;i++){
            if(!isNaN(val[i]) && val[i] != " ")
            document.getElementById("apellidos").value='';
           
            }
}
</script>
<!-- fin de script -->        
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
<script type="text/javascript">
function check_text(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Debe Ingresar al menos 3 letras");  
    }  
    else {  
        input.setCustomValidity("");  
    }    

} 

function check_text1(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Debe Ingresar al menos 3 letras");  
    }  
    else {  
        input.setCustomValidity("");  
    }    


} 

function check_text2(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Debe Ingresar al menos 3 letras");  
    }  
    else {  
        input.setCustomValidity("");  
    }    


} 
function SoloLetras(e)
{
key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toString();

letras = "A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Á É Í Ó Ú a b c d e f g h i j k l m n o p q r s t u v w x y z á é í ó ú ";

especiales = [8, 65];
tecla_especial = false
for(var i in especiales) {
if(key == especiales[i]){
 tecla_especial = true;
 break;
}
}

if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
 
 return false;
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
