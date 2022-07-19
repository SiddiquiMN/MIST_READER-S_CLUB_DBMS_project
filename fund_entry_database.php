<!DOCTYPE html>
<html>
  <body>

    <?php
$conn=oci_connect("Nash31","201914031","localhost/XE");
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
		echo "<script> alert('Data Added Succesful');window.location='fund_entry.php'</script>"; 
		exit();
    }
	/* ----->entry for Fund <------- */

}
?>
  </body>
</html>