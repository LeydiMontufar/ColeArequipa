<?= $this->extend('Layout/Menu')?>
<?= $this->section('contenido')?>

<br>
<div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">AREA ESPIRITUAL</h1>
                    <h3 class="display-3 text-white mb-md-4">Area espiritual</h3>
                    <p class="m-0">El Colegio Ebenezer, como parte del plan de formación integral, realiza las actividades espirituales en bien de la formación de nuestros estudiantes acorde con el desarrollo del niño y del adolescente.</p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Esporitual</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">--------</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- datos -->
 <!-- Blog Start -->
 <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
            </div>
            <div class="row pb-3">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/blog-1.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">DEVOCIONALES</h5>
                            </div>
                            <p>Cada día se comparte en el aula por 5 minutos con los estudiantes un texto bíblico con enseñanzas para la aplicación en nuestro diario vivir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/blog-2.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">TIEMPO CON DIOS</h5>
                            </div>
                            <p>Tiempo de escuchar la Palabra de Dios y su propósito para nuestra vida, una vez por semana en todos los niveles con metodología de acuerdo a la edad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/blog-3.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">RETIROS</h5>
                            </div>
                            <p>Son espacios donde el equipo espiritual tiene la oportunidad de tratar diversos temas de formación humana y cristiana en un ambiente más informal que propicie la confianza necesaria para poder orientar a los estudiantes.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

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




<?= $this->endSection()?>
