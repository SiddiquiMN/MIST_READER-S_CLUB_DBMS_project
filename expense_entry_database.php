<!DOCTYPE html>
<html>
  <body>

    <?php
$conn=oci_connect("MALIHA25","202014025","localhost/XE");
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if(isset($_POST['HIT']))
{	 
	$Date = $_POST['Date'];
	$Month = $_POST['Month'];
	$Year = $_POST['Year'];
	$Amount = $_POST['Amount'];
    $Event_ID = $_POST['Event_ID'];
    $Expense_Category = $_POST['Expense_Category'];
    $Sponsor_Name = $_POST['Sponsor_Name'];
	
	$query = oci_parse($conn,"INSERT INTO Expenditure(Entry_Number, Entry_Date,Entry_Month,Entry_Year,Entry_Amount) 
	values (Expense_Sequence.NEXTVAL,'$Date','$Month','$Year','$Amount')");
	


	/*$sql = oci_parse($conn, "Insert into student(std_id) values('100101')"); 
	oci_execute($sql);
	$sql1 =  oci_parse($conn,"Insert into member(std_ID,MEM_DOB) VALUES ('100101', to_date('".$DOB."', 'YYYY-MM-DD'))");
	oci_execute($sql1);
*/ 

	//$query1 = oci_parse($conn, "INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password)      values ('".$ID."',to_date('".$DOB."','YYYY-MM-DD'),'$Gender','$Email','$Username','$Password')");
	$result = oci_execute($query);
    $query1 = oci_parse($conn,"INSERT INTO Event_Expense(Entry_Number, Event_ID,Type,Sponsor_Name) 
	values (Expense_Sequence.NEXTVAL,'$Event_ID','$Expense_Category','$Sponsor_Name')");
	
	$result1 = oci_execute($query1);
	if ($result && $result1) {
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