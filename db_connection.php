<?php


$db = mysqli_connect("localhost","admin","123","bazunia");

if(!$db)
{
    die("Connection failed". mysqli_connect_error());

}
?>