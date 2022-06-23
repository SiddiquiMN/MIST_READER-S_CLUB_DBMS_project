<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="form.php">
		First name:<br>
		<input type="text" name="first_name">
		<br>
		Last name:<br>
		<input type="text" name="last_name">
		<br>
		City name:<br>
		<input type="text" name="city_name">
		<br>
		Email Id:<br>
		<input type="email" name="email">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>

    <?php
$conn=oci_connect("MALIHA25","202014025","localhost/XE");
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if(isset($_POST['save']))
{	 
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city_name = $_POST['city_name'];
	$email = $_POST['email'];
	$query = oci_parse($conn, "INSERT INTO Participant(Std_ID,P_University_Name,P_ID) 
	values ('$first_name','$last_name','$city_name')");
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