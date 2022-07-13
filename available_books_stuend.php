
<!--Student login korle ei page e jabe -->

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
          <li><a class="nav-link scrollto active" href="student_index.php">Welcome</a></li>
          
          <li><a class="nav-link scrollto" href="student_profile.php">Profile</a></li>
          <li><a class="nav-link scrollto " href="demand_books.php">Demand Books</a></li>
          <li><a class="nav-link scrollto" href="available_books_stuend.php">Available Books</a></li>
          <li><a class="nav-link scrollto" href="Student.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!--available books start-->
  <main id="main" style="margin-top: 157px;">
  <br>
  <h2 style="color:black; text-align:center;">Available Books Details</h2>
  <br>

  <table class="table">
      <thead>
        <tr align="center">
          <th scope="col">ISBN_NO</th> 
          <th scope="col">Book Title</th>
          <th scope="col">Publisher</th>
          <th scope="col">Edition</th>  
          <th scope="col">GENRE</th>    
        </tr>
      </thead>
    <tbody class="table-group-divider">
      
        <?php

          // Connects to the XE service (i.e. database) on the "localhost" machine


          /* PHP CONNECT ER SOMOY ORACLE ER WORKSTATION E LOG IN ER JNNE JE USER R PASSWORD DEI SETA EKHANE DIBO. ONNO KONO USER, PASS NA */
          /* EX:  amr workstation user: DBMS_PROJECT  &  pass: 1234. */

          $conn = oci_connect("MALIHA25","202014025","localhost/XE");
          if (!$conn) {
              $e = oci_error();
              trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
          }

          $stid = oci_parse($conn, 'SELECT ISBN_NO,Title,PUBLISHER,BOOK_EDITION,GENRE FROM Books WHERE Std_ID IS  NULL');
          oci_execute($stid);


          while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
              echo "<tr align='center'>\n";
              foreach ($row as $item) {
                  echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
              }
              echo "</tr>\n";
          }

        ?>


    </tbody>
  </table>
  <br>

  </main>


  <!--available books end-->


 

  <main id="main" style="margin-top: 157px;">

    <!--<p style="color: white;">Available Books page</p>-->

    <h4 style="color: white; text-align:center;">If you have any demand regarding books please fill up the form attached below!</h4>
    <br>
    
    <form method="post" action="demand_book_form.php" style="padding: 50px;">
      
      <div class="row">
            <h5 style="text-align: center; color: black; margin-bottom: 34px !important;">***All the boxes should be filled up correctly***</h5>
            
        <div class="row">
            <div class="col">
                <input type="text" name="Book_Title" class="form-control" placeholder="Name of the Book" aria-label="Book_Title">
            </div>

            <div class="col">
                <input type="text" name="ISBN_No" class="form-control" placeholder="ISBN No" aria-label="ISBN No">
            </div>
        </div>   

        <br> <br> <br>

        <div class="row1" style="margin-bottom: 0px;">
        <br> <button class="button1" name="save"type="submit" class="btn btn-primary">Submit</button>
        </div>
       

    </form>  

  </main>
    <br> <br> <br> <br> <br> <br>
  <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="container">
      <h3>MIST READERS CLUB</h3>
      <p>READ MORE BOOKS,WIDEN YOUR KNOWLEDGE</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
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