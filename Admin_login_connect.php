<!DOCTYPE html>
<html>
<body>

<?php
        session_start();
        global $conn;
        $conn=oci_connect("DBMS_PROJECT","1234","localhost/XE");

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



