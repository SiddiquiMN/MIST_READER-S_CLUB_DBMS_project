<!DOCTYPE html>
<html>
<body>

<?php
        session_start();
        global $conn;
<<<<<<< HEAD
        $conn=oci_connect("MALIHA25","202014025","localhost/XE");
=======
        $conn=oci_connect("Nash31","201914031","localhost/XE");
>>>>>>> 65038a935c81ec0e8ce07d7d96135446517ada98
        if(isset($_POST['Save'])){
            $a_user = $_POST['username'];
            $a_pass = $_POST['password'];
            $s = oci_parse($conn, "select a_username, a_password from AdminInfo where a_username='$a_user' and a_password='$a_pass'");       
            oci_execute($s);
            
             $row = oci_fetch_all($s, $res);
             if($row){
                   $_SESSION['user']=$a_user;
                   $_SESSION['time_start_login'] = time();
                   header("location: admin_index.php");
             }else{
                
               
               /*echo '<script type ="text/JavaScript">'; */ 
                echo "<script> alert('Incorrect Username or Password');window.location='Admin.php'</script>"; 
                /*echo '</script>';*/ 
                /*header("location:Admin.php");*/
                    
             }
        }



     ?>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>



