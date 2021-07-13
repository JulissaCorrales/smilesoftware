@extends('Plantilla.datospersonales')

 @section('titulo','Imagenes Cinicas del paciente')


    @section('cuerpo')
  
  <head>
 
    <style>

#vPrincipal{
    width:auto;
    font-size:15px;
    margin: 5rem;
    padding: 2rem;
    
    position: absolute;
  left: 330px;
  
  width: 900px;
  top: 150px;
   height:500px;

    }

    .vPrincipal{
      border-style: groove;
      width: 1100px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
  font-size:15px;
  
    }

    

  

    .content{
      border-style: groove;
    }

    @import url(
  https://fonts.googleapis.com/css?family=Source + Sans + Pro:200,
  300,
  400,
  600,
  700|Oswald:400,
  300,
  700
);
body {
  font-size: 16px;
}
strong {
  font-weight: 500;
}
h1 {
  font-family: "Oswald", sans-serif;
  letter-spacing: 1.5px;
  color: #333333;
  font-weight: 100;
  font-size: 20px;
}
#content {
  margin-top: 50px;
  text-align: center;
}
/* Timeline */
.timeline {
  border-left: 4px solid #4298c3;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
  background: rgba(255, 255, 255, 0.03);
  color: #333;
  font-family: "Source Sans Pro", sans-serif;
  margin: 50px auto;
  letter-spacing: 0.5px;
  position: relative;
  line-height: 1.4em;
  font-size: 1.03em;
  padding: 30px;
  list-style: none;
  text-align: left;
  font-weight: 1;
  max-width: 50%;
}
.timeline h1,
.timeline h2,
.timeline h3 {
  font-family: "Oswald", sans-serif;
  letter-spacing: 1.5px;
  font-weight: 100;
  font-size: 1.4em;
}
.timeline .event {
  border-bottom: 1px dashed #4298c3;
  padding-bottom: 25px;
  margin-bottom: 50px;
  position: relative;
}
.timeline .event:last-of-type {
  padding-bottom: 0;
  margin-bottom: 0;
  border: none;
}
.timeline .event:before,
.timeline .event:after {
  position: absolute;
  display: block;
  top: 0;
}
.timeline .event:before {
  left: -217.5px;
  color: #717171;
  content: attr(data-date);
  text-align: right;
  font-weight: 400;
  font-size: 0.9em;
  min-width: 120px;
}
.timeline .event:after {
  box-shadow: 0 0 0 4px #169eda;
  left: -57.85px;
  background: #91c740;
  border-radius: 50%;
  height: 11px;
  width: 11px;
  content: "";
  top: 5px;
}
@media (max-width: 800px) {
  .timeline .event:before {
    left: -0.5px;
    top: 28px;
    background-color: #4298c3;
    color: white;
    margin-top: 8px;
    padding: 2px 8px 2px 8px;
    content: attr(data-date);
    text-align: right;
    font-weight: 400;
    font-size: 0.9em;
    min-width: 120px;
  }
  .timeline .event p {
    top: 27px;
    padding: 10px 0px 10px 0px;
    position: relative;
  }
}


  </style>


</head>


