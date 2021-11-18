<?php
include "db_connection.php";
 
if(isset($_POST['submit']))
{
 $name = $_POST['NAME'];
 $email = $_POST['EMAIL'];
 $message = $_POST['MESSAGE'];
 
 $insert = mysqli_query($db, "INSERT INTO `wiadomosci`(`NAME`, `EMAIL`, `MESSAGE`) VALUES ('$name', '$email', '$message')");
 
 if(!$insert)
 {
 echo mysqli_error();
 }
 else{
 echo "Twoja wiadomość została wysłana";
 }
 
 mysqli_close($db);
}
?>