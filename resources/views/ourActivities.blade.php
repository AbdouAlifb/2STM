<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>2ASTM-MAROC</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/660845a3a0c6737bd126858d/1hq859hct';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Suivez-nous:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Appelez-nous :</span>
                    <span class="fs-5 fw-bold">08 08 57 57 21</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
            <a href="{{ route('home') }}" class="navbar-brand ps-5 me-0">
            <img src="/img/logo.png" alt="2STM Logo" style="height: 70px;"> <!-- Adjust the height as necessary -->
            <!-- <h1 class="text-white m-0">2STM</h1> -->
        </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link">Accueil</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">À propos</a>
            <a href="{{ route('activities') }}" class="nav-item nav-link  active">Services</a>
           
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <!-- <a href="#" class="btn btn-primary px-3 d-none d-lg-block">Obtenir un devis</a> -->
    </div>
</nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item active"  aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase  mb-2" style="color : #6f6966 ;">NOS SERVICES</p>
                <h1 class="display-5 mb-4">Nous fournissons les meilleurs services industriels</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <img class="img-fluid" src="img/hydro1.jpg" alt="">
                            <div class="service-img">
                                <img class="img-fluid" src="img/hydro1.jpg" alt="">
                            </div>
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25">
                                    <h3 class="mb-0">HYDROMECANIQUE</h3>
                                    <hr class="w-25">
                                </div>
                                <div class="service-text">
                                    <p class="text-white mb-0">Notre équipe vous propose un service de soudure avec plusieurs postes de 
                                        soudure ce qui nous permet d'intervenir aussi bien dans notre atelier que chez vous..</p>
                                </div>
                            </div>
                            <a class="btn btn-light" href="{{ route('hydromecanique') }}">En savoir plus</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/mecaniqueA.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/mecaniqueA.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">MÉCANIQUE</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Notre équipe  propose une offre mécanique complète.
                                Ensembles mécaniques, moto réducteurs, pompes, vannes, transmission, vérins, sont
                                quelques exemples des interventions mécaniques que nous effectuons.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ route('mecanique') }}">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/maintenanceA.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/maintenanceA.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">MAINTENANCE</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">
                                Que ce soit une maintenance préventive ou corrective, de niveau 1 à 5,

Notre équipe mobilise ses équipes afin de satisfaire vos demandes.
Tourneurs, fraiseurs, mécaniciens, électriciens, chaudronniers, soudeurs, tous nos techniciens sont sensibilisées
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ route('maintenance') }}">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/tournageA.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/tournageA.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">TOURNAGE</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Grâce à une équipe qualifiée et disponible, 
                                    nous mettrons en œuvre tout ce qui sera nécessaire pour répondre au mieux à vos demandes et besoins dans les meilleurs délais.
Equipè de 4 tours, capacité du 3 mètres jusque 6 mètres d'entre pointe.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ route('tournage') }}">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/fraisageA.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/fraisageA.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">FRAISAGE</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">
                                Fort d'un personnel qualifié et disponible, équipé de 3 fraiseuses.
                                Notre rapidité et la grande diversité de notre clientèle</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ route('fraisage') }}">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/soudeurA.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/soudeurA.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">SOUDURE</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Notre équipe vous propose un service de soudure avec plusieurs postes de 
                                    soudure ce qui nous permet d'intervenir aussi bien dans notre atelier que chez vous..</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ route('soudure') }}">En savoir plus</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/garnitureA.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/garnitureA.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">FLEXIBLE ET GARNITURE</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">
                                Atelier 2STM est équipé pour assurer le service de 
                                fabrication et réparation de flexible sur mesure et garniture de frein Embrayage.
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ route('garniture') }}">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/magazinA.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/magazinA.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">PIÈCES DE RECHANGE</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">
                                2STM assure une maintenance rapide avec un service spécialisé en pièces de rechange, répondant immédiatement aux besoins de tous nos clients.
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ route('magazin') }}">En savoir plus</a>
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Notre Bureau</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Avenue Al Mouqaouama, Hay El Hassani Douar Sidi M'barek N°6 - Marrakech</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 661 34 24 06 / +212 661 20 95 13</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@2stm-maroc.com / 2stm.maroc@gmail.com</p>
                    <div class="d-flex pt-3">
                    
                        <a class="btn btn-square   rounded-circle me-2" style="background-color : #9F9E9F ;" color="white" href="https://web.facebook.com/solutions.industrielles.maroc"><i
                                class="fab fa-facebook-f"></i></a>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Liens Rapides</h5>
                        <a class="btn btn-link" href="{{ route('about') }}">À Propos De Nous</a>
                        <a class="btn btn-link" href="{{ route('contact') }}">Contactez-Nous</a>
                        <a class="btn btn-link" href="{{ route('activities') }}">Nos Services</a>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Heures d'Ouverture</h5>
                        <p class="mb-1">Lundi - Samedi</p>
                        <h6 class="text-light">08:00 - 19:00</h6>
                        <p class="mb-1">Dimanche (Equipe permanante ) </p>
                        <h6 class="text-light">09:00 - 19:00</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Logo  </h5>
                    <p></p>
                    <div class="position-relative w-100">
                       <img src="img/logo2.jpeg" width="250px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4" >
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="https://2stm-maroc.com/">2STM-MAROC</a>, All Right Reserved.
            </p>
          
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>