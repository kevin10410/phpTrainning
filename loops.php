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
    $counter = 0;
    while($counter < 11) {
      echo "while $counter <br>";
      $counter += 1;
    };
    for($i = 0; $i < 11; $i += 1) {
      echo "for $i <br>";
    };
    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach($numbers as $number) {
      echo "foreach $number <br>";
    };
  ?>
</body>
</html>