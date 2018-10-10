<?php
  
  // set cookie;
  // $cookieName = 'cookieName';
  // $value = 100;
  // $expiration = time() + (60 * 60 * 24 * 7);
  // setcookie($cookieName, $value, $expiration);

  // read cookie

  if (isset($_COOKIE['cookieName'])) {
    $cookie = $_COOKIE['cookieName'];
    echo $cookie;

  } else {
    echo "No Cookie";
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
  
</body>
</html>