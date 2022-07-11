<!DOCTYPE html>
<html>
<body>

<?php
        session_start();
        global $conn;
        $conn = oci_connect("09BIJOYA","09bijoya","localhost/XE");
        if(isset($_POST['Save'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $s = oci_parse($conn, "select Mem_Username,Mem_Password from Member where Mem_Username='$user' and Mem_Password='$pass'");       
            oci_execute($s);
            $row = oci_fetch_all($s, $res);
            if($row){
                    $_SESSION['user']=$user;
                    $_SESSION['time_start_login'] = time();
                    header("location: student_index.php");
            }else{

                echo "wrong password or username";
            }
        }



?>
</body>
</html>



