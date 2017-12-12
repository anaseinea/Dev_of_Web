<?php
    DEFINE ('DB_USER', 'root');
    DEFINE ('DB_PASSWORD', 'mypassword');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'products');
    $connection = mysqli_connect (DB_HOST, DB_USER, "", DB_NAME);
    session_start();

    $newBalance = $_SESSION['balance'] - $_SESSION['total'];
    $connection->query("UPDATE users SET balance=".$newBalance." WHERE username='".$_SESSION['username']."';");
    $_SESSION['total'] = 0;
    $_SESSION['kart'] = "";

    header('Location:index.php');

?>