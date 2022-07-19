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
	$Phone = $_POST['Phone'];
    $Event_Duty = $_POST['Event_Duty'];
	$query = oci_parse($conn, "INSERT INTO Student(Std_ID,Std_Name, Std_Department,Std_Level,Std_Phone)
    values ('".$ID."','$Name','$Dept','$Level','$Phone')");
    
    
	/*$sql = oci_parse($conn, "Insert into student(std_id) values('100101')"); 
	oci_execute($sql);
	$sql1 =  oci_parse($conn,"Insert into member(std_ID,MEM_DOB) VALUES ('100101', to_date('".$DOB."', 'YYYY-MM-DD'))");
	oci_execute($sql1);
*/ 

	$query1 = oci_parse($conn, "INSERT INTO Volunteer(Std_ID, V_Event_Duty) 
	values ('$ID','$Event_Duty')");

	$result = oci_execute($query);
	$result1 = oci_execute($query1);
	if ($result && $result1) {
		echo "<script> alert('Data Added Succesful');window.location='Volunteer Reg.php'</script>";
				exit();
	}
	else{
		echo "<script> alert('Sorry! Error-404');window.location='Volunteer Reg.php'</script>";
				exit();
	}
}

?>
  </body>
</html>