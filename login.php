<?php
    if(isset($_POST["email"]) && isset($_POST["password"])) {
        define("HOSTNAME", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "");
        define("DATABASE", "products");

        if(!($db = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)))
            die("couldn't connect to database");
        else {
            $user = mysqli_fetch_array($db->query("select username, password from users where email='".$_POST["email"]."';"));
            session_start();

            if(isset($user["username"]) && crypt($_POST["password"], "hi") == $user["password"])
                $_SESSION["username"] = $user["username"];
            else 
                $_SESSION["error"] = "login_error";

            $db->close();
        }
    }
    header("Location: index.php");
    exit;
?>