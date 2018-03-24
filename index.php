<?php
session_start();
if (isset($_SESSION['ultimoAcceso']) && isset($_SESSION['nombre_usuario'])) {
    $fechaGuardada = $_SESSION['ultimoAcceso'];
    $ahora = date("Y-n-j H:i:s");
    $tiempo_transcurrido = (strtotime($ahora) - strtotime($fechaGuardada));

    if ($tiempo_transcurrido >= 60) {
        session_destroy();
    } else {
        $_SESSION['ultimoAcceso'] = $ahora;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carpas Rosario</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" media="screen" rel="StyleSheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|EB+Garamond" rel="stylesheet">
    <style>
        #logo {
            max-height: 80px;
            margin-top: 0px;
        }

        #down {
            margin-top: 65px;
        }

        #item {
            background-color: #444444;
        }

        #letraMenu {
            color: white;
            background-color: #444444;
            font-size: 18px;
            font-family: NeoSansLight;
        }

        .navbar-default .navbar-collapse {
            border-color: transparent;
        }

        #fondonegro {
            background-color: #1A1A1A;
            padding-top: 30px;
            padding-bottom: 25px;
        }

        @font-face {
            font-family: NeoSansLight;
            src: url(fonts/NeoSans-Light.otf);
        }

        @font-face {
            font-family: NeoSansStd;
            src: url(fonts/NeoSansStd-Regular.otf);
        }

        @font-face {
            font-family: aliensAndCowsTrial;
            src: url(fonts/aliensAndCowsTrial.ttf);
        }

        .tituloSolucion {
            font-family: NeoSansLight;
            font-size: 3.7vw;
        }

        .tituloLista {
            font-family: NeoSansLight;
            font-size: 2vw;
        }

        .tituloGrande {
            font-family: aliensAndCowsTrial;
            font-size: 6.5vw;
        }

        .tituloDesc {
            font-family: NeoSansLight;
            font-size: 1.5vw;
        }

    </style>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom: 30px">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar"
                    style="padding: 20px; margin-top: 35px; margin-right: 30px">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img id="logo" class="img-responsive" src="images/LOGO.png" alt="logo" style="margin-top: 5px  ">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav" style="padding-top: 30px">
                <li id="item"><a style="border-right: 1px white solid; height: 45px" id="letraMenu" href="#inicio">Inicio</a>
                </li>
                <li id="item"><a style="border-right: 1px white solid; height: 45px" id="letraMenu" href="#servicios">Servicios</a>
                </li>
                <li id="item"><a style="border-right: 1px white solid; height: 45px" id="letraMenu" href="#galeria">Galeria</a>
                </li>
                <li id="item"><a style="border-right: 1px white solid; height: 45px" id="letraMenu" href="#contacto">Contacto</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container" style="width: 97%">

    <div class="row">
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img id="down" class="slide-image" src="images/slider1.jpg" alt="Slider Carpa 1">
                            <div class="carousel-caption">
                                <h3 style="font-family: 'EB Garamond', serif;">Ideal para eventos</h3>

                            </div>
                        </div>
                        <div class="item">
                            <img id="down" class="slide-image" src="images/slider2.jpg" alt="Slider Carpa 2">
                            <div class="carousel-caption">
                                <h3 style=" font-family: 'EB Garamond', serif;">Comodidad</h3>

                            </div>
                        </div>
                        <div class="item">
                            <img id="down" class="slide-image" src="images/slider3.jpg" alt="Slider Carpa 3">
                            <div class="carousel-caption">
                                <h3 style=" font-family: 'EB Garamond', serif;">Estilo unico</h3>

                            </div>
                        </div>
                    </div>
                    <a id="down" class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a id="down" class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- La solucion para tus eventos al aire libre -->
        <div style="padding-top: 3.8vw; padding-bottom: 5vw">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 tituloSolucion" style="text-align: center">
                    <div class="row">
                        <p>La solucion <br>para tus eventos <br>al aire libre</p>
                    </div>
                    <div class="row">
                        <img style="width:12vw" src="images/ORNAMENTO NEGRO.png" alt="ornamento negro">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="
                     margin-top: 3.2vw; padding-left: 6vw; border-left: 0.33vw grey double">
                    <div class="tituloLista">
                        <ul>
                            <li>Grandes dimensiones</li>
                            <li>Mucha capacidad de personas</li>
                            <li>Alto grado estetico</li>
                            <li>Colocacion en cualquier lugar</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


        <!-- Eventos corporativos, sociales, bla bla-->
        <div id="fondonegro">
            <row>
                <p style="color: white; text-align: center; font-family: NeoSansLight; font-size: 3.7vw ">Eventos
                    corporativos, sociales, <br>deportivos, ferias y mas </p>
                <p style="color: white; text-align: center; font-family: NeoSansLight; font-size: 1.7vw ">CARPAS |
                    LIVINGS | PISOS | GAZEBOS</p>
            </row>

        </div>


        <div style="padding-top: 6.5vw; padding-bottom: 3vw">
            <row>
                <p style="text-align: center; font-family: NeoSansLight; font-size: 3.2vw; margin-bottom: 0 ">Nuestros
                    Servicios </p>
                <p style="text-align: center"><img style="width:12vw" src="images/ORNAMENTO NEGRO.png"
                                                   alt="ornamento-negro"/></p>
            </row>
        </div>

        <!-- Foto carpa blanca grande -->
        <img style="width:100%" src="images/CARPA.jpg" alt="carpa blanca"/>

        <!-- CARPAS -->
        <div style="padding-top:1vw; padding-bottom: 6.5vw ">
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 tituloGrande"
                     style="text-align: right; padding-right: 3vw">
                    <p>CARPAS</p>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 tituloDesc"
                     style="padding-top:1.75vw; padding-left: 4vw; border-left: 0.33vw grey double">
                    <p>Con una gran varidad de dimensiones, nuestras carpas <br>se adecuan a cualquier evento y
                        necesidad. <br>Creamos ambientes de alta comodidad, estilo y calidez.</p>
                </div>
            </div>
        </div>

    <!-- Foto livings -->
    <img style="width:100%" src="images/LIVINGS OK.jpg" alt="Livings"/>

    <!-- Livings -->
    <div style="padding-top:1vw; padding-bottom: 6.5vw  ">
        <div class="row">
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 tituloGrande" style="text-align: right; padding-right: 3vw">
                <p>LIVINGS</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 tituloDesc"
                 style="padding-top:1.75vw; padding-left: 4vw; border-left: 0.33vw grey double">
                <p>Son una opcion ideal para agasajar a tus <br>invitados en espacios confortables y bellos <br>de una
                    forma acojedora y algo mas informal.</p>
            </div>
        </div>
    </div>


    <!-- Foto Pisos -->
    <img style="width:100%" src="images/PISOS OK.jpg" alt="Pisos"/>

    <!-- Pisos -->
    <div style="padding-top:1vw; padding-bottom: 6.5vw  ">
        <div class="row">
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 tituloGrande" style="text-align: right; padding-right: 3vw">
                <p>PISOS</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 tituloDesc"
                 style="padding-top:1.75vw; padding-left: 4vw; border-left: 0.33vw grey double">
                <p>Generan un ambiente diferente, con mayor <br>comodidad. Aislan la humedad en caso de mal <br>tiempo y
                    evitan el hundimiento en superficies blandas.</p>
            </div>
        </div>
    </div>

    <!-- Foto Gazebos -->
    <img style="width:100%" src="images/GAZEBOS.jpg" alt="Gazebos"/>

    <!-- Gazebos -->
    <div style="padding-top:1vw; padding-bottom: 6.5vw  ">
        <div class="row">
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 tituloGrande" style="text-align: right; padding-right: 3vw">
                <p>GAZEBOS</p>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 tituloDesc"
                 style="padding-top:1.75vw; padding-left: 4vw; border-left: 0.33vw grey double">
                <p>Dan estilo y visten cualquier tipo de lugar. <br>Crean ambientes confortables, luminosos, <br>agradables
                    y una estetica visual ideal.</p>
            </div>
        </div>
    </div>
</div>

<div>

    <row>
        <p style="text-align: center; font-family: NeoSansLight; font-size: 3.2vw; margin-bottom: 0 ">Galeria de
            fotos </p>
        <p style="text-align: center"><img style="width:12vw" src="images/ORNAMENTO NEGRO.png"
                                           alt="ornamento-negro"/></p>
    </row>
</div>


<div style="padding-top: 5vh">
    <row>
        <img style="width: 97%" src="images/galeriacarpas.jpg" alt="Galeria">
    </row>
</div>


<!-- Footer -->
<div class="container">
    <hr>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Carpas Rosario 2018</p>
            </div>
        </div>
    </footer>

</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>