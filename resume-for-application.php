<!DOCTYPE html>
<html lang="en">
<?php include('process/Employer-auth.php');?>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/view.css" rel="stylesheet">
</head>

<body style="background-image:url('img/Website Background.png'); background-size: cover;">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="Employer-dashboard.php" class="navbar-brand p-0">
            <img class="w-100" src="img/Work-Global-Logo-small.png" alt="Image" id="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="Employer-dashboard.php" class="nav-item nav-link active">Home</a>
                <a href="job-offer-post.php" class="nav-item nav-link">Post</a>
                <a href="listofapplication.php" class="nav-item nav-link">List of Application</a>
                <div class="dropdown">
                <button class="dropbtn"><img src="img/settings.png" id="settingimage">Setting</button>
                <div class="dropdown-content">
                <a href="#">profile</a>
                <a href="#">Account</a>
                <a href="process/logout-Employer.php" class="nav-item nav-link">Logout</a>
                </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- content Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="printMe">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <div id="resumePage">
                        <link href="css/style.css" rel="stylesheet">
                        <link href="css/view.css" rel="stylesheet">
                        <br>
                        <?php include('process/viewinfo.php');?>
                        <?php include('process/viewinfo2.php');?>
                        <?php include('process/viewinfo3.php');?>
                        <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="printDiv('printMe')">Print only the above div</button>
   <!--button onclick="printDiv('resumePage','Title')">print div</button-->
    <!-- Content End -->
    <!-- Footer Start -->
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Work Global brought to you by SMC</a> © 2022. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/printing-resume.js"></script>
</body>

</html>