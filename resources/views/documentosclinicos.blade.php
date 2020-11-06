@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentos clinicos</title>
  
    
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
            <h2>vista de prueba de documentos clinicos del paciente</h2>

            <button id="upload" onclick="location.href='/pantallainicio/vista/paciente/{{$pacientes->id}}/nuevodocumento'">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                subir archivos</button>

        </div>

        <section class="timeline">
          @forelse ($pacientes->archivos as $tag)
          <ul>
            <li>
              <div>
                <time>{{$tag->fecha}}</time>
                <br>
                <br>
              <p>{{$tag->odontologo->nombres}} {{$tag->odontologo->apellidos}}</p>
                <br>
                <br>

                <p>{{$tag->observaciones}}</p>

              <img src="/documento/{{$tag->imagen1}}" width="150" alt="imagen">

              </div>
            </li>
              
          @empty
          <p> no hay archivos de historial disponible</p>
              
          @endforelse
            

              
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

