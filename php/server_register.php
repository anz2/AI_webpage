<?php

$db_server_name = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "web_db";
$db_port = "3306";

$connect = new mysqli($db_server_name, $db_username, $db_password, $db_name, $db_port);

$user_name = $_POST["user_name"];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$connect->begin_transaction();

if ($connect->connect_error) {
    die("Can't Connect To Database!: " . $connect->connect_error);
}

$query = "INSERT INTO Users (user_name, password, email, first_name, last_name) VALUES (\"$user_name\", \"$password\", \"$email\", \"$first_name\", \"$last_name\")";
if ($connect->query($query) === TRUE) {
    header('Location: ../php/home.php');
}

$connect->commit();
mysqli_close($connect);
header('Location: register.php')
?>
