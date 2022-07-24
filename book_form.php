<!--Connected with books.php page. 
 data stores into Books table of oracle-->

<?php
$conn=oci_connect("MALIHA25","202014025","localhost/XE");
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if(isset($_POST['save']))
{	 

	$ISBN = $_POST['ISBN_no'];
	$Title = $_POST['Title'];
	$Genre = $_POST['Genre'];
	$Publications = $_POST['Publications'];
	$Author = $_POST['Author'];
	

	$Edition= $_POST['Edition'];
	$Donated_By = $_POST['Donated_By'];
	$query = oci_parse($conn, "INSERT INTO Books(Isbn_no, Title, Publisher,  Genre, Book_Edition, Donated_by)
	values ('$ISBN','$Title','$Publications','$Genre','$Edition','$Donated_By')");
	$query1 = oci_parse($conn, "INSERT INTO Author_Name(Isbn_no, Author_Name)
	values ('$ISBN','$Author')");
	

	$result = oci_execute($query);
	$result1 = oci_execute($query1);

	if ($result && $result1 ) {
		echo "<script> alert('Data Added Succesful');window.location='Books.php'</script>";
				exit();
	}
	else{
		echo "<script> alert('Sorry! Error-404');window.location='Books.php'</script>";
				exit();
	}
}

?>