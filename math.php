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
    // rand — Generate a random integer
    // returns a pseudo-random integer between 0 and getrandmax()
    // int rand ( int $min , int $max )
    echo rand() . "<br>";
    echo getrandmax();

    print 'Hi';
  ?>
</body>
</html>