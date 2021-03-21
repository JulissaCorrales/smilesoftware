@extends('datospersonales')

@section('titulo','Comentarios Administrativos')
@section('cuerpo')
@can('create',App\Comentario::class)



<head>

<style>

 #text{
    position: absolute;
  left: 450px;
  top:200px;
  background-color:#c2efef;
  height: 300px;
  width: 800px;
  bottom: -40px;
  

  
  
 }

 #w3review{

  position: relative;
  bottom: -60px;
  left: 20px;
  overflow-y:scroll;
        overflow-x:hidden;
  


 }

 #guardar{

    position: absolute;
  left: 680px;
  top:200px;

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

<h3 style="text-align: center;
  padding: 1rem;
  font-size:30px; font-family: Times New Roman, Times, serif;  background-color: #98e6e6;
  color: #476b6b; position: absolute;
  top:120px; width: 800px; left:455px;
  
  "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
              </svg> Comentarios Administrativos </h3>
<div id="text">

<form method="POST" action="">
@csrf


<textarea id="w3review" name="caja" value="text" rows="4" cols="100" placeholder="ingresar nombre del paciente" >

</textarea>

<div >

<button type="submit" class="btn btn-primary" id="guardar" >Guardar </button>

<div class="modal-footer" style="position: absolute;
  left: -130px;
  width: 1070px;
  top: 550px; height:50px;
  background-color: #e6f9ff;">
                
                
              <a style="position: absolute;
  left: 830px; font-size:18px; font-family: Times New Roman, Times, serif; color:#7a7a52; " href="/">@Smile Software 2021</a>  

              @forelse($logotipos  as $tag)
    <img  class="logo" id="logo4"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" style="border-radius: 50%;
  position: absolute;
  left: 1005px;
  top: 5px;
  width: 40px;
  border-color: #33ccff;  height: 40px;" >
    @empty

    <img class="logo" src="{{ asset('Imagenes/dental2.jpg') }}" class="mr-3"  style="border-radius: 50%;
  position: absolute;
  left: 1005px;
  top: 5px;
  width: 40px;
  border-color: #33ccff;   height: 40px;"  > 
    @endforelse 
              </div>
</div>

</form>
<!-- para probar si guarda los comentarios -->
<!-- <div>
@forelse($pacientes->comentarios as $ver)
    {{$ver->comentarios}}
    @empty
    no tiene comentarios
    @endforelse

</div> -->
</div>



</div>


</body>
@endcan



@endsection