<?php
  class init {
    var $initValue = 0;

    // __construct() method will execute when object create
    function __construct() {
      echo $this->$initValue += 1;
    }
  }

  $start = new init();
?>