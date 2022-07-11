<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
<?php
   
   $conn = oci_connect("09BIJOYA","09bijoya","localhost/XE");
   if (!$conn) {
       $e = oci_error();
       trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
   }

   
    if (isset($_POST['Save']))
    {
        $un=$_POST['username'];
        $pw=$_POST['password'];
        $query = oci_parse($conn, "select Mem_Password from Member where username='$un'");
        $result = oci_execute($query);


        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) 
        {
            echo "<tr align='center'>\n";
            foreach ($row as $item) 
            {
                if ($pw==$row['password'])
                {
                    header("location:student_index.php");
                    exit();
                }
                else
                {
                    echo "<script>alert('Invalid Password')</script>";
                }      
            }
        
            echo "<script>alert('Invalid Username')</script>";
            echo "</tr>\n"; 
        }
    }
?>
</body>
</html>

