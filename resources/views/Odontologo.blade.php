@extends('Plantilla.Plantilla')

<!DOCTYPE html>
<html lang="en">
@section('Titulo','Paciente')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    
    <style>

 tr{
  border: 1px solid #00cccc; 
  text-align: left;
  border-collapse: collapse;

  background-color: #ccffff
  
} 

#bot{
        position: absolute;
    top:990px;
    left:150px;
    width: 100px;
  height: 40px;
}
 
 



 #datatable{
  border: 1px solid #FF4500;
  width: 900px;
  height: 60px;
  border-collapse: collapse;
  
 }


 #lista:hover{
   border: 1px solid #FF4500;
   color: hotpink;
 

 }

 #can{
  background-color: #ffad33;

 }

 #cue{
  border: #00cccc  2px solid;
 }

 #nae{
  width: 800px;
  height: 60px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff); 
    position: absolute;
    top:240px;
    left:330px;
  
    
    
 }

#dd{
  position: absolute;
    top:400px;
    left:150px;


}


#b1{
  position: absolute;
    top:300px;
    left:780px;

}

#b2{
  position: absolute;
    top:300px;
    left:1030px;
}

#b3{
  position: absolute;
    top:300px;
    left:1140px;

}

#dire{
  color: #ff9933;
  text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;
  font-family: serif;
  position: absolute;
            font-size:30px;
            top: 2px;
            left:10px;
}

#bo{
  
}



#d2{
    background-color: #ccffff;
  position: absolute;
            font-size:30px;
            top: 2px;
            left:10px;

}

#n1{
    background-color: #ccffff;
  position: absolute;
  width: 170px;
  height: 45px;
  font-size:14px;
            top: 60px;
            left:830px;

}

#control{
    background-color: #ccffff;
    position: absolute;
            top: 8px;
            left:700px;

}




</style>

</head>
@section('contenido')
<body id="bo">
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif

    <div class="container">

    <nav class="navbar navbar-light bg-light" id="nae">
  <h1 id="dire">Gestion de Odontologos</h1>
  <!--Menu desplegable  -->
  <div class="btn-group" id="control">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="cont"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
</svg>
     
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/pantallainicio/calendario/citadiaria"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-day" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
</svg>Habilitados</a>
    <a class="dropdown-item" href="/pantallainicio/calendario/diaria"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-day" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
</svg>Deshabilitados</a>
    <a class="dropdown-item" href="/pantallainicio/especialidad"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
</svg>Especialidades</a>
    
</div>


 <!--fin de menu desplegable  -->
</nav>



</div>

<div class="btn-group btn-group-lg" id="d1" >
  <button id ="n1" type="button" data-toggle="modal" data-target="#create">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>Nuevo odontologo </button> </div>





<div  class="container" id="dd"><!-- es necesario para que funcione el boton de buscar por nombre
y numero de identidad agrupar todo en un un vid ya que no se hace crea u conflicto la pantilla de extencion
 ademas se debe incluir la liberia de boostrap y la libreria de datatable en la vista 
 ademas de al final de la pagina el scritp de java y despues el scritp de date table
 para que funcione correctamente-->
 <div class="list-group">

