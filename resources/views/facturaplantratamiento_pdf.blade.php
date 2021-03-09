<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
    #padre{
      
        font-family: arial; 
        
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
    h6,th{
        background-color:#AED6F1 ;
    }
    #titempresa{
        
        color: #0099cc;
        text-shadow: 2px 0 #ffcc66, 0 2px #ffcc66, 2px 0 #ffcc66, 0 2px #ffcc66;
        font-family: serif;
    }  
    #divtabla{ background-color:#FEF9E7 ;}
    </style>

    <title>Factura Plan tratamiento
     Impresion</title>
</head>
<body>
    <div id="padre" class="container">
            <h2 id="titulo"><svg width="2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
            <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
            </svg>  Factura</h2><br>

            <!--  -->
            <h2 id="titempresa">Smile Software
            @forelse($logotipos  as $tag)
            <img style="margin-left:10px; " class="logo" id="imlogoactual"src="{{Storage::url($tag->logo)}}" class="mr-3"  width="80px" high="100px" >
            @empty
            <img class="logo" style="margin-left:10px; " src="{{ asset('Imagenes/Icono.jpg') }}" class="mr-3" width="80px"> 
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
            <table >
            <thead>
            <tr>
                <th>N°</th>
                <th>Tratamiento</th>
                <th>Productos</th>
                <th>Precio</th>
             
                
            </tr>
            </thead>
            <tbody>
                <td>{{$plantratamientos->id}}</td>
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
              <th>Total a Pagar</th>
              <td style="" id="total" colspan="5">
               Lps. {{$totalpagar}}
                </td>
            </tfoot>
        
        
        </table>
            
            </div>  <!-- fin divtabla --> 
      
    </div> <!-- fin div padre -->
  
</body>
</html>