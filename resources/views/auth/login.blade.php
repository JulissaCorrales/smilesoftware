@extends('layouts.app')

<style>
html,body{
background-image: url('../assets/img/fondo34.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: #e6ffff !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
  color: #0099cc;
  text-shadow: 2px 0 #ffcc66, 0 2px #ffcc66, 2px 0 #ffcc66, 0 2px #ffcc66;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color:#00091a;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #00cccc;
width: 100px;

}

.login_btn:hover{
color: black;
background-color: #00cccc;
width: 100px;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

#doss{
  border-radius: 50%;
  position: absolute;
  left: 330px;
  top:-30px;
  width: 80px;
  border-color: #33ccff , 2px;
}


#butr{
  position: absolute;
  left: 150px;
  top:250px;
  width: 100px;
  background-color: #00cccc;
  height:35px;
  font-size:15px;
  color: #00091a;

}

</style>
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
        
			</div>
			<div class="card-body">
			<form method="POST" action="{{ route('login') }}">
              @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
            <input type="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre de usuario" required autocomplete="name" autofocus>
            @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Ingrese su contraseña" name="password" required autocomplete="current-password">
            @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Recordar Contraseña
					</div>
					<div class="form-group">
          <button class="btn btn-lg btn-primary " type="submit" id="butr">Entrar</button>
					</div>
				</form>
			</div>
			<div class="card-footer">
      
      <div class="text-center">
                  @if (Route::has('password.request'))
                      <a class="small" href="{{ route('password.request') }}">'¿Olvidaste tu contraseña?</a></div>
                  @endif
			</div>
		</div>
	</div>
</div>
</body>
</html>

@endsection