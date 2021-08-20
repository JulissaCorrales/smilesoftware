<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- favicon :icono de pestaña navegador -->
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!--  -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Smile Software</title>
        <link rel="icon" type="image/x-icon" href="#" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
       
            <div class="container">
            <p style="color:#fed136;font-family:Arial;margin-right: 1em;"class="masthead-heading mb-0">SMILE SOFTWARE</p>
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
               
                @forelse($logotipos  as $tag)
                    <img  style="  border-radius: 70%;" class="logo" id="imlogoactual"src="{{Storage::url($tag->logo)}}" class="mr-3" alt="image" id="dos">
                    @empty
                    <img   style="  border-radius: 70%;" class="logo" src="{{ asset('Imagenes/Icono.jpg') }}" class="mr-3"   id="dos"> 
                @endforelse
                
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">  @if (Route::has('login'))
                               
                                    @auth
                                        <a class="nav-link js-scroll-trigger"href="{{ url('/home') }}">Inicio</a>
                                    @else
                                        <a class="nav-link js-scroll-trigger"href="{{ route('login') }}">Entrar</a>

                                        @if (Route::has('register'))
                                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Registrarse</a></li>
                                        @endif
                                    @endauth
                              
                            @endif
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">A cerca de </a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contáctanos</li>
                        
                       
                    </ul>
                </div>
            </div>
            
        </nav>
        <!-- Masthead-->
        <header  style=" background-image: url('../assets/img/fondo3.jpg')"class="masthead">
            <div class="container">
                <br><br><br><br>
                <div style="background-color:#2471A3  ;" class="masthead-subheading"><p>¡Clínica Odontólogica!</p></div>
                <div class="masthead-heading text-uppercase">¡ Bienvenido !</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Dime Más</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services"  style="background-image: linear-gradient(to top, #ffeecc ,#e6ffff );" >
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">El software para gestionar tu clínica.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Control de Gastos</h4>
                        <p class="text-muted">Podrás llevar un buen control de los gastos de tu clínica y llevar el orden de tus compras de inventarios.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Diseño Responsivo</h4>
                        <p class="text-muted">Podrás observar las páginas del software de la manera mas eficiente ya sea que entrés desde tu teléfono, tablet o computadora a la página web.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Seguridad Web</h4>
                        <p class="text-muted">Los datos son guardados con la mayor seguridad.Somos tu aliado y tu privacidad es muy importante para nosotros. </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-hourglass-half fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Control del Tiempo</h4>
                        <p class="text-muted">Administra los horarios en tu consulta desde cualquier lugar. Así tus pacientes y tu eligen la hora que más les sirva.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Pacientes</h4>
                        <p class="text-muted">Lleva el control de toda la información de tus pacientes de una forma sencilla y rápida.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-user-circle fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Odontologos</h4>
                        <p class="text-muted">Gestiona tu información como doctor o la de tus subordinados, edita sus datos o crea uno nuevo.</p>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- About-->
        <section class="page-section" id="about"  style="background-image: linear-gradient(to top, #ffeecc ,#e6ffff );">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">A cerca de</h2>
                    <h3 class="section-subheading text-muted">Deja atrás lo convencional. ¡Actualizate hoy!.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/crecer.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Nuevas maneras de crecer</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                            Posee innovadoras funcionalidades, que te permiten estar más cerca de tus pacientes, fidelizándolos y diferenciando tu calidad de servicio respecto a tus colegas.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/facildeutilizar.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            
                                <h4 class="subheading">Fácil de utilizar</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">La herramienta más amigable y sencilla para odontólogos, que además cuenta con un gran equipo humano de soporte y postventa disponible para ti, para siempre.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/diente.jpg" alt="diente" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Contamos con:</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                            Tecnología única en la región y capacidad para atender diferentes tipos de tratamientos dentales en un ambiente confortable y totalmente climatizado.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/dentista.jpg"  alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                               
                                <h4 class="subheading">Recuerda</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nuestra Clínica nos brinda a toda la familia servicios odontológicos de calidad certificada, proveyendo una salud bucal integral.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                !Se Parte
                                <br />
                               de Nuestra
                                <br />
                                Historia!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section> 
        <section class="page-section" id="contact"  style="background-image: linear-gradient(to top, #ffeecc ,#e6ffff );">
            <div class="container">
                <!-- Contact Section Heading-->
                <div class="text-center">
                    <h2 style="color:orange;">CONTÁCTANOS</h2>
                </div>
                
                <!-- Contact Section Content-->
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                            <p style="color:orange;" >Teléfonos:</p>
                            <div style="color:orange;">+504-97099828</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                            <p style="color:orange;">Correo Electrónico:</p><a style="color:orange;"href="mailto:name@example.com">smileSoftware.gmail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">UBICACIÓN</h4>
                        <p class="pre-wrap lead mb-0">Honduras, Dept. El Paraíso, Danlí</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                      
                        <a class="btn btn-outline-light btn-social mx-1" href="">
                            <i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="mb-4">SMILE SOFTWARE</h4>
                        <p class="pre-wrap lead mb-0">Todos los derechos reservados  2020</p>
                    </div>
                </div>
            </div>
        </footer>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>


