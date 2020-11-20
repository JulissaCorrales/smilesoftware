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
 top: 100px;
  left: 650px;

 }

 #disv3{

    position: absolute;
  
  height: 40px;
  width: 300px;
  top: 200px;
  left:30px;

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
<h6>Evoluciones</h6>

</nav>
<div id="text">

<form method="POST" action="">
@csrf
<?php
        $mysqli= new mysqli ('127.0.0.1','root','','smilesoftware');
        $mysqli->set_charset("utf8");
      ?>


<textarea id="w3review" name="caja" value="text" rows="4" cols="100" >

</textarea>

<div id="disv4">

        <select name="tratamiento_id" class="form-control" id="disv3">
        <option disabled selected>Seleccione un Plan de Tratamiento</option>
        <?php
        $getDoctor =$mysqli->query("select * from tratamientos order by id");
        while($f=$getDoctor->fetch_object()) {
          echo $f->id;
          echo $f->categoria;
        

          ?>
          
         
          <option value="<?php echo $f->id; ?>"><?php echo $f->categoria;?></option>
          <?php
        } 
        ?>
        </select>

       


</div>


<div id="disv4">

<button type="submit" class="btn btn-primary" id="guardar" >Guardar </button>
</div>

</form>

</div>


</body>


@endsection