
<!--admin login er por ei page dekhte parbe -->

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
              <li><a href="Event_expense.php">Event Expense</a></li>
              <li><a href="">View Fund</a></li>
              <li><a href="Expense_entry_form.php">=>Expense Entry<=</a></li>
              <li><a href="fund_entry.php">=>Fund Entry<=</a></li>
            </ul>
        </ul>
         
         <!-- <li><a class="nav-link scrollto" href="About.php">Issue Report</a></li> -->
          <li><a class="nav-link scrollto" href="#">Log Out</a></li>
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
  <h2 style="color:azure; text-align:center;"><b>Monthly Expense for 2022</b></h2>
  <br>
  <table class="table">
    <thead>
      <tr align="center">
        <th scope="col">Month</th>
        <th scope="col">Amount Spent</th>
       
      </tr>
    </thead>
    <tbody class="table-group-divider">
   
    <?php

  // Connects to the XE service (i.e. database) on the "localhost" machine


  /* PHP CONNECT ER SOMOY ORACLE ER WORKSTATION E LOG IN ER JNNE JE USER R PASSWORD DEI SETA EKHANE DIBO. ONNO KONO USER, PASS NA */

        $conn = oci_connect("MALIHA25","202014025","localhost/XE"); 
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        $stid = oci_parse($conn,"select entry_month,sum(entry_amount) from expenditure group by entry_month");
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

<!--Drop down list theke month select korchi -->
 <h4 style="color: white; text-align:center;"><label for="cars">Select Month:</label> </h4>
    <form action="" method="post" style="color: white; text-align:center;">
    <select name="Month" style="height: 50px;">
    <option value="Month" disabled selected>Choose option</option>
        <!-- <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option> -->
       <?php  $conn = oci_connect("MALIHA25", "202014025", "localhost/XE"); 
 $sql = 'SELECT Entry_Month FROM expenditure group by entry_month'; 
 $stid = oci_parse($conn, $sql); 
 $success = oci_execute($stid);
 ?>
 <?php 
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
 // $selected = $_POST['Month'];
  //echo "<option style=color: white; text-color:white; value='{$row['ENTRY_MONTH']}'</option>";}
  echo "<option value='{$row['ENTRY_MONTH']}'>{$row['ENTRY_MONTH']}</option>";}
 ?>
    </select>
    <input style="height: 50px;" type="submit" name="submit" value="Submit">
</form> 

<br><br>
    <!--Monthly Expense Detailed Table-->
    <!--Event Expense-->
<?php    
 if(isset($_POST['submit'])){
  if(!empty($_POST['Month'])) {
   
$selected = $_POST['Month'];
echo "<h4 style='color:azure; text-align:center';><b>Event Expenses for the Month:  $selected</b></h4>";}}?> 
    <table class="table">
      <thead>
        <tr align="center">
        <th scope="col">Entry Number</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
        <th scope="col">Month</th>
        <th scope="col">Year</th>
        <th scope="col">Event ID</th>
        <th scope="col">Type</th>
        <th scope="col">Sponsor Name</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">

      <?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['Month'])) {
          $selected = $_POST['Month'];
         
          $conn = oci_connect("MALIHA25","202014025","localhost/XE"); 
          if (!$conn) {
              $e = oci_error();
              trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
          }
         /*Monthly Event Expense */
          $stid = oci_parse($conn,"select *from expenditure join event_expense using (entry_number) where entry_month='".$selected."' AND entry_year='2022'");
          oci_execute($stid);
          
  
          while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
              echo "<tr align='center'>\n";
              foreach ($row as $item) {
                  echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
              }
              echo "</tr>\n";
          }

          
  
    
        } else {
          echo 'Please select the value.';
        }
      }
    ?>
      </tbody>
    </table>
    <br>
 <!--Books Purchased Detailed Table -->
 <?php    
 if(isset($_POST['submit'])){
  if(!empty($_POST['Month'])) {
   
$selected = $_POST['Month'];
echo "<h4 style='color:azure; text-align:center';><b>Books Purchased for the Month:  $selected</b></h4>";}}?> 
 
 <table class="table">
      <thead>
        <tr align="center">
        <th scope="col">Entry Number</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
        <th scope="col">Month</th>
        <th scope="col">Year</th>
        <th scope="col">Books Quantity</th>
        
        </tr>
      </thead>
      <tbody class="table-group-divider">

      <?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['Month'])) {
          $selected = $_POST['Month'];
         
          $conn = oci_connect("MALIHA25","202014025","localhost/XE"); 
          if (!$conn) {
              $e = oci_error();
              trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
          }
         /*Others Expense */
          $stid = oci_parse($conn,"select *from expenditure join books_purchased using (entry_number) where entry_month='".$selected."'AND entry_year='2022'");
          oci_execute($stid);
  
  
          while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
              echo "<tr align='center'>\n";
              foreach ($row as $item) {
                  echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
              }
              echo "</tr>\n";
          }

          
  
    
        } else {
          echo 'Please select the value.';
        }
      }
    ?>
      </tbody>
    </table>
    <br>
    <!--Others monthly expense -->
    <?php    
 if(isset($_POST['submit'])){
  if(!empty($_POST['Month'])) {
   
$selected = $_POST['Month'];
echo "<h4 style='color:azure; text-align:center';><b>Other Expenses for the Month:  $selected</b></h4>";}}?> 
    <table class="table">
      <thead>
        <tr align="center">
        <th scope="col">Entry Number</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
        <th scope="col">Month</th>
        <th scope="col">Year</th>
        <th scope="col">Category</th>
        
        </tr>
      </thead>
      <tbody class="table-group-divider">

      <?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['Month'])) {
          $selected = $_POST['Month'];
         
          $conn = oci_connect("MALIHA25","202014025","localhost/XE"); 
          if (!$conn) {
              $e = oci_error();
              trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
          }
         /*Others Expense */
          $stid = oci_parse($conn,"select *from expenditure join others using (entry_number)  where entry_month='".$selected."'AND entry_year='2022'");
          oci_execute($stid);
  
  
          while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
              echo "<tr align='center'>\n";
              foreach ($row as $item) {
                  echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
              }
              echo "</tr>\n";
          }

          
  
    
        } else {
          echo 'Please select the value.';
        }
      }
    ?>
      </tbody>
    </table>
    <br>
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