@extends('Plantilla.Plantilla')

@section('contenido')

<style>

#horario{
  color: #007399;
 
  font-family: serif;
  position: absolute;
            left: 200px;
            top: 300px;
            font-size:20px;
}

#ho1{
  position: absolute;
            left: 150px;
            top: 200px;
            font-size:20px;
            height:400px;
           
 
}

#nav1{
  height:400px;
}

#ho2{
  position: absolute;
            left: 150px;
            top: 600px;
            font-size:20px;
}

#texto4{
  color: #007399;
 
  font-family: serif;
  position: absolute;
            left: 40px;
            top: 30px;
            font-size:20px;
           

}


#td1{

  position: absolute;
            left: 180px;
            

}

</style>

<div  class="container"id="ho1">
<nav class="navbar navbar-light bg-light" id="nav1">
  <div class="container">
   <h4 id="texto4">Horarios Odontologo</h4>
  </div>
</nav>
</div>


<div id="horario">
<table  class="container">
  <thead>
  
    <tr>
    @foreach($dias as $dia)
    <th scope="col"></th>
      <th scope="col">{{$dia->primerdia}}</th>
      <th scope="col">{{$dia->segundodia}}</th>
      <th scope="col">{{$dia->tercerdia}}</th>
      <th scope="col">{{$dia->cuartodia}}</th>
      <th scope="col">{{$dia->quintodia}}</th>
      <th scope="col">{{$dia->sextodia}}</th>
      <th scope="col">{{$dia->septimodia}}</th>
     
      </tr>
      @endforeach
  </thead>
  <tbody>
    <tr>
      <th scope="row">Hora de Inicio</th>
      <td> <select name="lunes" class="form-control" value="">
          
                    <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                    
                  </td>
      <td> <select name="martes" class="form-control" value="">
          
          <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>
      <td> <select name="miercoles" class="form-control" value="">
      <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>

                  <td> <select name="jueves" class="form-control" value="">
                  <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>

                  <td> <select name="viernes" class="form-control" value="">
                  <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>

                  <td> <select name="Sabado" class="form-control" value="">
                  <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>
                  <td> <select name="domingo" class="form-control" value="">
                  <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  
                  </td>
    </tr>

    <tr>
      <th scope="row">Hora Final</th>
      <td>  
                <select name="lunesfin" class="form-control" value="">
                <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  
        </select>
 
        </td>
      <td> <select name="martesfin" class="form-control" value="">
      <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>
      <td> <select name="miercolesfin" class="form-control" value="">
      <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>

                  <td> <select name="juevesfin" class="form-control" value="">
                  <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  
                  </td>

                  <td> <select name="viernesfin" class="form-control" value="">
                  <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>

                  <td> <select name="sabadofin" class="form-control" value="">
                  <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>

                  <td> <select name="domingofin" class="form-control" value="">
                  <option >8:00 a.m</option>
                    <option>9:00 a.m</option>
                    <option>10:00 a.m</option>
                    <option >11:00 a.m</option>
                    <option>12:00 p.m</option>
                    <option >1:00 p.m</option>
                    <option >2:00 p.m</option>
                    <option >3:00 p.m</option>
                    <option >4:00 p.m</option>
                    <option >5:00 p.m</option>
                    <option >6:00 p.m</option>
                  </td>
    </tr>
    <tr>
      <th scope="row">Hora de Descanso </th>


        <td  id="td1"> Si  <input type="checkbox" id="vehicle1"  value="Bike">
                  </td>
      <td>  Si  <input type="checkbox" id="vehicle1"  value="Bike">
                  </td>

                  <td>  Si  <input type="checkbox" id="vehicle1"  value="Bike">
                  </td>

                  <td>  Si  <input type="checkbox" id="vehicle1"  value="Bike">
                  </td>

                  <td> Si  <input type="checkbox" id="vehicle1"  value="Bike">
                  </td>

                  <td> Si  <input type="checkbox" id="vehicle1"  value="Bike">
                  </td>

                  <td>  Si  <input type="checkbox" id="vehicle1"  value="Bike">
                  </td>
    </tr>
  </tbody>
</table>

</div>

<div  class="container" id="ho2">
<nav class="navbar navbar-light bg-light">
  <div class="container">
  <a type="button" class="btn btn-info" href="{{route('odontologo.vista')}}">Atras</a>
  </div>
</nav>
</div>



@endsection