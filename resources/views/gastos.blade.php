@extends('Plantilla.dashboard')
@section('content')
@section('titulo','Gastos')
@canany(['isAdmin','isSecretaria'])
<!DOCTYPE html>
<html lang="en">


    <body>
                <div class="card mb-3">
                <div class="card-header">
                    <h3><img style=" margin-left:0%;" src="{{ asset('Imagenes/gastoss.png') }}"   width="7%;" height="7%"> Gastos de la Clínica</h3>
                        <p>En esta sección se muestra los Gastos registrados y también se podrá editar Gastos, crear un nuevo Gasto, borrar el Gasto registrado, ver el total de los Gastos, la 
                            fecha  de factura y la fecha de los pagos</p>
                       
                                      
                </div>
</div>
<div id="divhijo1"><!-- div hijo1 -->
                            @can('Create', App\Gasto::class)
                            <button style="margin:1em;" type="button" class="btn btn-outline-info" id="btnAgregarGasto"  data-toggle="modal" data-target="#creategasto" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
  <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg>
                                Agregar Gasto
                            </button>
                            @endcan
                        </div><!-- fin div hijo1 --> 
                <div class="container" >
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
                </div>


            <!--contenedor de tabla -->
                <div  class="card-body">
                  <div class="table-responsive">
                    <!-- tabla -->

                    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                        <thead>
                           <tr>
            <th>Categoría</th>
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
{{ number_format($monto, 2 ) }}
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
            <td>{{number_format(($gasto->monto),2)}}</td>
            @can('update',$gasto)
            <td >  <button class="btn btn-outline-success"  data-toggle="modal" data-target="#modall-{{$gasto->id}}">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            </button>

             <!-- modal de editar -->
 <div class="modal fade" id="modall-{{$gasto->id}}" >
            <div class="modal-dialog" role="document">
                <div class="modal-content" >
                <div id="div1"class="modal-header" style=" background-color:#276678; color:white;">
                
  
                    <h3  class="modal-title" id="myModalLabel">
                    <img style=" margin-left:0%;" src="{{ asset('Imagenes/editar.png') }}"   width="10%;" height="10%">
                        Editar Gasto 
                    </h3>
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
                    <label for="categoria" class="control-label">Categoría:</label>
              <select required name="categoria" id="categoria" class="form-control">
              <option  selected value="{{$gasto->categoria}}"> Categoría Actual: {{$gasto->categoria}}</option>
              <option value="Servicios Públicos">Servicios Públicos</option>
              <option value="Provision por Contingencias">Provision por Contingencias</option>
              <option value="Compra de Material de la Clínica">Compra de Material de la Clínica</option>
              <option value="Pago por Alquiler">Pago por Alquiler</option>
              <option value="Marketing, Públicidad y Diseño">Marketing, Públicidad y Diseño</option>
              <option value="Gastos Financieros y Administrativo">Gastos Financieros y Administrativos</option>
            <option value="Mantenimiento y Reparaciones Imprevistas">Mantenimiento y Reparaciones Imprevistas</optio>
            <option value="Nóminas, Salarios y Seguridad Social">Nóminas, Salarios y Seguridad Social</optio>
            <option value="Transportes y logística">Transportes y logísticar</optio>
            <option value="Gastos de kilometraje">Gastos de kilometraje</optio>
            <option value="Impuestos y Tasa">Impuestos y Tasas</option>
            <option value="Gastos por Suministros y Facturas de Servicios">Gastos por Suministros y Facturas de Servicios</option>
            <option value="Servicios de Empresas Externa">Servicios de Empresas Externas</option>
            <option value="Costes de Persona">Costes de Personal</option>
            <option value="Impuestos Específicos y Costos de Distribución">Impuestos Específicos y Costos de Distribución</option>
            <option value="Materias Primas">Materias Primas</option>


              </select>
                    </div>
                   
                    <!-- Detalle-->
                    <div class="form-group" id="div2">
                    <label for="detalle" class="control-label">Detalle:</label>
                    <input required type="text" maxlength="150" minlength="3" class="form-control-file" name="detalle" id="detalle" placeholder="Ingrese el detalle del gasto" value="{{ $gasto->detalle }}">
                    </div>
                 
                    <!-- Monto-->
                    <div class="form-group" id="div3">
                    <label for="monto" class="control-label">Monto:</label>
                    <input required type="number" min="1" pattern="^[0-9]+" class="form-control custom-select" name="monto" id="monto" placeholder="Ingrese el monto del gasto" formControlName="precio_min" oninput="this.value = Math.max(this.value, 1)" value="{{$gasto->monto}}">
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
                    <button type="button" onclick="location.href='/pantallainicio/gastos'"class="btn btn-outline-secondary" data-dismiss="modal">Atrás</button>
                    <input  type="reset" class="btn btn-outline-danger">
                    <button id="botonContinuar"type="submit"class="btn btn-outline-info" data-toggle="modal" >
                        Actualizar
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
                 <button  type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-{{$gasto->id}}">
                
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>

                 </button>
                 <!-- Modal -->
                <div class="modal fade" id="modal-{{$gasto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="position:absolute; top: 100px; left:500px;">
                        <div class="modal-content">
                            <div class="modal-header" style=" background-color:#276678; color:white;">
                                <h5 class="modal-title" id="exampleModalLabel">  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg> Eliminar Gasto de la Clínica</h5>
                                 <button type="button" class="close"        data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            ¿Desea realmente eliminar el Gasto que seleccionó  {{$gasto->categoria}}  <b>{{$gasto->detalle}} </b> ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                                <form method="post" action="{{ route('gasto.borrar',['id'=>$gasto->id]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar" class="btn btn-outline-danger">
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
        search: "Búscador de Gastos según categoría o monto:",
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