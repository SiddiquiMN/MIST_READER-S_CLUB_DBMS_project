<?php 

$username=$_GET['username'];
$password=$_GET['password'];  



if($username==NULL || $password==NULL){

    $usermsg="";
    $passmsg="";

    if($username==NULL){
        $usermsg="Blank Username";
    }
    if($password==NULL){
        $passmsg="Blank Password";
    }

    header("Location: student_index.php?stuusermsg=$usermsg&stupassmsg=$passmsg");
}

elseif($username==NULL && $password==NULL){

    echo $username;
}



?>