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
<header>
        <img src="logo_1.png" width="100" height="100"><h1>Skyair</h1>
        <a href="logout.php" class="button">wyloguj </a>
    </header>
   
   <hr>
    <nav>
        <section style="background: #eeeeee; color: #fff;">
            
            <nav class="stroke">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="ourteam.html">Our team</a></li>
          <li><a href="flights.html">Flights</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        </section>
            </nav>
        <?php
include('db_connection.php');
if (isset($_POST['text'],$_POST['password']))
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
        $_SESSION["name"]= $username;
        echo "<h1> Udane logowanie!!</h1>";
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
    if (isset($_SESSION["name"])){
        $sql = "SELECT `id`, `name`, `email`, `message` FROM messages";
        $result = mysqli_query($db, $sql);

    }



if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. "<br>"."  NAME: " . $row["name"]. "<br>"."  EMAIL: ". $row["email"]."<br>"."  MESSAGE: ". $row["message"]."<br>";
}
}else{
    echo "0 results";
}
mysqli_close($db);
?>
</body>
</html>