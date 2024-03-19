<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Megakons| Portal de Empleo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- All Plugin Css --> 
        <link rel="stylesheet" href="css/plugins.css">
        <!-- Style & Common Css --> 
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript">
            function allJobs() {
                //var mensaje = "Registrate para visualizar todos las empleos";
                //alert(mensaje);
                var url = location.protocol + '//' + location.host + '/' + 'job' + '/todos.php';
                window.location.href = url;
            }
        </script>
    </head>
    <body>
        <!-- Navigation Start  -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">      
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="index.php">Inicio</a></li> 
                        <li><a href="login.php">Login</a></li>
                        <li><a href="todos.php">Empleos</a></li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceso</a>
                            <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                                <li class="active"><a href="login.php">Acceso|Postulante</a></li>
                                <li><a href="acceso.html">Intranet|Empresa</a></li>
                                <!--<li><a href="resume.html">Resume Detail</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>   
        </nav>
        <!-- Navigation End  -->
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <section class="main-banner" style="background:#242c36 url(img/slider-01.jpg) no-repeat">
            <div class="container">
                <div class="caption">
                    <h2>Construye tu carrera</h2>
                    <form>
                        <fieldset>
                            <div class="col-md-4 col-sm-4 no-pad">
                                <input type="text" class="form-control border-right" placeholder="Titulo,palabras claves" />
                            </div>
                            <div class="col-md-3 col-sm-3 no-pad">
                                <select class="selectpicker border-right">
                                    <option value="0">Experiencia</option>
                                    <option value="1">Sin Experiencia</option>
                                    <option value="2">1 Año</option>
                                    <option value="3">2 Años</option>
                                    <option value="4">3 Años</option>
                                    <option value="5">4 Años</option>
                                    <option value="6">5 Años</option>
                                    <option value="7">6 Años</option>
                                    <option value="8">7 Años</option>
                                    <option value="9">8 Años</option>
                                    <option value="10">9 Años</option>
                                    <option value="11">10 Años</option>
                                    <option value="12">Más de 10 Años</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3 no-pad">
                                <select class="selectpicker">
                                    <option>Area</option>
                                    <option>Comercial</option>
                                    <option>Tecnología de Información</option>
                                    <option>Marketing</option>
                                    <option>Finanzas</option>
                                    <option>Contabilidad</option>
                                    <option>Compras</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-2 no-pad">
                                <input type="submit" class="btn seub-btn" value="Buscar" />
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <div class="features-content">
                        <span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
                        <h3>Crea una cuenta</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="features-content">
                        <span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
                        <h3>Busca trabajo Deseado</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="features-content">
                        <span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
                        <h3>Envia tu CV</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <!--<div class="col-md-4 col-sm-4">
                    <div class="features-content">
                        <span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
                        <h3>Crea una cuenta</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="features-content">
                        <span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
                        <h3>Search Desired Job</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="features-content">
                        <span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
                        <h3>Send Your Resume</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
                    </div>
                </div>-->
            </div>
        </section>
        <section class="counter">
            <div class="container">
                <div class="col-md-3 col-sm-3">
                    <div class="counter-text">
                        <span aria-hidden="true" class="icon-briefcase"></span>
                        <h3>1000</h3>
                        <p>Empleos publicados</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="counter-text">
                        <span class="box1"><span aria-hidden="true" class="icon-expand"></span></span>
                        <h3>700</h3>
                        <p>Postulaciones mensuales</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="counter-text">
                        <span class="box1"><span aria-hidden="true" class="icon-profile-male"></span></span>
                        <h3>500+</h3>
                        <p>Colaboradores</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="counter-text">
                        <span class="box1"><span aria-hidden="true" class="icon-desktop"></span></span>
                        <h3>2500+</h3>
                        <p>Avisos publicados en el último año</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="jobs">
            <div class="container">
                <div class="row heading">
                    <h2>Trabajos publicados recientamente</h2>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>-->
                </div>
                <div class="companies">
                    <?php
                    $vacantes = file_get_contents("http://localhost/job/vacantes.php");
                    $resultado = json_decode($vacantes, true);
                    $i = 1;
                    foreach ($resultado as $value) {
                        "id_vacante:" . $value['id_vacante'] . '<br>';
                        "nombre_vacante:" . $value['nombre_vacante'] . '<br>';
                        "descripcion_vacante:" . $value['descripcion_vacante'] . '<br>';
                        "tipo_empleo :" . $value['tipo_empleo'] . '<br>';
                        "id_area_vacante :" . $value['id_area_vacante'] . '<br>';
                        "lugar :" . $value['lugar'] . '<br>';
                        "salario_minimo :" . $value['salario_minimo'] . '<br>';
                        "salario_maximo:" . $value['salario_maximo'] . '<br>';
                        ?>
                        <div class="company-list">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="company-logo">
                                        <img src="img/logo_icono.png" class="img-responsive" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <div class="company-content">
                                        <h3><?php echo $value['nombre_vacante']; ?><span class="full-time"><?php echo $value['tipo_empleo']; ?></span></h3>
                                        <p><span class="company-name"><i class="fa fa-briefcase">
                                                </i><?php echo $value['nombre_area']; ?></span><span class="company-location"><i class="fa fa-map-marker"></i><?php echo $value['lugar']; ?></span><span class="package"><i class="fa fa-money"></i>$<?php echo $value['salario_minimo'] ?>-$<?php echo $value['salario_maximo'] ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

                    <!--<div class="company-list">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="company-logo">
                                    <img src="img/logo_icono.png" class="img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <div class="company-content">
                                    <h3>Back-End developer<span class="part-time">Part Time</span></h3>
                                    <p><span class="company-name"><i class="fa fa-briefcase"></i>Sistemas</span><span class="company-location"><i class="fa fa-map-marker"></i>Av. Luis Alberto Valencia Y Jorge Araujo Chiriboga , Ambato Ecuador</span><span class="package"><i class="fa fa-money"></i>$20,000-$52,000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <!--<div class="company-list">
                      <div class="row">
                          <div class="col-md-2 col-sm-2">
                              <div class="company-logo">
                                  <img src="img/logo_icono.png" class="img-responsive" alt="" />
                              </div>
                          </div>
                          <div class="col-md-10 col-sm-10">
                              <div class="company-content">
                                  <h3>UI/UX Designer<span class="freelance">Freelance</span></h3>
                                  <p><span class="company-name"><i class="fa fa-briefcase"></i>Marketing</span><span class="company-location"><i class="fa fa-map-marker"></i> Av. Luis Alberto Valencia Y Jorge Araujo Chiriboga , Ambato Ecuador</span><span class="package"><i class="fa fa-money"></i>$22,000-$50,000</span></p>
                              </div>
                          </div>
                      </div>
                  </div>-->

                     <!--<<div class="company-list">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="company-logo">
                                    <img src="img/logo_icono.png" class="img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <div class="company-content">
                                    <h3>Android developer<span class="internship">Prácticas</span></h3>
                                    <p><span class="company-name"><i class="fa fa-briefcase"></i>Sistemas</span><span class="company-location"><i class="fa fa-map-marker"></i> Av. Luis Alberto Valencia Y Jorge Araujo Chiriboga , Ambato Ecuador</span><span class="package"><i class="fa fa-money"></i>$24,000-$52,000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <!--<div class="company-list">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="company-logo">
                                    <img src="img/logo_icono.png" class="img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <div class="company-content">
                                    <h3>Analista de Marketing<span class="full-time">Full Time</span></h3>
                                    <p><span class="company-name"><i class="fa fa-briefcase"></i>Marketing</span><span class="company-location"><i class="fa fa-map-marker"></i> Av. Luis Alberto Valencia Y Jorge Araujo Chiriboga , Ambato Ecuador</span><span class="package"><i class="fa fa-money"></i>$24,000-$48,000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="row">
                    <input id="btn-search" onclick="allJobs();" type="button" class="btn brows-btn" value="Buscar todos los trabajos" />
                </div>
            </div>
        </section>       
        <footer>
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>MegaKons SA</h4>
                    <p class="text-justify">
                        Años Construyendo Confianza. Distribuidores E Importadores Directos De Materiales De Construcción En El Ecuador. 
                        Somos Una Empresa Comprometida En Satisfacer Las Necesidades De Nuestros Clientes Con Materiales Ferreteros De Calidad
                    </p>
                    <!--<ul>
                        <li><a href="#">Browse Jobs</a></li>
                        <li><a href="#">Premium MBA Jobs</a></li>
                        <li><a href="#">Access Database</a></li>
                        <li><a href="#">Manage Responses</a></li>
                        <li><a href="#">Report a Problem</a></li>
                        <li><a href="#">Mobile Site</a></li>
                        <li><a href="#">Jobs by Skill</a></li>
                    </ul>-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Mi Cuenta</h4>
                    <ul>
                        <li><a href="#">Mi cuenta</a></li>
                        <li><a href="#">Premium MBA Jobs</a></li>
                        <li><a href="#">Terminos y Condiciones</a></li>
                        <li><a href="#">Politicas de Entrega</a></li>
                        <li><a href="#">Politicas PostVenta</a></li>
                        <!--<li><a href="#">Mobile Site</a></li>
                        <li><a href="#">Jobs by Skill</a></li>-->
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h4>Contactanos</h4>
                    <address>
                        <ul>
                            <li>Matriz: Av. Luis Alberto Valencia Y Jorge Araujo Chiriboga,
                                A Pocos Metros Del Hospital Alli Causay - Ambato-Ecuador
                                <!--<br>-->
                            </li>
                            <li>Email: ventas@megakons.com.ec</li>
                            <li>Call:  0980304459</li>
                            <!--<li>Skype: job@skype</li>
                            <li>FAX: 123 456 85</li>-->
                        </ul>
                    </address>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h4>Link de Interes</h4>
                    <ul>
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Contactanos</a></li>
                        <li><a href="#">Preguntas Frecuentes</a></li>
                    </ul>
                    <!--<form>
                        <input type="text" class="form-control input-lg" placeholder="Your Name">
                        <input type="text" class="form-control input-lg" placeholder="Email...">
                        <textarea class="form-control" placeholder="Message"></textarea>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>-->
                </div>
            </div>
            <div class="copy-right">
                <p>&copy;Copyright 2024 MegaKons SA| Todos los derechos reservados 
                </p>
            </div>
        </footer>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script src="js/bootsnav.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>