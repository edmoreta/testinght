{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>HyperTaxi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="img/1-01.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
      rel="stylesheet"
    />

    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/owlcarousel/assets/owl.theme.default.min.css"
      rel="stylesheet"
    />
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  </head>

  <body>
    <header id="header" class="header header-hide">
      <div class="container">
        <div id="logo" class="pull-left">
          <h1>
            <a href="#body"><span>Hyper</span><span style="color: #FFC909">Taxi</span></a>
          </h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <h1><a href="#body" class="scrollto"><img src="img/2L-01.png" style="max-width: 10%" alt="" title="" /></a></h1> -->
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <!-- <li class="menu-active"><a href="#hero">Home</a></li>
            <li><a href="#about-us">About</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#screenshots">Screenshots</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#pricing">Pricing</a></li> -->
            <li class="menu-has-children">
              <a href="">Acceso web</a>
              <ul>
                <li><a href="http://hypertaxi.hypermovilidad.com/publico/cliente">Cliente</a></li>
                <li><a href="http://hypertaxi.hypermovilidad.com/publico/propietario">Propietario</a></li>
                <li><a href="http://hypertaxi.hypermovilidad.com/tunel/resuelve">Gestión</a></li>
              </ul>
            </li>
            <!-- <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li> -->
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->

    <!--==========================
    Hero Section
  ============================-->
    <section id="hero" class="wow fadeIn">
      <div class="hero-container">
        <!-- <h1>Welcome to eStartups</h1>
        <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2> -->

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.hypermovilidad.hypertaxicliente&hl=es_EC">
              <img
                src="img/1-01.png"
                style="max-width: 55%; height: auto;"
                class="rounded"
              />
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.hypermovilidad.hypertaxipropietario&hl=es_EC">
              <img
                src="img/2-01.png"
                style="max-width: 55%; height: auto;"
                class="rounded"
              />
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.hypermovilidad.hypertaxiconductor&hl=es_EC">
              <img
                src="img/3-01.png"
                style="max-width: 55%; height: auto;"
                class="rounded"
              />
            </a>
          </div>
        </div>

        <a target="_blank" href="https://play.google.com/store/apps/developer?id=HyperMovilidad&hl=es_EC" class="btn-get-started scrollto">Descargar</a>
        <div class="btns">
          <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
          <a target="_blank" href="https://play.google.com/store/apps/developer?id=HyperMovilidad&hl=es_EC"><i class="fa fa-play fa-3x"></i> Google Play</a>
          <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
        </div>
      </div>
    </section>
    <!-- #hero -->

    <!--==========================
    Get Started Section
  ============================-->
    <section id="get-started" class="padd-section text-center wow fadeInUp">
      <!-- <div class="container">
        <div class="card full-height">
          <div class="card-body">
            <div class="card-title"><h1>Productividad</h1></div>
            <div class="card-category"></div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
              <div class="px-2 pb-2 pb-md-0 text-center">
                <div id="circles-1">
                  <div
                    class="circles-wrp"
                    style="position: relative; display: inline-block;"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="90"
                      height="90"
                    >
                      <path
                        fill="transparent"
                        stroke="#f1f1f1"
                        stroke-width="7"
                        d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z"
                        class="circles-maxValueStroke"
                      ></path>
                      <path
                        fill="transparent"
                        stroke="#FF9E27"
                        stroke-width="7"
                        d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 20.64435763625984 78.60137921350231 "
                        class="circles-valueStroke"
                      ></path>
                    </svg>
                    <div
                      class="circles-text"
                      style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;"
                    >
                      86618
                    </div>
                  </div>
                </div>
                <h6 class="fw-bold mt-3 mb-0">clientes por CallCenter</h6>
              </div>
              <div class="px-2 pb-2 pb-md-0 text-center">
                <div id="circles-2">
                  <div
                    class="circles-wrp"
                    style="position: relative; display: inline-block;"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="90"
                      height="90"
                    >
                      <path
                        fill="transparent"
                        stroke="#f1f1f1"
                        stroke-width="7"
                        d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z"
                        class="circles-maxValueStroke"
                      ></path>
                      <path
                        fill="transparent"
                        stroke="#2BB930"
                        stroke-width="7"
                        d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 5.5495771787290025 57.88076625138973 "
                        class="circles-valueStroke"
                      ></path>
                    </svg>
                    <div
                      class="circles-text"
                      style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;"
                    >
                      239K
                    </div>
                  </div>
                </div>
                <h6 class="fw-bold mt-3 mb-0">peticiones hasta la fecha</h6>
              </div>
              <div class="px-2 pb-2 pb-md-0 text-center">
                <div id="circles-3">
                  <div
                    class="circles-wrp"
                    style="position: relative; display: inline-block;"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="90"
                      height="90"
                    >
                      <path
                        fill="transparent"
                        stroke="#f1f1f1"
                        stroke-width="7"
                        d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z"
                        class="circles-maxValueStroke"
                      ></path>
                      <path
                        fill="transparent"
                        stroke="#F25961"
                        stroke-width="7"
                        d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 0 1 69.44267714510887 78.53812060894248 "
                        class="circles-valueStroke"
                      ></path>
                    </svg>
                    <div
                      class="circles-text"
                      style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;"
                    >
                      711
                    </div>
                  </div>
                </div>
                <h6 class="fw-bold mt-3 mb-0">clientes por App</h6>
              </div>
              <div class="px-2 pb-2 pb-md-0 text-center">
                <div id="circles-3">
                  <div
                    class="circles-wrp"
                    style="position: relative; display: inline-block;"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="90"
                      height="90"
                    >
                      <path
                        fill="transparent"
                        stroke="#f1f1f1"
                        stroke-width="7"
                        d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 1 1 44.942357332570026 3.500040032273624 Z"
                        class="circles-maxValueStroke"
                      ></path>
                      <path
                        fill="transparent"
                        stroke="#1E3C55"
                        stroke-width="7"
                        d="M 44.99154756204665 3.500000860767564 A 41.5 41.5 0 0 1 69.44267714510887 78.53812060894248 "
                        class="circles-valueStroke"
                      ></path>
                    </svg>
                    <div
                      class="circles-text"
                      style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 31.5px; height: 90px; line-height: 90px;"
                    >
                      814
                    </div>
                  </div>
                </div>
                <h6 class="fw-bold mt-3 mb-0">Peticiones al día</h6>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="container">
        <div class="card full-height">
          <div class="card-body">
            <div class="card-title"><h1>Productividad</h1></div>

            <div class="counter">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="employees">
                      <p class="counter-count">86618</p>
                      <p class="employee-p">clientes por CallCenter</p>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="customer">
                      <p class="counter-count">240751</p>
                      <p class="customer-p">peticiones hasta la fecha</p>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="design">
                      <p class="counter-count">714</p>
                      <p class="design-p">clientes por App</p>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="order">
                      <p class="counter-count">1474</p>
                      <p class="order-p">peticiones del día</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br />
      <div class="container">
        <div class="section-title text-center">
          <h2>HyperMovilidad </h2>
          {{-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> --}}
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="img/svg/8.png" alt="img" class="img-fluid" />
              <h4>9 ciudades del país</h4>
              {{-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p>
              <a href="#">read more</a> --}}
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="img/svg/9.png" alt="img" class="img-fluid" />
              <h4>44 empresas</h4>
              {{-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p>
              <a href="#">read more</a> --}}
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="img/svg/10.png" alt="img" class="img-fluid" />
              <h4>916 vehículos</h4>
              {{-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p>
              <a href="#">read more</a> --}}
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
                <div class="feature-block">
                  <img src="img/svg/11.png" alt="img" class="img-fluid" />
                  <h4>1005 conductores</h4>
                  {{-- <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry
                  </p>
                  <a href="#">read more</a> --}}
                </div>
              </div>
        </div>
      </div>
    </section>

    <!--==========================
    About Us Section
  ============================-->
    <section id="about-us" class="about-us padd-section wow fadeInUp">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5 col-lg-3">
            <img src="img/about-img.png" alt="About" />
          </div>

          <div class="col-md-7 col-lg-5">
            <div class="about-content">
              <h2><span>HyperTaxi</span></h2>
              <p>
                Expertos en rastreo satelital
              </p>

              <ul class="list-unstyled">
                <li><i class="fa fa-angle-right"></i>Petición de taxi</li>
                <li><i class="fa fa-angle-right"></i>Petición de pedidos</li>
                <li><i class="fa fa-angle-right"></i>Historial de carreras</li>
                <li><i class="fa fa-angle-right"></i>Calificación al conductor y el taxi</li>
                <li><i class="fa fa-angle-right"></i>Compartir recorrido en el taxi</li>
                <li><i class="fa fa-angle-right"></i>Direcciones favoritas</li>
                <li><i class="fa fa-angle-right"></i>Botón de pánico con contactos de emergencia</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
    Features Section
  ============================-->

    <section id="features" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Funcionalidades</h2>
          <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="img/svg/1.png" alt="img" class="img-fluid" />
              <h4>Control de flota</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="img/svg/2.png" alt="img" class="img-fluid" />
              <h4>Despacho de carreras</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="img/svg/3.png" alt="img" class="img-fluid" />
              <h4>Mapas Geo-referenciados</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="img/svg/4.png" alt="img" class="img-fluid" />
              <h4>Reportes estadísticos</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">
              <img src="img/svg/5.png" alt="img" class="img-fluid" />
              <h4>Alertas de auxilio comunitaria</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">
              <img
                src="img/svg/6.png"
                alt="img"
                class="img-fluid"
              />
              <h4>Alertas de zonas peligrosas</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">
              <img src="img/svg/7.png" alt="img" class="img-fluid" />
              <h4>Alertas de radares</h4>
              <!-- <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p> -->
            </div>
          </div>

          <!-- <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="img/svg/code.svg" alt="img" class="img-fluid" />
              <h4>clean codes</h4>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry
              </p>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <!--==========================
    Screenshots Section
  ============================-->
    <section id="screenshots" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Galería HyperTaxi</h2>
        </div>
      </div>

      <div class="container">
        <div class="owl-carousel owl-theme">
          {{-- <div><img src="img/screen/1.jpg" alt="img" /></div>
          <div><img src="img/screen/2.jpg" alt="img" /></div>
          <div><img src="img/screen/3.jpg" alt="img" /></div>
          <div><img src="img/screen/4.jpg" alt="img" /></div>
          <div><img src="img/screen/5.jpg" alt="img" /></div>
          <div><img src="img/screen/6.jpg" alt="img" /></div> --}}
          <div><img src="img/screen/7.png" alt="img" /></div>
          <div><img src="img/screen/8.png" alt="img" /></div>
          <div><img src="img/screen/9.png" alt="img" /></div>
          <div><img src="img/screen/10.png" alt="img" /></div>
          <div><img src="img/screen/11.png" alt="img" /></div>
        </div>
      </div>
    </section>

    <!--==========================
    Video Section
  ============================-->

    <!-- <section id="video" class="text-center wow fadeInUp">
      <div class="overlay">
        <div class="container-fluid container-full">
          <div class="row">
            <a
              href="#"
              class="js-modal-btn play-btn"
              data-video-id="kO7E3OAwzIc"
            ></a>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <div class="container">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe
          class="embed-responsive-item"
          src="https://www.youtube.com/embed/kO7E3OAwzIc"
          allowfullscreen
        ></iframe>
      </div>

      <div class="embed-responsive embed-responsive-16by9">
        <iframe
          class="embed-responsive-item"
          src="https://player.vimeo.com/video/137857207"
          allowfullscreen
        ></iframe>
      </div>
    </div> -->

    <div class="container">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">
          <!--Modal: Name-->
          <div
            class="modal fade"
            id="modal1"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Body-->
                <div class="modal-body mb-0 p-0">
                  <div
                    class="embed-responsive embed-responsive-16by9 z-depth-1-half"
                  >
                    <iframe
                      class="embed-responsive-item"
                      src="https://www.youtube.com/embed/xCYjEO3YLrw"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <button
                    type="button"
                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!--Modal: Name-->

          <a
            ><img
              style="max-width: 100%"
              src="https://i.ytimg.com/vi/xCYjEO3YLrw/hqdefault.jpg"
              alt="video"
              data-toggle="modal"
              data-target="#modal1"
          /></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">
          <!--Modal: Name-->
          <div
            class="modal fade"
            id="modal6"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Body-->
                <div class="modal-body mb-0 p-0">
                  <div
                    class="embed-responsive embed-responsive-16by9 z-depth-1-half"
                  >
                    <iframe
                      class="embed-responsive-item"
                      src="https://www.youtube.com/embed/kO7E3OAwzIc"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <button
                    type="button"
                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!--Modal: Name-->

          <a
            ><img
              style="max-width: 100%"
              src="https://i.ytimg.com/vi/kO7E3OAwzIc/hqdefault.jpg"
              alt="video"
              data-toggle="modal"
              data-target="#modal6"
          /></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">
          <!--Modal: Name-->
          <div
            class="modal fade"
            id="modal4"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Body-->
                <div class="modal-body mb-0 p-0">
                  <div
                    class="embed-responsive embed-responsive-16by9 z-depth-1-half"
                  >
                    <iframe
                      class="embed-responsive-item"
                      src="https://www.youtube.com/embed/FtYnDRYUQvg"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <button
                    type="button"
                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!--Modal: Name-->

          <a
            ><img
              style="max-width: 100%"
              src="https://i.ytimg.com/vi/FtYnDRYUQvg/hqdefault.jpg"
              alt="video"
              data-toggle="modal"
              data-target="#modal4"
          /></a>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>

    <!--==========================
    Team Section
  ============================-->
    <section id="team" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Nuestro Equipo de Trabajo</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-4 col-lg-3">
            <div class="team-block bottom">
              <img src="img/team/1.jpg" class="img-responsive" alt="img" />
              <div class="team-content">
                <ul class="list-unstyled">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3">
            <div class="team-block bottom">
              <img src="img/team/2.jpg" class="img-responsive" alt="img" />
              <div class="team-content">
                <ul class="list-unstyled">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3">
            <div class="team-block bottom">
              <img src="img/team/3.jpg" class="img-responsive" alt="img" />
              <div class="team-content">
                <ul class="list-unstyled">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3">
            <div class="team-block bottom">
              <img src="img/team/4.jpg" class="img-responsive" alt="img" />
              <div class="team-content">
                <ul class="list-unstyled">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
    Testimonials Section
  ============================-->

    {{-- <section id="testimonials" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="testimonials-content">
              <div
                id="carousel-example-generic"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item  active">
                    <div class="top-top">
                      <h2>Our Users Speack volumes us</h2>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries.
                      </p>
                      <h4>Kimberly Tran<span>manager</span></h4>
                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">
                      <h2>Our Users Speack volumes us</h2>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries.
                      </p>
                      <h4>Henderson<span>manager</span></h4>
                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">
                      <h2>Our Users Speack volumes us</h2>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries.
                      </p>
                      <h4>David Spark<span>manager</span></h4>
                    </div>
                  </div>
                </div>

                <div class="btm-btm">
                  <ul class="list-unstyled carousel-indicators">
                    <li
                      data-target="#carousel-example-generic"
                      data-slide-to="0"
                      class="active"
                    ></li>
                    <li
                      data-target="#carousel-example-generic"
                      data-slide-to="1"
                    ></li>
                    <li
                      data-target="#carousel-example-generic"
                      data-slide-to="2"
                    ></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!--==========================
    Pricing Table Section
  ============================-->
    {{-- <section id="pricing" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Meet With Price</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="table">
                <h4>basic</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"
                    ><i class="fa fa-shopping-cart"></i> Buy Now</a
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="table">
                <h4>PERSONAL</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"
                    ><i class="fa fa-shopping-cart"></i> Buy Now</a
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="table">
                <h4>BUSINESS</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"
                    ><i class="fa fa-shopping-cart"></i> Buy Now</a
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="table">
                <h4>profeesional</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"
                    ><i class="fa fa-shopping-cart"></i> Buy Now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!--==========================
    Blog Section
  ============================-->
    <section id="blog" class="padd-section wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Latest posts</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="img/blog/blog-image-1.jpg" alt="img"/></a>
              <div class="content-blog">
                <h4>
                  <a href="#"
                    >whats isthe difference between good and bat typography</a
                  >
                </h4>
                <span>05, juin 2017</span>
                <a class="pull-right readmore" href="#">read more</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"
                ><img
                  src="img/blog/blog-image-2.jpg"
                  class="img-responsive"
                  alt="img"
              /></a>
              <div class="content-blog">
                <h4>
                  <a href="#"
                    >whats isthe difference between good and bat typography</a
                  >
                </h4>
                <span>05, juin 2017</span>
                <a class="pull-right readmore" href="#">read more</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"
                ><img
                  src="img/blog/blog-image-3.jpg"
                  class="img-responsive"
                  alt="img"
              /></a>
              <div class="content-blog">
                <h4>
                  <a href="#"
                    >whats isthe difference between good and bat typography</a
                  >
                </h4>
                <span>05, juin 2017</span>
                <a class="pull-right readmore" href="#">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
    Newsletter Section
  ============================-->
    <section id="newsletter" class="newsletter text-center wow fadeInUp">
      <div class="overlay padd-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
              <form class="form-inline" method="POST" action="#">
                <input
                  type="email"
                  class="form-control "
                  placeholder="Email Adress"
                  name="email"
                />
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-location-arrow"></i>Suscríbete
                </button>
              </form>
            </div>
          </div>

          <ul class="list-unstyled">
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!--==========================
    Contact Section
  ============================-->
    <section id="contact" class="padd-section wow fadeInUp">
      <div class="container">
        <div class="section-title text-center">
          <h2>Contáctanos</h2>
          {{-- <p class="separator"> --}}
          <p class="">
            ¿Interesado en nuestros servicios o simplemente tienes una duda? No dudes en escribirnos.
          </p>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Simón Bolivar 817 y Pedro Moncayo<br />Ibarra, Ecuador</p>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <p>info@hypermovilidad.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+593 98 465 5141</p>
              </div>
            </div>

            <div class="social-links">
              <a href="https://twitter.com/vecitaxi" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/vecitaxi" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/vecitaxi/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>              
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Nombre"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Correo electrónico"
                    data-rule="email"
                    data-msg="Please enter a valid email"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Asunto"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 8 chars of subject"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    data-rule="required"
                    data-msg="Please write something for us"
                    placeholder="Mensaje"
                  ></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center">
                  <button type="submit">Enviar Mensaje</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact -->

    <!--==========================
    Footer
  ============================-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4">
            <div class="footer-logo">
                <h1>
                    <a href="#body"><span style="color:#fff">Hyper</span><span style="color: #FFC909">Taxi</span></a>
                </h1>
              {{-- <a class="navbar-brand" href="#">HyperTaxi</a> --}}
              <p>
                    Sistema de control de flota y despacho de carreras
              </p>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="list-menu">
              <h4>Abou Us</h4>

              <ul class="list-unstyled">
                <li><a href="#">About us</a></li>
                <li><a href="#">Features item</a></li>
                <li><a href="#">Live streaming</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="list-menu">
              <h4>Abou Us</h4>

              <ul class="list-unstyled">
                <li><a href="#">About us</a></li>
                <li><a href="#">Features item</a></li>
                <li><a href="#">Live streaming</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="list-menu">
              <h4>Support</h4>

              <ul class="list-unstyled">
                <li><a href="#">faq</a></li>
                <li><a href="#">Editor help</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="list-menu">
              <h4>Abou Us</h4>

              <ul class="list-unstyled">
                <li><a href="#">About us</a></li>
                <li><a href="#">Features item</a></li>
                <li><a href="#">Live streaming</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="copyrights">
        <div class="container">
          <p>&copy; 2019 Hypermovilidad Cia. Ltda. Todos los derechos reservados.
            </p>          
        </div>
      </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/modal-video/js/modal-video.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
