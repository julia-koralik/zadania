<?php

if(isset($_POST['login'])){
    echo "Cześć " . htmlspecialchars($_POST['login']) . ". ";
}else{
    echo "Cześć nieznajomy.";
}

if(isset($_POST['password'])){
    echo "Twoje zaszyfrowane hasło to: ".sha1($_POST['password']);
}else{
    echo "Brak hasła.";
}

?>