<?php
include "db_connection.php";
if (!$db) {
    die ("connection failed: ". mysqli_connect_error());

}
$sql = "SELECT id, name, surname, message FROM messages";
$result = mysqli_query($db, $sql)


else{
    echo "0 results"
}
mysqli_close($db);

