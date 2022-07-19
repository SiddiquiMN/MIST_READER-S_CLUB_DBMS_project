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
	//$Date = $_POST['Date'];
	//$Month = $_POST['Month'];
	//$Year = $_POST['Year'];
	$Amount = $_POST['Amount'];
    $Event_ID = $_POST['Event_ID'];
    $Expense_Category = $_POST['Expense_Category'];
    $Sponsor_Name = $_POST['Sponsor_Name'];
	$Book_Quantity = $_POST['Book_Quantity'];
	$Category = $_POST['Category'];
	$dATE2 = $_POST['Date2'];

	ECHO "$dATE2";

	 
	$query00 = oci_parse($conn,"SELECT TO_CHAR(DATE '$dATE2', 'Month') AS Month FROM dual");
	oci_execute($query00);

	oci_fetch($query00 );
	$month=oci_result($query00 , 'MONTH');

	//echo "$event_ID";

	$query01 = oci_parse($conn,"SELECT TO_CHAR(DATE '$dATE2', 'DD') AS DD FROM dual");
	oci_execute($query01);

	oci_fetch($query01);
	$date=oci_result($query01 , 'DD');

	//echo "$date";

	$query02 = oci_parse($conn,"SELECT TO_CHAR(DATE '$dATE2', 'YYYY') AS YEAR FROM dual");
	oci_execute($query02);

	oci_fetch($query02);
	$year=oci_result($query02 , 'YEAR');

	//echo "$year";

	
	
	$query = oci_parse($conn,"INSERT INTO Expenditure(Entry_Number, Entry_Date,Entry_Month,Entry_Year,Entry_Amount) 
	values (Expense_Sequence.NEXTVAL,'$date','$month','$year','$Amount')");
	$result = oci_execute($query);
	/* ----->entry for expenditure <------- */


	/*$sql = oci_parse($conn, "Insert into student(std_id) values('100101')"); 
	oci_execute($sql);
	$sql1 =  oci_parse($conn,"Insert into member(std_ID,MEM_DOB) VALUES ('100101', to_date('".$DOB."', 'YYYY-MM-DD'))");
	oci_execute($sql1);
*/ 
  if($Event_ID!=NULL)
	//$query1 = oci_parse($conn, "INSERT INTO Member(Std_ID,Mem_DOB,Mem_Gender,Mem_Email,Mem_Username,Mem_Password)      values ('".$ID."',to_date('".$DOB."','YYYY-MM-DD'),'$Gender','$Email','$Username','$Password')");

   { $query1 = oci_parse($conn,"INSERT INTO Event_Expense(Entry_Number, Event_ID,Type,Sponsor_Name) 
	values (Expense_Sequence.CURRVAL,'$Event_ID','$Expense_Category','$Sponsor_Name')");
	
	$result1 = oci_execute($query1);
	if ($result && $result1) {
		echo "Data added Successfully Result1!";
		exit();

			/* ----->entry for event_expense <------- */
}


}

  if($Book_Quantity!=NULL)
  {$query2 = oci_parse($conn,"INSERT INTO Books_Purchased(Entry_Number, Books_Quantity) 
	values (Expense_Sequence.CURRVAL,'$Book_Quantity')");
	$result2 = oci_execute($query2);
	if ($result && $result2) {
		echo "Data added Successfully Result2!";
		exit();
			/* ----->entry for books <------- */
}




}
if($Category!=NULL)
{$query3 = oci_parse($conn,"INSERT INTO Others(Entry_Number,Category) 
  values (Expense_Sequence.CURRVAL,'$Category')");
  $result3 = oci_execute($query3);
  
  if ($result3) {
	echo "Data added Successfully Result3!";
	exit();

		/* ----->entry for others <------- */
}


}
    /*$query2 = oci_parse($conn,"INSERT INTO Books_Purchased(Entry_Number, Books_Quantity) 
	values (Expense_Sequence.NEXTVAL,'$Book_Quantity')"); */
	
	
	//$result2 = oci_execute($query2);
	


	/*else{
		echo "Error !";
				exit();
	} */
}

?>
  </body>
</html>