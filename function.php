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
    function saySomething() {
      echo "This is function";
    };
    saySomething();
    echo "<br>";
    function greeting($msg) {
      echo "Greeting is $msg ";
    };
    greeting("Hi");
    function add($num1, $num2) {
      return $num1 + $num2;
    };
    function showCal($num1, $num2) {
      $result = add($num1, $num2);
      echo $result;
    };
    showCal(1, 2);

    $result = add(1, 2);
    echo "<br> $result";
    $result = add(1, $result);
    echo "<br> $result";
    $result = add(1, $result);
    echo "<br> $result";
    $result = add(1, $result);
    echo "<br> $result";
  ?>
</body>
</html>