<!DOCTYPE html>
<html>
  <body>

    <?php
<<<<<<< HEAD
$conn=oci_connect("DBMS_PROJECT","1234","localhost/XE");
=======
$conn=oci_connect("Nash31","201914031","localhost/XE");
>>>>>>> 6f3f6759913514d57d04bc8669c0a224715f3e02
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
	$Student_image = $_POST['Student_image'];
	$Univesity_ID_card_Image = $_POST['Univesity_ID_card_Image'];
	$query = oci_parse($conn, "INSERT INTO Participant(P_ID,P_NAME,P_DEPARTMENT,P_LEVEL,P_PHONE,P_Univeristy,P_Image,P_University_Image) VALUES ('$ID','$Name','$Dept','$Level','$Phone_Number','$University_Name','$Student_image','$Univesity_ID_card_Image')");
	
	$result = oci_execute($query);

	if ($result) {
		echo "<script> alert('Data Added Succesful');window.location='Participate Reg.php'</script>";
				exit();
	}
	else{
		echo "<script> alert('Sorry! Error-404');window.location='fund_entry.php'</script>";
				exit();
	}
}

?>
  </body>
</html>