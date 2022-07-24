<!--data insert connected with book_form.php page. 
 data stores into Books table of oracle-->

 <!-- admin end er page eta-->

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
          <li><a class="nav-link scrollto active" href="admin_index.php">Admin</a></li>
          
          <li><a class="nav-link scrollto" href="Books.php">Add Books</a></li>
          <li><a class="nav-link scrollto " href="admin_book_inventory.php">Book Inventory</a></li>
         
          <li><a class="nav-link scrollto" href="Admin_Book_status.php">Book Status</a></li>

          <li class="dropdown"><a href="#"><span>Expenditure & Fund</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a class="nav-link scrollto" href="Monthly_Expense.php">Monthly Expense</a></li>
            <li><a class="nav-link scrollto" href="Event_expense.php">Event Expense</a></li>
                

              <li><a href="View_fund.php">View Fund</a></li>
              <li><a href="Expense_entry_form.php">=>Expense Entry<=</a></li>
              <li><a href="fund_entry.php">=>Fund Entry<=</a></li>
            </ul>
        </ul>
         
         <!-- <li><a class="nav-link scrollto" href="About.php">Issue Report</a></li> -->
          <li><a class="nav-link scrollto" href="Admin.php">Log Out</a></li>
          <!--<li class="dropdown"><a href="#"><span>Log In</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Admin.php">Admin Log In</a></li>
              <li><a href="Student.php">Student Log In</a></li>
            </ul> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  

 

  <main id="main" style="margin-top: 157px;">
  <form method="post" action="book_form.php" style="padding: 50px;">
    <div class="row">
        <h1 style="text-align: center; color: black; margin-bottom: 34px !important;">Books information</h1>
        <div class="col">
            <input type="number" name="ISBN_no" class="form-control" placeholder="ISBN No." aria-label="ISBN No.">
        </div>
        <div class="col">
            <input type="text" name="Title"class="form-control" placeholder="Book Title" aria-label="Book Title">
        </div>
    </div>
    <br> <br>

    <div class="row">
        <div class="col">
            <input type="text" name="Genre"class="form-control" placeholder="Genre" aria-label="Genre">
        </div>
        <div class="col">
            <input type="text" name="Author"class="form-control" placeholder="Author" aria-label="Genre">
        </div>
        <div class="col">
            <input type="text" name="Publications"class="form-control" placeholder="Publications" aria-label="Publications">
        </div>
    </div>

    <br> <br>
    <div class="row">
      
        <div class="col">
            <input type="text" name="Edition"class="form-control" placeholder="Edition" aria-label="Edition">

        </div>
        <div class="col">
            <input type="text" name="Donated_By"class="form-control" placeholder="Donated By" aria-label="Donated By">
        </div>
    </div>

    

    <br><br>

    <div class="row">
      
        
    </div>

    <br> <br>

    <div class="row1" style="margin-bottom: 0px;">
        <button class="button1" name="save"type="submit" class="btn btn-primary">Submit</button>
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