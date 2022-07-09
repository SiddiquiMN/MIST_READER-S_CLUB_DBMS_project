<!DOCTYPE html>
<html>
  <body>

    <?php
$conn=oci_connect("MALIHA25","202014025","localhost/XE");
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