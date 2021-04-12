@extends('datospersonales')

@section('titulo','Alertas')
@section('cuerpo')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!-- para que funcione boton desplegable -->
    <style>
    #padre{
        margin:4em;
      

    }
    #areadetexto{
        color:red;
    }
    table, th, td {
  border: 1px solid #e7b3ff;
  border-collapse: collapse;

}

th{
    background-image: linear-gradient(to left,  #f7e6ff,#e7b3ff);
}
#tabla{
align:center;

}
    
    </style>
</head>
<body>
    <div id="padre" class="container">
    <h3>Alertas</h3>
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
<!-- Formulario para crearle una alerta al paciente en especifico -->
        <form method="POST" action="">
        
            @csrf
            <textarea required id="areadetexto" name="alerta" value="text" rows="4" cols="100" placeholder="Escriba la alerta a tener en cuenta del paciente" ></textarea>
            <br>
            <?php
            $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
            $mysqli->set_charset("utf8");
            ?>
                <?php
            $getDoctor =$mysqli->query("select * from alertapredeterminadas order by id");
            while($f=$getDoctor->fetch_object()) {
                
                ?>
                <input name="alerta"  type="checkbox" value="<?php echo $f->alertapredeterminada; ?>"><?php echo $f->alertapredeterminada?></input>
                <?php
            } 
            ?>
            <hr>
            <div>
            @can('isAdmin')
            <button type="button" id="config"class="btn btn-outline-info" data-toggle="modal" data-target="#configurar">Configurar alertas predeterminadas </button>
            @endcan
            <button type="submit" class="btn btn-primary" id="guardar" >Guardar </button>
            </div>
            </form>
    
    
    </div>
    <div id="padre2" class="container">
    <h4>Alertas Actuales del Paciente</h4>
    
    <table class="table" id="tabla">
    <thead><tr><th>Alerta</th><th colspan="2">Acción</th></tr></thead>
    <tbody>
    @forelse($pacientes->alertas as $ver)
    <tr>
    <td>
    
            <svg xmlns="http://www.w3.org/2000/svg" color="red" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
            </svg>
            {{$ver->alertas}}
            
    </td>
    <!-- eliminar -->
    @can('delete',$ver)
    <td>
        <button   class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$ver->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
        </svg>
        Eliminar
        </button>
        <div class="modal fade" id="modal-{{$ver->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
        </svg> Eliminar Alerta del paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <!--<span aria-hidden="true">&times;</span>-->
        </button>
        </div>
        <div class="modal-body">
        ¿Desea realmente eliminar la alerta {{$ver->alertas}}?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form method="post" action="{{route('alertas.borrar',['id2'=>$ver->id,'id'=>$pacientes->id])}}">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
        </div>
        </div>
        </div>
        </div>
        <!-- fin de modal de elinar alertas del paciente-->
    </td>
    @endcan
    @can('update',$ver)
    <td>
    <a class="btn btn-warning " href="{{route('alertas.editar',['id2'=>$ver->id,'id'=>$pacientes->id])}}">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            Editar</a>
    </td>
    @endcan
    </tr>
    @empty
   <td colspan="2"> No tiene alertas</td>
    @endforelse
    </tbody>
    </table>
    </div>
   
<!-- ************************************************************************************************************************************************************************************************ -->
<!-- Seccion de agregar alertas predefinidas -->
<div class="modal fade" id="configurar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Agregar Alerta Predefinida</h4>      
            </div>

            <div class="modal-body">
                <form method="POST"  action="{{route('alertaspredeterminada.guardar',['id'=>$pacientes->id])}}">
                @csrf
                <textarea cols="60" required id="areadetexto" name="alertapredeterminada" placeholder="Escriba la alerta que aparecera disponible para ser seleccionada en todos los pacientes"></textarea>
                <hr>
                <div>
                <button type="submit" class="btn btn-primary" id="agregar" >Agregar </button>
                </div>
                </form>

            <div>
                <?php 
                $alertapredefinida= App\Alertapredeterminada::All();?>
                @forelse($alertapredefinida as $alerta)
                <label> {{$alerta->alertapredeterminada}}</label>
                <!-- seccion de eliminar alertas predefinidas -->
                @can('isAdmin')
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$alerta->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg>
                    Eliminar
                    </button>
                    
                </td>
                @endcan
                    <!-- Modal de eliminar -->
                    <div class="modal fade" id="modal-{{$alerta->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg> Eliminar Alerta Predeterminada</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <!--<span aria-hidden="true">&times;</span>-->
                    </button>
                    </div>
                    <div class="modal-body">
                    ¿Desea realmente eliminar la alerta?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <form method="post" action="{{route('alertaspredeterminadas.borrar',['id'=>$alerta->id])}}">

                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
            <!-- fin de modal -->

                <br>

                @empty
                No se han creado todavia
                @endforelse
            </div>
            </div>
        </div> 
    </div> 

</div>

<div class="modal-footer" style="position: absolute; left: 320px; width: 1070px; top: 750px; height:50px; background-color: #e6f9ff;">
                  
                  <a style="position: absolute;left: 830px; font-size:18px; font-family: Times New Roman, Times, serif; color:#7a7a52; " href="/">@Smile Software 2021</a>  
    
                  @forelse($logotipos  as $tag)
        <img  class="logo" id="logo4"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" style="border-radius: 50%; position: absolute;left: 1005px;top: 5px;width: 40px;border-color: #33ccff;  height: 40px;" >
        @empty
    
        <img class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3"  style="border-radius: 50%;position: absolute;left: 1005px;top: 5px;width: 40px; border-color: #33ccff;   height: 40px;"  > 
        @endforelse 
        </div>
    
        </div>
    
    </div>
    </div>
</body>
</html>
@endsection