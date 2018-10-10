<?php
  if (isset($_POST['form1'])) {
    echo "post success!";
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username . $password;
  }
?>