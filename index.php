<?php

$hostname = 'localhost';
$database = 'test_crud';
$username = 'root';
$password = 'root';

$connect = mysqli_connect($hostname, $username, $password, $database);

$query = "SELECT * FROM user";

$result = mysqli_query($connect, $query);

$users = mysqli_fetch_all($result);

mysqli_close($connect);
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
<h1>Список имен и мэйлов.</h1>
<?php

foreach ($users as $key => $user){
    echo '<a href="edit.php?id=' .$user[0]. '"> ' .$user[1]. ' ' .$user[2]. '</a>
    <form action="delete.php" method="post">
    <input type="hidden" name="id" value="' . $user[0] . '">
    <input type="submit" value="удалить">
  </form>
<br>';
}
?>
  <form action="insert.php" method="post">
    <input type="text" name="name" value="">
    <input type="text" name="mail">
    <button type="submit">Отправить</button>
  </form>
</body>
</html>
