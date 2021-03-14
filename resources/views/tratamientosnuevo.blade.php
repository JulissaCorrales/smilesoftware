@extends('Plantilla.Plantilla2')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamientos</title>
    <style>

    #mo{
    margin:2em;
    padding:2em;
    font-family: arial;
    font-size:20px;
    float:center;
    

    }
    h2{
      text-align:center;
      
    }
    #n{
    background-color:#F9E79F  ;
    margin:2em;
    padding:2em;
    border:solid 1px  #E9F7EF ;
    }
    </style>




</head>
@section('contenido')

<body id="bii">

    
  <div id="mo" class="container" >
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
  <h2> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
  <path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg> Creación de un Nuevo Tratamiento en la Clínica
 
  
  </h2>
<div class="content" id="n">
<form method="post" action="/tratamientoNuevo">
                      @csrf
                      <div class="form-group">
                          <label for="categoria">Tratamiento:</label>
                          <input type="text" class="form-control-file" name="categoria" id="categoria" placeholder="Ingresar el nombre del tratamiento">
                      </div>
                     
                    <div class="form-group">
                        <label for="tipo">Tipo :</label>
                        <select  name="tipo" id="tipo">
                        <option disabled selected>Seleccione el tipo</option>
                          <option>Accion Clinica</option>
                          <option>Accion de Laboratorio</option>
                        </select>
                    </div>
                  <div class="modal-footer">
                    <button type="button" onclick="location.href='/tratamiento/'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button type="submit" class="btn btn-primary" >Guardar Tratamiento</button>
                 </div>
              </form>


</div>

  </div>
</body>

</div>



</body>

@endsection
</html>