@extends('Plantilla.datospersonales')

@section('titulo','Alertas')
@section('cuerpo')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!-- para que funcione boton desplegable -->
</head>

<body id="page-top">
    <div id="padre" class="card">

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



        <div class="card-header">
            <h4 class="card-title">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                </svg>
                Alertas
            </h4>
            <p lass="card-text">En esta sección se muestran las alertas a tener en cuenta de cada paciente, también se podrá crear de manera general para su después utilización. </p>
        </div>
        <div class="card-body">
            <!-- Formulario para crearle una alerta al paciente en especifico -->
            <form method="POST" action="">

                @csrf
                <textarea id="areadetexto" name="alerta" value="text" rows="4" cols="100" maxlength="90"placeholder="Escriba la alerta a tener en cuenta del paciente"></textarea>
                <br>
                <?php
                $mysqli = new mysqli('127.0.0.1', 'root', '', 'smilesoftware');
                $mysqli->set_charset("utf8");
                ?>
                <?php
                $getDoctor = $mysqli->query("select * from alertapredeterminadas order by id");
                while ($f = $getDoctor->fetch_object()) {

                ?>
                    <input name="alerta" type="checkbox" value="<?php echo $f->alertapredeterminada; ?>"><?php echo $f->alertapredeterminada ?></input>
                <?php
                }
                ?>

                <div class="modal-footer">
                   
                    <button type="submit" class="btn" style="background-color:#276678;color:white;" id="guardar">Guardar </button>
                </div>
            </form>

            <hr>
            <div id="padre2" style="text-align:center">
                <h4 class="card-title" id="titulo2">Alertas Actuales del Paciente</h4>
                <div id="divtabla" class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0" id="datatable">
                        <thead>
                            <tr>
                                <th>Alerta</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pacientes->alertas as $ver)
                            <tr>
                                <td>

                                    <svg xmlns="http://www.w3.org/2000/svg" color="red" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                    </svg>
                                    {{$ver->alertas}}

                                </td>
                                <!-- eliminar -->
                                @can('delete',$ver)
                                <td>
                                    <button class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-{{$ver->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                        </svg>
                                        <!-- Eliminar -->
                                    </button>
                                    <div class="modal fade" id="modal-{{$ver->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#276678; color:white;  height:80px; ">
                                                    <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
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

                                    @endcan
                                    @can('update',$ver)


                                    <!-- Editar -->

                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter-{{$ver->id}}">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </button>
                                

                                <!-- modal para editar alerta -->
                                <div class="modal fade" id="exampleModalCenter-{{$ver->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:#276678; color:white;">
                                                <h3 class="modal-title" id="exampleModalLabel">
                                                    <img  src="{{ asset('Imagenes/editar.png') }}"   width="10%;" height="10%">
                                                    Editar Alerta</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="formularioo" method="POST" action="{{route('alertas.update',['id2'=>$ver->id,'id'=>$pacientes->id])}}">

                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <textarea id="areadetexto" name="alerta" value="" rows="4" cols="52">
                                                        {{$ver->alertas}}
                                                        </textarea>

                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                                    <button type="reset" class="btn btn-danger"  >Restablecer</button>
                                                </div>
                                                <div>
                                                    <button id="botonContinuar" type="submit" class="btn btn-outline-info" data-toggle="modal">
                                                        Guardar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                                @endcan
                            </tr>
                            @empty
                            <td colspan="2"> No tiene alertas</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- script de jquery para que funcione el buscador de nombre-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <!-- script de datatable para que funcione el buscado de nombre-->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({
                language: {
                    search: "Buscar Alertas:",
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Alertas",
                    "infoFiltered": "(Filtrado de _MAX_ total Alertas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Alertas",
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
    </script>
    </div>

    <!-- ************************************************************************************************************************************************************************************************ -->
    <!-- Seccion de agregar alertas predefinidas -->
    <div class="modal fade" id="configuraralerta">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#276678; color:white; ">
                    <h4 class="modal-title" id="myModalLabel">Agregar Alerta Predefinida</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{route('alertaspredeterminada.guardar',['id'=>$pacientes->id])}}">
                        @csrf
                        <textarea cols="55" required id="areadetexto" name="alertapredeterminada" placeholder="Escriba la alerta que aparecera disponible para ser seleccionada en todos los pacientes"></textarea>

                        <div class="modal-footer">
                            <button type="submit" class="btn" style="background-color:#1687A7;color:white;" id="agregar">Agregar </button>
                        </div>
                    </form>

                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Alerta</td>
                                    <td>Accion</td>
                                </tr>
                            </thead>
                            <tbody>


                                <?php
                                $alertapredefinida = App\Alertapredeterminada::All(); ?>
                                @forelse($alertapredefinida as $alertapredefinida2)
                                <tr>
                                    <td>
                                        <label style="margin:1em;"> {{$alertapredefinida2->alertapredeterminada}}</label>
                                    </td>

                                    <!-- seccion de eliminar alertas predefinidas -->
                                    @can('isAdmin')
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalalertapredefinida2-{{$alertapredefinida2->id}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                            </svg>

                                        </button>



                                        <!-- Modal de eliminar -->
                                        <div class="modal fade" id="modalalertapredefinida2-{{$alertapredefinida2->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:#276678; color:white;  height:80px; ">
                                                        <h5 class="modal-title" id="exampleModalLabel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                                            </svg> Eliminar Alerta Predeterminada</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <!--<span aria-hidden="true">&times;</span>-->
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Desea realmente eliminar la alerta {{$alertapredefinida2->alertapredeterminada}}?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <form method="post" action="{{route('alertaspredeterminadas.borrar',['idpredeterminada'=>$alertapredefinida2->id])}}">

                                                            @csrf
                                                            @method('delete')
                                                            <input type="submit" value="Eliminar" class="btn btn-danger">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- fin de modal -->
                                    </td>
                                </tr>@endcan
                                @empty
                                <td colspan="2">No se ha creado ningula alerta predeterminada todavia</td>
                                @endforelse
                            </tbody>
                        </table>
                        <br>


                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>
    </div>
</body>

</html>
@endsection