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
            function confirmacion() {
                alert("Postulación Exitosa");
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
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" alt=""></a>
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
        <section class="inner-banner" style="backend:#242c36 url(https://via.placeholder.com/1920x600)no-repeat;">
            <div class="container">
                <div class="caption">
                    <h2>Detalle-Vacante</h2>
                    <!--<p>Get your Popular jobs <span>202 New job</span></p>-->
                </div>
            </div>
        </section>
        <section class="profile-detail">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="basic-information">
                            <div class="col-md-3 col-sm-3">
                                <img src="img/logo.png" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="profile-content">
                                    <?php
                                    $codeDetail = $_GET['cod'];
                                    $vacantes = file_get_contents("http://localhost/serviciosmegakons/get_vacante_detail.php?cod=$codeDetail");
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
                                    }
                                    ?>
                                    <h2>MegaKons<span><?php echo $value['nombre_area']; ?></span></h2>
                                    <!--<p>Now Hiring(102)</p>-->
                                    <ul class="information">
                                        <li><span>Puesto:</span><?php echo $value['nombre_vacante']; ?></li>
                                        <li><span>Lugar:</span><?php echo $value['lugar']; ?></li>
                                        <li><span>Website:</span>https://megakons.com/</li>
                                        <li><span>Salario:</span>$<?php echo $value['salario_minimo'] ?>-$<?php echo $value['salario_maximo'] ?></li>
                                        <li><span>Correo:</span>info@megakons.com</li>
                                        <li><span>Fecha Publicación:</span><?php echo $value['fecha_crea']; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="social">
                                <!--<li><a href="" class="facebook"><i class="fa fa-facebook"></i>Facebook</a></li>
                                <li><a href="" class="google"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                                <li><a href="" class="twitter"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="" class="linkedin"><i class="fa fa-linkedin"></i>Linked In</a></li>
                                <li><a href="" class="instagram"><i class="fa fa-instagram"></i>Instagram</a></li>-->
                            </ul>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-user fa-fw"></i> Sobre MegaKons
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <p> Años Construyendo Confianza. Distribuidores E Importadores Directos De Materiales De Construcción En El Ecuador. 
                                        Somos Una Empresa Comprometida En Satisfacer Las Necesidades De Nuestros Clientes Con Materiales Ferreteros De Calidad.</p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-leaf fa-fw"></i> Descripción del Puesto:
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <p><?php echo $value['descripcion_vacante']; ?></p>	
                                    <!--<ul>
                                        <li>Software testing in a Web Applications/Mobile environment.</li>
                                        <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                        <li>Software testing in a Web Applications environment.</li>
                                        <li>Translate designs into responsive web interfaces</li>
                                        <li>Software testing in a Web Applications/Mobile environment.</li>
                                        <li>Software testing in a Web Applications environment.</li>
                                        <li>Translate designs into responsive web interfaces</li>
                                        <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                        <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                        <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                    </ul>-->
                                </div>
                            </div>
                            <!--<div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-coffee fa-fw"></i> Requisitos:
                                </div>
                                <div class="panel-body">
                                    <p>Rapid growth since incorporation has triggered a chain of products.</p>	
                                    <ul>
                                        <li>Software testing in a Web Applications/Mobile environment.</li>
                                        <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                        <li>Software testing in a Web Applications environment.</li>
                                        <li>Translate designs into responsive web interfaces</li>
                                        <li>Software testing in a Web Applications/Mobile environment.</li>
                                        <li>Software testing in a Web Applications environment.</li>
                                        <li>Translate designs into responsive web interfaces</li>
                                        <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                        <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                        <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                    </ul>
                                </div>
                            </div>-->
                            <!--<div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-graduation-cap fa-fw"></i> Preferred qualifications:
                                </div>-->
                            <!--<div class="panel-body">
                                <ul>
                                    <li>Software testing in a Web Applications/Mobile environment.</li>
                                    <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                    <li>Software testing in a Web Applications environment.</li>
                                    <li>Translate designs into responsive web interfaces</li>
                                    <li>Software testing in a Web Applications/Mobile environment.</li>
                                    <li>Software testing in a Web Applications environment.</li>
                                    <li>Translate designs into responsive web interfaces</li>
                                    <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                                    <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                    <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                                </ul>
                            </div>-->
                            <div class="row">
                                <input onclick="confirmacion();" type="button" class="btn brows-btn" value="Postular" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <footer>
        <div class="container">
            <div class="col-md-3 col-sm-6">
                <h4>MegaKons SA</h4>
                <p class="text-justify">
                    Años Construyendo Confianza. Distribuidores E Importadores Directos De Materiales De Construcción En El Ecuador. 
                    Somos Una Empresa Comprometida En Satisfacer Las Necesidades De Nuestros Clientes Con Materiales Ferreteros De Calidad.
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
