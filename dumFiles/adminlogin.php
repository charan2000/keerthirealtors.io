<?php
session_start(); 
include 'config.php';
if(isset($_POST['submit']))
{

$name=$_POST['un'];
$pass=$_POST['pass'];


// $sql = "SELECT school_id,school_name,school_un,school_pass FROM school_logins 
// where school_un='$name' and school_pass='$pass'";
// $result = $conn->query($sql);



if ($name=="keerthirealtors" && $pass=="agent@2006" ) {
  
    $_SESSION['un']=$name;
   


header('Location:getagent.php');

} else {
echo "Ivalid Details";
}


if ($name=="keerthirealtors" && $pass=="customer@2006" ) {
  
    $_SESSION['un']=$name;
   


header('Location:getcustomer.php');

} else {
echo "Ivalid Details";
}




$conn->close();

}



?>

 