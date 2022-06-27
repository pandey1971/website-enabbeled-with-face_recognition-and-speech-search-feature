<?php 
include "conn.php";
$username = input($_POST['username']);
  $password = input($_POST['password']);
  $query = "insert into log(username, password) values('$username', '$password')";
  if(mysqli_query($conn, $query)) {
    echo"DETAILS ADDED SUCCESfully!!!!!!!!!!!";
  }


function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}






?>