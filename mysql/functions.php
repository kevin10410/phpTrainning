<?php
  include "db.php";
  function createRows() {
    global $connection;
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      // prevent SQL Injection
      $username = mysqli_real_escape_string($username);
      $password = mysqli_real_escape_string($password);

      // insert data to mysql
      $query = "INSERT INTO users(username,password)";
      $query .= "VALUES ('$username', '$password')";
      $result = mysqli_query($connection, $query);
      if(!$result) {
        die('Query FAILED' . mysqli_err());
      }
    }
  }

  function showIDs() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query FAILED' . mysqli_err());
    }
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }
  function updateTable() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET";
    $query .= "username = '$username'";
    $query .= "password = '$password'";
    $query .= "WHERE id = '$id'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      die('query Failed');
    }
  }
  function deleteRows() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = '$id'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      die('query Failed');
    }
  }
?>