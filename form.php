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
  if (isset($_POST['form1'])) {
    echo "post success!";
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username . $password;
  }
  ?>
  <!-- <form action="form.php" method="post"> -->
  <form action="formExternal.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="form1">
  </form>
</body>
</html>