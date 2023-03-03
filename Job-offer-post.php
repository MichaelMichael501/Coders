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
    <link href="css/content.css" rel="stylesheet">
    <link href="css/upload.css" rel="stylesheet">
</head>

<body>
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
                <a href="../Pages/Edit-Employer-Profile.php">profile</a>
                <a href="process/logout-Employer.php" class="nav-item nav-link">Logout</a>
                </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- content Start -->
    <!--photo uplaod-->
  
    <form name="form" action="process/Store-of-Job-Offer.php" enctype="multipart/form-data" method="post">
        <h4 id="jobtitletext">Job Title: </h4>
 <input type="text" id="jobtitle" name="jobtitle"/>
 <h4 id="jobpositiontitle">Position: </h4>
 <input type="text" id="jobpositionval" name="jobpositionval" onkeydown="return /[a-z, ]/i.test(event.key)">
 <h4 id="jobDescription">Job Description: </h4>
 <textarea cols="40" rows="10" id="jobDescriptiontext" name="jobDescriptiontext" onkeydown="return /[a-z, ]/i.test(event.key)">
     <?php echo $comments=""; ?>
 </textarea>
 <h4 id="Requirmentstext">Requirments: </h4>
 <textarea cols="40" rows="10" id="Requirments" name="Requirments" onInput="handleInput(event)" onkeydown="return /[a-z, ]/i.test(event.key)">
 <?php echo $comments1=""; ?>
 </textarea>
    <div class="image-upload-wrap" id='image1'>
    <input class="file-upload-input"  name="userImage" type='file' onchange="readURL(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add Image</h3>
    </div>
  </div>
  <div class="file-upload-content" id='image1'>
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
 
  <input type="submit" id="postJO" name="Submit" value="Post">
</form>
    <!-- Content End -->
    
    <!-- Footer Start -->
    <div class="container-fluid text-light py-4" style="background: #051225;" id="footerjo">
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
    <script src="js/post.js"></script>
    <script src="js/upload.js"></script>
</body>

</html>