<?php
  class car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function move() {
      echo "move!" . '<br>';
    }
    function addWheels() {
      $this->wheels += 1;
    }
  }
  if(class_exists('car')) {
    echo 'yes' . '<br>';
  } else {
    echo 'no'. '<br>';
  }

  if(method_exists('car', 'move')) {
    echo 'I can move' . '<br>';
  } else {
    echo 'I can not move' . '<br>';
  }

  $fiesta = new car();
  $fiesta->move();

  echo $fiesta->wheels . ' wheels' . '<br>';

  // modify property
  $fiesta->wheels = 6;
  echo $fiesta->wheels . ' wheels' . '<br>';

  $fiesta->addWheels();
  echo $fiesta->wheels . ' wheels' . '<br>';

  //Inheretance Class
  class plane extends car {

  }

  $jet = new plane();
  print_r($jet);
?>