<body id="page-top">

  
  
    
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
    

 <!-- DataTables Example -->

  <div class="card mb-3">
          <div class="card-header">
              <h4><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-image-fill" viewBox="0 0 16 16">
            <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
            <path d="M10.564 8.27 14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
             </svg>  Imagenes Clínicas del Paciente</h4>
            <p>En esta ventana  muestran las imagenes clínicas (Imagenes de Radiografias,Tomografias y otros) de los pacientes que se han registrado  en la clínica, tambien se pueden subir nuevas imagenes clínicas, editar y eliminar las imagenes existentes</p>
            
          
              @canany(['isAdmin','isOdontologo'])
            <button class="btn btn-outline-info" data-toggle="modal" data-target="#modal-{{$pacientes->id}}" >
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                Subir Archivos</button>
                @endcanany


 <div class="modal fade" id="modal-{{$pacientes->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                          <div class="modal-header" style="background-color: #d3e0ea; color:black;">
                                              <h5 class="modal-title" id="exampleModalLabel">Creación de un Nuevo Archivo </h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                 <?php
                    $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
                     $mysqli->set_charset("utf8");
                    ?>

        <form method="post" action="{{route('archivo.guardar',['id'=>$pacientes->id])}}" enctype="multipart/form-data">
                  @csrf
                  <hr>
        <!-- Doctor -->
        <label for="state_id" class="control-label">Doctor responsable del tratamiento:</label>
        <select required name="odontologo_id" class="form-control">
        <option value="" disabled selected>Seleccione un Doctor</option>
        <?php
        $getDoctor =$mysqli->query("select * from odontologos order by id");
        while($f=$getDoctor->fetch_object()) {
          echo $f->nombres;
          echo $f->apellidos;

          ?>
         
          <option value="<?php echo $f->id; ?>"><?php echo $f->nombres." ".$f->apellidos;?></option>
          <?php
        } 
        ?>
        </select>
        <hr>
              <div class="form-group">
              <label for="identidad">Imagen a subir:</label>
              <input required type="file" class="form-control-file" name="imagen" id="imagen">
              </div>
                    
            

              <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <textarea required type="text" class="form-control-file" name="observaciones" id="observaciones" placeholder="Ingrese la  Observación (Obligatorio)"></textarea>
              </div>
              

              <div class="modal-footer">
              <button type="button" onclick="location.href='{{route('imagenesYarchivos.ver',['id'=>$pacientes->id])}}'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
              <input type="reset" class="btn btn-danger">
            <button type="submit" class="btn btn-primary" >Guardar Archivo</button>
          </div>
              </form>
                                            </div>

                                      </div>
                              </div>   
                            </div>
           </div>

          <!--fin de tarjeta -->

          <!-- inicia el contenido -->
          <div id="content">
  <h3>Expediente del Paciente: {{$pacientes->nombres}} {{$pacientes->apellidos}}</h3>
 

  <ul class="timeline">
    
  @forelse ($pacientes->archivos as $tag)
  
  <li class="event" data-date="{{$tag->fecha}}">

    <h3>Doctor:{{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</h3>
    <p> {{$tag->observaciones}} </p>
    <a href="/images/{{$tag->imagen}}" class="with-caption image-link" title="Click on image to enlarge/reduce it">
    <img src="/images/{{$tag->imagen}}" width="150" alt="imagen">
    </a>

<!--boton de editar-->
<button type="button" onclick="location.href='{{route('archivo.editar',['id'=>$pacientes->id,'idarchivo'=>$tag->id])}}'" class="btn btn-outline-success">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>Editar</button>

                        <!--inicio del  boton y modal de borrado-->
                          <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                          </svg>
                          Eliminar 
                          </button>
                      </tr>
                   
                        <tr>
                            <!-- Modal -->
                            <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                          <div class="modal-header" style="background-color:#276678; color:white;  height:100px;">
                                              <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                              </svg> Eliminar </h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Desea realmente eliminar el archivo  {{$tag->imagen}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <form method="post" action="{{route('imagenesyarchivos.borrar',['id'=>$tag->id])}}">

                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                                  </form>
                                              </div>

                                      </div>
                              </div>   
                            </div>
                            <!-- fin de modal -->
<!--final del  boton y modal de borrado-->

    </li>
   @empty

  <p> En este momento no existen imagenes en el historial.</p>
              
  @endforelse

  </ul>

</div>
            <!-- termina el contenido-->
           </div>
 </div>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>

$("a").magnificPopup({
  type: "image",
  closeBtnInside: false,
  closeOnContentClick: false,

  callbacks: {
    open: function () {
      var self = this;
      self.wrap.on("click.pinhandler", "img", function () {
        self.wrap.toggleClass("mfp-force-scrollbars");
      });
    },
    beforeClose: function () {
      this.wrap.off("click.pinhandler");
      this.wrap.removeClass("mfp-force-scrollbars");
    }
  },

  image: {
    verticalFit: false
  }
});

</script>
    

 
    
</body>
</html>
@endsection