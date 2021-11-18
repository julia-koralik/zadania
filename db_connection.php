<?php


$db = mysqli_connect("localhost","admin","123","baza");

if(!$db)
{
    die("Connection failed". mysqli_connect_error());

}
?>