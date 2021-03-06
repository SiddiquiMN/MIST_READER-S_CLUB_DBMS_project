
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

  
  <script>
    /* Event expense er attribute */ 
    function text() {
      
        if(document.getElementById('yescheck').checked){
            document.getElementById('mycode').style.visibility='visible';
        }
        else{
            document.getElementById('mycode').style.visibility='hidden';
        }
        return;
    }

    /* Book puschased er attribute */  
    function text1() {

        if(document.getElementById('yescheck1').checked){
            document.getElementById('mycode1').style.visibility='visible';
        }
        else{
            document.getElementById('mycode1').style.visibility='hidden';
        }
        return;
    }

    /* others er attribute */ 
    function text2() {

        if(document.getElementById('yescheck2').checked){
            document.getElementById('mycode2').style.visibility='visible';
        }
        else{
            document.getElementById('mycode2').style.visibility='hidden';
        }
        return;
    }
  </script>

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

    <form method="post" action="expense_entry_database.php" style="padding:50px;">
      
      <div class="row">
            <h1 style="text-align: center; color: black; margin-bottom: 34px !important;">Expense Entry</h1>
           
            <!-- <div class="col">
                <input type="Number" name="Date"class="form-control" placeholder="Date" aria-label="Date"><br>
                <input type="text" name="Month"class="form-control" placeholder="Month" aria-label="Month"><br>
                <input type="Number" name="Year"class="form-control" placeholder="Year" aria-label="Year">
            </div> -->
            <div class="row">
            <div class="col">
                <input type="Date" name="Date2" class="form-control" placeholder="Amount" aria-label="Amount">
            </div>
        </div>
        </div>
       
        <br>
        <div class="row">
            <div class="col">
                <input type="Number" name="Amount" class="form-control" placeholder="Amount" aria-label="Amount">
            </div>
        </div>
        <br> <br>

        <div class="row">
            <div class="col">
                <div class="col-12" style="text-align:center; color:white;">
                    <div class="input-group1">
                        <b><label class="label" name="fir"><h4>Event Expense</h4></label></b>
                        <div class="p-t-10">
                            <label class="radio-container m-r-45">YES
                                <input type="radio" name="fir" id="yescheck" onclick="text()" >
                                <span class="checkmark"></span>
                            </label> <!--radio-container.m-r-45-->
                    
                            <label class="radio-container">No
                                <input type="radio" name="fir" id="nocheck" onclick="text()" checked>
                                <span class="checkmark"></span>
                            </label> <!--radio-container--> 
                        </div> <!-- p-t-10 -->
                    </div>  <!-- input-group1 -->
                </div>  <!-- col-2 -->

                <!--Input Field-->

                <div class="col-12" style="text-align:center;">
                    <div class="input-group1" id="mycode" style="visibility: hidden;">
                    <input type="number" id="fno" name="Event_ID" class="form-control" placeholder="Event ID" aria-label="Event ID"> <br>
                    <input type="text" id="fno" name="Expense_Category" class="form-control" placeholder="Expense Category" aria-label="Event Type"> <br>
                    <input type="text" id="fno" name="Sponsor_Name" class="form-control" placeholder="Sponsor Name" aria-label="Sponsor Name">
                    </div> <!--mycode.input-group1--> 
                </div>  <!--col-2-->
            </div>
            
            <div class="col">
                
                    <div class="col-12" style="text-align:center; color:white;">
                        <div class="input-group1">
                            <b><label class="label" name="fir"><h4>Book Purchased</h4></label></b>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">YES
                                    <input type="radio" name="fir1" id="yescheck1" onclick="text1()">
                                    <span class="checkmark"></span>
                                </label> <!--radio-container.m-r-45-->
                        
                                <label class="radio-container">No
                                    <input type="radio" name="fir1" id="nocheck1" onclick="text1()" checked>
                                    <span class="checkmark"></span>
                                </label> <!--radio-container--> 
                            </div> <!-- p-t-10 -->
                        </div>  <!-- input-group1 -->
                    </div>  <!-- col-2 -->

                    <!--Input Field-->

                    <div class="col-12" style="text-align:center;">
                        <div class="input-group1" id="mycode1" style="visibility: hidden;">
                        <input type="number" id="fno" name="Book_Quantity" class="form-control" placeholder="Book Quantity" aria-label="Book Quantity">
                        </div> <!--mycode.input-group1--> 
                    </div>  <!--col-2-->
                
            </div>

            <div class="col">
                
                    <div class="col-12" style="text-align:center; color:white;">
                        <div class="input-group1">
                            <b><label class="label" name="fir"><h4>Others</h4></label></b>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">YES
                                    <input type="radio" name="fir2" id="yescheck2" onclick="text2()">
                                    <span class="checkmark"></span>
                                </label> <!--radio-container.m-r-45-->
                        
                                <label class="radio-container">No
                                    <input type="radio" name="fir2" id="nocheck2" onclick="text2()" checked>
                                    <span class="checkmark"></span>
                                </label> <!--radio-container--> 
                            </div> <!-- p-t-10 -->
                        </div>  <!-- input-group1 -->
                    </div>  <!-- col-2 -->

                    <!--Input Field-->

                    <div class="col-12" style="text-align:center;">
                        <div class="input-group1" id="mycode2" style="visibility: hidden;">
                        <input type="text" id="fno" name="Category" class="form-control" placeholder="Category" aria-label="Category">
                        </div> <!--mycode.input-group1--> 
                    </div>  <!--col-2-->
                
            </div>


        </div>
        <br> <br>

        <div class="row1" style="margin-bottom: 0px;">
            <button class="button1" name="HIT"type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>  

  </main>
    <br> <br> <br> 
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