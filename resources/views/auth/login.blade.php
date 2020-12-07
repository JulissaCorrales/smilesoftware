@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
    <img src="/Imagenes/Doctora.jpg " alt="imagen" width="110%"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto" >
              <h3 class="login-heading mb-4">¡Bienvenido!</h3>
              <form method="POST" action="{{ route('login') }}">
              @csrf
              <label for="name">Nombre de Usuario:</label>
                <div class="form-label-group">
                  <input type="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre de usuario" required autocomplete="name" autofocus>
                  
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <br>
                <div class="form-label-group">
                <label for="inputPassword">Contraseña:</label>
                  <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Ingrese su contraseña" name="password" required autocomplete="current-password">
                 
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <br>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                  <label class="custom-control-label" for="customCheck1">Recordar contraseña</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Entrar</button>
                <div class="text-center">
                  @if (Route::has('password.request'))
                      <a class="small" href="{{ route('password.request') }}">'¿Olvidaste tu contraseña?</a></div>
                  @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection