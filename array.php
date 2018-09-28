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
    $numberList1 = array(1, 2, 3, 4);
    $numberList2 = [4, 3, 2, 1];
    print_r($numberList1);
    print_r($numberList2);

    // change array index
    $numberList3 = array('one' => 1, 'two' => 2, 'three' => 3, 'four' => 4,);
    print_r($numberList3);
    echo $numberList3['two'];
  ?>
</body>
</html>