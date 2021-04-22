@extends('datospersonales')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura: Plan de Tratamiento </title>
    <style>
    #padre{
        margin:4em;
        width:auto;
        border:solid 1px #A2D9CE;
        padding:2em;
        font-family: arial; 
        background-color:white ;
position:absolute;
left: 350px;
top:50px;
        
    }
    #titulo{
        float:right;
    }
    #fecha,#identidad{
        float:right;
    }
    #total{
        text-align:right;
        color:red;  
    }
    #tptitulo{
        text-align:center;    
    }
    h6{
        background-color:#AED6F1 ;
    }
    #titempresa{
        
        color: #0099cc;
        text-shadow: 2px 0 #ffcc66, 0 2px #ffcc66, 2px 0 #ffcc66, 0 2px #ffcc66;
        font-family: serif;
    }  
    #divtabla{ background-color:#FEF9E7 ;}
    </style>
</head>
@section('cuerpo')
<body>
    <div id="padre" class="container">
            <h2 id="titulo"><svg width="2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
            <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
            </svg>  Factura</h2><br>
            @can('descargarfacturaplantratamiento',App\Plantratamiento::class)
               <!-- descargar -->
            <a type="btn" style="float:right;margin-top:-1.4em;"class="btn btn-warning"href="{{route('descargarPDFfacturaplan',['id'=>$pacientes->id,'id2'=>$plantratamientos->id])}}"class="dropdown-item"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
            <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
            </svg>Descargar</a>
            <!--  -->
            @endcan
            <h2 id="titempresa">Smile Software
            @forelse($logotipos  as $tag)
            <img style="margin-left:10px; " class="logo" id="imlogoactual"src="{{Storage::url($tag->logo)}}" class="mr-3"  width="80px" high="100px" >
            @empty
            <img class="logo" style="margin-left:10px;border-radius: 50%; "  src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3" width="80px"> 
            @endforelse
            
            </h2>
          
            <h6>FACTURAR A:</h6>
            <p><strong>Nombre:</strong>  {{$pacientes->nombres}} {{$pacientes->apellidos}}</p>

            <p><strong>Dirección:</strong>  {{$pacientes->direccion}}</p>
            <p><strong>Telefonos:</strong>  {{$pacientes->telefonoCelular}} | {{$pacientes->telefonoFijo}}</p>
            <?php use Carbon\Carbon;?>
            <p id="fecha"><strong>Fecha:</strong>  <?php echo Carbon::now();?></p><br><br>
            <p id="identidad"><strong>Identificación del Cliente:</strong>  {{$pacientes->identidad}}</p> <br><br>

            <div id="divtabla">
            <table class="table">
            <thead class="thead-dark">
                <th>N°</th>
                <th>Tratamiento</th>
                <th>Productos</th>
                <th>Precio</th>
                <th id="tptitulo">Total a Pagar</th>
            </thead>
            <tbody>
                <td>1</td>
                <td>{{$plantratamientos->tratamiento->categoria}}</td>
         
                <td>
                @forelse($plantratamientos->tratamiento->productos as $tag)
                <ul><li> <p> {{$tag->nombre}}</p></li></ul>
               
                @empty
               <p>Todavia no tiene productos registrados,Vaya a la seccion de tratamientos y asignele uno</p> 
                @endforelse
                </td>
                <td>
                @forelse($plantratamientos->tratamiento->productos as $tag)
                <ul><li><p>L. {{$tag->monto}}</p></li></ul>
                
               
                @empty
                <p>  Todavia no tiene productos registrados,Vaya a la seccion de tratamientos y asignele uno</p>
              
                @endforelse
                </td>
                <td></td> 
                
            </tbody>
            <tfoot>
              <!-- total a pagar -->
              <td id="total" colspan="5">
               Lps. {{$totalpagar}}
                </td>
            </tfoot>
        
        
        </table>
            
            </div>  <!-- fin divtabla --> 
        <button onclick="location.href='{{route('tratamiento.ver',['id'=>$pacientes->id])}}'"
        style="background-color:#45B39D" class="btn btn-secondary">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                </svg>
            Atrás
        </button>

  


    </div> <!-- fin div padre -->
  


<!-- footer -->
<div class="modal-footer" style="position: absolute;
left: -20px;
width: 2070px;
top: 1100px; height:50px;
background-color: #e6f9ff;">
    
    
    <a style="position: absolute;
left: 830px; font-size:18px; font-family: Times New Roman, Times, serif; color:#7a7a52; " href="/">@Smile Software 2021</a>  

    @forelse($logotipos  as $tag)
<img  class="logo" id="logo4"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" style="border-radius: 50%;
position: absolute;
left: 1005px;
top: 0px;
width: 40px;
border-color: #33ccff , 2px;" >
@empty

<img class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3"  style="border-radius: 50%;
position: absolute;
left: 1005px;
top: 0px;
width: 40px;
border-color: #33ccff , 2px;"  > 
@endforelse 
    </div>
</div>

<!-- fin footer -->

</body>

</html>
@endsection