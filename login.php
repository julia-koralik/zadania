<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyair</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Pacifico?query=pacif">
    <link rel="Shortcut icon" href="miniaturka.png" />

</head>
<body class="admin-panel">
        <?php
include('db_connection.php');
$username = $_POST['text'];
$password = $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);

    $sql = "SELECT * FROM users where login = '$username' and password = '$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1){
        echo "<h1><center> Udane logowanie!! </center></h1>";
    }
    else{
        echo "<h1> Błędny login :(( </h1>";
    }
    ?>
    <h2> WIADOMOŚCI </h2>
<?php
include "db_connection.php";
if (!$db) {
    die ("connection failed: ". mysqli_connect_error());

}
$sql = "SELECT `id`, `NAME`, `EMAIL`, `MESSAGE` FROM messages";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. "<br>"."  NAME: " . $row["name"]. "<br>"."  EMAIL: "."<br>"."  MESSAGE: "."<br>";
}
}else{
    echo "0 results";
}
mysqli_close($db);
?>
</body>
</html>