@extends('layouts.app')

<style>
html,body{
/*background-image: url('../assets/img/fondo34.jpg'); */
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
  left: 125px;
  top:290px;
  width: 100px;
  background-color: #00cccc;
  height:35px;
  font-size:15px;
  color: #00091a;

}


.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #e6ffff !important;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #ccf2ff;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #c0392b !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
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
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100" style="position:absolute; top:-3px;">
			<div class="" style="background-image: url('../assets/img/fondo21.jpg'); background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  width: calc(100% - 520px);
  position: relative;
  z-index: 1;"> 


<?php $logotipos=App\Logotipo::where('id','=',1)->get();?>
                        @forelse($logotipos  as $tag)
                    <img  style="  border-radius: 70%; position:absolute; left: 400px;"class="logo" id="imlogoactual"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" width="80px" high="100px" id="dos">
                    @empty
                    <img  style="  border-radius: 90%;  position:absolute; left: 400px; top: 230px;" class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3"  width="100px"> 
                    @endforelse
            
<div style=" position:absolute; top: 250px; left:250px;">
				<h3 style="color: #d6f5f5; position:absolute; 
                     text-shadow: 4px 0 #ffb31a, 0 4px #ffb31a, 4px 0 #ffb31a, 0 4px #ffb31a;font-family: Cursive ;left: 80px; top: -120px;font-size: 80px;">Smile</h3>
				<h3 style="color: #d6f5f5; position:absolute;
                     text-shadow: 4px 0 #ffb31a, 0 4px #ffb31a, 4px 0 #ffb31a, 0 4px #ffb31a;font-family: cursive ;left: 30px; top: 70px;font-size: 70px;">Software</h3>

	</div>

 
  </div>

  


			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50" style=" background-image: linear-gradient(to bottom, #ffeecc ,#e6ffff );">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
				@csrf
					<span class="login100-form-title p-b-59" style="text-shadow: 2px 0 #ffb31a, 0 2px #ffb31a, 2px 0 #ffb31a, 0 2px #ffb31a;">
						Iniciar Sesion 
					</span>

					
					

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						
						<input class="input100" type="text" name="name" placeholder="Nombre del Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					
						<input type="password" id="inputPassword" class="input100 @error('password') is-invalid @enderror" placeholder="Ingrese su contraseña" name="password" required autocomplete="current-password">
						<span class="focus-input100"></span>
					</div>


					<div class="flex-m w-full p-b-33">
					<div class="form-group">
			  <div class="form-check" style="position:absolute; top: 340px; left:50px;">
                                    <input  type="checkbox" name="remember" class="form-check-input ios-switch-control-input" value="1" id="remember">

                                    <label class="form-check-label" for="remember" style="font-family: FontAwesome;">
                                        {{ __('Remember Me') }}
                                    </label>						
	</div>

	<div class="mt-4">
				
				<div class="container" >
			  @if (Route::has('password.request'))
				  <a class="small" href="{{ route('password.request') }}" style="position:absolute; top: 340px; left:250px; font-family: FontAwesome;
  font-size: 13px;">¿Olvidaste tu contraseña?</a></div>
			  @endif
		</div>
					</div>

	
			<button class="btn btn-lg btn-primary " type="submit" id="butr" style="position:absolute; width: 350px; top: 380px; left:90px;">Entrar
	</button>		
			<img class="logo" src="assets/img/muela.png" class="mr-3" id="logo1" style="position:absolute;  left: 160px; top: 420px; width: 350px;
  height: 220px; ">  
		</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>


@endsection