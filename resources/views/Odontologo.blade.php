@extends('Plantilla.Plantilla')

<!DOCTYPE html>
<html lang="en">
@section('titulo','Gestion de Odontologos')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    
    <style>

 td{
   
  text-align: left;
  font-family: "Times New Roman";
  border-bottom: 5px solid #00cccc;
  height: 80px;
  
  
  
} 

#td1{
  border-left: 5px solid #00cccc;
 /* border: 1px solid #00cccc; */
 width: 100px;
 height: 40px;
}

#td2{
 /* border-left: 5px solid #00cccc;*/
 /* border: 1px solid #00cccc; */
 width: 400px;
 

}

#td4{
  
  width: 100px;
  

}

#td3{
  border-left: 5px solid #00cccc; 
  width: 100px;
  

}

#td5{
 
 width: 100px;

}

#td6{
 border-right: 5px solid #00cccc; 
 width: 100px;
}


#th1{
  font-family: "Times New Roman";
  text-align: center;
  font-size: 30px;
  border-left: 5px solid #00cccc;
  border-right: 5px solid #00cccc;
  border-bottom: 5px solid #00cccc;
  border-top: 5px solid #00cccc;
  
}


#th2{
  font-family: "Times New Roman";
  text-align: center;
  font-size: 30px;
  border-left: 5px solid #00cccc;
  border-bottom: 5px solid #00cccc;
  border-top: 5px solid #00cccc;


}

#bot{
        position: absolute;
    top:1125px;
    left:30px;
    width: 450px;
  height: 40px;
  background-color: #c1f0f0;
  font-family: "Times New Roman";
  text-align: center;
  border: 1px solid #FF4500;
  color:#ff9900;
  font-size: 25px;
}
 
 



 #datatable{
  /*border: 1px solid #FF4500;*/
  width: 1000px;
  height: 90px;
  border-collapse: collapse;
  position: absolute;
    left:50px;
    background-color: #e6ffff;
    top: 100px;
  
  
 }

 l


 #lista:hover{
   border: 1px solid #FF4500;
   color: hotpink;
 

 }

 #can{
  background-color: #e6ffff;
  height: 80px;
 

 }

 #cue{
  border: #00cccc  2px solid;
 }

 #nae{
  width: 1005px;
  height: 100px;
    border-radius: 12px;
    background-image: linear-gradient(to bottom,  #ccf5ff ,#99ebff); 
    position: absolute;
    top:260px;
    left: 190px;
  
    
    
 }

#dd{
  position: absolute;
    top:300px;
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
  
  text-shadow: -1px 0 #ccfff5, 0 1px #ccfff5, 1px 0 #009999, 0 -1px #009999;
  font-family: "Times New Roman";
  position: absolute;
            font-size: 40px;
            top: 2px;
            left:30px;
            border-bottom: 5px solid #00cccc;
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
    background-color: #e6ffff;
  position: absolute;
  width: 170px;
  height: 45px;
  font-size:17px;
            top: 50px;
            left:800px;
            font-family: "Times New Roman";
  text-align: center;
  border: 1px solid #FF4500;
  color:#cc6600
  

}

#control{
    background-color: #ccffff;
    position: absolute;
            top: 8px;
            left:700px;

}

#but3{

  background-color: #e6ffff;
  position: absolute;
  width: 170px;
  height: 45px;
  font-size:17px;
  
            top: 50px;
            left:620px;
            font-family: "Times New Roman";
  text-align: center;
  border: 1px solid #FF4500;
  color:#cc6600
  

  }

  #butoneliminar{
    width: 100px;
  height: 55px;
    
  }

  #verespecialidad{
   
  width: 120px;
  height: 55px;
  font-size:17px;
  
            
            font-family: "Times New Roman";
  text-align: center;
  background-color: #84e184;
  color:#00001a;
  

  }



  #odon{
    font-family: "Times New Roman";
  text-align: center;
  font-size: 30px;
  position: absolute;
            top: 200px;
  


  }


  #div2{
    background-image: linear-gradient(to top, #33d6ff ,#e6ffff );
    height: 150px;
  }

  #modal{
    text-shadow: -1px 0 #ccfff5, 0 1px #ccfff5, 1px 0 #009999, 0 -1px #009999;
  font-family: "Times New Roman";
            font-size: 30px;
            border-bottom: 5px solid #00cccc;
          


  }

  #bodymodal{
    
  font-family: "Times New Roman";
            font-size: 25px;
            border-bottom: 5px solid #00cccc;
            background-color: #e6ffff;

  }

  #n{
    width: 450px;
    font-family: "Times New Roman";
    font-size: 20px;

    
  }




  #datos{
    margin-left: auto;
  margin-right: auto;
  border-radius: 70%;
  position: relative;
  top: 5px;
  left: 20px;
  border: 4px solid  #00ccff;
  }


  #datos6{
    margin-left: auto;
  margin-right: auto;
  border-radius: 70%;
  position: absolute;
  border: 4px solid  #00ccff;
            
            left: 300px;}

            #imagen4{
              position: absolute;
            
            left: 60px;
           
            }
            

  #hh2{
    font-family: "Times New Roman";
  text-align: center;
  font-size: 20px;
  position: absolute;
            top: 550px;
            left: 915px;
            width: 50px;
  }


