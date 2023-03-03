<!DOCTYPE html>
<html lang="en">
<?php include('process/Store-Applicant-Information.php');?>
<head>
    <link rel="stylesheet" href="Sign-up.css">
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
    <link href="css/signp.css" rel="stylesheet">
</head>

<body style="background-image:url('img/Website Background.png');" id="signupbody">
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0" id="navbar">
        <a href="../Pages/Applicant-Dashboard.php" class="navbar-brand p-0" >
            <img class="w-100" src="img/Work-Global-Logo-small.png" alt="Image" id="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="../Pages/Applicant-Dashboard.php" class="nav-item nav-link active">Home</a>
                <a href="Job-Offer.php" class="nav-item nav-link">Job Offer</a>
                <a href="About-Us.php" class="nav-item nav-link">About</a> </div>
            <a href="login-applicant.php" class="btn btn-primary py-2 px-4 ms-3" id="loginbutton">Login Now!</a>
        </div>
    </nav>
    <!-- Navbar End -->
   


    <!-- Sign-up Start -->
    <!--First page(Personal Information)-->
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4" >
  <div id="firstPage" style="background-image:url('img/form background.png'); background-repeat: no-repeat; background-size: cover;">
    
  <form name="form" action="process/Store-Applicant-Information.php" enctype="multipart/form-data" method="post">
    <br><h1>Personal Information</h1>
    <!-- auto date insert -->
    <label>DatedFiled: </label><input type="text" name="datedfiled" id="date" disabled/>
    
    <!-- firstname text field -->
    <label id="labelfname">First Name: </label><input type="text" name="fname" id="fname" required placeholder="First Name" onkeydown="return /[a-z, ]/i.test(event.key)" />
    
    <!-- middle name text field-->
    <label id="labelmname">Middle Name: </label><input type="text" name="mname" id="mname" placeholder="Middle Name" onkeydown="return /[a-z, ]/i.test(event.key)" />
    
    <!-- last name text field-->
    <label id="labellname">Last Name: </label><input type="text" name="lname" id="lname" required placeholder="Last Name" onkeydown="return /[a-z, ]/i.test(event.key)" />
    
    <!-- suffix name text field-->
    <label id="labelsuffix">Suffix: </label><input type="text" name="suffix" id="suffix" placeholder="Ex. Jr., Sr., I, etc."onkeydown="return /[a-z, ,.]/i.test(event.key)" />
    
    <!-- birdth date date field -->
    <label id="labelbirthday">Birthday: </label><input type="date" name="bday" id="bday">
    
    <!-- age text field-->
    <label id="labelage">Age: </label><input id="age" name="age" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength = "3">
    
    <!-- gender radio button field-->
    <label>Gender: </label><input type="radio" id="male" value="Male" name="Gender" checked/><label>Male   </label><input id="female" type="radio" value="Female" name="Gender" /><label>Female</label><br><br>

    <!-- Civil Status radio button field-->
    <label>Civil Status: </label>
    <input type="radio" id="male" value="Single" name="CivilStatus" checked/><label>Single  </label>
    <input type="radio" id="male" value="Married" name="CivilStatus"/><label>Married   </label>
    <input id="female" type="radio" value="Widow" name="CivilStatus" /><label>Widow</label><br><br>
    
    <!-- Start permanent address -->
    <label>Permanent Address: </label><input type="text" name="paddress" id="paddress" placeholder="No. of House, Street, Barangay" required>
    <input type="text" name="paddresscity" id="paddresscity" placeholder="City" required><input type="text" name="paddressstate" id="paddressstate" placeholder="State/Province/Region" required>
    <label>Current Address: </label><button id="addresspaste">Same as Above</button><button id="clear">Clear</button><input type="text" name="caddress" id="caddress" placeholder="No. of House, Street, Barangay"required>
    <input type="text" name="caddresscity" id="caddresscity" placeholder="City" required><input type="text" name="caddressstate" id="caddressstate" placeholder="State/Province/Region" required>
    <!-- End permanent address -->
    
    <!-- Email text field-->
    <label>Email: </label><input type="text" name="email" id="email" placeholder="Email                             Example:smc2023@gmai.com"/>
    
    <!-- Contact text Field -->
    <label>Phone Number: Ex.: 09123456789 </label><input name="contact" id="contact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "11" required/>
    
    <!-- info for contact person-->
    <label>Name of Contact Person: </label>
    <input id="prscontactname" name="prscontactname" type="text" onkeydown="return /[a-z, ,.]/i.test(event.key)" required/>
    <label>Phone Number of Contact person: Ex.: 09123456789 </label>
    <input id="prscontact" name="prscontact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "11" required/>
  
  <!--End of Personal info-->

  <!--Start of Educational Attainment-->
    <br><h1>Educational Attainment</h1>
    <!---->
    <label>Primary Education: </label><input type="text" name="pedname" id="fname" placeholder="School/University"/>
    <input type="text" name="pedadd" id="fname" placeholder="Address"/>
    <!---->
    <label>Secondary Education: </label><input type="text" name="secedname" id="fname" placeholder="School/University"/>
    <input type="text" name="secedadd" id="fname" placeholder="Address"/>
    <!---->
    <label>Tertiary Education: </label><input type="text" name="tername" id="fname" placeholder="School/University"/>
    <input type="text" name="teradd" id="fname" placeholder="Address"/>
    <input type="text" name="course" id="fname" placeholder="Course"/>
    <label>Education Level: </label><input type="text" name="level" id="fname" placeholder="Elementary, High School, College Undergraduate, College Graduate"/>
    <br><h1>Skills/Talents</h1>
    <input type="text" name="Skill1" id="fname" />
    <input type="text" name="Skill2" id="fname" />
    <input type="text" name="Skill3" id="fname" />
    <input type="text" name="Skill4" id="fname" />
    <input type="text" name="Skill5" id="fname" />

