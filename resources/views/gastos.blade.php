@extends('Plantilla.dashboard')
@section('content')
@section('titulo','Gastos')
@canany(['isAdmin','isSecretaria'])
<!DOCTYPE html>
<html lang="en">


    <body>
                <div class="card mb-3">
                <div class="card-header">
                    <h4><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                        </svg>Gastos de la Clínica</h4>
                        <p>En esta Sección se muestra los Gastos registrados y también se podra editar datos, crear un nuevo Gasto, borrar el Gasto registrado, ver el total de los Gastos la 
                            fecha  de factura y la fecha de los pagos</p>
                       
                        <div id="divhijo1"><!-- div hijo1 -->
                            @can('Create', App\Gasto::class)
                            <a type="button" class="btn " id="btnAgregarGasto"  data-toggle="modal" data-target="#creategasto" style="background-color:#28a4a4; color:#c1f0f0; position: absolute;
                            left: 1080px;
                            top:  80px;">
                                <svg width="1.3em" height="2em" style="color:white"  viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                Agregar Gasto
                            </a>
                            @endcan
                        </div><!-- fin div hijo1 -->               
                </div>
                
                </div>


            <!--contenedor de tabla -->
                <div  class="card-body">
                  <div class="table-responsive">
                    <!-- tabla -->

                    <table class="table table-bordered" id="datatable1" width="100%" cellspacing="0">
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
                    <input required type="text"  class="form-control-file" placeholder="Ingrese la categoria del gasto" name="categoria" id="categoria  "   value="{{ $gasto->categoria }}"> 
                    </div>
                   
                    <!-- Detalle-->
                    <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Detalle:</label>
                    <input required type="text"  class="form-control-file" name="detalle" id="detalle" placeholder="Ingrese el detalle del gasto" value="{{ $gasto->detalle }}">
                    </div>
                 
                    <!-- Monto-->
                    <div class="form-group" id="div3">
                    <label for="monto" class="control-label">Monto:</label>
                    <input requiredrequired type="number"  class="form-control-file" name="monto" id="monto" placeholder="Ingrese el monto del gasto"  value="{{ $gasto->monto }}">
                    </div>
                 
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div4">
                    <label for="fechafactura" class="control-label">Fecha de la Factura:</label>
                    <input required  type="date"  class="form-control-file" name="fechafactura" id="fechafactura" value="{{ $gasto->fechafactura }}">
                    </div>
                   
                    <!-- Fecha de la factura-->
                    <div class="form-group" id="div5">
                    <label for="fechapago" class="control-label">Fecha de Pago de la Factura:</label>
                    <input required  type="date"  class="form-control-file"  name="fechapago" id="fechapago" value="{{ $gasto->fechapago }}">
                    </div>
                   
                    <div class="form-group" id="div6">
                    <button style="background-color:purple"type="button" onclick="location.href='/pantallainicio/gastos'"class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                    <input  type="reset" class="btn btn-danger">
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
        search: "Buscador de Gastos según categoria o monto:",
          "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "Mostrando 0 to 0 of 0 Gastos",
        "infoFiltered": "(Filtrado de _MAX_ total Gastos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Gastos",
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

<!-- escript de datatable con el id de la tabla este muy importante en este caso la tabla es id="datatable"-->
</div>
</div><!-- fin del DIV contenedor de la buscador!!!  -->
</html>
@include('nuevogasto')<!-- esta seccion hace que funcione modal nuevo gasto -->
@endcanany
@endsection