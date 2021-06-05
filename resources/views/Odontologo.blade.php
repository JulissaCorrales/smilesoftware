@extends('Plantilla.dashboard')

@section('titulo','Odontólogos')
@section('content')

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
</svg>Odontólogos</h4>
 <p>En esta Sección se muestra los Odontólogos registrados y también se podra editar datos, crear un nuevo Odontólogo, borrar el Odontólogo registrado, Editar Horario,Ver la especialidad del Odontólogo.</p>


@can('create',App\Odontologo::class)
  <button  type="button" data-toggle="modal"  style="color:#006622; background-color: white; width:180px; "class="btn btn-success" data-target="#create">
  <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>Nuevo Odontólogo </button> 
@endcan
</div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Identidad</th>
                    <th>Especialidad</th>
                      <th align="center" >Acciones</th>
                  
                  </tr>

                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                  
                    <th>Identidad</th>
                    <th>Especialidad</th>
                      <th align="center" >Acciones</th>
                    
                  </tr>
                </tfoot>
                <tbody>

               
  <tr >
  @forelse($odontologos as $odontologo)
  
     <td ><img src='/Imagenes/{{$odontologo->imagen}}' width="50px" height="50px"id="datos">
     {{ $odontologo->nombres }} {{$odontologo->apellidos}}  </td>
   
      <td>{{$odontologo->identidad}} </td>

     <td>{{$odontologo->especialidad->Especialidad}}

</td>
  
  
   <td>
   @can('crearHorario',App\Odontologo::class)
    <a type="button"  style="color:#006622; background-color: white; width:150px;"class="btn btn-warning" href="/create/{{$odontologo->id}}/nuevo" ><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
  <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>Editar Horarios
    
  </a>@endcan


  @can('update',$odontologo)
  

<!--Editar datos  -->
    <button type="button" style="color:#006622; background-color: white; width:50px;" class="btn btn-success" data-toggle="modal" data-target="#modal-{{$odontologo->id}}" ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
    
  </button>
  @endcan


<!--Especialidad  -->
  <!--  <button type="button" style="color:#006622; background-color: white; width:190px;" class="btn btn-success" data-toggle="modal" data-target="#modall2-{{$odontologo->id}}" ><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-card-heading" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
</svg>
    Otras Especialidades
  </button> -->
  

<!--Eliminar Datos -->
@can('isAdmin')
     
     <buttton  style="color:red; background-color: white; width:50px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalll-{{$odontologo->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
</svg>
  </button>

@endcan


<!--modal de eliminar -->
  <div class="modal fade" id="modalll-{{$odontologo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="position:absolute; top:100px;">
              <div class="modal-header" style=" background-color:#293d3d; color:white;  height:100px;">
                  <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> Eliminar Odontologo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <!--<span aria-hidden="true">&times;</span>-->
                  </button>
              </div>
              <div class="modal-body">
                  ¿Desea realmente eliminar el Odontologo {{$odontologo->nombres}} {{$odontologo->apellidos}}?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form method="post" action="{{route('odontologo.borrar',['id'=>$odontologo->id])}}">

                      @csrf
                      @method('delete')
                      <input type="submit" value="Eliminar" class="btn btn-danger">
                  </form>
              </div>
          </div>
      </div>
  </div>

<!--Fin de modal eliminar -->

