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

    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        h1 {
        text-align: center;
        padding: 20px;
        }

        .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        padding: 0 15px;
        }

        .gallery-item {
        position: relative;
        width: calc(25% - 20px);
        height: auto;
        margin: 10px;
        cursor: pointer;
        transition: transform 0.5s ease;
        }

        .gallery-item:hover {
        transform: scale(1.1);
        }

        /* The Modal (background) */
        .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;
        transition: opacity 0.5s ease;
        }

        /* Modal content (image) */
        .modal-content {
        position: relative;
        width: 90%;
        height: auto;
        max-width: 90%;
        max-height: 90%;
        border-radius: 5px;
        overflow: hidden;
        animation: zoomIn 0.5s;
        }

        @keyframes zoomIn {
        from {transform: scale(0.6);}
        to {transform: scale(1);}
        }

        .modal.show {
        display: flex;
        opacity: 1;
        }

        /* Close button */
        .close {
        position: absolute;
        top: 10px;
        right: 15px;
        color: #ffffff;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.3s;
        }

        /* Caption of modal image */
        .caption {
        position: absolute;
        bottom: 15px;
        width: 100%;
        text-align: center;
        color: #ffffff;
        font-size: 24px;
        }

        @media screen and (max-width: 768px) {
        .gallery-item {
            width: calc(50% - 20px);
        }
        }

        @media screen and (max-width: 480px) {
        .gallery-item {
            width: calc(100% - 20px);
        }
        }
    </style>


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
                            <a href="#" class="nav-link dropdown-toggle text-warning" data-bs-toggle="dropdown">Immersion</a>
                            <div class="dropdown-menu bg-light mt-2 text-warning">
                                <a href="als-slides.php" class="dropdown-item">ALS</a>                                
                                <a href="he-slides.php" class="dropdown-item">HE</a>
                                <a href="eim-slides.php" class="dropdown-item">EIM</a>
                                <a href="ict-slides.php" class="dropdown-item">ICT</a>
                                <a href="afa-slides.php" class="dropdown-item">AFA</a>
                                <a href="smaw-slides.php" class="dropdown-item">SMAW</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Strands</a>
                            <div class="dropdown-menu bg-light mt-2 text-warning">
                                <a href="stem.php" class="dropdown-item active">STEM</a>                                
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


    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown"><span class="text-warning">STEM</span></h1>
            <h3 class="text-white mb-1 animated slideInDown">Science, Technology, Engineering, and Mathematics</h3>
            <nav aria-label="breadcrumb">
                
                <!-- <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Features</li>
                </ol> -->
            </nav>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Feature Start -->
    <div class="container-fluid py-1">
        <div class="container">
            <div class="row g-4">

                <div class="gallery">
                    <img src="img/blog-1.jpg" alt="Cinque Terre" class="gallery-item" onclick="openModal('modal1', 'Cinque Terre')">
                    <img src="img/blog-2.jpg" alt="Forest" class="gallery-item" onclick="openModal('modal2', 'Forest')">
                    <img src="img/blog-3.jpg" alt="Northern Lights" class="gallery-item" onclick="openModal('modal3', 'Nothern Lights')">
                    <img src="img/blog-1.jpg" alt="Mountains" class="gallery-item" onclick="openModal('modal4', 'Mountains')">
                </div>

                <div id="modal1" class="modal">
                    <span class="close" onclick="closeModal('modal1')">&times;</span>
                    <img src="img/blog-1.jpg" alt="Cinque Terre" class="modal-content">
                    <div class="caption"></div>
                </div>

                <div id="modal2" class="modal">
                    <span class="close" onclick="closeModal('modal2')">&times;</span>
                    <img src="img/blog-2.jpg" alt="Forest" class="modal-content">
                    <div class="caption"></div>
                </div>

                <div id="modal3" class="modal">
                    <span class="close" onclick="closeModal('modal3')">&times;</span>
                    <img src="img/blog-3.jpg" alt="Northern Lights" class="modal-content">
                    <div class="caption"></div>
                </div>

                <div id="modal4" class="modal">
                    <span class="close" onclick="closeModal('modal4')">&times;</span>
                    <img src="img/blog-1.jpg" alt="Mountains" class="modal-content">
                    <div class="caption"></div>
                </div>


            </div>
        </div>
    </div>
    <!-- Feature End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function openModal(modalId, caption) {
        let modal = document.getElementById(modalId);
        modal.style.display = "flex";
        modal.classList.add("show");
        let message = modal.querySelector(".caption");
        message.innerText = caption;
        }

        function closeModal(modalId) {
        let modal = document.getElementById(modalId);
        modal.classList.remove("show");
        setTimeout(function () {
            modal.style.display = "none";
            modal.querySelector(".caption").innerText = "";
        }, 300);
        }
    </script>
</body>

</html>