<?php
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        define("HOSTNAME", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "");
        define("DATABASE", "users");

        if(!($db = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)))
            die("couldn't connect to database");
        else {
            $user = $db->query("select username, password from users where username='".$_POST["username"]."';")->fetch_row();
            start_session();

            if(isset($user["username"]) && crypt($_POST["password"]) == $user["password"])
                $_SESSION["username"] = $_POST["username"];
            else 
                $_SESSION["error"] = "login_error";

            header("Location: index.html");
            $db->close();
            exit;
        }
    }
?>