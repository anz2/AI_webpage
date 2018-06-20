<?php

	$db_server_name = "localhost";
	$db_username = "root";
	$db_password = "root";
	$db_name = "web_db";
	$db_port = "3306";

	$user_name = $_POST["user_name"];
	$password = $_POST['password'];

    $valid_user = false;
    $connect = new mysqli($db_server_name, $db_username, $db_password, $db_name, $db_port);
    if ($connect->connect_error) {
        header("Location: ../index.php");
    }
    $result = $connect->query("select * from Users");
    while ($row = $result->fetch_assoc()) {
        if ($row["user_name"] == $_POST["user_name"] && $row["password"] == $_POST["password"]) {
            session_start();
            $_SESSION["id"] = $row["user_name"];
            header("Location: home.php");
            $valid_user = true;
            break;
        }
    }
    if(!$valid_user) {
        header("Location: ../index.php");
    }
?>