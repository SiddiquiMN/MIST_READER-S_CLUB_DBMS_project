<!DOCTYPE html>
<html>
  <body>

    <?php
$conn=oci_connect("MALIHA25","202014025","localhost/XE");
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if(isset($_POST['SUBMIT']))
{	 
	$ID = $_POST['Std_ID'];
	$ISBN = $_POST['ISBN'];
	
	$query = oci_parse($conn, "UPDATE books SET STD_ID = (select STD_ID from issue_demand where ISBN_NO='$ISBN') WHERE ISBN_NO = '$ISBN");
    $query3 = oci_parse($conn, "UPDATE books SET Due_Date = (sysdate) WHERE ISBN_NO = '$ISBN");
    $query3 = oci_parse($conn, "UPDATE books SET Return_Date = (sysdate+30) WHERE ISBN_NO = '$ISBN");
    $query2 = oci_parse($conn, "DELETE FROM ISSUE_DEMAND WHERE ISBN_NO = $ISBN");

	
	$result = oci_execute($query);
    $result2 = oci_execute($query2);
    $result3= oci_execute($query3);

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