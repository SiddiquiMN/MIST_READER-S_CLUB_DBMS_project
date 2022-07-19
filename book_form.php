<!--Connected with books.php page. 
 data stores into Books table of oracle-->

<?php
$conn=oci_connect("Nash31","201914031","localhost/XE");
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
	

	$Edition= $_POST['Edition'];
	$Donated_By = $_POST['Donated_By'];
	$query = oci_parse($conn, "INSERT INTO Books(Isbn_no, Title, Publisher,  Genre, Book_Edition, Donated_by)
	values ('$ISBN','$Title','$Publications','$Genre','$Edition','$Donated_By')");
	

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