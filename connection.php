<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'michelle2003';
$db_name = 'thaitanic';

$conn = mysqli_connect(
  $db_host,
  $db_user,
  $db_password,
  $db_name,
);

if ($conn->connect_error) {
  echo 'Errno: ' . $conn->connect_errno;
  echo '<br>';
  echo 'Error: ' . $conn->connect_error;
  exit();
}