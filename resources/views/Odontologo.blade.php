@extends('Plantilla.dashboard')

@section('titulo','Odontólogos')
@section('content')

<head>
    <!--llamamos al enlace de Jquery 3.3.1 para la funcionalidad-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--llamamos a una clase de internet donde esta el diseño-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <!--llamamos a otra clase JS que hace la tarea de que se muestren los seleccionados como si fueran etiquetas-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  
<style>

.aviso{
    display: none;
}

</style>
</head>


<!-- alerta -->
<div>

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
</div>
<!-- fin de la alerta -->

<body id="page-top">

  
        <!-- DataTables Example -->
      <div class="card mb-3">
          <div class="card-header">
           <h4><img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/dentista.png') }}"  id="logo1" width="4%;" height="4%"><b>Odontólogos(as)</b></h4>
         <p>En esta Sección se muestra los Odontólogos registrados y también se podra editar datos, 
         crear un nuevo Odontólogo, borrar el Odontólogo registrado, Editar Horario.</p>


          @can('create',App\Odontologo::class)
              <button  type="button" data-toggle="modal"  style="color:white; background-color:#1687a7; width:180px; "class="btn btn-success" data-target="#create">
              Nuevo Odontólogo</button>
           @endcan
      </div>
         
   

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Identidad</th>
                    <th>Especialidades</th>
                      <th align="center" >Acciones</th>
                  
                  </tr>

                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Identidad</th>
                    <th>Especialidades</th>
                    <th align="center" >Acciones</th>
                    
                  </tr>
                </tfoot>
                <tbody>
            
             <tr>
                    @forelse($odontologos as $odontologo)
  
             <td ><img src='/Imagenes/{{$odontologo->imagen}}' width="50px" style="border-radius:50%;" height="50px">
               {{ $odontologo->nombres }} {{$odontologo->apellidos}}</td>
   
             <td>{{$odontologo->identidad}} </td>

             <td> @forelse($odontologo->especialidades as $tag) 
                    {{ $tag->Especialidad}}
                       <br>
                    @empty
                    @endforelse</td>
  
             <td>
     <!--crear Horario -->
   @can('crearHorario',App\Odontologo::class)
    <a type="button"  style="color:#006622; background-color: white; width:150px;"class="btn btn-warning" href="/create/{{$odontologo->id}}/nuevo" ><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
     <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
     <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
     </svg>Crear Horarios
    
    </a>@endcan


  @can('update',$odontologo)
  

<!--Editar datos  -->
  <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-{{$odontologo->id}}" ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
    
  </button>
  @endcan



