@extends('datospersonales')

@section('cuerpo')

<head>

<style>

 #text{
  position: relative;
  background-color: #AFEEEE;
  height: 350px;
  width: 800px;
  bottom: -40px;
  

  
  
 }

 #w3review{

  position: relative;
  bottom: -60px;
  left: 20px;
  


 }

 #guardar{

  position: relative;
  bottom: -80px;
  left: 20px;

 }

</style>


</head>

@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
<body>


<div class="container">

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Comentarios Administrativos</a>

</nav>
<div id="text">

<form method="POST" action="">
@csrf


<textarea id="w3review" name="caja" value="text" rows="4" cols="100" >

</textarea>

<div >

<button type="submit" class="btn btn-primary" id="guardar" >Guardar </button>
</div>

</form>

</div>



</div>
    


</body>


@endsection