#td6{
  border-right: 5px solid #00cccc;
  

}

#but8{
  background-color: #47d147;
}
  



</style>

</head>
@section('contenido')

@canany(['isAdmin','isSecretaria'])

<body >
@if($errors->any())
<div class="alert alert-danger">

<ul>

 @foreach($errors->all() as $error)

 <li>{{$error}}</li>

 @endforeach
</ul>

</div>

@endif

@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif

    <div class="container">

    <nav class="navbar navbar-light bg-light" id="nae">
  <h1 id="dire"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>Gestión de Odontologos</h1>


  <!--Menu desplegable  -->


  <a id ="but3" type="button" class="btn btn-outline-info"  href="/pantallainicio/especialidad">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-heading" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
</svg> Especialidades </a>


@can('create',App\Odontologo::class)
  <button id ="n1" type="button" data-toggle="modal" data-target="#create">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>Nuevo odontologo </button> 
@endcan
  

 <!--fin de menu desplegable  -->
</nav>

</div>

<div  class="container" id="dd"><!-- es necesario para que funcione el boton de buscar por nombre
y numero de identidad agrupar todo en un un vid ya que no se hace crea u conflicto la pantilla de extencion
 ademas se debe incluir la liberia de boostrap y la libreria de datatable en la vista 
 ademas de al final de la pagina el scritp de java y despues el scritp de date table
 para que funcione correctamente-->
 <div class="list-group">

<table id="datatable" class="container">
<thead class="table table-striped table-bordered">
  <tr id="can">
    <th id="th1" colspan="6">Información de los Odontologos</th>

  </tr>
  </thead> 
  <tbody>
  
  <tr id="can">
  @forelse($odontologos as $odontologo)
     
     <td id="td1"><img src='/Imagenes/{{$odontologo->imagen}}' width="70px" height="70px"id="datos"></td>
     <td id="td2">Nombre: {{ $odontologo->nombres }}  {{$odontologo->apellidos}} <br>Telefono Celular:  {{$odontologo->telefonoCelular}} 
     <br>Correo Electronico: {{$odontologo->email}} 
     <br>Especialidad:  {{$odontologo->especialidad->Especialidad}}
  
  
   <td id="td3">
   @can('crearHorario',App\Odontologo::class)
    <a type="button" class="btn btn-danger" href="/create/{{$odontologo->id}}/nuevo" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
  <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>Editar Horarios
    
  </a>@endcan</td>
  @can('update',$odontologo)
  <td id="td4">
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$odontologo->id}}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
    Editar Datos
  </button></td>
  @endcan

  <div class="modal fade" id="modal-{{$odontologo->id}}" >
  
	<div class="modal-dialog" role="document">
		<div class="modal-content" >
			<div id="div2"class="modal-header">
	
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
                    <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Correo Electronico:</label>
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

                   <div class="form-group">
                    <label for="especialidad" class="col-sm-2 col-form-label col-form-label-lg">Especialidad:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="especialidad" id="especialidad" placeholder="ingresar la especialidad del Odontologo"  value="{{ $odontologo->especialidad_id }}">
                  </div>
                  </div> 

  
              <!--    <label for="state_id" class="control-label">Especialidad:</label>
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
 -->
        

                  <div class="form-group">
                    <label for="intervalo" class="col-sm-2 col-form-label col-form-label-lg">Intervalo:</label>
                  <div >
                    <input type="text" class="form-control form-control-sm" name="intervalo" id="intervalo" placeholder="ingresar profesion del paciente"  value="{{ $odontologo->intervalos }}">
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
    
        <br>
       
                  </div>
                  </div>
      </div>
      
 
      
</div>

<body>

</html>
@can('isAdmin')
     <td id="td5">
     <buttton  id="butoneliminar" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalll-{{$odontologo->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
</svg>
      Eliminar
  </button>
  </td>
@endcan
 
  
  </div>

  <div class="modal fade" id="modalll-{{$odontologo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
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

  <td id="td6">
    
    <a id="verespecialidad" class="btn btn-danger" type="button"  href="{{route('odontologo.especialidad',['id'=>$odontologo->id])}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-heading" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
</svg>
     Ver Especialidad
 </a>

 </td>

     </tr> 
     @empty
    <td><h3 align="center">¡¡No hay Odontologos Registrados!!</h3></td> 
     @endforelse
     </tbody>
</table>

<h3 id="hh2">{{ $odontologos->links() }}</h1>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- script de jquery para que funcione el buscador de nombre-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- script de datatable para que funcione el buscado de nombre-->



</body>



<!-- escript de datatable con el id de la tabla este muy importante en este caso la tabla es id="datatable"-->
</div>
</div><!-- fin del DIV contenedor de la buscador!!!  -->



</html>


@include('nuevoDoctor')

@endcanany

@endsection 