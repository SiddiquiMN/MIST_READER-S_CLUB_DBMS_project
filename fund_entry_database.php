<!DOCTYPE html>
<html>
  <body>

    <?php
$conn=oci_connect("DBMS_PROJECT","1234","localhost/XE");
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if(isset($_POST['HIT']))
{	 
	$Amount = $_POST['Amount'];
    $Source = $_POST['Source'];
    $TDate = $_POST['Transaction_Date'];
    
	$query = oci_parse($conn,"INSERT INTO Fund(Fund_ID, Amount,Source,Transaction_Date) 
	values (Fund_Sequence.NEXTVAL,'$Amount','$Source', to_date('".$TDate."','YYYY-MM-DD'))");
	$result = oci_execute($query);
    if ($result) {
		echo "Data added Successfully!";
		exit();
    }
	/* ----->entry for Fund <------- */


	/*$sql = oci_parse($conn, "Insert into student(std_id) values('100101')"); 
	oci_execute($sql);
	$sql1 =  oci_parse($conn,"Insert into member(std_ID,MEM_DOB) VALUES ('100101', to_date('".$DOB."', 'YYYY-MM-DD'))");
	oci_execute($sql1);
*/ 
}
?>
  </body>
</html>