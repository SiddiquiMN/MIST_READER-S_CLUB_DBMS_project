
 <!-- admin end er page eta-->
 <!-- Book status & Student fine view hosse ei page e-->

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

<body style="background-image:url(./assets/img/bg_clr6.jpg); background-size:cover; background-repeat:no-repeat;">

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
                

              <li><a href="">View Fund</a></li>
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

  <!--Book status table-->

<main id="main" style="margin-top: 157px;">
  <h2 style="color:black; text-align:center;"><b>Book Status</b></h2>
  <br>
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Student ID</th>
        <th scope="col">Name</th>
        <th scope="col">Department</th>
        <th scope="col">Book</th>
        <th scope="col">Issue Date</th>
        <th scope="col">Return Date</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
    
    
    <?php

  // Connects to the XE service (i.e. database) on the "localhost" machine


  /* PHP CONNECT ER SOMOY ORACLE ER WORKSTATION E LOG IN ER JNNE JE USER R PASSWORD DEI SETA EKHANE DIBO. ONNO KONO USER, PASS NA */

        $conn = oci_connect("Nash31","201914031","localhost/XE"); 
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        $stid = oci_parse($conn, 'select Std_ID as "Student ID", Std_Name as "Student Name", Std_Department as "Department", Title, Issue_Date,Return_Date
        from Student join Books using (Std_ID)');
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


<br><br>

<!-- Student with fine Details Table-->

    <h2 style="color:black; text-align:center;"><b>Student with Fine</b></h2>
    <br>
    <table class="table">
      <thead>
        <tr align="center">
          <th scope="col">Student ID</th>
          <th scope="col">Name</th>
          <th scope="col">Book</th>
          <th scope="col">Fine</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">

        <?php
              $sti = oci_parse($conn, 'Select Std_id as "Student ID",Std_name as "Student Name",Title,round((sysdate-return_date)*5) as "Fine" from Books join Student using (Std_id)
              where sysdate-return_date>0');
              oci_execute($sti);


              while ($row = oci_fetch_array($sti, OCI_ASSOC+OCI_RETURN_NULLS)) {
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

    <br><br>

 <!-- Student with books they demanded table-->   

    <h2 style="color:black; text-align:center;"><b>Issue Demanded by Students</b></h2>
    <br>
    <table class="table">
      <thead>
        <tr align="center">
          <th scope="col">Student ID</th>
          <th scope="col">Name</th>
          <th scope="col">Department</th>
          <th scope="col">Level</th>
          <th scope="col">ISBN NO.</th>
          <th scope="col">Book Title</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">

        <?php
              $sti = oci_parse($conn, 'Select * from ISSUE_DEMAND');
              oci_execute($sti);


              while ($row = oci_fetch_array($sti, OCI_ASSOC+OCI_RETURN_NULLS)) {
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

    <form method="post" action="grant_issue.php" style="padding:50px;">
      
      <div class="row">
            <h1 style="text-align: center; color: black; margin-bottom: 34px !important;">Grant Issue</h1>
           
            <div class="col">
                <input type="Number" name="Std_ID"class="form-control" placeholder="Student ID" aria-label="Student_ID"><br>
                <input type="Number" name="ISBN"class="form-control" placeholder="ISBN No." aria-label="ISBN No."><br>
             
            </div>
            <div class="row1" style="margin-bottom: 0px;">
            <button class="button1" name="SUBMIT"type="SUBMIT" class="btn btn-primary">Submit</button>
        </div>
        </div></form>

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