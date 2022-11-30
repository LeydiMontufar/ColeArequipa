<?= $this->extend('Layout/Menu')?>
<?= $this->section('contenido')?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url ()  ?>/public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <br>
    

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">ACERCA DE</h4>
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Nuestra Escuela</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Inicio</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">----</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->

    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">COLEGIO DE CIENCIAS EBENEZER</h6>
                    <h1 class="mb-4 section-title">RESEÑA HISTÓRICA</h1>
                    <p class="mb-4">La I.E. Cristiana de ciencias Ebenezer fue creada con la finalidad de dar una educación de alta calidad con enseñanza intensiva de los valores cristianos el cual llevaría un nombre que armonizara con el perfil ideal de personalidades transformadas por el poder de Dios; que demuestren gratitud a El.
La I.E. toma el nombre de “EBENEZER” en gratitud y testimonio de lo que Dios ha hecho con esta obra de servicio educativo.Según la historia en el antiguo testamento, cuando el pueblo de Israel se encontró rodeado de enemigos poderosos, el pueblo rogó al juez Samuel que orará fervientemente a Dios pidiendo su protección porque ya estaba rodeado. Samuel clamó al Dios todopoderoso y Dios escucho el clamor y salvo milagrosamente a su pueblo. Entonces, Samuel levanto una piedra y en gratitud a Dios la llamo EBENEZER, que significa: “Hasta aquí nos ayudo Dios”.

</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">Nosotros</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="<?php echo base_url ()  ?>/public/img/historia1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


   


    <!-- Features Start -->
    
    <!-- mision -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="<?php echo base_url ()  ?>/public/img/mision.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h1 class="mb-4 section-title">NUESTRA MISIÓN</h1>
                    <p class="mb-4">GARANTIZAMOS UNA FORMACIÓN INTEGRAL A LOS ESTUDIANTES
con docentes actualizados e innovadores, comprometidos con la excelencia de nuestros estudiantes, evidenciando interés por la investigación de su entorno desarrollando el pensamiento crítico, desarrollando sus múltiples habilidades; fortaleciendo su identidad, con temor a Dios, manteniendo valor y firmeza frente a los desafíos de esta época, logrando así el éxito como persona.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h1 class="mb-4 section-title">NUESTRA VISIÓN</h1>
                    <p class="mb-4">Ser una Institución Educativa Cristiana de calidad, que desarrolla al máximo el potencial del os estudiantes en su habilidades físicas, intelectuales con valores éticos y morales; fortaleciendo su liderazgo siendo capaces de plantear soluciones a los problemas que les tocará vivir.</p>
                    
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="<?php echo base_url ()  ?>/public/img/vision.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                        <h1 class="mb-0 text-center">VALORES</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                    <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo base_url ()  ?>/public/img/solidaridad.jpg" alt="">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">SOLIDARIDAD</h5>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo base_url ()  ?>/public/img/honestidad.jpg" alt="">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">HONESTIDAD</h5>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo base_url ()  ?>/public/img/respeto.png" alt="">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">RESPETO</h5>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo base_url ()  ?>/public/img/responsabilidad.jpg" alt="">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">RESPONSABILIDAD</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



<?= $this->endSection()?>