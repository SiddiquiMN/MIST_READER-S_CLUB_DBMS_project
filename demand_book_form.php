
<!--data insert connected with demand_books.php page. 
 data stores into ISSUE_DEMAND table of oracle-->

<!DOCTYPE html>
<html>
  <body>

    <?php
	session_start();



	$user = $_SESSION['user'];
$conn=oci_connect("DBMS_PROJECT","1234","localhost/XE");
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if(isset($_POST['save']))
{	 
	//$ID = $_POST['ID'];
	 //**fetching student ID from slected member username** //
	$ID = oci_parse($conn, "Select STD_ID from member where mem_username='$user'");
	oci_execute($ID);
    oci_fetch($ID);
	$std_id=oci_result($ID, 'STD_ID');
 //**fetching student name from selected member username** //
	$name_query=oci_parse($conn, "Select STD_NAME from student join member using (std_id) where mem_username='$user'");
	oci_execute($name_query);
    oci_fetch($name_query);
	$Name =oci_result($name_query, 'STD_NAME');
 //**fetching student department from selected member username** //
	$dept_query=oci_parse($conn, "Select STD_DEPARTMENT from student join member using (std_id) where mem_username='$user'");
	oci_execute($dept_query);
    oci_fetch($dept_query);
	$Dept =oci_result($dept_query, 'STD_DEPARTMENT');
	 //**fetching student level from selected member username** //
	$level_query=oci_parse($conn, "Select STD_LEVEL from student join member using (std_id) where mem_username='$user'");
	oci_execute($level_query);
    oci_fetch($level_query);
	$Level =oci_result($level_query, 'STD_LEVEL');
	
	$Title = $_POST['Book_Title'];
    $ISBN = $_POST['ISBN_No'];
	$query = oci_parse($conn, "INSERT INTO ISSUE_DEMAND(Std_ID, Std_Name, Std_Department, Std_Level,Book_Title,Isbn_no)
    VALUES ('$std_id','$Name','$Dept','$Level','$Title','$ISBN')");
	
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