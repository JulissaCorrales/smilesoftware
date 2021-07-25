@extends('Plantilla.datospersonales')
<!DOCTYPE html>
<html lang="en">

    
    @section('titulo','Recaudaciones')

  
  @section('cuerpo')
<div class="card mb-3">
          <div class="card-header">
              <h2><img style=" margin-left:0%;" src="{{ asset('Imagenes/recau.png') }}"   width="7%;" height="7%"> Recaudaciones por  Planes de Tratamiento del Paciente</h2>
               <p>En esta Sección se muestra todas las prestaciones y los productos que se prestan, y muestra el total de los presupuesto</p>
            </div>  

         
      <div class="modal-body">
          <div class="table-responsive">
              <table id="" class="table table-bordered" width="100%" cellspacing="0">
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
                    <td colspan="2"><span><b>Total a pagar:<b><span></td>
                   
                    <td> 
                    <span> <b> Lps. {{$totalpagar}}<b><span>
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