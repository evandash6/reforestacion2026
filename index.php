<?php

function generarCarrusel(String $carpeta)
{
    // Buscar imágenes
    $imagenes = glob($carpeta . '/*.{jpg,jpeg,png,gif,webp,JPG,JPEG,PNG,GIF,WEBP}', GLOB_BRACE);

    // Ordenarlas
    sort($imagenes);

    $html = '';

    foreach ($imagenes as $i => $imagen) {

        $active = ($i == 0) ? ' active' : '';

        $nombre = basename($imagen);

        $html .= '
            <div class="carousel-item' . $active . '">
                <a href="' . $imagen . '" class="glightbox" data-gallery="galeria">
                    <img src="' . $imagen . '" class="d-block w-100" alt="' . htmlspecialchars($nombre) . '">
                </a>
            </div>';
    }

    return $html;
}
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <!--====== Title ======-->
    <title>Reforestalción</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--====== Nice Select CSS ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.4.5.2.min.css">
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- TABLER ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <!-- GLIGHBOX -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <!-- Bootstrap JS (IMPORTANTE) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>

    <!-- LEAFLET -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-omnivore/leaflet-omnivore.min.js"></script>
</head>

<body class="bg-ligth">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->
    <!--====== HEADER PART START ======-->
    <section class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img style="width:200px" src="assets/images/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#actividades">Actividades</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#ubicacion">Ubicación</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#recomendacion">Recomendaciones</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#galeria">Galeria de imagenes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#registro">Registro</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div id="home" class="header_slider">
            <div class="single_slider bg_cover d-flex align-items-center"
                style="background-image: url(assets/images/hero-area.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="slider_content">
                                <h2 class="slider_title wow fadeInLeftBig" data-wow-duration="1.3s"
                                    data-wow-delay="0.2s">Jornada Nacional de Reforestación y Restauración<span
                                        class="text-success ml-3"> 2026</span></h2>
                                <a href="javascript:void(0)" class="wow fadeInLeftBig btn btn-success mt-2 btn-lg"
                                    data-wow-duration="1.3s" data-wow-delay="0.8s"><i
                                        class="ti ti-edit-circle fs-20"></i> Registrarme</a>
                            </div> <!-- slider content -->
                        </div>
                        <div class="col-lg-6 text-center align-items-end wow fadeInLeftBig" data-wow-duration="1.3s"
                            data-wow-delay="0.2s">
                            <div class="slider_content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="text-white"><br><br>Fecha del evento
                                            <br><i class="ti ti-calendar-week"></i> <span class="fs-20 text-warning">09
                                                de Agosto
                                                del 2026</span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center align-items-center">
                                        <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                            data-wow-duration="1.3s" data-wow-delay="0.2s">
                                            <div class="counter_wrapper">
                                                <h2><i class="ti ti-seedling text-muted mt-1"></i></h2>
                                                <span class="counter">534,000</span>
                                                <p class="text-success mb-1">Planta</p>
                                            </div> <!-- single wrapper -->
                                        </div>
                                        <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                            data-wow-duration="1.3s" data-wow-delay="0.2s">
                                            <div class="counter_wrapper">
                                                <h2><i class="ti ti-lasso-polygon text-muted mt-1"></i></h2>
                                                <span class="counter">1,534</span>
                                                <p class="text-success mb-1">Superficie</p>
                                            </div> <!-- single wrapper -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>
    <!--====== HEADER PART ENDS ======-->
    <!--====== ABOUT PART START ======-->
    <section id="actividades" class="about_area pt-130">
        <div class="container">
            <div class="section_title text-center pb-25">
                <h3 class="title">Actividades y/o obras de suelo realizadas en <span class="text-success">2026</span> a
                    nivel nacional</h3>
            </div>
            <div class="row">
                <div class="col-lg-12 p-3">
                    <table class="table table-striped table-bordered shadow wow fadeInDown" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <thead>
                            <tr class="bg-tinto text-white">
                                <td>Actividad</td>
                                <td class="text-center">Supercicie</td>
                                <td class="text-center">Plantas</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Reforestación</td>
                                <td class="text-center negritas">11,250 ha</td>
                                <td class="text-center negritas"> 4.6 millones</td>
                            </tr>
                            <tr>
                                <td>Replante</td>
                                <td class="text-center negritas"> 81,848 ha</td>
                                <td class="text-center negritas"> 11.8 millones</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="table table-bordered table-striped shadow wow fadeInDown" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <thead>
                            <tr class="bg-green text-white">
                                <td>Actividad</td>
                                <td class="text-center">Cantidad</td>
                                <td class="text-center">Unidad</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cercado de áreas en restauración</td>
                                <td class="text-right negritas">763</td>
                                <td class="text-right text-muted">Km</td>
                            </tr>
                            <tr>
                                <td>Brechas cortafuego</td>
                                <td class="text-right negritas">307</td>
                                <td class="text-right text-muted">Km</td>
                            </tr>
                            <tr>
                                <td>Roturación con maquinaria</td>
                                <td class="text-right negritas">1,090</td>
                                <td class="text-right text-muted">Km</td>
                            </tr>
                            <tr>
                                <td>Zanjas trinchera</td>
                                <td class="text-right negritas">160</td>
                                <td class="text-right text-muted">Km</td>
                            </tr>
                            <tr>
                                <td>Terrazas individuales</td>
                                <td class="text-right negritas">643,000</td>
                                <td class="text-right text-muted">Piezas</td>
                            </tr>
                            <tr>
                                <td>Rehabilitación de jagüeyes o bordos de almacenamiento de agua</td>
                                <td class="text-right negritas">4,128</td>
                                <td class="text-right text-muted">m³</td>
                            </tr>
                            <tr>
                                <td>Presas de gaviones, morillos, mampostería o piedra</td>
                                <td class="text-right negritas">3,378</td>
                                <td class="text-right">m³</td>
                            </tr>
                            <tr>
                                <td>Prácticas de conservación de la biodiversidad</td>
                                <td class="text-right negritas">270</td>
                                <td class="text-right text-muted">Piezas</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <!-- <div class="about_wrapper">
            <div class="about_image bg_cover" style="background-image: url(assets/images/refo1.webp)"></div>
            <!-- about image -->
        <!-- <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 bg-danger">
                        <div class="about_content">
                            <div class="section_title">
                                <h3 class="title text-center">Actividades y/o obras de suelo realizadas en 2026 a nivel nacional <span>cantidades</span></h3>
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Col 1</td>
                                            <td>Col 2</td>
                                            <td>Col 3</td>
                                            <td>Col 4</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>dato 1</td>
                                            <td>dato 2</td>
                                            <td>dato 3</td>
                                            <td>dato 4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="javascript:void(0)" class="main-btn">Leer más..</a>
                        </div>
                        <div class="about_counter d-flex flex-wrap">
                            <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                data-wow-duration="1.3s" data-wow-delay="0.2s">
                                <div class="counter_wrapper">
                                    <span class="counter">534</span>
                                    <p>Trips Done</p>
                                </div>
                            </div>
                            <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                data-wow-duration="1.3s" data-wow-delay="0.5s">
                                <div class="counter_wrapper">
                                    <span class="counter">424</span>
                                    <p>Corporate Clients</p>
                                </div>
                            </div>

                            <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                data-wow-duration="1.3s" data-wow-delay="0.8s">
                                <div class="counter_wrapper">
                                    <span class="counter">35</span>
                                    <p>Visited Countries</p>
                                </div>
                            </div>
                            <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                data-wow-duration="1.3s" data-wow-delay="1.1s">
                                <div class="counter_wrapper">
                                    <span class="counter">15</span>
                                    <p>Team Members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>-->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== DESTINATION PART START ======-->

    <section id="ubicacion" class="destination_area pt-80 pb-10 container-fluid">
        <div class="section_title text-center pb-25">
            <h3 class="title">Ubicación del predio</h3>
            <p><b>Actividad:</b> Llevar a cabo una reforestación en la Comunidad de Santiago Xalitzintla, Municipio de San Nicolás de Los Ranchos, como parte de Plan de Reforestación 2026 del Gobierno del Estado, Implementado por la SMADSOT.</p></br>

            <div class="row">
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="assets/images/ima1.png" alt="" class="img">
                        </div>
                        <div class="col-lg-12 mt-2">
                            <img src="assets/images/ima2.png" alt="" class="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9"><div id="map" style="height:500px;"></div></div>
            </div>

            

        </div> <!-- section title -->

    </section>

    <!--====== DESTINATION PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="recomendacion" class="services_area pt-80 wow fadeInUp" data-wow-duration="1.3s"
        data-wow-delay="0.2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Recomendaciones para visitantes</h3>
                        <hr>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <div class="row mb-30 align-items-end mt-3">
                <div class="col-lg-4">
                    <img src="assets/images/reco_img.png" alt="">
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center gap-3">
                            <i class="ti ti-shirt fs-32 mr-3 text-info"></i>
                            <span>Usa ropa cómoda, manga larga y calzado cerrado adecuado para campo.</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center gap-3">
                            <i class="ti ti-bottle fs-32 mr-3 text-info"></i>
                            <span>Lleva agua suficiente, gorra o sombrero y protección solar.</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center gap-3">
                            <i class="ti ti-shield-lock fs-32 mr-3 text-info"></i>
                            <span>Permanece dentro de las áreas asignadas a tu brigada.</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center gap-3">
                            <i class="ti ti-ear fs-32 mr-3 text-info"></i>
                            <span>Escucha y sigue las indicaciones del personal técnico responsable.</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center gap-3">
                            <i class="ti ti-trash-x fs-32 mr-3 text-info"></i>
                            <span>No dejes residuos ni dañes la vegetación existente.</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center gap-3">
                            <i class="ti ti-ambulance fs-32 mr-3 text-info"></i>
                            <span>En caso de malestar, avisa de inmediato al responsable de brigada.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="galeria" class="team_area pt-120 pb-100">
        <div class="section_title text-center">
            <h3 class="title">Galeria de imagenes</h3>
            <div class="container mt-2">
                <hr>

                <div id="miCarrusel" class="carousel slide" data-bs-ride="carousel">

                    <!-- Imágenes -->
                    <div class="carousel-inner">

                        <?Php

                        echo generarCarrusel('assets/images/galeria/');

                        ?>
                    </div>


                    <!-- Flecha izquierda -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#miCarrusel"
                        data-bs-slide="prev">
                        <span class="ti ti-chevron-left fs-24 text-danger"></span>
                    </button>
                    <!-- Flecha derecha -->
                    <button class="carousel-control-next" type="button" data-bs-target="#miCarrusel"
                        data-bs-slide="next">
                        <span class="ti ti-chevron-right fs-24 text-danger"></span>
                    </button>


                </div>

            </div>


        </div> <!-- section title -->
    </section>

    <!--====== TEAM PART ENDS ======-->
    <!--====== CONTACT PART START ======-->
    <section id="registro" class="contact_area pt-80 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Registro</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut
                            labore et dolore magna </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="contact_form">
                <form action="assets/contact.php" method="POST" id="contact-form" class="wow zoomIn" data-wow-duration="1.3s"
                    data-wow-delay="0.2s">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single_form">
                                <input type="text" required name="name" id="name" placeholder="Nombre">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form">
                                <input type="tel" required name="phone" id="phone" placeholder="Teléfono">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form">
                                <input type="email" required name="email" id="email" placeholder="Correo electrónico">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form">
                                <select required name="estado">
                                    <option value="" selected="">Estado</option>
                                    <option value="01">AGUASCALIENTES</option>
                                    <option value="02">BAJA CALIFORNIA</option>
                                    <option value="03">BAJA CALIFORNIA SUR</option>
                                    <option value="04">CAMPECHE</option>
                                    <option value="05">COAHUILA DE ZARAGOZA</option>
                                    <option value="06">COLIMA</option>
                                    <option value="07">CHIAPAS</option>
                                    <option value="08">CHIHUAHUA</option>
                                    <option value="09">CIUDAD DE MÉXICO</option>
                                    <option value="10">DURANGO</option>
                                    <option value="11">GUANAJUATO</option>
                                    <option value="12">GUERRERO</option>
                                    <option value="13">HIDALGO</option>
                                    <option value="14">JALISCO</option>
                                    <option value="15">MÉXICO</option>
                                    <option value="16">MICHOACÁN DE OCAMPO</option>
                                    <option value="17">MORELOS</option>
                                    <option value="18">NAYARIT</option>
                                    <option value="19">NUEVO LEÓN</option>
                                    <option value="20">OAXACA</option>
                                    <option value="21">PUEBLA</option>
                                    <option value="22">QUERÉTARO</option>
                                    <option value="23">QUINTANA ROO</option>
                                    <option value="24">SAN LUIS POTOSÍ</option>
                                    <option value="25">SINALOA</option>
                                    <option value="26">SONORA</option>
                                    <option value="27">TABASCO</option>
                                    <option value="28">TAMAULIPAS</option>
                                    <option value="29">TLAXCALA</option>
                                    <option value="30">VERACRUZ DE IGNACIO DE LA LLAVE</option>
                                    <option value="31">YUCATÁN</option>
                                    <option value="32">ZACATECAS</option>
                                </select>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form">
                                <button type="submit" class="main-btn btn-danger">Enviar registro</button>
                            </div> <!-- single form -->
                        </div>
                    </div> <!-- row -->
                    <p class="form-message pt-30"></p>
                </form>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== CONTACT PART ENDS ======-->
    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer_area">
        <div class="footer_widget pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 order-md-1 order-lg-1">
                        <div class="footer_about mt-50">
                            <a href="#"><img style="width:300px" src="assets/images/logo.png" alt="logo"></a>
                            <p><i class="ti ti-map-pin"></i> Av. Perif. Pte. Manuel Gómez Morin 5360, San Juan de Ocotán, 45019 Zapopan, Jal.</p>
                            <ul class="social">
                                <li><a target="_blank" class="btn-primary" href="https://www.facebook.com/CONAFOR.Central"><i class="ti ti-brand-facebook"></i></a></li>
                                <li><a target="_blank" class="btn-info ti ti-brand-twitter" href="https://x.com/CONAFOR?lang=en"></a></li>
                                <li><a target="_blank" class="btn-danger" href="https://www.youtube.com/user/conaforgob">
                                        <i class="ti ti-brand-youtube"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-6 order-md-2 order-lg-3">
                        <div class="footer_subscribe mt-45">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.31702024935!2d-103.45517780288507!3d20.69734738905311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428a92c72c16603%3A0x813b7aa2f8a8c846!2sCONAFOR!5e0!3m2!1ses-419!2smx!4v1784584324762!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div> <!-- footer subscribe -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </section>
    <!--====== FOOTER PART ENDS ======-->
    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top bg-success"><i class="ti ti-chevron-up"></i></a>
    <!--====== BACK TOP TOP PART ENDS ======-->
    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.4.5.2.min.js"></script>
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--====== Nice Select js ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    <!-- GLIGhTBOX -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({
            selector: '.glightbox',
            loop: true,
            touchNavigation: true,
            zoomable: true,
            draggable: true
        });

        $(document).ready(function() {
            $('select[name=estado]').attr('style', 'position:absolute;opacity:0 !important;')
        })

        const initialCenter = [19.0770, -98.5620];
        const initialZoom = 16;

        const map = L.map('map').setView(initialCenter, initialZoom);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap'
        }).addTo(map);

        const kml = omnivore.kml('datos/poligono.kml').addTo(map);

        const HomeControl = L.Control.extend({
            options: {
                position: 'topleft'
            },

            onAdd: function() {
                const container = L.DomUtil.create('div', 'leaflet-bar leaflet-control');

                const button = L.DomUtil.create('a', '', container);
                button.href = '#';
                button.title = 'Inicio';
                button.innerHTML = '<i class="ti ti-home" style="font-size:15px"></i>';

                L.DomEvent.disableClickPropagation(container);

                L.DomEvent.on(button, 'click', function(e) {
                    L.DomEvent.preventDefault(e);
                    map.setView(initialCenter, initialZoom);
                });

                return container;
            }
        });

        map.addControl(new HomeControl());
    </script>
</body>

</html>