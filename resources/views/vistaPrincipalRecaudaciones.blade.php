@extends('datospersonales')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recaudaciones</title>

    <style>

body {
  height: 100%;
}
body {
  margin: 0;
  background: linear-gradient(90deg, #33F4FF, #FFFFFF);
  font-family: sans-serif;
  font-weight: 100;
}


.container {
  position: absolute;
  top: 60%;
  left: 70%;
  transform: translate(-50%, -50%);
}

.container2 {
  position: absolute;
  top: 100%;
  left: 60%;
  transform: translate(-50%, -50%);
}
table {
  width: 800px;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
th,
td {
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.2);
  color: #000;
}
th {
  text-align: left;
}
thead th {
  background-color: #55608f;
}
tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
tbody td {
  position: relative;
}
tbody td:hover:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: -9999px;
  bottom: -9999px;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: -1;
}

.button {
  position: relative;
  padding: 1em 1.5em;
  border: none;
  background-color: transparent;
  cursor: pointer;
  outline: none;
  font-size: 18px;
  margin: 1em 0.8em;
}


.button.type2 {
  color: #16a085;
}
.button.type2.type2:after, .button.type2.type2:before {
  content: "";
  display: block;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: #16a085;
  transition: all 0.3s ease;
  transform: scale(0.85);
}
.button.type2.type2:hover:before {
  top: 0;
  transform: scale(1);
}
.button.type2.type2:hover:after {
  transform: scale(1);
}



.button.type1 {
  color: #566473;
}
.button.type1.type1::after, .button.type1.type1::before {
  content: "";
  display: block;
  position: absolute;
  width: 20%;
  height: 20%;
  border: 2px solid;
  transition: all 0.6s ease;
  border-radius: 2px;
}
.button.type1.type1::after {
  bottom: 0;
  right: 0;
  border-top-color: transparent;
  border-left-color: transparent;
  border-bottom-color: #566473;
  border-right-color: #566473;
}
.button.type1.type1::before {
  top: 0;
  left: 0;
  border-bottom-color: transparent;
  border-right-color: transparent;
  border-top-color: #566473;
  border-left-color: #566473;
}
.button.type1.type1:hover:after, .button.type1.type1:hover:before {
  width: 100%;
  height: 100%;
}


    </style>
</head>
  

<body>
    @section('cuerpo')
    <div class="container">
        <h3>Por planes de tratamiento del paciente</h3>
        <table>
            <thead>
                <tr>
                    <th>Prestacion</th>
                    <th>Precio</th>
                    <th>Abonado</th>
                    <th>Estado</th>
                    <th>Por pagar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Corona Metalica <br>Perfomada en Metalico</td>
                    <td>4700</td>
                    <td>2000</td>
                    <td>pendiente</td>
                    <td>2700</td>
                </tr> 
            </tbody>
        </table>
        <button class="button type2">
            pagar
          </button>
    </div>

    <div class="container2">
        <h3>Por cuotas de finaciamiento</h3>
        <table>
            <thead>
                <tr>
                    <th>Cuotas de credito</th>
                    <th>Monto</th>
                    <th>Pagado</th>
                    <th>Saldo a Abonar</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>cuota#1 <br>credito 14</td>
                    <td>10000</td>
                    <td>1500</td>
                    <td>3000</td>
                    
                </tr> 
            </tbody>
        </table>
        <button class="button type1">
            pagar
          </button>
    </div>
 
    
</body>
</html>
@endsection