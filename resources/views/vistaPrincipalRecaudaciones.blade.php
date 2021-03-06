@extends('Plantilla.datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>@section('titulo','Recaudaciones')</title>

  
</head>
  
  @section('cuerpo')
<div class="card mb-3">
          <div class="card-header">
              <h4><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-ppt" viewBox="0 0 16 16">
                <path d="M7 5.5a1 1 0 0 0-1 1V13a.5.5 0 0 0 1 0v-2h1.188a2.75 2.75 0 0 0 0-5.5H7zM8.188 10H7V6.5h1.188a1.75 1.75 0 1 1 0 3.5z"/>
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
              </svg> Planes de Tratamiento del Paciente</h4>
               <p>En esta Sección se muestra todas las prestaciones y los productos que se prestan, y muestra el total de los presupuesto</p>
            </div>  

         
      <div class="modal-body">
          <div class="table-responsive">
              <table id="datatable" class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Prestación</th>
                          <th>Productos</th>
                          <th>Total Presupuesto</th>
                      </tr>
                   </thead>
                  <tbody>
                      <!-- prestacion -->
                      @forelse($pacientes->planestratamientos as $planes)
                        <tr>
                          <td>{{$planes->tratamiento->categoria}}</td>
                          <!-- productos -->
                          <td> 
                          @forelse($planes->tratamiento->productos as $producto)
                            <p> {{$producto->nombre}}</p>
                          @empty
                          vacío
                          @endforelse
                          </td>
                        <!-- Total presupuestos -->
                          <td>
                          @forelse($planes->recaudaciones as $recaudaciones)
                                  <p>{{$recaudaciones->preciototal}} </p>    
                                    
                                    
                                    @empty
                                    No tiene 
                                    @endforelse
                          
                          </td>
                      @empty
                    <td>Vacío</td>
                      @endforelse 
                        </tr>
                   </tbody>
                  <tfoot>
                    <tr>
                    <td><h4>Total a pagar:</h4></td>
                    <td></td>
                    <td> 
                    <h4>  Lps. {{$totalpagar}}</h4>
                    </td>

                    </tr>
                   </tfoot>
               </table>
           </div>
      </div>

   </div>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- script de jquery para que funcione el buscador de nombre-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <!-- script de datatable para que funcione el buscado de nombre-->

</body>
<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable( {
    language: {
        search: "Buscar recaudación:",
      "decimal": "",
        "emptyTable": "No hay información",
        "info": "",
        "infoEmpty": "Mostrando 0 to 0 of 0 recaudación",
        "infoFiltered": "(Filtrado de _MAX_ total recaudación)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ recaudación",
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

</html>
@endsection