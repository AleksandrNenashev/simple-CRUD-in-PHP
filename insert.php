<?php

$name = $_POST['name'];
$mail = $_POST['mail'];

$hostname = 'localhost';
$database = 'test_crud';
$username = 'root';
$password = 'root';

$connect = mysqli_connect($hostname, $username, $password, $database);

$query = "INSERT INTO user (name, mail) VALUE ('$name', '$mail')";

$result = mysqli_query($connect, $query);

mysqli_close($connect);

?>

<meta http-equiv="refresh" content="1; url=index.php">
