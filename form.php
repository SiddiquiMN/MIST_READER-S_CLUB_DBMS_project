<!DOCTYPE html>
<html>
  <body>

    <?php
$conn=oci_connect("DBMS_PROJECT","1234","localhost/XE");
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
	
	$query1 = oci_parse($conn, "INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password)
    values ('$ID',to_date($DOB,'MM-DD-YYYY'),'$Gender','$Email','$Username','$Password')");
	$result = oci_execute($query);
	$result1 = oci_execute($query1);
	if ($result && $result1) {
				echo "Data added Successfully !";
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}

?>
  </body>
</html>