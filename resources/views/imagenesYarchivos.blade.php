@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagenes y archivos</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
    
    <style>

#vPrincipal{
    width:auto;
    font:1em Tahoma;
    margin: 5rem;
    padding: 2rem;
    border: 2px solid #ccc;
    background-color: #F5EEF8;}

    table {
    width:auto;
     height:20px;"
    }

    #upload{
       
       font: 700 1em Tahoma, Arial, Verdana, sans-serif;
       color: black; background-color: #58D68D ;
       border: 1px solid #0074a5;
       border-top: 1px solid #004370;
       border-left: 1px solid #004370;
       cursor: pointer;
       padding: 4px 8px 4px 6px;
       float:right; 
   }



   .timeline ul li {
  list-style-type: none;
  position: relative;
  width: 6px;
  margin: 0 auto;
  padding-top: 50px;
  background: #fff;
}
 
.timeline ul li::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: inherit;
}

.timeline ul li div {
  position: relative;
  bottom: 0;
  width: 400px;
  padding: 15px;
  background: #F45B69;
}
 
.timeline ul li div::before {
  content: '';
  position: absolute;
  bottom: 7px;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ul li:nth-child(odd) div {
  left: 45px;
}
 
.timeline ul li:nth-child(odd) div::before {
  left: -15px;
  border-width: 8px 16px 8px 0;
  border-color: transparent #F45B69 transparent transparent;
}

.timeline ul li:nth-child(even) div {
  left: -439px;
}
 
.timeline ul li:nth-child(even) div::before {
  right: -15px;
  border-width: 8px 0 8px 16px;
  border-color: transparent transparent transparent #F45B69;
}

.timeline ul li::after {
  background: #fff;
  transition: background .5s ease-in-out;
}
 
.timeline ul li.in-view::after {
  background: #F45B69;
}
 
.timeline ul li div {
  visibility: hidden;
  opacity: 0;
  transition: all .5s ease-in-out;
}
 
.timeline ul li:nth-child(odd) div {
  transform: translate3d(200px,0,0);
}
 
.timeline ul li:nth-child(even) div {
  transform: translate3d(-200px,0,0);
}
 
.timeline ul li.in-view div {
  transform: none;
  visibility: visible;
  opacity: 1;
}

@media screen and (max-width: 900px) {
  .timeline ul li div {
    width: 250px;
  }
  .timeline ul li:nth-child(even) div {
    left: -289px; /*250+45-6*/
  }
}

@media screen and (max-width: 600px) {
  .timeline ul li {
    margin-left: 20px;
  }
   
  .timeline ul li div {
    width: calc(100vw - 91px);
  }
   
  .timeline ul li:nth-child(even) div {
    left: 45px;
  }
   
  .timeline ul li:nth-child(even) div::before {
    left: -15px;
    border-width: 8px 16px 8px 0;
    border-color: transparent #F45B69 transparent transparent;
  }
}



    </style>

</head>
<body>
    @section('cuerpo')
 
    <div class="container" id="vPrincipal">

        <div div id="titulo" class="card-body d-flex justify-content-between align-items-center">
            <h2>imagenes y archivos del paciente</h2>

            <button id="upload">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                subir archivos</button>

        </div>

        <section class="timeline">
            <ul>
              <li>
                <div>
                  <time>22-12-2020</time>
                  Cirugía dental para implantes dentales

                  La colocación de implantes dentales es una 
                  de las intervenciones quirúrgicas más comunes. 
                  Este tratamiento representa la mejor solución 
                  para aquellas personas que sufren la ausencia de uno,
                   varios o todos los dientes.

                   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ0OPMJPv3wXqVmWGM3m088ZQK8gx0djrxpaw&usqp=CAU">

                </div>
              </li>

              <li>
                <div>
                  <time>21-12-2020</time>
                  Cirugía dental en las encías
 

                  Cuando una enfermedad periodontal 
                  está en fase avanzada, es probable 
                  que requiera algún tipo de cirugía. 
                  Esto ocurre cuando se infecta la raíz 
                  del diente, aflojándose y empezando a 
                  incomodar al paciente. Las principales 
                  intervenciones quirúrgicas relativas a 
                  este problema son el colgajo gingival, 
                  la gingivectomía y gingivoplastia.
                  <img src="data:image/jpeg;base64,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">
                </div>
              </li>

              <li>
                <div>
                  <time>16-11-2020</time>
                  Cirugía de injerto de hueso
 

                La cirugía de injerto de hueso es una
                 intervención quirúrgica llevada a cabo
                  por especialistas en cirugía oral o 
                  maxilofacial con el objetivo de ayudar a
                   regenerar el hueso perdido. Este procedimiento
                    es necesario en algunos casos de colocación de
                     implantes, entre otros tratamientos.

                     <img src="data:image/jpeg;base64,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">

                </div>
              </li>
               
              <li>
                <div>
                  <time>10-10-2020</time>
                  Cirugía de muelas del juicio
 

                   La extracción de muelas del juicio es
                    una de las cirugías dentales más habituales 
                    en el día a día de cualquier clínica dental.

 

                   Estas muelas suelen aparecer en un lugar
                    complicado y la mayoría de pacientes refieren
                     dolor cuando están saliendo. Por ello, conviene
                      extraerlas en cuanto empiezan a dar problemas
                       para evitar dolor al paciente.
                </div>
              </li>

              <li>
                <div>
                  <time>09-09-2020</time>
                  Cirugía de elevación de seno maxilar
 

                  La cirugía de elevación de seno maxilar
                   es una intervención quirúrgica destinada
                    a la recuperación de la altura ósea perdida
                     en una zona concreta. Hay diversas técnicas
                      en función de la altura ósea que exista, 
                      sea con injerto de hueso o sin él. El especialista 
                      en cirugía será quien decida si el procedimiento 
                      es necesario para poder poner un implante dental.
                </div>
              </li>

              <li>
                <div>
                  <time>1934</time>
                  Cirugías periapicales
 

                  También conocida como apicectomía, 
                  la cirugía periapical es un procedimiento
                   quirúrgico que consiste en eliminar una
                    infección que afecta a la raíz de un
                   diente y a los tejidos adyacentes.

 

                   Este tipo de intervención se lleva a 
                   cabo cuando han fracasado otros tratamientos
                    como la endodoncia, cuando es imposible 
                    acceder al extremo final de la raíz, cuando 
                    existen falsos conductos en la pieza dental 
                    o cuando alguno de éstos se ha fracturado.
                </div>
              </li>
              <!-- more list items here -->
            </ul>
        
          </section>
        
        </div>


    </div>

    <script>

function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

var items = document.querySelectorAll(".timeline li");
 
// code for the isElementInViewport function
 
function callbackFunc() {
  for (var i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
  }
}
 
window.addEventListener("load", callbackFunc);
window.addEventListener("scroll", callbackFunc);
        
    </script>
    
</body>
</html>
@endsection