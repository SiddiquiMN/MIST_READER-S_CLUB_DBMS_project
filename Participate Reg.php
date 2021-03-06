<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MIST READER'S CLUB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style1.css">

  <!-- =======================================================
  * Template Name: Selecao - v4.7.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <img src="assets/img/MIST_Logo.png" alt="MIST_Logo" style="height: 200PX; width: 50PX;">
        <h1><a href="index.php">MIST Reader's Club</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Member Reg.php">Member Registration</a></li>
          <li><a class="nav-link scrollto" href="panel_member.php">Panel Members</a></li>
          <li><a class="nav-link scrollto " href="Event.php">Events</a></li>
          <li><a class="nav-link scrollto" href="Gallery.php">Gallery</a></li>
          <li><a class="nav-link scrollto" href="Contact.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="About.php">About</a></li>
          <li class="dropdown"><a href="#"><span>Log In</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Admin.php">Admin Log In</a></li>
              <li><a href="Student.php">Student Log In</a></li>
            </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  

 

  <main id="main" style="margin-top: 157px;">

    <form method="post" action="Participant.php" style="padding: 50px;">
      <div class="row">
          <h1 style="text-align: center; color: black; margin-bottom: 34px !important;">Participate Registration Form</h1>
          <div class="col">
              <input type="number" name="ID" class="form-control" placeholder="ID" aria-label="ID">
          </div>
          <div class="col">
              <input type="text"name="Name" class="form-control" placeholder="Name" aria-label="Name">
          </div>
      </div>
      <br> <br>
      <div class="row">
          <div class="col">
              <input type="text" name="Department" class="form-control" placeholder="Department" aria-label="Department">
          </div>
          <div class="col">
              <input type="text" name="Level" class="form-control" placeholder="Level" aria-label="Level">
          </div>
      </div>

      <br> <br>

      <div class="row">
          <div class="col">
              <input type="number" name="Phone_Number" class="form-control" placeholder="Phone Number" aria-label="Phone Number">
          </div>
          <div class="col">
              <input type="text" name="University_Name" class="form-control" placeholder="University Name" aria-label="University Name">
          </div>

          
      </div>

      <br> <br>
      <div class="row">
          <!-- <div class="col">
            <p style="color: black; text-align: center;"><b>Student Image</b></p>
              <input type="file" name="file" class="form-control" placeholder="Student image" aria-label="Student image">
              <div class="invalid-feedback">Example invalid form file feedback</div>
          </div>   -->
          <!-- <div class="col">
            <p style="color:black; text-align: center;"><b>University ID card Image</b></p>  
            <input type="file" name="Univesity_ID_card_Image" class="form-control" placeholder="Univesity ID card Image" aria-label="University ID card Image">
            <div class="invalid-feedback">Example invalid form file feedback</div>
          </div> -->
        </div>

        <br> <br>
    

      <div class="row1" style="margin-bottom: 0px;">
          <button class="button1" name="Save" type="submit" class="btn btn-primary">Submit</button>
      </div>


    </form>      

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MIST READERS CLUB</h3>
      <p>READ MORE BOOKS,WIDEN YOUR KNOWLEDGE</p>
      <div class="copyright">
        &copy; Copyright <strong><span>MIST READERS CLUB</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="#">MIST CSE DEPARTMENT</a>
      <!--</div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>