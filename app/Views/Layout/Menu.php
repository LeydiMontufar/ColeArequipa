<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Colegio Ebenezer</title>
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
    <link href="<?php echo base_url ()  ?>/public/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url ()  ?>/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url ()  ?>/public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url ()  ?>/public/css/style.css" rel="stylesheet">
</head>

<body>
    


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0 ">
        <div class="container position-relative " style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-danger navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>EBENEZER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php echo base_url ()?>" class="nav-item nav-link active">Inicio</a>
                        <a href="<?php echo base_url ()  ?>/Nosotros" class="nav-item nav-link">Nosotros</a>
                        <a href="<?php echo base_url ()  ?>/Perfil" class="nav-item nav-link">Perfil</a>
                        <div class="nav-item dropdown">
                            <a href="<?php echo base_url ()  ?>/Espiritual" class="nav-link dropdown-toggle" data-toggle="dropdown">Espiritual</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="<?php echo base_url ()  ?>/Espiritual" class="dropdown-item">Tiempo con Dios</a>
                                <a href="<?php echo base_url ()  ?>/Espiritual" class="dropdown-item">Retiros</a>
                                <a href="<?php echo base_url ()  ?>/Espiritual" class="dropdown-item">Devocionales</a>
                            </div>
                        </div>
                        <a href="<?php echo base_url ()  ?>/Propuesta" class="nav-item nav-link">Propuesta</a>
                        <a href="<?php echo base_url ()  ?>/Adm" class="nav-item nav-link">Adm-2023</a>
                        <a href="<?php echo base_url ()  ?>/Contacto" class="nav-item nav-link">Contacto</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    

    <?= $this->renderSection('contenido') ?>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Ponerse en contacto</h4>
                <p><i class="fa fa-phone-alt mr-2"></i>951 349 794</p>
                <p><i class="fa fa-envelope mr-2"></i>ebenezeraqp@gmail.com</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Calle Melgar 512 – Cercado
                                                            Ref: media cuadra de la paz
                                                            Arequipa, Perú</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url ()  ?>/public/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url ()  ?>/public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url ()  ?>/public/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url ()  ?>/public/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo base_url ()  ?>/public/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo base_url ()  ?>/public/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url ()  ?>/public/js/main.js"></script>
</body>

</html>