</td> 

 <div class="modal fade" id="modal-{{$odontologo->id}}" >
  
	<div class="modal-dialog" role="document">
		<div class="modal-content"  style="">
			<div class="modal-header" style=" background-color:#293d3d; color:white;  height:130px;">
	
				<h4  class="modal-title" id="modal">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
        Editar Odontologo</h4>
        <div id="imagen4">
                      <img src='/Imagenes/{{$odontologo->imagen}}' width=" 100px" height="100px"id="datos6">
                      </div>

        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

			</div>
			<div class="modal-body" id="bodymodal">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
    <div class="content" id="n">
   <!-- <form method="post"  action="{{route('odontologo.editar',['id'=> $odontologo-> id])}}"> -->
    <form method="post"  action="{{route('odontologo.update',['id'=> $odontologo-> id])}} "file="true" enctype="multipart/form-data" id="form1">
    <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
                      @csrf
                      @method('put')
                      
                    <div class="form-group">
                        <label for="nombres" class="col-sm-2 col-form-label col-form-label-lg" >Nombres:</label>
                        <div >
                        <input required type="text" class="form-control form-control-sm" name="nombres" id="nombres" style="font-size: 20px;" placeholder="ingresar nombre del paciente"  value="{{ $odontologo->nombres }}" >
                        </div>
                    </div>

              
                      <div class="form-group">
                          <label for="apellidos" class="col-sm-2 col-form-label col-form-label-lg" >Apellidos:</label>
                          <div >
                          <input required type="text" class="form-control form-control-sm" name="apellidos" style="font-size: 20px;" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $odontologo->apellidos }}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="identidad"class="col-sm-2 col-form-label col-form-label-lg">Identidad:</label>
                        <div>
                        <input required type="number" class="form-control form-control-sm" name="identidad" id="identidad"  style="font-size: 20px;"placeholder="ingresar identidad del paciente"  value="{{ $odontologo->identidad }}">
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="telefonoFijo" class="col-sm-2 col-form-label col-form-label-lg">Tel.Fijo:</label>
                    <div >
                    <input type="number" required class="form-control form-control-sm" name="telefonoFijo" id="telefonoFijo" style="font-size: 20px;" placeholder="ingresar telefono Fijo del paciente"  value="{{ $odontologo->telefonoFijo}}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular" class="col-sm-2 col-form-label col-form-label-lg">Tel.Celular:</label>
                  <div >
                    <input type="number" required  class="form-control form-control-sm" name="telefonoCelular"  style="font-size: 20px;"id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $odontologo->telefonoCelular }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Correo Electronico:</label>
                  <div >
                    <input required type="email" class="form-control form-control-sm" style="font-size: 20px;" name="email" id="email" placeholder="ingresar telefono Celular del paciente"  value="{{ $odontologo->email }}">
                  </div>
                  </div>

                    
                  <div class="form-group">
                    <label for="departamento" class="col-sm-2 col-form-label col-form-label-lg">Departamento:</label>
                    <div >
                    <!--  -->
                    <select name="departamento" id="departamento" class="form-control">
                      <option selected value="{{ $odontologo->departamento }}">Departamento Actual: {{$odontologo->departamento}}</option>
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
                    <!--  -->
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="ciudad" class="col-sm-2 col-form-label col-form-label-lg">Ciudad:</label>
                  <div >
                    <input required type="text" class="form-control form-control-sm"  style="font-size: 20px;"name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $odontologo->ciudad }}">
                  </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="direccion" class="col-sm-2 col-form-label col-form-label-lg">Direccion:</label>
                  <div >
                    <input required type="text" class="form-control form-control-sm" style="font-size: 20px;" name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $odontologo->direccion }}">
                  </div>
                  </div>

                  

   <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

            <label for="state_id" class="control-label">Especialidad:</label>
                <select required name="especialidad" class="form-control">
          <option value="{{  $odontologo->especialidad_id }}" selected>Especialidad Actual: {{$odontologo->especialidad->Especialidad}}</option>
         
                    <?php
        $getDoctor =$mysqli->query("select * from especialidads order by id");
        while($f=$getDoctor->fetch_object()) {
          echo $f->id;
          echo $f->Especialidad;

          ?>
          <option value="<?php echo $f->id; ?>"><?php echo $f->Especialidad ?></option>
          <?php
        } 
        ?>     
        </select> 


         <!-- usuario -->
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
                    <!-- fin usuario -->

                  <div class="form-group">
                    <label for="intervalo" class="col-sm-2 col-form-label col-form-label-lg">Intervalo:</label>
                  <div >
                  <select name="intervalo" id="intervalo" class="form-control">
                  <option value="{{ $odontologo->intervalos }}" selected>Actual:{{ $odontologo->intervalos }}</option>
                  <option value="10m">10 minutos</option>
                  <option value="15m">15 minutos</option>
                  <option value="20m">20 minutos</option>
                  <option value="30m">30 minutos</option>
                  <option value="40">40 minutos</option>
                  <option value="50m">50 minutos</option>
                  </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control-file" name="file" id="direccion" value="{{$odontologo->imagen}}">
                  </div>

                     
                </div>
              <div>
        <br>
        
        <button id="bot" type="submit"class="btn btn-primary" data-toggle="modal" >
          Guardar
        </button>

        </form>

                  </div>
                  </div>
      </div>
        

     </tr> 
     @empty

<tr>
    <td  colspan="4"><p align="center" ><b>No hay Odontólogos  registrados</b></p></td> 
     @endforelse
  </tr>


<!--Modal de Editar Datos -->
 
</div>


<!-- Fin del Modal de Editar Datos -->


                
  



                </tbody>
              </table>
            </div>
          </div>
        
  

  </div>

<div>

<!-- modala de crear odontologo -->
<!--
@can('create',App\Odontologo::class)
  <button  type="button" data-toggle="modal"  style="color:#006622; background-color: white; width:180px; position:absolute; top:170px; left:1270px;" class="btn btn-success" data-target="#create">
  <svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>Nuevo odontologo </button> 
@endcan-->


<div class="modal fade" id="create" >
  
	<div class="modal-dialog" role="document">
		<div class="modal-content" >
			<div id=""class="modal-header" style=" background-color:#293d3d; color:white;  height:100px;">
	
				<h4  class="modal-title" id="myModalLabel">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        Crear Odontologo</h4>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
    <div class="content" id="nuevodoctor">
