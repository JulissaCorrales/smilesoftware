@extends('Plantilla.Plantilla')

@section('titulo','Cita diaria')
@section('contenido')

@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #padre {
        overflow: hidden;
        border=2px ;
        }
        #hijo1 {
          
            margin: 10px;
            float:left;
            }
        #hijo2{
            width:700px;
            margin: 10px;
            float: left;
        }  
    </style>
</head>
<body>
<div class="container" id="padre">
<div  id="hijo1">
<!-- calendario -->

 <style>
/*div principal del calendario*/
#calendario {  max-width: 200px;   text-align: center; }
#diasc th,#diasc td { font: normal 12pt arial; width: 20px; height: 5px; }
#diasc th { color: #990099; background-color: #5ecdec }
#diasc td { color: #492736; background-color: #9bf5ff }
/*línea de la fecha actual*/
#fechaactual {12pt arial; padding: 0.4em }
#fechaactual i { cursor: pointer ; }
#fechaactual i:hover { color: blue; text-decoration: underline; }
/*formulario de busqueda de fechas*/
#buscafecha { background-color: ;  padding: 5px }
#buscafecha select, #buscafecha input  { background-color: #9bf5ff; 
            color: #990099; font: bold 8pt arial;  }
#buscafecha [type=text]  { text-align: center; }
#buscafecha  [type=button] { cursor: pointer; }
/*cabecera del calendario*/ 
#anterior { float: left; width: 90px; font: bold 8pt arial;
          padding: 0.5em 0.1em; cursor: pointer ; 
          }
#posterior { float: right; width: 90px; font: bold 8pt arial; 
          padding: 0.5em 0.1em; cursor: pointer ;}
#anterior:hover {color: blue;text-decoration: underline;}
#posterior:hover {color: blue; text-decoration: underline;}
#titulos { font: normal 12pt "arial black"; padding: 0.2em; }
</style>




<br/><br/>
<div id="calendario">
<h2 id="titulos"></h2>
  <div id="anterior" onclick="mesantes()"></div>
  <div id="posterior" onclick="mesdespues()"></div>
  <table id="diasc">
    <tr id="fila0"><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>
    <tr id="fila1"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila2"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila3"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila4"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila5"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila6"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
  </table>
  <div id="fechaactual"><i onclick="actualizar()">Hoy es: </i></div>
  <div id="buscafecha">
    <form action="#" name="buscar">
      <p>Buscar:<hr> <tr> Mes
        <select name="buscames">
          <option value="0">Enero</option>
          <option value="1">Febrero</option>
          <option value="2">Marzo</option>
          <option value="3">Abril</option>
          <option value="4">Mayo</option>
          <option value="5">Junio</option>
          <option value="6">Julio</option>
          <option value="7">Agosto</option>
          <option value="8">Septiembre</option>
          <option value="9">Octubre</option>
          <option value="10">Noviembre</option>
          <option value="11">Diciembre</option>
        </select>
        <br>
         Año
        <input type="text" name="buscaanno" maxlength="4" size="4" />
        <hr>
        <input type="button" value="BUSCAR" onclick="mifecha()" />
      </p>
    </form>
  </div>
</div>
</body>
</html>
<script>
//Arrays de datos:
meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
lasemana=["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"]
diassemana=["lun","mar","mié","jue","vie","sáb","dom"];
//Tras cargarse la página ...
window.onload = function() {
//fecha actual
hoy=new Date(); //objeto fecha actual
diasemhoy=hoy.getDay(); //dia semana actual
diahoy=hoy.getDate(); //dia mes actual
meshoy=hoy.getMonth(); //mes actual
annohoy=hoy.getFullYear(); //año actual
// Elementos del DOM: en cabecera de calendario 
tit=document.getElementById("titulos"); //cabecera del calendario
ant=document.getElementById("anterior"); //mes anterior
pos=document.getElementById("posterior"); //mes posterior
// Elementos del DOM en primera fila
f0=document.getElementById("fila0");
//Pie de calendario
pie=document.getElementById("fechaactual");
pie.innerHTML+=lasemana[diasemhoy]+", "+diahoy+" de "+meses[meshoy]+" de "+annohoy;
//formulario: datos iniciales:
document.buscar.buscaanno.value=annohoy;
// Definir elementos iniciales:
mescal = meshoy; //mes principal
annocal = annohoy //año principal
//iniciar calendario:
cabecera() 
primeralinea()
escribirdias()
}
//FUNCIONES de creación del calendario:
//cabecera del calendario
function cabecera() {
         tit.innerHTML=meses[mescal]+" de "+annocal;
         mesant=mescal-1; //mes anterior
         mespos=mescal+1; //mes posterior
         if (mesant<0) {mesant=11;}
         if (mespos>11) {mespos=0;}
         ant.innerHTML=meses[mesant]
         pos.innerHTML=meses[mespos]
         } 
//primera línea de tabla: días de la semana.
function primeralinea() {
         for (i=0;i<7;i++) {
             celda0=f0.getElementsByTagName("th")[i];
             celda0.innerHTML=diassemana[i]
             }
         }
