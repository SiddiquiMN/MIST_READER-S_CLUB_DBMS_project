<!DOCTYPE html>
<html>
<body>

<?php
        session_start();
        global $conn;
        $conn=oci_connect("MALIHA25","202014025","localhost/XE");
        if(isset($_POST['Save'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $s = oci_parse($conn, "select MEM_USERNAME,MEM_PASSWORD from member where MEM_USERNAME='$user' and MEM_PASSWORD='$pass'");       
            oci_execute($s);
            
             $row = oci_fetch_all($s, $res);
             if($row){
                   $_SESSION['user']=$user;
                   $_SESSION['time_start_login'] = time();
                   header("location: student_profile.php");
             }else{

                /*echo '<script type ="text/JavaScript">';  */
                echo "<script> alert('Incorrect Username or Password');window.location='Student.php'</script>";  
               /* echo '</script>';  */
               
               
             }
        }



     ?>
</body>
</html>



