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
            <div class="carousel-item' . $active . ' img">
                <a href="' . $imagen . '" class="glightbox" data-gallery="galeria">
                    <img src="' . $imagen . '" class="d-block w-100" alt="' . htmlspecialchars($nombre) . '">
                </a>
            </div>';
    }
    return $html;
}
?>
<!doctype html>
<html lang="es">

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
    <link rel="stylesheet" href="assets/css/tabler-icons.min.css" />
    <!-- GLIGHBOX -->
    <link rel="stylesheet" href="assets/css/glightbox.min.css">
    <!-- Bootstrap JS (IMPORTANTE) -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- JQUERY -->
    <script src="assets/js/jquery-4.0.0.min.js"></script>
    <!-- LEAFLET -->
    <link rel="stylesheet" href="assets/css/leaflet.css">
    <script src="assets/js/leaflet.js"></script>
    <script src="assets/js/leaflet-omnivore.min.js"></script>
</head>

<body class="bg-tinto">
    <!-- ENCABEZADO  -->
    <section>
        <div class="header_navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img class="d-block d-md-none" style="width:70vw" src="assets/images/logos_b.png" alt="Logo">
                                <img class="d-none d-md-block" style="width:35vw" src="assets/images/logos_b.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler text-white" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon bg-white"></span>
                                <span class="toggler-icon bg-white"></span>
                                <span class="toggler-icon bg-white"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#ubicacion">Ubicación</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#actividades">Actividades</a>
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
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div id="home" class="sec_inicio pb-120">
            <div class="mi-fluid vh-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-7 text-center text-lg-left">
                        <span class="text-white fs-36 negritas">Jornada Nacional de Reforestación y Restauración <b class="text-orange">2026</b></span>
                        <a href="" class="btn btn-success fs-20 mt-3"><i class="ti ti-edit mr-2"></i>Registrarme</a>
                        <span class="text-white mt-2 fs-28 negritas">Santiago Xalitzintla, Municipio de San Nicolás de los Ranchos <span class="text-orange">Puebla</span></span>
                    </div>
                    <div class="col-lg-5 text-center">
                        <h3 class="text-white">Fecha del evento</h3>
                        <h4 class="text-white"><i class="ti ti-calendar mr-2 fs-28"></i> <span class="text-orange">09 de Agosto del 2026</span></h4>
                        <div class="row d-none d-md-block">
                            <div class="col-xl-12 d-flex justify-content-center align-items-center">
                                <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                    data-wow-duration="1.3s" data-wow-delay="0.2s">
                                    <div class="counter_wrapper">
                                        <h2><i class="ti ti-seedling mt-1 text-white"></i></h2>
                                        <span class="counter">10,000</span>
                                        <p class="text-tinto">Planta</p>
                                    </div>
                                </div>
                                <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                    data-wow-duration="1.3s" data-wow-delay="0.2s">
                                    <div class="counter_wrapper">
                                        <h2><i class="ti ti-lasso-polygon text-white mt-1"></i></h2>
                                        <span class="counter">10</span>
                                        <p class="text-tinto mb-1">Hectáreas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- UBICACION -->
    <section id="ubicacion" class="destination_area pt-80 pb-120">
        <div class="section_title text-center pb-25 mi-fluid">
            <span class="fs-36 text-tinto negritas">Ubicación del predio</span>
            <p class="fs-28"><b class="text-success">Actividad:</b> Realizar una reforestación en la Comunidad de Santiago Xalitzintla, Municipio de San Nicolás de Los Ranchos, como parte de Plan de Reforestación 2026 del Gobierno del Estado, Implementado por la SMADSOT.</p>
            <hr>
        </div>
        <div class="row mt-1 mi-fluid">
            <div class="col-lg-5 text-right polaroid shadow pl-2 mt-2">
                <div id="map" style="height:350px;z-index:80;"></div>
            </div>
            <div class="col-lg-4 text-left mt-2" style="font-size:20px">
                <b class="text-success">Cantidad de árboles y especies a reforestar en el sitio:</b><br><br> 10,000 árboles de las siguientes especies:
                <br> <br>
                <ul>
                    <li>- 4,000 Ocote (Pinus montezumae)</li>
                    <li>- 4,000 Ocote chino (Pinus leiophylla)</li>
                    <li>- 1,000 Encino (Quecus laurina)</li>
                </ul>
                <br>
                <br>
                <span style="font-style:italic;">Cantidad de planta proyectada para entregar en la región: <b class="text-tinto">48,500</b></span>
            </div>
            <div class="col-lg-3 mt-2 text-center">
                <div id="miCarrusel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Imágenes -->
                    <div class="carousel-inner" syle="height:300px">
                        <?Php
                        echo generarCarrusel('assets/images/predio/');
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
                <a href="https://maps.app.goo.gl/nwsDZadB2b81rnsZ8" target="_blank"><button type="button" class="btn bg-tinto text-white mt-4"><i class="ti ti-route mr-2"></i>Ver ruta de llegada</button></a>
            </div>
        </div>
    </section>
    <!-- ACTIVIDADES -->
    <section id="actividades" class="about_area pt-80 pb-80 bg-secondary">

        <div class="text-center pb-25">
            <h3 class="title text-white">Actividades y/o obras de suelo realizadas en <span class="text-success">2026</span> por la CONAFOR a nivel nacional: estas actividades fortalecen la restauración forestal, la conservación del suelo y la captación de agua.</h3>
        </div>
        <div class="row mi-fluid">
            <div class="col-lg-12">
                <table class="table table-striped table-bordered shadow wow fadeInDown text-white fs-15" data-wow-duration="1.3s"
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
                <h4 class="text-white">Sitios de reforestación (<span class="text-success">11,250 ha</span>)</h4>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/images/mapa.png" class="img-fluid polaroid shadow-lg bg-gradient-superior rounded">
                    </div>
                    <div class="col-lg-6 mt-2">
                        <table class="table table-bordered table-striped shadow wow fadeInDown text-white fs-12" data-wow-duration="1.3s"
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
                                    <td class="text-right text-white">Km</td>
                                </tr>
                                <tr>
                                    <td>Brechas cortafuego</td>
                                    <td class="text-right negritas">307</td>
                                    <td class="text-right text-white">Km</td>
                                </tr>
                                <tr>
                                    <td>Roturación con maquinaria</td>
                                    <td class="text-right negritas">1,090</td>
                                    <td class="text-right text-white">Km</td>
                                </tr>
                                <tr>
                                    <td>Zanjas trinchera</td>
                                    <td class="text-right negritas">160</td>
                                    <td class="text-right text-white">Km</td>
                                </tr>
                                <tr>
                                    <td>Terrazas individuales</td>
                                    <td class="text-right negritas">643,000</td>
                                    <td class="text-right text-white">Piezas</td>
                                </tr>
                                <tr>
                                    <td>Rehabilitación de jagüeyes o bordos de almacenamiento de agua</td>
                                    <td class="text-right negritas">4,128</td>
                                    <td class="text-right text-white">m³</td>
                                </tr>
                                <tr>
                                    <td>Presas de gaviones, morillos, mampostería o piedra</td>
                                    <td class="text-right negritas">3,378</td>
                                    <td class="text-right">m³</td>
                                </tr>
                                <tr>
                                    <td>Prácticas de conservación de la biodiversidad</td>
                                    <td class="text-right negritas">270</td>
                                    <td class="text-right text-white">Piezas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- RECOMENDACIONES -->
    <section id="recomendacion" class="services_area pt-80 seccion-recomendaciones">
        <div class="mi-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_title text-center pb-25">
                        <h3 class="title text-secondary">Recomendaciones para visitantes</h3>
                        <hr>
                    </div>
                </div>
            </div>
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
        </div>
    </section>
    <!-- GALERIA DE IMAGENES -->
    <section id="galeria" class="team_area pt-100 vh-100">
        <div class="section_title text-center">
            <h3 class="title text-secondary">Galeria de imagenes</h3>
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
        </div>
    </section>
    <!-- REGISTRO -->
    <section id="registro" class="contact_area bg-secondary pt-80 pb-30">
        <div class="mi-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_title text-center pb-25">
                        <h3 class="title text-white">Registro</h3>
                        <hr style="background-color:white">
                        <p class="text-white fs-20">Agradecemos a todas las personas, comunidades, instituciones, dependencias y brigadas que participan en esta jornada de restauración forestal. Su participación contribuye al cuidado del medio ambiente y fortalece el compromiso comunitario </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#"><img src="assets/images/logos_b.png" alt="logo"></a>
                            <a target="_blank" class="btn btn-primary" href="https://www.facebook.com/CONAFOR.Central"><i class="ti ti-brand-facebook"></i></a>
                            <a target="_blank" class="btn btn-info" href="https://x.com/CONAFOR?lang=en"><i class="ti ti-brand-twitter"></i></a>
                            <a target="_blank" class="btn btn-danger" href="https://www.youtube.com/user/conaforgob"><i class="ti ti-brand-youtube"></i></a>
                        </div>
                        <div class="col-lg-12 mt-1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.31702024935!2d-103.45517780288507!3d20.69734738905311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428a92c72c16603%3A0x813b7aa2f8a8c846!2sCONAFOR!5e0!3m2!1ses-419!2smx!4v1784584324762!5m2!1ses-419!2smx" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-4">
                    <div class="contact_form">
                        <form action="assets/contact.php" method="POST" id="contact-form" class="wow zoomIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single_form">
                                        <input type="text" required name="name" id="name" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single_form">
                                        <select type="text" required name="sexo" id="sexo" placeholder="Sexo">
                                            <option value="">Selecciona</option>
                                            <option value="No definido">No definido</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-2">
                                    <div class="single_form">
                                        <input type="text" required name="edad" id="edad" placeholder="Edad">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single_form">
                                        <input type="tel" required name="phone" id="phone" placeholder="Teléfono">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single_form">
                                        <select name="etnia" class="form-control select2" required="">
                                            <option value="">Grupo de pertenencia</option>
                                            <option value="77">AFROMEXICANO</option>
                                            <option value="70">AMUZGOS</option>
                                            <option value="2">AMUZGOS DE OAXACA</option>
                                            <option value="4">CHATINOS</option>
                                            <option value="5">CHICHIMECOS JONAZ</option>
                                            <option value="6">CHINANTECOS</option>
                                            <option value="7">CHOCHOS O CHOCHOLTECAS</option>
                                            <option value="8">CHOLES</option>
                                            <option value="64">CHONTALES</option>
                                            <option value="9">CHONTALES DE LOS ALTOS DE OAXACA</option>
                                            <option value="10">CHONTALES DE TABASCO</option>
                                            <option value="58">COCHIMI</option>
                                            <option value="3">CORAS</option>
                                            <option value="59">CUCAPAS</option>
                                            <option value="72">CUICATECOS</option>
                                            <option value="73">CUICATECOS</option>
                                            <option value="11">GUARIJIOS</option>
                                            <option value="16">HIKAPUES</option>
                                            <option value="65">HUASTECOS</option>
                                            <option value="12">HUASTECOS DE SAN LUIS POTOSI</option>
                                            <option value="13">HUASTECOS DE VERACRUZ</option>
                                            <option value="14">HUAVES</option>
                                            <option value="15">HUICHOLES</option>
                                            <option value="57">KILIWAS</option>
                                            <option value="55">KUMIAI</option>
                                            <option value="17">LACANDONES</option>
                                            <option value="18">MAMES</option>
                                            <option value="19">MATLAZINCAS</option>
                                            <option value="71">MAYAS</option>
                                            <option value="20">MAYAS - PENINSULA DE YUCATAN</option>
                                            <option value="21">MAYOS</option>
                                            <option value="22">MAZAHUAS</option>
                                            <option value="23">MAZATECOS</option>
                                            <option value="24">MEXICANEROS</option>
                                            <option value="25">MIXES</option>
                                            <option value="26">MIXTECOS</option>
                                            <option value="27">MOCHOS O MOTOZINTLECOS</option>
                                            <option value="63">NAHUAS</option>
                                            <option value="28">NAHUAS DE GUERRERO</option>
                                            <option value="29">NAHUAS DE LA HUASTECA VERACRUZANA</option>
                                            <option value="32">NAHUAS DE LA SIERRA NORTE DE PUEBLA</option>
                                            <option value="30">NAHUAS DE MILPA ALTA</option>
                                            <option value="31">NAHUAS DE MORELOS</option>
                                            <option value="1">NINGUNA</option>
                                            <option value="62">OTOMIES</option>
                                            <option value="33">OTOMIES DEL ESTADO DE MEXICO</option>
                                            <option value="34">OTOMIES DEL VALLE DEL MEZQUITAL</option>
                                            <option value="56">PAI PAI</option>
                                            <option value="68">PAMES</option>
                                            <option value="35">PAMES DE QUERETARO</option>
                                            <option value="36">PAMES DE SAN LUIS POTOSI</option>
                                            <option value="37">PAPAGOS</option>
                                            <option value="38">PIMAS</option>
                                            <option value="39">POPOLUCAS</option>
                                            <option value="40">PUREPECHAS</option>
                                            <option value="78">QUICHÉ</option>
                                            <option value="75">RARAMURIS</option>
                                            <option value="41">SERIS</option>
                                            <option value="60">SIN ESPECIFICAR</option>
                                            <option value="42">TARAHUMARAS</option>
                                            <option value="66">TEPEHUANES</option>
                                            <option value="43">TEPEHUANES DEL NORTE</option>
                                            <option value="44">TEPEHUANES DEL SUR</option>
                                            <option value="45">TLAPANECOS</option>
                                            <option value="46">TOJOLABALES</option>
                                            <option value="47">TOTONACOS</option>
                                            <option value="48">TRIQUIS</option>
                                            <option value="49">TZOTZILES Y TZELTALES</option>
                                            <option value="74">WIXARIKA</option>
                                            <option value="50">YAQUIS</option>
                                            <option value="67">ZAPOTECOS</option>
                                            <option value="52">ZAPOTECOS DE LA SIERRA NORTE DE OAXACA</option>
                                            <option value="53">ZAPOTECOS DE LOS VALLES CENTRALES</option>
                                            <option value="51">ZAPOTECOS DEL ISTMO DE TEHUANTEPEC</option>
                                            <option value="69">ZOQUES</option>
                                            <option value="54">ZOQUES DE CHIAPAS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-4">
                                    <div class="single_form">
                                        <input type="email" required name="email" id="email" placeholder="Correo electrónico">
                                    </div>
                                </div>
                                <div class="col-lg-5">
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
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_form">
                                        <button type="button" class="btn bg-tinto text-white mt-1">Enviar registro</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row mt-4 text-justify">
                        <div class="col-lg-12 text-white fs-12" style="font-style:italic">
                            <span class="text-orange">Aviso de privacidad y consentimiento:</span> Los datos personales proporcionados en este formulario serán utilizados exclusivamente para el registro y control de asistencia a la actividad o evento correspondiente. La información será tratada de manera confidencial y conforme a la legislación aplicable en materia de protección de datos personales. Al enviar este formulario, usted manifiesta su consentimiento para el tratamiento de sus datos con la finalidad antes descrita.
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>


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
    <script src="assets/js/glightbox.min.js"></script>
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

        const initialCenter = [19.0783, -98.5592];
        const initialZoom = 15;

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
                button.innerHTML = '<i class="ti ti-home fs-20 mt-1"></i>';

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