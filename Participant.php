<!DOCTYPE html>
<html>
  <body>

    <?php

$conn=oci_connect("Maliha25","202014025","localhost/XE");

if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if(isset($_POST['Save']))
{	 
	$ID = $_POST['ID'];
	$Name = $_POST['Name'];
	$Dept = $_POST['Department'];
	$Level = $_POST['Level'];
	$Phone_Number = $_POST['Phone_Number'];
	$University_Name = $_POST['University_Name'];
	//$Student_image = $_POST['Student_image'];
	//$Univesity_ID_card_Image = $_POST['Univesity_ID_card_Image'];
  $query = oci_parse($conn, "INSERT INTO Participant(P_Name, P_ID,P_Department,P_Level,P_Phone) 
	values ('$Name','$ID','$Dept','$Level','$Phone_Number')");
	

	
	$result = oci_execute($query);

	$query1 = oci_parse($conn, "INSERT INTO Event_Participant(Event_ID, STD_ID) 
	values ('202203','$ID')");
	

	
	$result1 = oci_execute($query1);
	

	if ($result && $result1) {
		echo "<script> alert('Data Added Succesful');window.location='Participate Reg.php'</script>";
				exit();
	}
	else{
		echo "<script> alert('Sorry! Error-404');window.location='Participate Reg.php'</script>";
				exit();
	}
}

?>
  </body>
</html>