<form method="post" action="/odontologo/nuevo" file="true" enctype="multipart/form-data">
<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

                      @csrf
                      <div class="form-group">
                          <label for="nombres">Nombres:</label>
                          <input required type="text" class="form-control-file" name="nombres" id="nombres" placeholder="Ingrese el Nombre ">
                      </div>

                      <div class="form-group">
                          <label for="apellidos">Apellidos:</label>
                          <input required type="text" class="form-control-file" name="apellidos" id="apellidos" placeholder="Ingrese el Apellido">
                      </div>

                      <div class="form-group">
                        <label for="identidad">Identidad:</label>
                        <input required type="number" class="form-control-file" name="identidad" id="identidad" placeholder="Ingrese la Identidad ">
                    </div>

                    <div class="form-group">
                    <label for="telefonoFijo">Telefono fijo:</label>
                    <input required type="number" class="form-control-file" name="telefonoFijo" id="telefonoFijo" placeholder="Ingrese el  Numero del Telefono Fijo">
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular">Telefono celular:</label>
                    <input required  type="number" class="form-control-file" name="telefonoCelular" id="telefonoCelular" placeholder="Ingrese el Numero de Celular">
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input required type="email" class="form-control-file" name="email" id="email" placeholder="Ingrese el Correo Electronico">
                  </div>

                  <div class="form-group">
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

                  <div class="form-group">
                    <label for="ciudad">Ciudad:</label>
                    <input required type="text" class="form-control-file" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad  en que reside ">
                  
                  </div><div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input required type="text" class="form-control-file" name="direccion" id="direccion" placeholder="Ingrese su direccion">
                  </div>


                 <!-- </div><div class="form-group">
                    <label for="especialidad">Especialidad:</label>
                    <input type="text" class="form-control-file" name="especialidad" id="especialidad" placeholder="Ingrese la Especialidad">
                  </div>  -->

                  <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>

            <label for="state_id" class="control-label">Especialidad:</label>
                <select required name="especialidad" class="form-control">
          <option value="" disabled selected>Seleccione una especialidad</option>
         
                    <?php
        $getDoctor =$mysqli->query("select * from especialidads order by id");
        while($f=$getDoctor->fetch_object()) {
          echo $f->id;
          echo $f->Especialidad;

          ?>
          <option value="<?php echo $f->id; ?>"><?php echo $f->Especialidad ?></option>
          <?php
        } 
        ?>


                  
        </select> 
     
        

        <label for="intervalo" class="control-label">Intervalo</label>
        <select required  name="intervalo" id="intervalo" class="form-control">
        <option value=""  disable selected>Seleccione la duracion de la cita</option>
        <option value="10m">10 minutos</option>
        <option value="15m">15 minutos</option>
        <option value="20m">20 minutos</option>
        <option value="30m">30 minutos</option>
        <option value="40">40 minutos</option>
        <option value="50m">50 minutos</option>
        </select>
           <!-- usuario -->
           <label for="user_id" class="control-label">Usuario:</label>
                <select required  name="user_id" class="form-control">
          <option value="" disabled selected>Seleccione un usuario</option>
         
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
        <!-- fin usuario -->
<hr>
        <div class="form-group">
        <label for="file" class="control-label">Fotografia del Odontologo:</label>
        <input type="file" class="form-control-file" name="file" id="direccion" placeholder="Seleccione una Imagen">
      </div>


        </div>
        
        
</div>
 <br>
 <br>

<div>
        <br>
        <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
         Guardar
        </button>
    
        <br>
        <div>
         
        </form  action="">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button id="bu1" type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#especia">Agregar Especialidad</button>
        </div>
        </div>
        </div>

<!-- Modal 2 -->
        <div class="modal fade" id="especia">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Agregar Especialidad Nueva</h4>      
            </div>
              <!--Barra de desplazamiento-->
              <div style="width: 450px; height: 550px; overflow-y: scroll;">
            <div class="modal-body"> 


                    <form method="post" action="/pantallainicio/nueva/especialidad">
                      @csrf
                      <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
       <div class="form-group">
                          <label for="nombres">Nombre:</label>
                          <input required  type="text" class="form-control-file" name="nombres" id="nombres" placeholder="ingresar nombre de la especialidad">
                      </div>

                     
                      
                  <div class="modal-footer">
                  <button type="button" onclick="location.href='/pantallainicio/especialidad'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                  <input type="reset" class="btn btn-danger">
                <button type="submit" class="btn btn-primary" >Guardar </button>
              </div>
                  </form>
                    
                      
                 
      </div>
      
</div>
</div>
  <!-- /#wrapper -->

<script>
$(document).ready( function () {
    $('#datatable1').DataTable( {
    language: {
        search: "Busqueda por nombre o identidad:",
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







@endsection 