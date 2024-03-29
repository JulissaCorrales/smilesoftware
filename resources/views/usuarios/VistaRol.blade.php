@extends('Plantilla.dashboard')
@section('titulo','Roles de Usuario')
@section('content')
@can('isAdmin')

<head>
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


</head>

<style>
  td {

    width: 300px;
  }






  #boton {
    margin: 1em;
    float: right;
    position: absolute;
    top: -20px;
    left: 850px;
  }
</style>

<body id="page-top">

  <!--</head> -->

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
      @endif
    </div>
  </div>




  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <h4><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
        </svg>Roles</h4>
      <p>En esta sección se muestran los roles con sus respectivos permisos, donde también se podrá editar.</p>


    </div>


  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered"  width="100%" cellspacing="0">
        <thead>
          <tr>
            <!-- <th>Id</th> -->
            <th>Roles</th>
            <th>Slug</th>
            <th>Permisos</th>

            <th>Acciones</th>

          </tr>
        </thead>
        <tfoot>
          <tr>
            <!-- <th>Id</th> -->
            <th>Roles</th>
            <th>Slug</th>
            <th>Permisos</th>
            <th>Acciones</th>

          </tr>
        </tfoot>
        <tbody>



          <tr>
            @forelse ($rols as $tag)

            <!-- <td><a type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalLong-{{$tag->id}}" id="lista">{{ $tag->id}}</a></td> -->
            <td>{{ $tag->Nombre}} </td>
            <td>{{ $tag->slug}} </td>
            <td>
              @if($tag->permisos !=null && $tag->id != 1)

              @foreach ($tag->permisos as $permission )
              <span class="badge badge-secondary">
                {{ $permission->Permiso }}
              </span>
              @endforeach


              @endif
              @if($tag->id == 1)
              <span class="badge badge-secondary">
                Full-access
              </span>
              @endif



            </td>
            <td>

              <button id="boto" type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#verRol{{$tag->id}}"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg></button>

              <div class="modal fade" id="verRol{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style=" background-color:#276678; color:white;  height:100px;">
                      <h5 class="modal-title" id="exampleModalLabel">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z" />
                          <path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg>

                        Rol de usuario
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">



                      <div class="container" id="padre">
                        <div class="card">
                          <div class="card-header" style="background-color:#E8DAEF;font-family:Helvetica ">

                            <h5>Nombre del Rol: {{$tag->Nombre}}</h1>
                              <h5>Slug:{{$tag->slug}}</h1>


                          </div>

                          <div class="card-body">

                            <h5 class="card-title" style="text-align:center">Permisos</h5>
                            <p class="card-text">
                              @forelse ($tag->permisos as $permiso)
                              <span style=" color: #F7DC6F;" class="badge badge-secondary">
                                {{$permiso->Permiso}}</span>
                              @empty
                              Todavia no se le ha asignado permisos
                              @endforelse
                            </p>



                          </div>
                          <div class="card-footer">

                          </div>

                        </div>


                      </div>





                    </div>
                  </div>
                </div>
              </div>

              <!-- fin modal ver  -->


              <!-- editar -->
              @if($tag->id != 1)
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong-{{$tag->id}}">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
              </button>
              @endif


              <!-- modal editar -->
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong-{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style=" background-color:#276678; color:white;">
                      <h5 class="modal-title" id="exampleModalLongTitle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                        </svg>

                        Editar rol

                      </h5>
                      <button type="button" style="color:white" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">


                      <form method="post" action="{{route('rol.update',['id'=> $tag->id])}}">

                        @method('put')
                        @csrf


                        <div class="form-group">
                          <label for="rol">Nombre del Rol</label>
                          <input type="text" class="form-control" value="{{$tag->Nombre}}" required name="rol" id="name">
                        </div>

                        <div class="form-group">
                          <label for="usuario">Slug</label>
                          <input type="text" class="form-control" name="slug" id="slug" placeholder="Ingrese el slug" value="{{$tag->slug}}" required>
                        </div>
                        <div class="form-group">

                          <label class=" col-form-label " for="roles">Modificar Permisos</label><br>
                          <small style="color:red;margin:1em;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                              <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                              <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                            </svg>
                            Esta opción utilicela solo si necesita eliminar un permiso a este rol.</small><br>

                          @foreach ($tag->permisos as $permission)
                          <div class="custom-control custom-checkbox">

                            <input type="checkbox" name="roles_permisos[]" value="
                              {{$permission->id}}" checked>
                            {{$permission->Permiso}}

                          </div>

                          @endforeach


                        </div>
                        <!-- fin roles y permisos -->
                    </div>
                    <!--  -->



                    <div class="form-group modal-footer" id="div6">
                      <input type="reset" class="btn btn-danger">
                      <button id="botonContinuar" type="submit" class="btn" style="color:white;background-color:#276678" ;data-toggle="modal">
                        Guardar
                      </button>


                    </div>



                    </form>

                    @section('css_role')
                    <link rel="stylesheet" href="\css\bootstrap-tagsinput.css">
                    @endsection

                    @section('js_role')
                    <script src="\js\bootstrap-tagsinput.js"></script>

                    <script>
                      $(document).ready(function() {
                        $('#name').keyup(function(e) {
                          var str = $('#name').val();
                          str = str.replace(/\W+(?!$)/g, '.').toLowerCase(); //rplace stapces with dash
                          $('#slug').val(str);
                          $('#slug').attr('placeholder', str);
                        });
                      });
                    </script>

                    @endsection




                  </div>
                </div>
              </div>
    </div>


    <!-- fin modal editar -->

    </td>
    <!-- script para permisos -->

    <script src="/js/bootstrap-tagsinput.js"></script>


    <script>
      $(document).ready(function() {
        $('#name').keyup(function(e) {
          var str = $('#name').val();
          str = str.replace(/\W+(?!$)/g, '.').toLowerCase();
          $('#slug').val(str);
          $('#slug').attr('placeholder', str);

        });
      });
    </script>

    </td>


    </tr>
    @empty
    vacio
    @endforelse





    </tbody>
    </table>
  </div>
  </div>



  </div>
  <!-- /#wrapper -->

  <!-- <script>
    $(document).ready(function() {
      $('#datatable1').DataTable({
        language: {
          search: "Búsqueda por nombre",
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Roles",
          "infoEmpty": "Mostrando 0 to 0 of 0 Roles",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Roles",
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
    });
  </script> -->





</body>
@endcan
@endsection