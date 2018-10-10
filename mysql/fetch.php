<?php
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('127.0.0.1', 'root', '', 'loginApp');
    if ($connection) {
      echo 'We are connected';
    } else {
      echo 'Connected fail';
    }

    // fetch data from mysql
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query FAILED' . mysqli_err());
    }
  }
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
  <?php
  while($row = mysqli_fetch_row($result)) {
    print_r($row);
  }
  while($row = mysqli_fetch_assoc($result)) {
    print_r($row);
  }
  ?>
</body>
</html>