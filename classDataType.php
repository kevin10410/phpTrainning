<?php
  class data {
    var $var = 'var';
    public $public = 'public';
    protected $protected = 'protected'; // can not access outside
    private $private = 'private'; // can not access in extend class
    static $static = 'static';

    function getProtected() {
      echo $this->protected . '<br>';
    }

    static function getStatic() {
      echo data::$static . '....';
    }
  }

  $data1 = new data();
  echo $data1->var . '<br>';
  echo $data1->public . '<br>';
  // echo $data1->protected . '<br>';
  $data1->getProtected();
  echo data::$static . '<br>';
  data::getStatic();
  $data1->getStatic();

?>