<?php
  $connection = mysqli_connect('127.0.0.1', 'root', '', 'loginApp');
  if ($connection) {
    echo 'We are connected';
  } else {
    echo 'Connected fail';
  }
?>