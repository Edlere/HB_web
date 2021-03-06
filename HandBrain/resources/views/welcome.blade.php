<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link class="icon" rel="shortcut icon" type="image/x-icon" href="img/logos/logo2.png">
  <title>HandBrain</title>

  <!-- Núcleo de Bootstrape CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Fuentes personalizadas para esta plantilla -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!--Estilos personalizados para esta plantilla -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- ================================= NAVEGACIÓN ================================= -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="js-scroll-trigger" href="#page-top"><img class="logo_foco js-scroll-trigger" src="img/logos/logo2.png" alt=""></a>
     <a class="navbar-brand js-scroll-trigger" href="#page-top">HandBrain</a>


      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portafolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contáctenos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ================================= PRINCIPAL ================================= -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">¡Bienvenido a nuestro sitio!</div>
        <div class="intro-heading text-uppercase">Está en tu mente,<br>¡ponlo en tus manos!</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Dime más</a>
      </div>
    </div>
  </header>

  <!-- ================================= SERVICIOS ================================= -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Servicios</h2>
          <h3 class="section-subheading text-muted">Estos son los servicios que ofrecemos.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-chrome fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Páginas Web</h4>
          <p class="text-muted">Diseño y Maquetado de Páginas Web</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-gg fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Logotipos y Banners</h4>
          <p class="text-muted">Diseño y Creación de Logotipos y Banners</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Añadir...</h4>
          <p class="text-muted">Añadir texto aquí...</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================= PORTAFOLIO ================================= -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Portafolio</h2>
          <h3 class="section-subheading text-muted">Estos son nuestros proyectos<br>que hemos ido desarrollando a lo largo del tiempo.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/ErasmoRoca.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Página Web<br>Erasmo Roca</h4>
            <p class="text-muted">Una Página Web para la I.E. Erasmo Roca</p>
          </div>
        </div>

        <!-- PARA AÑADIR PROYECTOS -->

        <!--div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Lines</h4>
            <p class="text-muted">Branding</p>
          </div>
        </div-->

      </div>
    </div>
  </section>

  <!-- ================================= HISTORIA ================================= -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">ACERCA DE HANDBRAIN</h2>
          <h3 class="section-subheading text-muted">Ésta es nuestra historia</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2016</h4>
                  <h4 class="subheading">Nuestros Humildes Comienzos</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Empezamos como un grupo de 5 integrantes formados por el Ing. Mirko Manrique con el objetivo de capacitarnos y construir proyectos en equipo.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Marzo 2017</h4>
                  <h4 class="subheading">Nuestro Primer Cliente</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Empezamos con nuestro primer proyecto que es diseño de Páginas Web.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Octubre 2017</h4>
                  <h4 class="subheading">Expansión de Equipo</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Cada integrante del equipo de HandBrain hizo una lista de posibles personas para conformar parte del equipo. Los cuales algunos fueron los interesados en pertenecer y ser capacitados para el desarrollo de los proyectos.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Noviembre 2017</h4>
                  <h4 class="subheading">Primer Encargo Oficial</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Fuimos nombrados para hacer el diseño de una Página Web para un evento de una Universidad.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>¡Se parte
                  <br>de nuestra
                  <br>Historia!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================= EQUIPO ================================= -->
  <section class="bg-light" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Nuestro Increíble Equipo</h2>
          <h3 class="section-subheading text-muted">El equipo es conformado por muchos miembros, los cuales 5 somos los fundadores.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/Kenny.jpg" alt="">
            <h4>Kenny Saavedra</h4>
            <p class="text-muted">Diseñador y Desarrollador</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Kenny.Saavedra.Altuna" target=”_blank”>
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/kenny_ksa/" target=”_blank”>
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/Bryan.jpg" alt="">
            <h4>Bryan Baltazar</h4>
            <p class="text-muted">Maquetador y Desarrollador</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/bryan.baltazarvera" target=”_blank”>
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/bryanbaltazavera/" target=”_blank”>
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/Jose.jpg" alt="">
            <h4>Jose Angulo</h4>
            <p class="text-muted">Desarrollador y Comercializador</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/aaronjosea" target=”_blank”>
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/aaron_choca/" target=”_blank”>
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/Valeria.jpg" alt="">
            <h4>Valeria Pérez</h4>
            <p class="text-muted">Diseñadora y Desarrolladora</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/valeriaPchang" target=”_blank”>
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/valepch/" target=”_blank”>
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/Alexandra.jpg" alt="">
            <h4>Alexandra Vera</h4>
            <p class="text-muted">Diseñadora e Ilustradora</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/alexandranicole.veracevero" target=”_blank”>
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/ale.v_c.05/" target=”_blank”>
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- MODAL LISTA -->
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/team.jpg" alt="">
            <h4>Equipo Completo</h4>
          </div>
        </div>
        <!-- =========== -->
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">“Ninguno de nosotros es tan bueno como todos nosotros juntos”</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================= CLIENTES ================================= -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <!--img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt=""-->
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <!--img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt=""-->
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <!--img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt=""-->
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <!--img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt=""-->
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================= CONTACTO ================================= -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contáctenos</h2>
          <h3 class="section-subheading text-muted">Si deseas saber más acerca de HandBrain y estás interesado en obtener algunos de nuestros servicios,<br>escríbenos llenando este formulario.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <form action="/contacto" method="post"  name="sentMessage" role="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Tu Nombre *" required data-validation-required-message="Por favor ingrese su nombre">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" name="correo" id="correo" type="email" placeholder="Tu Correo *" required data-validation-required-message="Por favor ingrese su correo">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" name="telefono" id="telefono" type="tel" placeholder="Tu Teléfono *" required data-validation-required-message="Por favor ingrese su teléfono">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Tu Mensaje *" required data-validation-required-message="Por favor ingrese su mensaje"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button  class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================= FOOTER ================================= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; HandBrain 2017</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#" target=”_blank”>
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" target=”_blank”>
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" target=”_blank”>
                <i class="fa fa-envelope-o"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Política de Privacidad</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Términos de uso</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- ================================= MODALES DEL PORTFOLIO ================================= -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Detalles del Proyecto 1 -->
                <h2 class="text-uppercase">Página Web<br>Erasmo Roca</h2>
                <p class="item-intro text-muted">Diseño y Maquetado de la Página Web para la I.E. Erasmo Roca</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/ErasmoRoca2.png" alt="">
                <p>Añadir texto aquí...</p>
                <ul class="list-inline">
                  <li>Fecha: Noviembre 2017</li>
                  <li>Cliente: I.E. Erasmo Roca</li>
                  <li>Categoría: Página Web</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Cerrar Proyecto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <!-- div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div -->

  <!-- Modal 4 -->
  <!-- div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div -->

  <!-- Modal 5 -->
  <!-- div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div -->

  <!-- Modal 6 -->
  <!-- div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div -->
  <!-- Núcleo de Bootstrap JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Forma de Contacto JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Scripts personalizados para esta plantilla -->
  <script src="js/agency.min.js"></script>

</body>

</html>
