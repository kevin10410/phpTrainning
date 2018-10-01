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
    $scope = 'outSide';
    function checkScope() {
      $scope = 'inSide';
    };
    function toOutsideScope() {
      global $scope;
      $scope = 'inSide';
    };
    function useArgu($text) {
      $scope = $text;
      echo $scope;
    };
    echo $scope;
    echo '<br>';
    checkScope();
    echo $scope;
    echo '<br>';
    toOutsideScope();
    echo $scope;
    echo '<br>';
    useArgu('useArgu');
    echo '<br>';
    echo $scope;

    // constant variable
    define('consble', 'constantValue');
    echo consble;
  ?>
</body>
</html>