//rellenar celdas con los días
function escribirdias() {
         //Buscar dia de la semana del dia 1 del mes:
         primeromes=new Date(annocal,mescal,"1") //buscar primer día del mes
         prsem=primeromes.getDay() //buscar día de la semana del día 1
         prsem--; //adaptar al calendario español (empezar por lunes)
         if (prsem==-1) {prsem=6;}
         //buscar fecha para primera celda:
         diaprmes=primeromes.getDate() 
         prcelda=diaprmes-prsem; //restar días que sobran de la semana
         empezar=primeromes.setDate(prcelda) //empezar= tiempo UNIX 1ª celda
         diames=new Date() //convertir en fecha
         diames.setTime(empezar); //diames=fecha primera celda.
         //Recorrer las celdas para escribir el día:
         for (i=1;i<7;i++) { //localizar fila
             fila=document.getElementById("fila"+i);
             for (j=0;j<7;j++) {
                 midia=diames.getDate() 
                 mimes=diames.getMonth()
                 mianno=diames.getFullYear()
                 celda=fila.getElementsByTagName("td")[j];
                 celda.innerHTML=midia;
                 //Recuperar estado inicial al cambiar de mes:
                 celda.style.backgroundColor="#9bf5ff";
                 celda.style.color="#492736";
                 //domingos en rojo
                 if (j==6) { 
                    celda.style.color="#f11445";
                    }
                 //dias restantes del mes en gris
                 if (mimes!=mescal) { 
                    celda.style.color="#a0babc";
                    }
                 //destacar la fecha actual
                 if (mimes==meshoy && midia==diahoy && mianno==annohoy ) { 
                    celda.style.backgroundColor="#f0b19e";
                    celda.innerHTML="<cite title='Fecha Actual'>"+midia+"</cite>";
                    }
                 //pasar al siguiente día
                 midia=midia+1;
                 diames.setDate(midia);
                 }
             }
         }
//Ver mes anterior
function mesantes() {
         nuevomes=new Date() //nuevo objeto de fecha
         primeromes--; //Restamos un día al 1 del mes visualizado
         nuevomes.setTime(primeromes) //cambiamos fecha al mes anterior 
         mescal=nuevomes.getMonth() //cambiamos las variables que usarán las funciones
         annocal=nuevomes.getFullYear()
         cabecera() //llamada a funcion de cambio de cabecera
         escribirdias() //llamada a funcion de cambio de tabla.
         }
//ver mes posterior
function mesdespues() {
         nuevomes=new Date() //nuevo obejto fecha
         tiempounix=primeromes.getTime() //tiempo de primero mes visible
         tiempounix=tiempounix+(45*24*60*60*1000) //le añadimos 45 días 
         nuevomes.setTime(tiempounix) //fecha con mes posterior.
         mescal=nuevomes.getMonth() //cambiamos variables 
         annocal=nuevomes.getFullYear()
         cabecera() //escribir la cabecera 
         escribirdias() //escribir la tabla
         }
//volver al mes actual
function actualizar() {
         mescal=hoy.getMonth(); //cambiar a mes actual
         annocal=hoy.getFullYear(); //cambiar a año actual 
         cabecera() //escribir la cabecera
         escribirdias() //escribir la tabla
         }
//ir al mes buscado
function mifecha() {
         //Recoger dato del año en el formulario
         mianno=document.buscar.buscaanno.value; 
         //recoger dato del mes en el formulario
         listameses=document.buscar.buscames;
         opciones=listameses.options;
         num=listameses.selectedIndex
         mimes=opciones[num].value;
         //Comprobar si el año está bien escrito
         if (isNaN(mianno) || mianno<1) { 
            //año mal escrito: mensaje de error
            alert("El año no es válido:\n debe ser un número mayor que 0")
            }
         else { //año bien escrito: ver mes en calendario:
              mife=new Date(); //nueva fecha
              mife.setMonth(mimes); //añadir mes y año a nueva fecha
              mife.setFullYear(mianno);
              mescal=mife.getMonth(); //cambiar a mes y año indicados
              annocal=mife.getFullYear();
              cabecera() //escribir cabecera
              escribirdias() //escribir tabla
              }
         }

</script>


</div>

<div  id="hijo2">
<table class="table">
        <thead class="table table-striped table-bordered">
            <tr>
                <th scope="col">Hora</th>
                <th>Fecha</th>
                <th scope="col">Paciente</th>
                <th scope="col">Doctor</th>
                
            </tr>  
        </thead>
        <tbody>
            <tr>
                <td>    
                        @foreach($citas as $cita)
                            <tr>
                            <th scope="row">{{$cita->hora}}</th>
                                <td>{{$cita->fecha}}</td>
                                <td>{{$cita->paciente->nombres}} <br>{{$cita->paciente->apellidos}}<br>{{$cita->paciente->telefonoFijo}}<br>{{$cita->paciente->telefonoCelular}} </td>
                                <td>{{$cita->odontologo->nombres}}<br>{{$cita->odontologo->apellidos}}</td>
                                
                        
                            </tr>
                        @endforeach
                </td>
            </tr>
        </tbody>
    </table>
    </div>


</div>



</body>
</html>
@endsection