<?php
    if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["username"]) && isset($_POST["balance"])) {
        define("HOSTNAME", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "");
        define("DATABASE", "products");

        if(!($db = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)))
            die("couldn't connect to database");
        else {
            $db->query("insert into users values ('".$_POST["email"]."','".crypt($_POST["password"], "hi")."','".$_POST["username"]."',".$_POST["balance"].");");
            session_start();

            $_SESSION["username"] = $_POST["username"];

            $db->close();
        }
    }
    header("Location: index.php");
    exit;
?>