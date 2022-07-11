
<!--data insert connected with demand_books.php page. 
 data stores into ISSUE_DEMAND table of oracle-->

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
	$Title = $_POST['Book_Title'];
    $ISBN = $_POST['ISBN_No'];
	$query = oci_parse($conn, "INSERT INTO ISSUE_DEMAND(Std_ID, Std_Name, Std_Department, Std_Level,Book_Title,Isbn_no)
    VALUES ('$ID','$Name','$Dept','$Level','$Title','$ISBN')");
	
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