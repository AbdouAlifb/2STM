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
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
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
        <h1 class="text-white m-0">2STM</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link">Accueil</a>
            <a href="{{ route('about') }}" class="nav-item nav-link active">À propos</a>
            <a href="{{ route('activities') }}" class="nav-item nav-link">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="#" class="dropdown-item">Projets</a>
                    <a href="#" class="dropdown-item">Fonctionnalités</a>
                    <a href="#" class="dropdown-item">Notre équipe</a>
                    <a href="#" class="dropdown-item">Témoignages</a>
                    <a href="#" class="dropdown-item">Page 404</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="#" class="btn btn-primary px-3 d-none d-lg-block">Obtenir un devis</a>
    </div>
</nav>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">À propos</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">À propos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Qui sommes-nous ?</p>
                    <h1 class="display-5 mb-4">Nous sommes leaders sur le marché industriel</h1>
                    <p class="mb-4"  style="text-align: justify;">
                    Installée à Marrakech, 2STM (Société Solutions Les Travaux Mécaniques)
est une entreprise industrielle de maintenance, de réparation et d'usinage fondée
il y a près de 25 ans par Mohamed BOUJGHAD.

2STM est spécialisée dans la réparation, l'usinage de petites séries et la
soudure, l'entreprise charentaise travaille avec tous types d'aciers et de matières
plastiques. Les réparations et aménagements de machines proposés par SI leur
permettent l'élaboration de nouveaux matériaux.

L'entreprise est par ailleurs dotée de nombreuses machines : Une
rectifieuse cylindrique, quatre tours et trois fraiseuses " traditionnelles"... pour
répondre à des demandes très diverses de nombreuses entreprises.

Développant son offre dans la maintenance extérieure, 2STM propose des
solutions clé en main, couvrant le ciblage de la panne, sa réparation et la
réinstallation de la machine. Ce service permet aux clients de l'entreprise de
n'avoir qu'un seul interlocuteur pour leurs projets.

L'entreprise dispose d'un stock important de matières premières, d'un parc
de véhicule autonome et d'un réel savoir-faire, porté par des salariés fidèles,
comptant en moyenne plus de 25 ans d'ancienneté dans l'entreprise.

Les projets des clients de 2STM donnent lieu à de véritables échanges où
les difficultés se règlent " autour d'une table " et où chacun se remet en question
de façon permanente afin d'aider l'entreprise à progresser et évoluer. 
Avec le développement des technologies, SI a étendu son activité bien au-delà
de la Charente. Le transport n'étant plus une contrainte, 2STM intervient tant en
Marrakech et tous les régions Marocaines pour de grandes entreprises de tout
secteur. 
Les clients de 2STM sont d'ailleurs très éclectiques, allant des TPE aux
acteurs emblématiques de l'industrie, couvrant des secteurs aussi variés que
l'imprimerie, l'agro-alimentaire, le BTP ou les entreprises de matériel agricole.

2STM précise n'avoir que des retours positifs avec sa clientèle qui
propose chaque jour de nouveaux défis à relever pour son équipe.

2STM compte aujourd'hui plus de 15 collaborateurs, peut se targuer d'un
chiffre d'affaires en progression constante.
L'état esprit d'entrepreneur de l'entreprise a et ses perspectives de
développement dans un secteur en perpétuelle évolution mais toujours empreint
de savoir-faire artisanal.

Notre entreprise est toujours dans un d’esprit d'entrepreneur de création des
stratégies, des perspectives de développement, et formation continue soit court
terme moyenne terme et long terme pour l'avenir sereinement, et satisfaction des
clients.

Dans un secteur qui est plein des concurrences et toujours d’évolution
Notre objectif votre satisfaction

Notre slogan <strong> « Nous ne sommes pas seuls mais nous sommes les meilleurs dans
le secteur »</strong>
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">25</h1>
                            <h5 class="text-white">Années d'</h5>
                            <h5 class="text-white">Expérience</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Maintenance</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Mécanique</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Soudeur</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Fraisage</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Tournage</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Flexible et Garniture</p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Envoyez-nous un email</p>
                                    <h5 class="mb-0">contact@2stm-maroc.com</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Appelez-nous</p>
                                    <h5 class="mb-0">08 08 57 57 21</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">25</h1>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">135</h1>
                    <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">957</h1>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">1839</h1>
                    <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Notre Bureau</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Avenue Al Mouqaouama, Hay El Hassani Douar Sidi M'barek N°6 - Marrakech</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 661 34 24 06 / +212 661 20 95 13</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@2stm-maroc.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://web.facebook.com/solutions.industrielles.maroc"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Liens Rapides</h5>
                        <a class="btn btn-link" href="{{ route('about') }}">À Propos De Nous</a>
                        <a class="btn btn-link" href="{{ route('contact') }}">Contactez-Nous</a>
                        <a class="btn btn-link" href="{{ route('activities') }}">Nos Services</a>
                        <a class="btn btn-link" href="">Termes & Conditions</a>
                        <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Heures d'Ouverture</h5>
                        <p class="mb-1">Lundi - Vendredi</p>
                        <h6 class="text-light">09:00 - 19:00</h6>
                        <p class="mb-1">Samedi</p>
                        <h6 class="text-light">09:00 - 12:00</h6>
                        <p class="mb-1">Dimanche</p>
                        <h6 class="text-light">Fermé</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Inscription Email </h5>
                    <p></p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>, All Right Reserved.
            </p>
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <p class="mb-0">Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a> Distributed
                By: <a href="https://themewagon.com">ThemeWagon</a> </p>
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