<!--End of Educational Attainment-->
<!---->
  <h1>Other Information: </h1><br>
  <label>SSS Number:</label>
  <input type="text" name="sss" id="fname" placeholder="SSS Number"/>
  <label>TIN Number:</label>
  <input type="text" name="tin" id="fname" placeholder="TIN Number"/>
  <label>PhilHealth Number:</label>
  <input type="text" name="phn" id="fname" placeholder="PhilHealth Number"/>
  <label>PAG-IBIG Number:</label>
  <input type="text" name="pgin" id="fname" placeholder="PAG-IBIG Number"/>
  <label>NBI:</label>
  <input type="text" name="nbi" id="fname" placeholder="NBI"/>
  <label>Driver's Licence:</label>
  <input type="text" name="dl" id="fname" placeholder="Driver's Licence"/>
  <label>Upload Image File:</label>
  <input name="userImage" type="file" class="full-width" />
  <h1>Account Registration: </h1><br>

  <!-- account Registration Form -->
   <!-- Username text field -->
    <label>Username: </label><input type="text" name="username" id="username" required placeholder="Username" onkeydown="return /[a-z,a-z,0-9,@]/i.test(event.key)" />
    <br><br>
    <!-- Password text field-->
    <label>Password: </label><input type="Password" name="password" id="password" placeholder="Password:" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" />
    <label>Password Confirm: </label><input type="Password" name="confirm_password" id="confirm_password" placeholder="Password:" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" />
    <!--Show/hide Password-->
    <input type="checkbox" onclick="myFunction()"><label>Show Password</label>
  
<input type="submit" name="submit" style="background-color: #008CBA;
    border: none;
    color: white;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-bottom: 10px;"/></form>
  </div>
<!--toogle pages--></div></div></div></div></div></div><br><br><br>
    <!-- Sign-up End -->


   <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="../Pages/Applicant-Dashboard.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="About-Us.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light" href="Contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="../Pages/Applicant-Dashboard.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="About-Us.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light" href="Contact-Us.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Unit 1 Eden Townhomes 2001 Eden Street Corner, Pedro Gil St, Santa Ana, Manila, 1009 Metro Manila</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="js/signupform.js"></script>
    <script src="js/empform.js"></script>
    <script src="js/passwordvalid.js"></script>
    <script src="js/autotop-scroll.js"></script>
</body>

</html>