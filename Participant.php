<!DOCTYPE html>
<html>
  <body>

    <?php
$conn=oci_connect("09BIJOYA","09bijoya","localhost/XE");
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
	$Phone_Number = $_POST['Phone Number'];
	$University_Name = $_POST['University Name'];
	$Student_image = $_POST['Student image'];
	$Univesity_ID_card_Image = $_POST['Univesity ID card Image'];
	$query = oci_parse($conn, "INSERT INTO Participant(P_University_Name,P_ID,P_Photo,P_ID_Card_Photo) VALUES ('$University_Name','$ID','$Student_image','$Univesity_ID_card_Image')");
	

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