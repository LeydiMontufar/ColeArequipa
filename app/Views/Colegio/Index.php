<?= $this->extend('Layout/Menu')?>
<?= $this->section('contenido')?>
<br>
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo base_url ()  ?>/public/img/ebenezer2.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">COLEGIO EBENEZER</h4>
                            <h3 class="display-3 text-white mb-md-4">Inicial, Primaria, Secundaria</h3>
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Con Cristo rumbo a la excelencia.</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url ()  ?>/public/img/ebenezer2.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">COLEGIO EBENEZER</h4>
                            <h3 class="display-3 text-white mb-md-4">Inicial, Primaria, Secundaria</h3>
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Con Cristo rumbo a la excelencia.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
<!-- celular gmail.ctc -->
<div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>DIRECCION</h5>
                            <p class="m-0">Calle Melgar 512 – Cercado</p>
                            <p class="m-0">Ref: media cuadra de la paz</p>
                            <p class="m-0">Arequipa, Perú</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>CORREO</h5>
                            <p class="m-0">ebenezeraqp@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>TELEFONO</h5>
                            <p class="m-0">951 349 794</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- docentes calificados -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h1 class="mb-4 section-title">NUESTRA PLANA DOCENTE CALIFICADA</h1>
                    <p class="mb-4">“Nuestros profesores son agentes claves en el proceso educativo, son ellos, quienes materializan en cada una de sus clases, asesorías y relación con nuestros estudiantes. La fuerza de su ejemplo y experiencia, combinada con la aplicación de nuestra metodología de enseñanza, facilitan y acompañan al estudiante, en su proceso de aprendizaje.”</p>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="<?php echo base_url ()  ?>/public/img/historia1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Projects Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3"></h6>
                    <h1 class="mb-4">COLEGIO EBENEZER</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">colegio</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">colegio</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">colegio</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">colegio</li>
                    </ul>
                </div>
            </div>
            <div class="row mx-1 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php echo base_url ()  ?>/public/img/inicial1.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">EBENEZER</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php echo base_url ()  ?>/public/img/inicial2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php echo base_url ()  ?>/public/img/inicial3.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">EBENEZER</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php echo base_url ()  ?>/public/img/ebenezer5.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php echo base_url ()  ?>/public/img/inicial4.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">EBENEZERe</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php echo base_url ()  ?>/public/img/inicial4.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php echo base_url ()  ?>/public/img/inicial3.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">EBENEZER</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php echo base_url ()  ?>/public/img/inicial2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php echo base_url ()  ?>/public/img/ebenezer5.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">EBENEZER</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php echo base_url ()  ?>/public/img/inicial1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php echo base_url ()  ?>/public/img/ebenezer4.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">EBENEZER</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php echo base_url ()  ?>/public/img/ebenezer4.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white font-weight-normal text-uppercase mb-3"></h6>
                        <h1 class="mb-0 text-center">CALENDARIO</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                    <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo base_url ()  ?>/public/img/elecciones.jpg" alt="">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">LUNES, JULIO 5</h5>
                                <p class="m-0">Student Body Elections</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo base_url ()  ?>/public/img/reunion.jpg" alt="">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">JUEVES, JULIO 18</h5>
                                <p class="m-0">Student Chess Tournament</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo base_url ()  ?>/public/img/ajedrez.jpg" alt="">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">VIERNES, AGOSTO 1</h5>
                                <p class="m-0">August PTA Meetingn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">---------------------</h6>
                    <h1 class="mb-4">ACERCA DE NOSOTROS</h1>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php echo base_url ()  ?>/public/img/ebenezer4.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">INICIAL</h5>
                            </div>
                            <p>Promueve la expresión oral en los infantes a través de las diferentes actividades; las cuales les permita procesar y producir el conocimiento.</p>
                            <p>Los docentes trabajan en forma permanente los procesos tales como la observación, diferenciación y descripción.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php echo base_url ()  ?>/public/img/Colegio1.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">PRIMARIA</h5>
                            </div>
                            <p>La Educación en este modelo se realiza dentro de las actividades curriculares, mediante estrategias que permite medir habilidades de pensamiento, evaluadas según cierto criterio. Se aplica en estudiantes de educación infantil y primaria. Así el proyecto SPECTRUM desarrollado para niños de Educación infantil, examina 7 campos cognitivos distintos:</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php echo base_url ()  ?>/public/img/descarga.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">SECUNDARIA</h5>
                            </div>
                            <p>Buscamos que los aprendizajes tengan una relación directa con la vida cotidiana de nuestros estudiantes, donde ellos tengan oportunidad de construir sus propios aprendizajes a través de la experiencia. Por ello se brinda espacios para realizar proyectos de investigación fuera del aula. Los docentes utilizan metodología activa en aulas interactivas con el uso de nueva tecnología.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

<?= $this->endSection()?>