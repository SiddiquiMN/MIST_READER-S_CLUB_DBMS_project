<!DOCTYPE html>
<html>
  <body>

    <?php
$conn=oci_connect("Maliha25","202014025","localhost/XE");
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if(isset($_POST['Save']))
{	 
	$ID = $_POST['ID'];
	$Name = $_POST['Name'];
	$Dept = $_POST['Department'];
	$Level = $_POST['Level'];
	$Phone_Number = $_POST['Phone_Number'];
	$University_Name = $_POST['University_Name'];
	//$Student_image = $_POST['Student_image'];
	//$Univesity_ID_card_Image = $_POST['Univesity_ID_card_Image'];

	/*image */
	$file = $_FILES['file'];
	$filename = $_FILES['file']['name'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.',$filename);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');
	
	

	
    if(in_array($fileActualExt,$allowed)){
       
                    //  $fileNamenew = uniqid('',true).".".$fileActualExt;
                    //  $fileDestination = 'Uploads/'.$fileNamenew;
                    //  move_uploaded_file($fileTmpname,$fileDestination);
                    //  echo "done";
               
              if ($fileError===0)
              {
                          if($fileSize <1000000)
                          {
                                 $fileNameNew = $filename.".".$fileActualExt;
                                 $fileDestination = 'Uploads/'.$fileNameNew;
                                 move_uploaded_file($fileTmpname,$fileDestination);
                                 echo "Done";

                          }
                          else {echo "size wrong";}
              }
              else {echo "error ase";}
        }
        else {echo "bhul ase";}

    
   

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