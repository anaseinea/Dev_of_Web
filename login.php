<?php
    if(isset($_POST["email"]) && isset($_POST["password"])) {
        define("HOSTNAME", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "");
        define("DATABASE", "users");

        if(!($db = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)))
            die("couldn't connect to database");
        else {
            $user = $db->query("select email, password from users where email='".$_POST["email"]."';")->fetch_row();
            start_session();

            if(isset($user["email"]) && crypt($_POST["password"]) == $user["password"])
                $_SESSION["email"] = $_POST["email"];
            else 
                $_SESSION["error"] = "login_error";

            header("Location: index.html");
            $db->close();
            exit;
        }
    }
?>