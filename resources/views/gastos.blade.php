@extends('Plantilla.Plantilla')
@section('titulo','Gastos')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
   width: 100%;
   border: 1px solid #000;
   text-align:center;
}
th, td {
   width: 25%;
   padding: 5px;
   border: 3px solid #fff;
}
td{
    background-color:#FEF5E7 ;
}
th{
    text-align: center;
    background-color:#ffad33 ;
}
#padre{
    width:auto;
    font:1em Tahoma;
    margin: 5rem;
    padding: 2rem;
    border: 2px solid #ccc;
}
#btnAgregarGasto{ 
    border-radius: 5px;
    width: 160px;
    background-color: #b3f0ff;
    font-size: 16px;
    position: absolute;
    left: 900px;
    top:10px;
    border-color: #e67300;
    color: #ff8000;       
   }
   #divhijo1{
        position: relative;
    } 
</style>
</head>
<body>
    <div class="container" id="padre"><!-- div1 padre-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="divhijo1"><!-- div hijo1 -->
        <h1 style="color: #ff9933;text-align:center;
        text-shadow: -1px 0 #009999, 0 1px #009999, 1px 0 #009999, 0 -1px #009999;
        font-family: serif;"id="dire">Gastos de la Clinica</h1>
        
        <a type="button" class="btn btn-outline-info" id="btnAgregarGasto"  data-toggle="modal" data-target="#creategasto">
            <svg width="1.3em" height="2em" style="color:red"  viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
            Agregar Gasto
        </a>
    </div><!-- fin div hijo1 -->
<div><!-- div hijo2 -->
<hr>
</div><!--fin div hijo2 -->
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
<table>
        <thead>
        <tr>
            <th>Categoria</th>
            <th>Detalle</th>
            <th>Fecha de Factura</th>
            <th>Fecha  de Pago</th>
            <th>Total</th>
            <th>Acción</th>
        </tr>
        </thead>
        <!-- pie de tabla -->
        <tfoot>
            <td style="text-align: center;background-color:#D7DBDD  ;">Total a pagar=</td>
            <td colspan="5" style="text-align: center;background-color:#D7DBDD  ;">
            {{$monto}}
            </td>
        </tfoot>
        <!--  -->
        <tbody>
        @forelse($gastos as $gasto)
        <tr>
            
            <td>{{$gasto->categoria}}</>
            <td>{{$gasto->detalle}}</td>
            <td>{{$gasto->fechafactura}}</td>
            <td>{{$gasto->fechapago}}</td>
            <td>{{$gasto->monto}}</td>
            <!-- boton eliminar -->
            <td>
                 <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$gasto->id}}">
                 Eliminar
                 </button>
                 <!-- Modal -->
                <div class="modal fade" id="modal-{{$gasto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Gasto de la Clinica</h5>
                                 <button type="button" class="close"        data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            ¿Desea realmente eliminar el Gasto que seleccionó ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <form method="post" action="{{ route('gasto.borrar',['id'=>$gasto->id]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>  
        @empty
        <tr>
        <td colspan="6" style="text-align:center; font: 200 1.5em Tahoma, Arial, Verdana, sans-serif;">¡¡No Tiene Ningún Gasto Creado!!</td>
        </tr>
        @endforelse   
        </tbody>
    </table>
    </div><!-- Fin div1 padre-->
</body>
</html>
@include('nuevogasto')<!-- esta seccion hace que funcione modal nuevo gasto -->
@endsection