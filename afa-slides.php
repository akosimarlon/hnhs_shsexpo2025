<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SHS Expo 2025 - PAHA Cluster</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
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
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="index.html" class="navbar-brand">
                    <h2 class="text-white"><img class="img-fluid animated pulse infinite" src="img/PAHA Logo.png" width="225" height="35"></h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link text-warning">Home</a>
                        <a href="" class="nav-item nav-link text-warning">About</a>                                                
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Immersion</a>
                            <div class="dropdown-menu bg-light mt-2 text-warning">
                                <a href="als-slides.php" class="dropdown-item">ALS</a>                                
                                <a href="he-slides.php" class="dropdown-item">HE</a>
                                <a href="eim-slides.php" class="dropdown-item">EIM</a>
                                <a href="ict-slides.php" class="dropdown-item">ICT</a>
                                <a href="afa-slides.php" class="dropdown-item active">AFA</a>
                                <a href="smaw-slides.php" class="dropdown-item">SMAW</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-warning" data-bs-toggle="dropdown">Strands</a>
                            <div class="dropdown-menu bg-light mt-2 text-warning">
                                <a href="stem.php" class="dropdown-item">STEM</a>                                
                                <a href="abm.php" class="dropdown-item">ABM</a>
                                <a href="humss.php" class="dropdown-item">HUMSS</a>
                                <a href="afa.php" class="dropdown-item">AFA</a>
                                <a href="he.php" class="dropdown-item">HE</a>
                                <a href="ia.php" class="dropdown-item">IA</a>
                                <a href="ict.php" class="dropdown-item">ICT</a>
                            </div>
                        </div>
                        <a href="schools.html" class="nav-item nav-link text-warning">Schools</a>
                    </div>                    
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary hero-header mb-0">
        <div class="container text-white py-0">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                 <h1 class="text-white mb-3">What We Do </h1> <!--<span class="fw-light text-dark">About Our Natural Shampoo</span> -->
                <!-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p> -->
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        <?php
                            include("afa-slides-photos.php");
                        ?>
                        <!-- <div class="testimonial-item text-center" data-dot="1">
                            <img class="img-fluid border p-2" src="img/testimonial-1.jpg" alt="">
                            <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                            <h5 class="mb-1">Client Name</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                        </div>
                        <div class="testimonial-item text-center" data-dot="2">
                            <img class="img-fluid border p-2" src="img/testimonial-2.jpg" alt="">
                            <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                            <h5 class="mb-1">Client Name</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                        </div>
                        <div class="testimonial-item text-center" data-dot="3">
                            <img class="img-fluid border p-2" src="img/testimonial-3.jpg" alt="">
                            <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                            <h5 class="mb-1">Client Name</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
      

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>