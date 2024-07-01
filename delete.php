<?php
//test commit
$id = $_POST['id'];

$hostname = 'localhost';
$database = 'test_crud';
$username = 'root';
$password = 'root';

$connect = mysqli_connect($hostname, $username, $password, $database);

$query = 'DELETE FROM user WHERE id=' . $id;
$result = mysqli_query($connect, $query);
mysqli_close($connect);
?>
<meta http-equiv="refresh" content="1; url=index.php">
