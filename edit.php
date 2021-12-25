<?php

$id = $_GET['id'];

$hostname = 'localhost';
$database = 'test_crud';
$username = 'root';
$password = 'root';

$connect = mysqli_connect($hostname, $username, $password, $database);

$query = "SELECT * FROM user WHERE id = $id";

$result = mysqli_query($connect, $query);
mysqli_close($connect);
$users = mysqli_fetch_row($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Обновить имя.</h1>
<h2>
<?php
    echo "$users[1] $users[2]";
?>
</h2>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $users[0];?>">
    <input type="text" name="name" value="">
    <input type="text" name="mail">
    <button type="submit">Обновить</button>
</form>
</body>
</html>