<table id="datatable" class="container">
<thead class="table table-striped table-bordered">
  <!--<tr id="can">
    <th >Nº</th>
    <th>Odontologo</th>
  
    <th>Especialidad</th>
    <th>Accion</th>
  </tr>
  </thead> -->
  <tbody>
  <tr>
      @forelse($odontologos as $odontologo)
     <td><a  class="btn btn-outline-info"  href=""  id="lista">{{$odontologo->id}}</a></td>
     <td>Nombre:{{ $odontologo->nombres }}  {{$odontologo->apellidos}} <br>Telefono Celular:{{$odontologo->telefonoCelular}} 
     <br>Correo Electronico{{$odontologo->email}} 
     <br>Identidad: {{$odontologo->identidad}}</td>

     <td>
     Especialidad: {{$odontologo->especialidad}}
     </td>
  
   <td>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
  <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>Editar Horarios
    
  </button></td>

  <td>
    <buttton type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$odontologo->id}}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
    Editar Datos
  </buttton></td>

  <div class="modal fade" id="modal-{{$odontologo->id}}" >
  
	<div class="modal-dialog" role="document">
		<div class="modal-content" >
			<div id="div1"class="modal-header">
	
				<h4  class="modal-title" id="myModalLabel">
        <svg width="2em" height="2em" color="#fff" viewBox="0 0 16 16" class="bi bi-file-ruled" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6H6v2h7V7zm0 3H6v2h7v-2zm0 3H6v2h6a1 1 0 0 0 1-1v-1zm-8 2v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2z"/>
      </svg>
        Editar Odontologo</h4>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


    <!-- Esta parte del codigo es para poder ir a traer informacion de la base de datos -->
    <div class="content" id="n">
    <form method="post"  action="{{route('odontologo.editar',['id'=> $odontologo-> id])}}">
    <form method="post"  action="{{route('odontologo.update',['id'=> $odontologo-> id])}} ">
    <?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>
                      @csrf
                      @method('put')
                    <div class="form-group">
                        <label for="nombres" class="col-sm-2 col-form-label col-form-label-lg" >Nombres:</label>
                        <div >
                        <input type="text" class="form-control form-control-sm" name="nombres" id="nombres" placeholder="ingresar nombre del paciente"  value="{{ $odontologo->nombres }}" >
                        </div>
                    </div>

              
                      <div class="form-group">
                          <label for="apellidos" class="col-sm-2 col-form-label col-form-label-lg" >Apellidos:</label>
                          <div >
                          <input type="text" class="form-control form-control-sm" name="apellidos" id="apellidos" placeholder="ingresar apellido del paciente"  value="{{ $odontologo->apellidos }}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="identidad"class="col-sm-2 col-form-label col-form-label-lg">Identidad:</label>
                        <div>
                        <input type="text" class="form-control form-control-sm" name="identidad" id="identidad" placeholder="ingresar identidad del paciente"  value="{{ $odontologo->identidad }}">
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="telefonoFijo" class="col-sm-2 col-form-label col-form-label-lg">Telefono fijo:</label>
                    <div >
                    <input type="text" class="form-control form-control-sm" name="telefonoFijo" id="telefonoFijo" placeholder="ingresar telefono Fijo del paciente"  value="{{ $odontologo->telefonoFijo}}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="telefonoCelular" class="col-sm-2 col-form-label col-form-label-lg">Telefono celular:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="telefonoCelular" id="telefonoCelular" placeholder="ingresar telefono Celular del paciente"  value="{{ $odontologo->telefonoCelular }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email:</label>
                  <div >
                    <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="ingresar telefono Celular del paciente"  value="{{ $odontologo->email }}">
                  </div>
                  </div>

                    
                  <div class="form-group">
                    <label for="departamento" class="col-sm-2 col-form-label col-form-label-lg">Departamento:</label>
                    <div >
                    <input type="text" class="form-control form-control-sm" name="departamento" id="departamento" placeholder="ingresar departamento del paciente"  value="{{ $odontologo->departamento }}">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="ciudad" class="col-sm-2 col-form-label col-form-label-lg">Ciudad:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="ciudad" id="ciudad" placeholder="ingresar ciudad del paciente"  value="{{ $odontologo->ciudad }}">
                  </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="direccion" class="col-sm-2 col-form-label col-form-label-lg">Direccion:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="direccion" id="direccion" placeholder="ingresar direccion del paciente"  value="{{ $odontologo->direccion }}">
                  </div>
                  </div>

                  <label for="state_id" class="control-label">Especialidad:</label>
                <select name="especialidad" class="form-control" value="{{$odontologo->especialidad}}">
          <option disabled selected >{{$odontologo->especialidad}}</option>
          <option >General</option>
                    <option >Cirugia y Maxilofacial</option>
                    <option>Radiologia oral y maxilofacial</option>
                    <option >Ortodoncia</option>
                    <option >Endodoncia</option>
                    <option >Prostodoncia</option>
                    <option >Periodancia</option>
                    <option >Patologogia oral y maxilofacial</option>
                  
        </select>

                  <div class="form-group">
                    <label for="intervalo" class="col-sm-2 col-form-label col-form-label-lg">Intervalo:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="intervalo" id="intervalo" placeholder="ingresar profesion del paciente"  value="{{ $odontologo->intervalos }}">
                  </div>
                  </div>
               
                  
</div>
<div>
        <br>
        
        <button id="bot"type="submit"class="btn btn-primary" data-toggle="modal" >
          Continuar
        </button>

        </form>
    
        <br>
       
                  </div>
                  </div>
      </div>
      
 
      
</div>

<body>

</html>

     <td>
    
     <buttton type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
</svg>
      Eliminar
  </button>

  </td>
 
  
  </div>

     </tr> 
     @empty
     <h1>No hay Pacientes Existentes</h1>
     @endforelse
     </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->



</body>

<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Busqueda por nombre o identidad:"
    }
});
} );
</script>

<!-- escript de datatable con el id de la tabla este muy importante en este caso la tabla es id="datatable"-->
</div>
</div><!-- fin del DIV contenedor de la buscador!!!  -->


</html>

@include('nuevoDoctor')

@endsection 