<!--Eliminar Datos -->
@can('isAdmin')
     
     <buttton   type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalll-{{$odontologo->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
</svg>
  </button>

@endcan


<!--modal de eliminar -->
  <div class="modal fade" id="modalll-{{$odontologo->id}}" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="position:absolute; top:100px;">
              <div class="modal-header" style=" background-color: #d3e0ea; color:black">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> Eliminar Odontólogo(a)</h5>
                  
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
          </button>
              </div>
              <div class="modal-body" style="color:black;">
                  ¿Desea realmente eliminar el Odontólogo (a):{{$odontologo->nombres}}?
              </div>
              <div class="modal-footer">
                 
                  <form method="post" action="{{route('odontologo.borrar',['id'=>$odontologo->id])}}">
                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  </form>
              </div>
          </div>
      </div>
  </div>

<!--Fin de modal eliminar -->

</td> 
<!--Modal de Editar Datos -->

 <div class="modal fade bd-example-modal-lg" id="modal-{{$odontologo->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 
  
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content"  >
			<div class="modal-header" style=" background-color: #276678; color:White;">
            
            

				<h4  class="modal-title" id="modal" >
       <img style=" border-radius: 50%; " src='/Imagenes/{{$odontologo->imagen}}' width=" 70px" height="70px">
        Editar Odontólogo (a) </h4>  
         
     
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
          </button>

			</div>
			<div class="modal-body" id="bodymodal">
      <div class="row"> 
        <div id="imagen4" class="col-md-12">
          
          </div>
      </div>
     
      <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
      
      <form method="post"  action="{{route('odontologo.update',['id'=> $odontologo-> id])}} "file="true" enctype="multipart/form-data" id="form1">
      <?php
      $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
      $mysqli->set_charset("utf8");
      ?>
      @csrf
      @method('put')
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="nombres" >Nombres:</label>
              <input required maxlength="60"  type="text" class="form-control " onkeypress="return SoloLetras3(event);" name="nombres" id="nombres"  placeholder="Ingresar los Nombres del  Odontólogo (a)"  value="{{ $odontologo->nombres }}" pattern="[A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Á É Í Ó Ú a b c d e f g h i j k l m n o p q r s t u v w x y z á é í ó ú ]{3, 60}"  oninput="checkt_textuno(this);">
              </div>
              </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="apellidos" >Apellidos:</label>
                <input required maxlength="60"  type="text" class="form-control" name="apellidos" onkeypress="return SoloLetras4(event);" id="apellidos" placeholder="Ingresar los Apellidos del  Odontólogo (a)"  value="{{ $odontologo->apellidos }}"
      pattern="[A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Á É Í Ó Ú a b c d e f g h i j k l m n o p q r s t u v w x y z á é í ó ú ]{3,60}"  oninput="checkt_textdos(this);">
              </div>
            </div>
      
       
      </div>


     <div class=row>

 <div class="col-md-6">
            <div class="form-group">
                <label for="identidad">Identidad:</label>
                <!--<input required type="number" class="form-control" name="identidad" id="identidad"  placeholder="ingresar identidad del paciente"  value="{{ $odontologo->identidad }}" maxlength="13" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"> -->
                   <input type="text" onkeypress="return SoloNumeros(event);" class="form-control" name="identidad" id="identidad"  placeholder="Ingresar DNI del  Odontólogo (a)" value="{{ $odontologo->identidad }}" maxlength="13"   onload="ValidarTell()"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            pattern="^[0]\d{12}$"
                            title="Ingrese un código  valido de la identidad que inicie con 0."required >
            
  </div>
        </div>

<div class="col-md-6">
             <div class="form-group">
            <label for="telefonoFijo">Tel.Fijo (opcional):</label>
            <input type="text" class="form-control" name="telefonoFijo" onkeypress="return SoloNumero5(event);" id="telefonoFijo"  placeholder="Ingresar los Tel.Fijo del  Odontólogo (a)"  maxlength="8"  value="{{ $odontologo->telefonoFijo}}" 
          onload="ValidarTell()" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            pattern="^[2]\d{7}$"
                            title="Ingrese un numero telefónico valido que inicie con 2">
                 
          </div>
        </div>


</div>
      <div class="row">
        
        <div class="col-md-6">
          <div class="form-group">
              <label for="telefonoCelular">Tel.Celular:</label>
              <input type="text" required  class="form-control" name="telefonoCelular"  id="telefonoCelular" placeholder="Ingresar el Tel.Celular del  Odontólogo (a)" maxlength="8"   value="{{ $odontologo->telefonoCelular }}" 
onload="ValidarTell()" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            pattern="^[3|7|8|9]\d{7}$"
                            title="Ingrese un numero telefónico valido que inicie con 3,7,8 y 9">
          </div>  
        </div>
        <div class="col-md-6">
              <div class="form-group">
                    <label for="departamento" >Departamento:</label>
                    <select name="departamento" id="departamento" class="form-control">
                      <option selected value="{{ $odontologo->departamento }}">Depto Actual: {{$odontologo->departamento}}</option>
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
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="ciudad">Ciudad:</label>
          <input required maxlength="100"  type="text" class="form-control"  name="ciudad" onkeypress="return SoloLetras5(event);" id="ciudad"placeholder="Ingresar la Ciudad  del  Odontólogo (a)"  value="{{ $odontologo->ciudad }}"
 pattern="[A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Á É Í Ó Ú a b c d e f g h i j k l m n o p q r s t u v w x y z á é í ó ú ]{3,100}"  oninput="checkt_texttres(this);">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="direccion">Dirección:</label>
          <input required type="text" class="form-control"  name="direccion" id="direccion" placeholder="Ingresar la Dirección  del  Odontólogo (a)"  value="{{ $odontologo->direccion }}">
        </div>
      </div>
          
</div>

<div class="row">
 <div class=" col-md-6">
             <div class="form-group">
          <label for="state_id" class="control-label">Especialidades:</label>

        <!--Crucial que aqui ponga el atributo multiple y la class mi-selector porque luego la llamamos en el JS-->
        <select    style="width:100%;"  id="select" name="especialidades[]" id="" required   class="form-control mi-selector1" data-show-subtext="true" data-live-search="true" multiple >
            <!--Ponga las opciones que quiera como quiera y donde quieta-->
        <option  data-role="tagsinput"  disabled value="@foreach ($odontologo->especialidades as $permiso)
            {{$permiso->id}}
        @endforeach"   selected> Especialidad Actual: @foreach ($odontologo->especialidades as $especialidad)
            {{$especialidad->Especialidad. '.'}}
        @endforeach </option>


          
@foreach($especialidades as $especialidad){
 <option  data-role="tagsinput"  value="{{ $especialidad->id  }}">{{ $especialidad->Especialidad }}</option>
}
@endforeach

        </select>

      </div>
        </div>


<div class="col-md-6">
        <div class="form-group">
          <label for="user_id" class="control-label">Usuario:</label>
          <select name="user_id" class="form-control">
          <option value="{{$odontologo->user->id}}" selected>Usuario Actual: {{$odontologo->user->name}}</option>

          <?php
          $getUsuario =$mysqli->query("select * from users order by id");
          while($f=$getUsuario->fetch_object()) {
          echo $f->id;
          echo $f->name;

          ?>
          <option value="<?php echo $f->id; ?>"><?php echo $f->name ?></option>
          <?php
          } 
          ?>

          </select>
        </div>
</div>


</div>

        <div class="row">
<div class="col-md-6">
          <div class="form-group">
              <label for="file" class="control-label">Eliga la foto del odontólogo:</label>
            <input type="file" class="form-control-file" name="file" id="direccion" value="{{$odontologo->imagen}}">
          </div>
      </div>

    </div>
 </div>

  <div class="modal-footer">
   <input type="reset" class="btn btn-danger">
  <button id="bot" type="submit"class="btn btn-secondary" style="background-color:#1687a7" data-toggle="modal" >
  Guardar Cambios
  </button>

 </div>
  </form>

    </div>
  </div>
</div>
</tr> 
    @empty
    <tr>
    <td  colspan="4"><p align="center" >No hay Odontólogos  registrados</p></td> 
    @endforelse
     </tr>

</div>
<!-- Fin del Modal de Editar Datos -->
                </tbody>
              </table>
            </div>
          </div>
  </div>
<div>
<!-- modala de crear odontologo -->



<div class="modal fade bd-example-modal-lg" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="create" >
  
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content"  >
			<div id=""class="modal-header" style=" background-color: #276678; color:white;  height:80px;">
	
				<h4 class="modal-title" id="myModalLabel">
        <img class="logo" style=" margin-left:0%;" src="{{ asset('Imagenes/dentista.png') }}"  id="logo1" width="6%;" height="6%"> 
        Crear Odontólogo(a)</h4>
<!--Formulario -->
        <form method="post" action="/odontologo/nuevo"  id="formupaciente" file="true" enctype="multipart/form-data" style="">
<button type="button" id="btncerrar" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
			</div>
			<div class="modal-body">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
    <div class="content" id="nuevodoctor">
    
    <?php
      $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
      $mysqli->set_charset("utf8");
    ?>
    @csrf

    <div class="row"><!--  -->
      <div class="col-md-6">
       <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input required type="text" class="form-control" name="nombres" id="nombres" onkeypress="return SoloLetras(event);" placeholder="Ingresar los Nombres del  Odontólogo (a)" 
 pattern="[A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Á É Í Ó Ú a b c d e f g h i j k l m n o p q r s t u v w x y z á é í ó ú ]{3,60}"  oninput="check_textuno(this);" 
value="{{ old('nombres') }}" maxlength="60" >
      </div>
 </div>
      <div class="col-md-6">
         <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input  type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingresar los Apellidos  del  Odontólogo (a)" onkeypress="return SoloLetras1(event);" class="input-large" 
pattern="[A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Á É Í Ó Ú a b c d e f g h i j k l m n o p q r s t u v w x y z á é í ó ú ]{3,60}" required oninput="check_textdos(this);"
         value="{{ old('apellidos') }}" maxlength="60" >
      </div>
     </div>
    
 </div>

<br>

    <div class="row"><!--  -->

 <div class="col-md-6">
          
            <label for="identidad">Identidad:</label>
            <input required type="text" value="{{ old('identidad') }}" class="form-control"  onkeypress="return SoloNumeros1(event);" name="identidad" id="identidad" placeholder="Ingresar la Identidad del  Odontólogo (a)" maxlength="13" 
                 onload="ValidarTell()"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            pattern="^[0]\d{12}$"
                            title="Ingrese un código  valido de la identidad que inicie con 0.">
          </div>

 <div class="col-md-6">
         
            <label for="departamento">Departamento:</label>
            <select required name="departamento" id="departamento" class="form-control">
            <option value="" disabled selected>Seleccione un departamento</option>
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
 
</div>

<br>

    <div class="row">
<div class="col-md-6">
       
          <label for="ciudad">Ciudad:</label>
          <input maxlength="100"  value="{{ old('ciudad') }}" type="text" class="form-control" name="ciudad" id="ciudad" onkeypress="return SoloLetras2(event);"placeholder="Ingresar la Ciudad  del  Odontólogo (a)" pattern="[A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Á É Í Ó Ú a b c d e f g h i j k l m n o p q r s t u v w x y z á é í ó ú ]{3,100}" required oninput="check_texttres(this);"> 
        </div>
      

     
      
      <div class="col-md-6">
        
            <label for="direccion">Dirección:</label>
            <input required  value="{{ old('direccion') }}"type="text" class="form-control" name="direccion" id="direccion"placeholder="Ingresar la Dirección  del  Odontólogo (a)">
        
      </div>
      
 </div>


<br>
<div class="row">

<div class="col-md-6">
         
            <label for="telefonoFijo">Teléfono fijo (Opcional):</label>
            <input type="text" value="{{ old('telefonoFijo') }}" class="form-control" name="telefonoFijo" id="telefonoFijo" onkeypress="return SoloNumeros6(event);"  placeholder="Ingresar el Tel.Fijo  del  Odontólogo (a)" maxlength="8" onload="ValidarTell()"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            pattern="^[2]\d{7}$"
                            title="Ingrese un número telefónico valido que inicie con 2">
         
      </div>
      


<div class="col-md-6">
        <div class="form-group">
          <label for="telefonoCelular">Teléfono celular:</label>
          <input required  type="text" class="form-control" value="{{ old('telefonoCelular') }}" name="telefonoCelular" id="telefonoCelular"   placeholder="Ingresar el Tel.Celular  del  Odontólogo (a)" maxlength="8"onload="ValidarTell()"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            pattern="^[9|8|7|3]\d{7}$"
                            title="Ingrese un número telefónico valido que inicie con 3,7,8 o 9" >
        </div>
      </div>


</div>

 <br>


 <div class="row">
 
<div class="col-md-6">
            
          <label for="especialidad" class="control-label">Especialidades:</label>

<select   style="width:100%;" name="especialidades[]" id="" required   class="form-control mi-selector1" data-show-subtext="true" data-live-search="true" multiple >

            <!--Ponga las opciones que quiera como quiera y donde quieta-->
          @foreach($especialidades as $especialidad){ 
 <option value="{{ $especialidad->id  }}">{{ $especialidad->Especialidad }}</option>

}
@endforeach

        </select>
      </div>

   <div class="col-md-6">

 <label for="user_id" class="control-label">Usuario:</label>
            <select required  name="user_id" class="form-control">
              <option value="{{ old('name') }}" disabled selected>Seleccione un usuario</option>
         
                <?php
                $getUsuario =$mysqli->query("select * from users order by id");
                while($f=$getUsuario->fetch_object()) {
                echo $f->id;
                echo $f->name;

                ?>
                <option value="<?php echo $f->id; ?>"><?php echo $f->name ?></option>
                <?php
                } 
                ?>      
            </select>
          

     </div>


      </div>



<!-- <input type="text" value="" data-role="tagsinput" name="especialidad_odontologo"  placeholder="Ingrese una o varias Especialidades"> -->
  

<div class="row">

     
<?php
      $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
      $mysqli->set_charset("utf8");
      ?>

      <div class="col-md-6">
         <div class="form-group">
          <label for="file" class="control-label">Fotografía del Odontólogo(Opcional):</label>
          <input type="file" class="form-control-file" name="file" id="direccion" placeholder="Seleccione una Imagen">
        </div>
      </div>
    

</div>




<div class="modal-footer">
 <input type="reset" class="btn btn-danger" style="">  
<button id="bot" type="submit"class="btn btn-secondary" style="background-color:#1687a7;" data-toggle="modal" >

  Guardar Cambios
  </button>

</div>



        <!-- Agregar especialidad -->
      <!--  <div class="col-md-1">
      
           
          <button  type="button" style="margin-top: 9em; margin-left:-41em; width:200px;" class="btn btn-outline-info" data-toggle="modal" data-target="#especia">
         
         Agregar Especialidad
        </button>  -->
      
               
</div>


</form>
        
     </div>
    </div>
  </div>
</div>


<!-- Modal 2_Crear Especialidad -->
      <!--  <div class="modal fade" id="especia">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" style=" background-color:#276678; color:white">
              <h4 class="modal-title" id="myModalLabel">Agregar Especialidad Nueva</h4> 
              	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					      <span aria-hidden="true">&times;</span>
                </button>     
            </div> -->
              <!-- Barra de desplazamiento
              <div style="width: 450px; height: 550px; overflow-y: scroll;">
            <div class="modal-body">  -->


                  <!--  <form method="post" action="/pantallainicio/nueva/especialidad">
                      @csrf
                      <?php
                        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                        $mysqli->set_charset("utf8");
                      ?>
                      <div class="container">
                      <div class="form-group">
                          <label for="nombres"  class="control-label">Nombre:</label>
                          <input required  type="text" class="form-control" name="nombres" id="nombres" placeholder="Ingresar nombre de la especialidad">
                      </div>
                        <div class="form-group">
                          <label for="nombres"  class="control-label">Descripción:</label>
                     
                          <textarea class="form-control"  required name="Descripcion" id="Descripcion" placeholder="Ingresar la descripción de la especialidad"name="" id="" cols="10" rows="5"></textarea>
                      </div>
                      </div>
                     
                      
                  <div class="modal-footer">
                  <input type="reset" class="btn btn-danger">
                  <button type="submit" class="btn btn-primary" >Guardar </button>
                </div>
                  </form> 
                    
                      
                 
      </div></div> -->
      
</div>
</div>
  <!-- /#wrapper -->
 
 <script>
        jQuery(document).ready(function($){
          $(document).ready(function() {
              $('.mi-selector1').select2();
          });
      });
      



jQuery(document).ready(function($){
          $(document).ready(function() {
              $('.mi-selector3').select2();
          });
      });
      




$(document).ready( function () {
    $('#datatable1').DataTable( {
    language: {
        search: "Búsqueda por Nombre o identidad:",
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Odontólogo(a)",
        "infoEmpty": "Mostrando 0 to 0 of 0 Odontólogo(a)",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Odontólogo(a)",
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

<script type="text/javascript">
function check_textdos(input) {  
    if (input.validity.patternMismatch){  
         input.setCustomValidity("Debe ingresar minimo 3 letras y máximo 60 letras");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  </script>


 <script>
        jQuery(document).ready(function($){
          $(document).ready(function() {
              $('.mi-selector1').select2();
          });
      });


function check_text(input) {  
    if (input.validity.patternMismatch){  
         input.setCustomValidity("Debe ingresar minimo 3 letras y máximo 60 letras");   
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  
      



      </script>

<script>

function check_textuno(input) {  
    if (input.validity.patternMismatch){  
          input.setCustomValidity("Debe ingresar minimo 3 letras y máximo 60 letras");    
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  
      


function check_texttres(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Debe ingresar minimo 3 letras y máximo 100 letras");  
    else {  
        input.setCustomValidity("");  
    }                 
}  
      

         
function checkt_textuno(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Debe ingresar minimo 3 letras y máximo 60 letras");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  

  
function checkt_textdos(input) {  
    if (input.validity.patternMismatch){  
         input.setCustomValidity("Debe ingresar minimo 3 letras y máximo 60 letras");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  
      

   
function checkt_texttres(input) {  
    if (input.validity.patternMismatch){  
          input.setCustomValidity("Debe ingresar minimo 3 letras y máximo 100 letras");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  
}

      
</script>

@section('css_role')

<link rel="stylesheet" href="/css/bootstrap-tagsinput.css">

@endsection

@section('js_role')
<script src="/js/bootstrap-tagsinput.js"></script>

@endsection

<script>

function SoloNumeros(evt)
{
if(window.event){
keynum = evt.keyCode;
}
else{
keynum = evt.which;
}

if((keynum > 47 && keynum < 58) || keynum == 8 || keynum== 13)
{
return true;
}
else
{

return false;
}
}


function SoloNumeros6(evt)
{
if(window.event){
keynum = evt.keyCode;
}
else{
keynum = evt.which;
}

if((keynum > 47 && keynum < 58) || keynum == 8 || keynum== 13)
{
return true;
}
else
{

return false;
}
}



function SoloNumero4(evt)
{
if(window.event){
keynum = evt.keyCode;
}
else{
keynum = evt.which;
}

if((keynum > 47 && keynum < 58) || keynum == 8 || keynum== 13)
{
return true;
}
else
{

return false;
}
}



function SoloNumero5(evt)
{
if(window.event){
keynum = evt.keyCode;
}
else{
keynum = evt.which;
}

if((keynum > 47 && keynum < 58) || keynum == 8 || keynum== 13)
{
return true;
}
else
{

return false;
}
}





function SoloNumeros1(evt)
{
if(window.event){
keynum = evt.keyCode;
}
else{
keynum = evt.which;
}

if((keynum > 47 && keynum < 58) || keynum == 8 || keynum== 13)
{
return true;
}
else
{

return false;
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


function SoloLetras2(e)
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



function SoloLetras1(e)
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


function SoloLetras3(e)
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

function SoloLetras4(e)
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

function SoloLetras4(e)
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

function SoloLetras5(e)
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

<script src="dist/sweetalert.min.js"></script>


<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
   $("#btncerrar").click(function(event) {
	   $("#formupaciente")[0].reset();
   });
</script>
  <!-- /#wrapper -->
<script>

$("btncerrar").click(fuction(event){
$("formupaciente")[0].reset();


});
</script>



@endsection 