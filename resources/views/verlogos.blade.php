@extends('Plantilla.dashboard')
@section('titulo','Nuevo Logotipo')
@section('content')
@canany(['isAdmin','isSecretaria'])
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

    <div  class="container">
        <hr>
        <h3 > 
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9c0 .013 0 .027.002.04V12l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15 9.499V3.5a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm4.502 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>
            Logo
        </h3>
        <hr>
        <div>
             <h5 style="text-align:center" for="">Logo Actual:</h5>
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
    
                <div id="verlogoactual" align="center">
                    @forelse($logotipos as $tag)
                        <div id="fondo">
                        <img  class="mr-3" id="imlogoactual"  src="{{Storage::url($tag->logo)}}" alt="image" width="30%" high="30%" >
                        </div>
                       
                        
    @can('isAdmin')                
    <!-- Borrar logo -->
           <!-- boton eliminar -->
           <br>
                 <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$tag->id}}">
                
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>

                 </button>
                 <!-- Modal -->
                <div class="modal fade" id="modal-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #276678;color:white;">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Logotipo de  la Clínica</h5>
                                 <button type="button" class="close"        data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            ¿Desea realmente eliminar el Logotipo?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <form method="post" action="{{ route('logotipo.borrar',['id'=>$tag->id]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
    <!-- Fin de eliminar -->
 

                            <!-- actualizar logo -->
   <div >
    <form method="POST" action="{{route('logotipo.update')}}" accept-charset="UTF-8" enctype="multipart/form-data">
     {{ csrf_field() }}
    @csrf
    @method('put')
     <label for="archivo"><b>Suba el nuevo logo que desea: </b></label><br>
     <input  type="file" class="form-control-file" id="imagedoc" name="imagedoc"  accept="image/*" required >
     <br>
     <input class="btn btn-success" type="submit" value="Cambiar" >
    </form>
    
</div>
@endcan
            
                    @empty
                    <img class="logo"  src="{{ asset('Imagenes/logo4.jpg') }}"  > 
                 <br>  <br>
                
                <!--  -->
                @can('isAdmin')
                <button  style="margin-bottom:2em;"type="button" class="btn btn-danger" data-toggle="modal" data-target="#crear">
                Cambiar
                 </button>
                 @endcan
                 @endforelse
                </div>

        </div>

    </div>
@endcanany
<!-- crear -->
<div >
   <!-- Modal -->
   <div  class="modal fade  bd-example-modal-lg" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   
                    <div class="modal-dialog modal-lg " role="document">
                        <div class="modal-content">
                        <div class="modal-header" style="background-color: #276678;color:white;">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <svg width="2em" height="2em" viewBox="0 0 17 16" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>                        
                            Nuevo Logotipo
                        </h5>
                        
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                	<span aria-hidden="true">&times;</span>
				            </button> 
                            </div>
                        <div class="modal-body">
                            <form method="POST" action="{{route('logotipo.guardar')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf
                          
                                    <div class="col-sm-12" id="imagePreview">							
                                    </div>                                                                           
                                    <div class="col-sm-12">					
                                                <input type="file" class="form-control-file" id="imagedoc" name="imagedoc"  accept="image/*" required>										
                                    </div>
                                        
                                 
                              <button  style="margin-left:350px; "type="submit" class="btn btn-primary">Crear</button>	      
						
                        
<!-- validaciones para que solo permita imagenes -->
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

                                    $('#imagedoc').change(function(el){
                                if(LimitAttach(this,1))
                                        filePreview(this);
                                    });
                                })();
                                </script>
                                <script type="text/javascript">
                                function LimitAttach(tField,iType) {
                                    file=tField.value;
                                    if (iType==1) {
                                    extArray = new Array(".ico",".jpeg",".jpe",".gif",".jpg",".png");
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
                         
                            
                     </div>
                      
                </div>
                  
              </div>
</div>
 

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <!-- script de jquery para que funcione el buscador de nombre-->
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
          <!-- script de datatable para que funcione el buscado de nombre-->
</body>
</html>

@endsection