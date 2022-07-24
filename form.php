<!DOCTYPE html>
<html>
  <body>

    <?php

$conn=oci_connect("MALIHA25","202014025","localhost/XE");

if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if(isset($_POST['save']))
{	 
	$ID = $_POST['ID'];
	$Name = $_POST['Name'];
	$Dept = $_POST['Department'];
	$Level = $_POST['Level'];
	$Gender = $_POST['Gender'];
	$DOB = $_POST['DOB'];
	$Email = $_POST['Email'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$Phone = $_POST['Phone'];
	$query = oci_parse($conn, "INSERT INTO Student(Std_Name, Std_ID,Std_Department,Std_Level,Std_Phone) 
	values ('$Name','$ID','$Dept','$Level','$Phone')");
	


	/*$sql = oci_parse($conn, "Insert into student(std_id) values('100101')"); 
	oci_execute($sql);
	$sql1 =  oci_parse($conn,"Insert into member(std_ID,MEM_DOB) VALUES ('100101', to_date('".$DOB."', 'YYYY-MM-DD'))");
	oci_execute($sql1);
*/ 

	$query1 = oci_parse($conn, "INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password)      values ('".$ID."',to_date('".$DOB."','YYYY-MM-DD'),'$Gender','$Email','$Username','$Password')");
	$result = oci_execute($query);
	$result1 = oci_execute($query1);
	if ($result && $result1) {
		echo "<script> alert('Data Added Succesful');window.location='Member Reg.php'</script>";
				exit();
	}
	else{
		echo "<script> alert('Sorry! Error-404');window.location='Member Reg.php'</script>";
				exit();
	}
}

?>
  </body>
</html>