@extends('Plantilla.Plantilla2')
@section('titulo','Gastos')
@section('contenido')
@canany(['isAdmin','isSecretaria'])
<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
   width: 100%;
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
    background-color:#293d3d ;
color:white;
}
#padre{
    width:auto;
    margin: 5rem;
    padding: 2rem;
    border: 2px solid #ccc;
}
#btnAgregarGasto{ 
    border-radius: 5px;
    width: 160px;
    background-color: #669999;
    font-size: 14px;
    position: absolute;
    left: 700px;
    top:1px;
    border-color: #e67300;
    color: white;       
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
        @can('Create', App\Gasto::class)
        <a type="button" class="btn btn-outline-info" id="btnAgregarGasto"  data-toggle="modal" data-target="#creategasto">
            <svg width="1.3em" height="2em" style="color:red"  viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
            Agregar Gasto
        </a>
        @endcan
    </div><!-- fin div hijo1 -->
<div><!-- div hijo2 -->
<hr>
</div><!--fin div hijo2 -->
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif

    <div  class="container" id="dd">
 <div class="list-group">
 
<table id="datatable">
<thead>
        <tr>
            <th>Categoria</th>
            <th>Detalle</th>
            <th>Fecha de Factura</th>
            <th>Fecha  de Pago</th>
            <th>Total</th>
            @canany(['isAdmin','isSecretaria'])
            <th >Editar</th>
            <th >Eliminar</th>
            @endcanany
         
            
        </tr>
        </thead>
        <!-- pie de tabla -->
        <tfoot>
            <td  colspan="4" style="text-align: left; background-color:#D7DBDD  ;">Total a pagar</td>
            <td colspan="3"style="text-align: left;background-color:#D7DBDD  ;">
            {{$monto}}
            </td>
        </tfoot>
        <!--  -->
        <tbody>
       
        <tr>
        @forelse($gastos as $gasto)
            <td>{{$gasto->categoria}}</td>
            <td>{{$gasto->detalle}}</td>
            <td>{{$gasto->fechafactura}}</td>
            <td>{{$gasto->fechapago}}</td>
            <td>{{$gasto->monto}}</td>
            @can('update',$gasto)
            <td >  <a class="btn btn-warning "  data-toggle="modal" data-target="#modall-{{$gasto->id}}">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            </a>

             
 <div class="modal fade" id="modall-{{$gasto->id}}" >
            <div class="modal-dialog" role="document">
                <div class="modal-content" >
                <div id="div1"class="modal-header" style="background-color:#293d3d; color:white;  height:80px;">
                
  
                    <h4  class="modal-title" id="myModalLabel">  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
                   
                        Editar Gasto
                    </h4>
                    <button type="button" class="close" data-dismiss="modal"    aria-label="Close">
                    <span span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            
            
    <form method="post" action="{{route('gasto.update',['id'=> $gasto-> id])}} ">

    @csrf
    @method('put')
     <!-- Categoria-->
                
     <div class="form-group" id="divcate">
                    <label for="categoria" class="control-label">Categoria:</label>
                    <input type="text"  class="form-control-file" placeholder="Ingrese la categoria del gasto" name="categoria" id="categoria  "   value="{{ $gasto->categoria }}"> 
                    </div>
                   
                    <!-- Detalle-->
                    <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Detalle:</label>
                    <input type="text"  class="form-control-file" name="detalle" id="detalle" placeholder="Ingrese el detalle del gasto" value="{{ $gasto->detalle }}">
                    </div>
                 
                    <!-- Monto-->
                    <div class="form-group" id="div3">
                    <label for="monto" class="control-label">Monto:</label>
                    <input type="number"  class="form-control-file" name="monto" id="monto" placeholder="Ingrese el monto del gasto"  value="{{ $gasto->monto }}">
                    </div>
                 
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div4">
                    <label for="fechafactura" class="control-label">Fecha de la Factura:</label>
                    <input type="date"  class="form-control-file" name="fechafactura" id="fechafactura" value="{{ $gasto->fechafactura }}">
                    </div>
                   
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div5">
                    <label for="fechapago" class="control-label">Fecha de Pago de la Factura:</label>
                    <input type="date"  class="form-control-file"  name="fechapago" id="fechapago" value="{{ $gasto->fechapago }}">
                    </div>
                   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='/pantallainicio/gastos'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input type="reset" class="btn btn-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-primary" data-toggle="modal" >
                        Continuar
                    </button>
                    
                   
                    </div>

    
    
    </form>

    

        </div>
     </div>











</td>
            @endcan
            @can('delete',$gasto)
            <td>
           <!-- boton eliminar -->
                 <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$gasto->id}}">
                
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>

                 </button>
                 <!-- Modal -->
                <div class="modal fade" id="modal-{{$gasto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="position:absolute; top: 100px; left:500px;">
                        <div class="modal-content">
                            <div class="modal-header" style=" background-color:#293d3d; color:white;  height:80px;">
                                <h5 class="modal-title" id="exampleModalLabel">  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg> Eliminar Gasto de la Clinica</h5>
                                 <button type="button" class="close"        data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            ¿Desea realmente eliminar el Gasto que seleccionó  {{$gasto->categoria}}?
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
            @endcan
        </tr>  
        @empty
        <tr>
        <td colspan="6" style="text-align:center; font: 200 1.5em Tahoma, Arial, Verdana, sans-serif;">¡¡No Tiene Ningún Gasto Creado!!</td>
        </tr>
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
        search: "Buscador de Gastos según categoria o monto:"
    }
});
} );
</script>

<!-- escript de datatable con el id de la tabla este muy importante en este caso la tabla es id="datatable"-->
</div>
</div><!-- fin del DIV contenedor de la buscador!!!  -->
</html>
@include('nuevogasto')<!-- esta seccion hace que funcione modal nuevo gasto -->
@endcanany
@endsection